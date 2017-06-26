
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
                <li><a data-toggle="tab" href="#menu1">Endereço</a></li>
                <li><a data-toggle="tab" href="#menu2">Fotos</a></li>
            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-13 col-lg-offset-0">            
                        <div class="panel-body ">
                            <div class="row">
                                <div class="col-lg-6 LEFT">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Título</label>
                                            <input class="form-control" type='text' name='title' placeholder="Informe um título">
                                            <p class="help-block">Informe o Título</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Descrição complementar</label>
                                            <textarea class="form-control" rows="3" name='text' placeholder="Descrição complementar"></textarea>
                                        </div>
                                        <input type="submit" class="btn btn-default" value='Salvar' name='add' >
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
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-0 center">
                            <a href="<?php echo $this->base_url ?>AdminNews/">
                                <button title="Voltar" type="button" class="btn btn-info btn-circle btn-lg">
                                    <i class="fa fa-arrow-left"></i>&nbsp&nbsp&nbsp&nbspVoltar
                                </button>                
                            </a>
                        </div>
                    </div>

                </div>
                <div id="menu1" class="tab-pane fade">
                    <h3>Menu 1</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <h3>Menu 3</h3>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

