<?php
$imoveis = $data['imoveis'];
?>

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Imóvel</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Imóvel</a></li>
                <li><a data-toggle="tab" href="#menu2">Fotos</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-13 col-lg-offset-0">            
                        <div class="panel-body ">
                            <div class="row">
                                <form role="form" method="post">

                                    <div class="form-group">
                                        <label>Descricao</label>
                                        <input class="form-control" type='text' name='descricao'   value="<?php echo $imoveis->getDescricao() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Rua</label>
                                        <input class="form-control" type='text' name='rua'  value="<?php echo $imoveis->getRua() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Número</label>
                                        <input class="form-control" type='text' name='numero'  placeholder="Informe o número" value="<?php echo $imoveis->getNumero() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Complemento</label>
                                        <textarea  class="form-control"  name='complemento' ><?php echo $imoveis->getComplemento() ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input class="form-control" type='text' name='cep' value="<?php echo $imoveis->getCep() ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nº de dormitorios</label>
                                        <input class="form-control" type='text' name='dormitorios'  value="<?php echo $imoveis->getDormitorios() ?>">
                                    </div>
                        
                                    <div class="form-group">
                                        <label>Garagem</label>
                                        <input type="checkbox" value="1" name="garagem" <?php if ($imoveis->getGaragem()) echo 'checked="true"'; ?>/>                                        
                                    </div>
                                    <div class="form-group">
                                        <label>Valor</label>
                                        <input class="form-control" type='text' name='valor'   value="<?php echo $imoveis->getValor() ?>">
                                        <p class="help-block">Informe o Título da Notícia</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Area</label>
                                        <input class="form-control" type='text' name='area'  value="<?php echo $imoveis->getArea() ?>">
                                    </div>

                                    <div class="form-group">
                                        <label>Tipo</label>
                                        <select name="idTipo">
                                            <option value="1">Tipo1</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Estado</label>
                                        <select name="idEstado">
                                            <option value="1">Estado</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Cidade</label>
                                        <select name="idCidade">
                                            <option value="1">Cidade</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Bairro</label>
                                        <select name="idBairro">
                                            <option value="7">Bairro</option>
                                        </select>
                                    </div>

                                    <input type="submit" class="btn btn-default" value='Salvar' name='update' >
                                    <input type="reset" class="btn btn-default" value="Limpar">
                                </form>                            

                                <?php if ($data['msg']): ?>
                                    <div class="alert alert-danger alert-dismissable">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <?php echo $data['msg'] ?>
                                    </div>
                                <?php endif ?>
                            </div>                        
                        </div>                        
                    </div>
                </div>
                 
                  <div id="menu2" class="tab-pane fade">
                     <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTablesImagens">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Imagem</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>                            
                        </table>
                         
                         <hr>
                         <h3>Cadastro de Fotos</h3>
                          <hr>
                         <form id="formFotos" action="<?php echo $this->url.'/AdminImagens/add/'; ?>" method="post" enctype= multipart/form-data>
                             <input type="hidden" name="idImovel" value="<?php echo $imoveis->getId(); ?>"/>                             
                              <div class="form-group">
                                <label>Arquivo</label>
                                <input type="file" name="src" />
                              </div>
                            <input type="submit" class="btn btn-default" value='Incluir Foto' name='add' >
                         </form>
                          
                        <hr>  
                        
                    </div>
                        
                  </div>


                </div>
                
            </div>
        </div>
    </div>


<script>
$(document).ready(function() {
    $('#dataTablesImagens').DataTable( {
         "paging": false,                    
         "searching": false,
         "ajax": "<?php echo $this->url;?>/AdminImagens/"
    } );  
    var options = { 
        beforeSubmit:  showRequest,  
        success:       showResponse   
    }; 
  
    $('#formFotos').ajaxForm(options); 
   
    function showRequest(formData, jqForm, options) { 
        $("#divLoading").show();
        return true; 
    } 
 
    function showResponse(responseText, statusText, xhr, $form)  { 
        $("#divLoading").hide(); 
    } 
} );
</script> 

