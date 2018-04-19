<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>index.php/principal/index/">ANAS</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>index.php/principal/index/">Inicio</a></li>
        <li><a href="<?php echo base_url();?>index.php/Principal/catalogo_muebles/">Mesas</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/catalogo_sillas/">Sillas</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/catalogo_roperos/">Roperos</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/catalogo_tocadores/">Tocadores</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/catalogo_basesCama/">Bases de cama</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/catalogo_bares/">Bares</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/catalogo_cocinas/">Cocinas</a></li>
        <li><a href="<?php echo base_url();?>index.php/principal/info_carpinteria/">Quienes somos</a></li>
      </ul>
      
       <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>index.php/principal/login/"><span class="glyphicon glyphicon-log-in"></span> Iniciar</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>index.php/principal/registro/"><span class="glyphicon glyphicon-user"></span> Registrarse </a></li>
      </ul>
      
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url();?>img/mesa1.jpg" alt="Image" style="width:60%;">
        <div class="carousel-caption">
          <h3>Mesa de Parota</h3>
          <p>$1700</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>img/mesa2.jpg" alt="Image" style="width:60%;">
        <div class="carousel-caption">
          <h3>Mesa Rustica</h3>
          <p>$450</p>
        </div>      
      </div>

       <div class="item">
        <img src="<?php echo base_url();?>img/silla.jpg" alt="Image" style="width:51.5%;">
        <div class="carousel-caption">
          <h3>Silla de caoba</h3>
          <p>$250</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>img/ropero.jpg" alt="Image" style="width:40%;">
        <div class="carousel-caption">
          <h3>Ropero estilo europeo</h3>
          <p>$3300</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?php echo base_url();?>img/tocador.jpg" alt="Image" style="width:40%;">
        <div class="carousel-caption">
          <h3>Tocador modelo</h3>
          <p>$1000</p>
        </div>      
      </div>

       <div class="item">
        <img src="<?php echo base_url();?>img/bar.jpg" alt="Image" style="width:70%;">
        <div class="carousel-caption">
          <h3>Bar</h3>
          <p>$4000</p>
        </div>      
      </div>
      
      <div class="item">
        <img src="<?php echo base_url();?>img/cocina.jpg" alt="Image" style="width:50%;">
        <div class="carousel-caption">
          <h3>Cocina Clasica en madera de roble</h3>
          <p>$4500</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>¡Conoce nuestros productos!</h3><br>
  <br>
  <div class="row">
    <?php 
    $i = 1;
        foreach($ofertas->result() as $fila) { ?>
          <div class="col-sm-6">
            <img src="<?php echo base_url()?>/assets/uploads/files/<?php echo $fila->foto;?>" class="img-circle" style="width:90%" alt="Image">
          </div>
          <div class="col-sm-6">
            <div class="jumbotron">
              <h3><?php echo $fila->comentarios; ?></h3>
            </div>
          </div>
          <a href="#<?php echo $i?>" class="btn btn-info" data-toggle="collapse"><?php echo $fila->nombre_mueble; ?></a>
          <div id="<?php echo $i?>" class="collapse">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
          
  </div>
  <br>
  <?php $i++; }?>
</div>
<br>

</body>