<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cidade</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo $this->base_url ?>AdminCidade/add/">
                            <button type="button" class="btn btn-info  btn-lg">
                                <i class="fa fa-plus"> Criar Nova    Cidade</i>
                            </button></a>
                    </div>
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Cidade</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['cidade'] as $cidade): ?>
                                    <tr>
                                        <td><?php echo $cidade->getId() ?></td>
                                        <td><?php echo $cidade->getCidade() ?></td>
                                        <td>


                                            
                                            <!-- <a href="<?php echo "$this->url" ?>AdminCidade/remove/<?php echo $cidade->getId() ?>"><i class='fa fa-3x fa-remove'></i></a> -->

                                            <form  id="form<?php echo $cidade->getId() ?>" role="form" method="post" action="<?php echo "$this->url" ?>AdminCidade/remove/<?php echo $cidade->getId() ?>">
                                               <input type="hidden" class="btn btn-danger" value='Apagar' name='del' >
                                               <a href="<?php echo "$this->url" ?>AdminCidade/update/<?php echo $cidade->getId() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                               <a onclick="return confirm('Você deseja deletar este registro?');" href="javascript:document.getElementById('form<?php echo $cidade->getId() ?>').submit();"><i class='fa fa-3x fa-remove'></i></a>
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

