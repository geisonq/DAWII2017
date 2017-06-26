<?php
$usuario = $data['usuario'];
?>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Usuário</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Usuário</a></li>

            </ul>
            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="col-lg-13 col-lg-offset-0">
                        <div class="panel-body ">
                            <div class="row">
                                <div class="col-lg-4l LEFT">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Nome</label>
                                            <input class="form-control" type='text' name='nome' value="<?php echo $usuario->getNome(); ?>" required="true" placeholder="Informe seu nome">
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" type='text' name='login' value="<?php echo $usuario->getLogin(); ?>" required="true" placeholder="Informe seu username">
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input class="form-control" type='email' name='email' value="<?php echo $usuario->getEmail(); ?>" required="true" placeholder="Informe seu e-mail">
                                        </div>
                                        <div class="form-group">
                                            <label>Senha</label>
                                            <input class="form-control" type='password' name='senha' value="" required="true" placeholder="Informe sua senha">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirme sua Senha</label>
                                            <input class="form-control" type='password' name='confirma' required="true" placeholder="Confirme sua senha">
                                        </div>

                                        <input type="submit" class="btn btn-default" value='Salvar' name='update' >
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

