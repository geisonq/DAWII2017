<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo $this->base_url ?>" target="_blank"> <i class="fa fa-external-link fa-fw"></i>Visualizar Site</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Dados do Usuário</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Configurar Conta</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $this->base_url ?>Admin/logout"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links --> 

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo $this->base_url ?>Admin"><i class="fa fa-wrench fa-fw"></i> Painel de Controle</a>
                        </li>
                        <li>
                            <a href="<?php echo $this->base_url ?>AdminImovel/"><i class="fa fa-newspaper-o fa-fw"></i> Imóvel</a>
                        </li>
                        <li>
                            <a href="<?php echo $this->base_url ?>AdminUsuario/"><i class="fa fa-newspaper-o fa-fw"></i>Usuário</a>
                        </li>   

                        <li>
                            <a href="<?php echo $this->base_url ?>AdminBairro/"><i class="fa fa-newspaper-o fa-fw"></i>Bairro</a>
                        </li>
                        
                        <li>
                            <a href="<?php echo $this->base_url ?>AdminEstado/"><i class="fa fa-newspaper-o fa-fw"></i>Estado</a>
                        </li>  
                        
                        <li>
                            <a href="<?php echo $this->base_url ?>AdminCidade/"><i class="fa fa-newspaper-o fa-fw"></i>Cidade</a>
                        </li>  
                        
                        <!--  <li>
                              <a href="#"><i class="fa fa-picture-o fa-fw"></i> Media<span class="fa arrow"></span></a>
                              <ul class="nav nav-second-level">
                                  <li>
                                      <a href="<?php echo $this->base_url ?>Fotos/"><i class="fa fa-camera-retro fa-fw"></i>&nbspFotos</a>
                                  </li>
                                  <li>
                                      <a href="<?php echo $this->base_url ?>Videos/"><i class="fa fa-video-camera fa-fw"></i>&nbspVídeos</a>
                                  </li>
                              </ul>
                        <!-- /.nav-second-level -- >
                    </li>                        
                </ul-->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


    </div>
    <!-- /#wrapper -->