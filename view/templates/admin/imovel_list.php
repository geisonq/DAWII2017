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
            <div class="col-lg-12"> 


                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="<?php echo $this->base_url ?>AdminImovel/add/">
                            <button type="button" class="btn btn-info  btn-lg">
                                <i class="fa fa-plus"> Criar Novo Imóvel</i>
                            </button></a>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>

                                    <th>Ação</th>                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data['news'] as $news): ?>
                                    <tr class="<?php echo ($news->getId_news() % 2 == 0) ? 'even' : 'odd'; ?>">
                                        <td><?php echo $news->getId_News() ?></td>

                                        <td><?php echo substr($news->getText(), 0, 200) . "..." ?></td>
                                        <td>
                                            <a href="<?php echo $this->base_url ?>AdminImovel/update/<?php echo $news->getId_News() ?>"><i class='fa fa-3x fa-edit'></i></a>
                                            <a href="<?php echo $this->base_url ?>AdminImovel/remove/<?php echo $news->getId_News() ?>"><i class='fa fa-3x fa-remove'></i></a>
                                        </td>                                
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
</div>
<!-- /#page-wrapper -->
