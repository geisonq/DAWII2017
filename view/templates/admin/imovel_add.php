<?php
$estados = $data['estados'];
$cidades = $data['cidades'];
$tipos = $data['tipos'];
$bairros = $data['bairros'];
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
                <li><a class="disabled" href="#menu2">Fotos</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-13 col-lg-offset-0">            
                        <div class="panel-body ">
                            <div class="row">

                                <form role="form" method="post">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <form role="form" method="post">
                                                <div class="form-group">
                                                    <label>Descricao</label>
                                                    <input class="form-control" type='text' name='descricao' >
                                                </div>
                                                <div class="form-group">
                                                    <label>Rua</label>
                                                    <input class="form-control" type='text' name='rua' >
                                                </div>
                                                <div class="form-group">
                                                    <label>Número</label>
                                                    <input class="form-control" type='text' name='numero'  placeholder="Informe o número" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Complemento</label>
                                                    <textarea  class="form-control"  name='complemento' ></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label>CEP</label>
                                                    <input class="form-control" type='text' name='cep' >
                                                </div>
                                                <div class="form-group">
                                                    <label>Nº de dormitorios</label>
                                                    <input class="form-control" type='text' name='dormitorios'>
                                                </div>
                                                <div class="form-group">
                                                    <label>Area</label>
                                                    <input class="form-control" type='text' name='area'>                                       
                                                </div>
                                                <div class="form-group">
                                                    <label>Garagem</label>
                                                    <input type="checkbox" value="1" name="garagem"/>                                        
                                                </div>
                                                <div class="form-group">
                                                    <label>Valor</label>
                                                    <input class="form-control" type='text' name='valor'>
                                                    <p class="help-block">Informe o Título da Notícia</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Area</label>
                                                    <input class="form-control" type='text' name='area'>
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
                                                        <?php foreach ($estados as $estado) : ?>
                                                            <option value="<?php echo $estado->getId(); ?>"><?php echo $estado->getEstado(); ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Cidade</label>
                                                    <select name="idCidade">
                                                        <?php foreach ($cidades as $cidade) : ?>
                                                            <option value="<?php echo $cidade->getId(); ?>"><?php echo $cidade->getCidade(); ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Bairro</label>
                                                    <select name="idBairro">
                                                        <?php foreach ($bairros as $bairro) : ?>
                                                            <option value="<?php echo $bairro->getId(); ?>"><?php echo $bairro->getBairro(); ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <input type="submit" class="btn btn-default" value='Salvar' name='add' >
                                                <input type="reset" class="btn btn-default" value="Limpar">
                                                </div>
                                                <div class="col-md-6">
                                                </div>
                                            </form>                            

                                            <?php if ($data['msg']): ?>
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $data['msg']; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>                        

                                    </div>
                            </div>
                            <div class="row">
                            </div>
                        </div>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                       
                    </div>


                </div>
            </div>
        </div>