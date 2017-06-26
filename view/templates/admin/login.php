<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="login" name="login" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="senha" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="lembrar" type="checkbox" value="lembrar">Manter conectado.
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="index.html" class="btn btn-lg btn-info btn-block">Login</a>-->
                                <div class="form-group">
                                    <input class="btn btn-lg btn-info form-control"  name="logar" type="submit" value="Login">
                                </div>
                            </fieldset>
                        </form>
                        <?php if($data['msg']):?>
                        <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?php echo $data['msg']?>
                            </div>
                        <?php endif?>
                    </div>
                </div>
            </div>
        </div>
    </div>