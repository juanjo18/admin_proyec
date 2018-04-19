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
        <li><a href="<?php echo base_url();?>index.php/Principal/catalogo_muebles/">Muebles</a></li>
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