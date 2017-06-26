
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Bairro</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Bairro</a></li>

            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-13 col-lg-offset-0">
                        <div class="panel-body ">
                            <div class="row">
                                <div class="col-lg-4l LEFT">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Bairro</label>
                                            <input class="form-control" type='text' name='bairro' required="true" placeholder="Informe o nome do Bairro">
                                        </div>
                                       
                                        <input type="submit" class="btn btn-default" value='Salvar' name='add' >
                                        <input type="reset" class="btn btn-default" value="Limpar">

                                        <?php if ($data['msg']): ?>
                                            <br> <br>
                                            <div class="row">
                                                <div class="alert alert-danger alert-dismissable">
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <?php echo $data['msg'] ?>
                                                </div>
                                            </div>
                                        <?php endif ?>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
</div>

