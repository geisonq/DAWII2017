<?php
if (isset($data['news'])) {
    $news = $data['news'];
} else {
    $this->location($this->base_url . "/AdminNews");
}
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
                                <div class="alert alert-danger alert-dismissable center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    VOCÊ TEM CERTEZA QUE QUER APAGAR ESTA NOTÍCIA?
                                </div>
                                <form role="form" method="post">
                                    <div class="form-group">
                                        <label>Título da Notícia</label>                                        
                                        <p class="help-block"><?php echo $news->getTitle(); ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Texto da Notícia</label>
                                        <p class="help-block"><?php echo $news->getText(); ?></p>
                                    </div>
                                    <input type="submit" class="btn btn-danger" value='Apagar' name='del' >                                    
                                    <a href="<?php echo $this->base_url ?>AdminNews/" class="btn btn-default">Cancelar</a>
                                </form>
                                
                                
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

