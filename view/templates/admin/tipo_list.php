<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tipo</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo $this->base_url ?>AdminTipo/add/">
                            <button type="button" class="btn btn-info  btn-lg">
                                <i class="fa fa-plus"> Criar Novo Tipo</i>
                            </button></a>
                        
                        <a onclick="return confirm('Você deseja deletar todos os registros selecionados?');" href="javascript:document.getElementById('deleteAllForm').submit();"><button type="button" class="btn btn-info  btn-lg">
                                <i class="fa fa-plus"> Deletar todos</i>
                            </button></a>
                        
                        
                    </div>
                    <div class="panel-body">
                        <form  id="deleteAllForm" role="form" method="post" action="<?php echo "$this->url" ?>AdminTipo/remove">
                                       
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="5%"><input type="checkbox" name="all" /></th>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['tipo'] as $tipo): ?>
                                    <tr>
                                              
                                        <td><input type="checkbox" name="idTipo[]" value="    7" /></td>
                                        <td><?php echo $tipo->getId() ?></td>
                                        <td><?php echo $tipo->getTipo() ?></td>
                                        <td>

                                            <!-- <a href="<?php echo "$this->url" ?>AdminTipo/remove/<?php echo $tipo->getId() ?>"><i class='fa fa-3x fa-remove'></i></a> -->

                                            <form  id="form<?php echo $tipo->getId() ?>" role="form" method="post" action="<?php echo "$this->url" ?>AdminTipo/remove/<?php echo $tipo->getId() ?>">
                                               <input type="hidden" class="btn btn-danger" value='Apagar' name='del' >
                                               <a href="<?php echo "$this->url" ?>AdminTipo/update/<?php echo $tipo->getId() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                               <a onclick="return confirm('Você deseja deletar este registro?');" href="javascript:document.getElementById('form<?php echo $tipo->getId() ?>').submit();"><i class='fa fa-3x fa-remove'></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                    
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                           </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

