      <div class="masthead">
        <h3 class="text-muted">Imobiliária</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Vendas</a></li>
            <li><a href="#" class="">Aluguéis</a></li>
            <li><a href="#">Contratos</a></li>
            <li><a href="#">Sobre a Empresa</a></li>
            <li><a href="#">Contato</a></li>
          </ul>
        </nav>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        
         <?php foreach ($data['imoveis'] as $imoveis) : ?>   
         <div class="col-lg-4"> 
             <img src="/DAWII/view/templates/default/img/home.jpg">
          <h2><?php echo $imoveis->getDescricao(); ?></h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">Ver Imóvel &raquo;</a></p>
        </div>
         <?php endforeach; ?>
      </div>
        
    <?php  
     $i = 1;         
     while($i<=$data['total']){
         echo " <a class=\"btn btn-default\" href=\"/DAWII/home/index/{$i}\" /> {$i} </a>";
         $i++;
     }
     ?>