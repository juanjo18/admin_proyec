<div class="container text-center">  
  <br>  
  <div class="row">
    <div class="col-sm-3 well">
      <div class="well">
        <h3>Bienvenido </h3>
        <h3><?php echo $this->session->userdata('nombre');?></h3>
      </div>
      <div class="well">
        <p>Comparte con tus amigos</p>
        <p>
          <a href="https://www.facebook.com/"><span class="label label-primary">Facebook</span></a>           
          <a href="https://twitter.com/"><span class="label label-info">Twiter</span></a> 
          <a href="https://www.instagram.com/"><span class="label label-default">Instagram</span></a> 
          <a href="https://www.snapchat.com/l/es/"><span class="label label-warning">SnapChat</span></a> 
          <a href="https://www.youtube.com/"><span class="label label-danger">Youtube</span></a> 
        </p>
      </div>
      <div class="alert alert-success fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        <p><strong>¡Ey!</strong></p>
         Muebles ANAS otorga una garantía de 60 días naturales a partir de la entrega de los muebles.
         Conozca más aquí. 
      </div>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <p contenteditable="true">Estos son tus pedidos</p>    
            </div>
          </div>
        </div>
      </div>
      <?php foreach($pedidos->result() as $fila) { ?>
          <div class="row">
            <div class="col-sm-3">
              <div class="well">
              <p><?php  echo $fila->nombre_mueble ?></p>
              <img src="<?php echo base_url()?>/assets/uploads/files/<?php echo $fila->foto;?>" class="img-rounded" height="55" width="55" alt="Avatar">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="well">
                <p>Precio: <?php echo $fila->precio; ?></p>
                <p>Caracteristicas: <?php echo $fila->caracteristica; ?></p>
                <p>Fecha compra: <?php echo $fila->fecha_creado; ?></p>
                <p>Fecha entrega: <?php echo $fila->fecha_entrega; ?></p>
              </div>
            </div>
            <div class="col-sm-3">
             <a href="<?=base_url();?>index.php/principal/eliminaPedido/<?=$fila->id_pedido?>">
              <button type="button" class="btn btn-info">Eliminar pedido</button></a>
            </div>
          </div> 
           <?php  }?>    
        </div>
    <div class="col-sm-2 well">
      <div class="thumbnail">
        <p>Comunicate más rapido</p>
        <p><strong>Mexico</strong></p>
        <p><?php $fechaActual = date('d-m-Y H:i:s');  echo $fechaActual;?></p>
      </div>      
    </div>
  </div>
</div>