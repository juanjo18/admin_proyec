<div class="container" >
  <h2 style="text-align:center;">Regístrate</h2>
  <form action="<?php echo base_url();?>index.php/principal/validaRegistro/" method="POST" class="formulario">    
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4" >
                <div class="well" style = "width:100%; ">
                    <input type="text" class="form-control" id="nombre"  
                    name="nombre" placeholder="Nombre Completo" required>
                    <br>
                    <input type="text" class="form-control" id="correo"  
                    name="correo" placeholder="E-mail" required>
                    <br>
                    <input type="password" class="form-control" id="password" placeholder="Crear Contraseña"
                    name="password" required>
                    <br>
                    <input type="text" class="form-control" id="direccion"  
                    name="direccion" placeholder="Dirección" required>
                    <br>

                    <input type="text" class="form-control" id="telefono"  
                    name="telefono" placeholder="Telefono" required>
                    
                    <br> <button type="submit" class="btn-md btn-primary" style="width: 100%">Resgistrarse</button>
                </div>
            </div>
        </div>
        </div>
    </form>
  
</div>