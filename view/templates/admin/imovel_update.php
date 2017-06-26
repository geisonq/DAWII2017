<?php 
$news = $data['news'];
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Notícias</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6 col-lg-offset-2">            
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nova Notícia</h3>
                    </div>

                    <div class="panel-body ">
                        <div class="row">
                            <div class="col-lg-12 center">
                                <form role="form" method="post">
                                    <div class="form-group">
                                        <label>Título da Notícia</label>
                                        <input class="form-control" type='text' name='title'  placeholder="Informe um título" value="<?php echo $news->getTitle()?>">
                                        <p class="help-block">Informe o Título da Notícia</p>
                                    </div>
                                    <div class="form-group">
                                        <label>Texto da Notícia</label>
                                        <textarea class="form-control" rows="3" name='text' placeholder="Texto da notícia"><?php echo $news->getText()?>"</textarea>                    
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
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-2 center">
                        <a href="<?php echo $this->base_url ?>AdminNews/">
                            <button type="button" class="btn btn-info btn-circle btn-lg">
                                <i class="fa fa-arrow-left"></i>&nbsp&nbsp&nbsp&nbspVoltar
                            </button>                
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

