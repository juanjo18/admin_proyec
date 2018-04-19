
<div class="container" >
  <h2 style="text-align:center;">Iniciar sesión</h2>
  <form action="<?php echo base_url();?>index.php/principal/validaUsuario" method="POST" class="formulario">
         <div class="row">
         <div class="col-sm-4"></div>
          <div class="col-sm-4" >
              <div class="well" style = "width:100%; ">
                    <label for="usuario"><span class="glyphicon glyphicon-user"></span> Email</label>
                    <input type="text" class="form-control" id="correo" 
                    name="correo"
                    placeholder="Ingrese email" required>

                  <br>
                    <label for="password"><span class="glyphicon glyphicon-exclamation-sign"></span> Constraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="************"
                    name="password" required>
                  <br> <button type="submit" class="btn-md btn-primary" style="width: 100%">Ingresar</button>
                  
                  <div style="text-align:center;">
                  <br>
                  <p>¿Eres nuevo?</p>
                  <a href="<?php echo base_url();?>index.php/principal/registro"><strong>Registrate</strong></a>
                  </div> 
              </div>
              </div>
          </div>
    </form>
</div>






















