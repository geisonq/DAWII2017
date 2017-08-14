<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Imovel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo $this->base_url ?>AdminImovel/add/">
                            <button type="button" class="btn btn-info  btn-lg">
                                <i class="fa fa-plus"> Criar Novo Imovel</i>
                            </button></a>
                    </div>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Descrição</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['imoveis'] as $imovel): ?>
                                    <tr>
                                        <td><?php echo $imovel->getId() ?></td>
                                        <td><?php echo $imovel->getDescricao() ?></td>
                                        <td>
                                            <!-- <a href="<?php echo "$this->url" ?>AdminImovel/remove/<?php echo $imovel->getId() ?>"><i class='fa fa-3x fa-remove'></i></a> -->

                                            <form  id="form<?php echo $imovel->getId() ?>" role="form" method="post" action="<?php echo "$this->url" ?>AdminImovel/remove/<?php echo $imovel->getId() ?>">
                                               <input type="hidden" class="btn btn-danger" value='Apagar' name='del' >
                                               <a href="<?php echo "$this->url" ?>AdminImovel/update/<?php echo $imovel->getId() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                               <a onclick="return confirm('Você deseja deletar este registro?');" href="javascript:document.getElementById('form<?php echo $imovel->getId() ?>').submit();"><i class='fa fa-3x fa-remove'></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

