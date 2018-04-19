<?php
defined('BASEPATH') OR exit('No direct script access allowed');
  class bases extends CI_Model {

    function __construct()
      {parent::__construct();}

      public function getOfertas(){
        $cadena = "select * from mueble as m inner join ofertas as o on m.modelo = o.mueble_modelo;";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
          return $query;
        else
          return FALSE;
      }

      public function validaUsuario($data){
        $cadena="select correo, contrasena, nombre from usuario where correo='".$data['correo']."' and contrasena='".$data['password']."' ";
        $query = $this->db->query($cadena);

        if ($query->num_rows() > 0)
          return $query;
        else
          return FALSE;
      }

      public function getUsuario($data){
        $cadena="select * from usuario where correo='".$data['correo']."' ";
        $query = $this->db->query($cadena);

        if ($query->num_rows() > 0)
          return $query;
        else
          return FALSE;
      }

      public function validaCorreo($data){
        $cadena = "select correo from usuario where correo='".$data['correo']."'";
        $query = $this->db->query($cadena);

        if ($query->num_rows() > 0)
          return $query;
        else
          return FALSE;
      }

      public function insertaUsuario($data){
          $cadena="insert into usuario values ('".$data['nombre']."', '".$data['correo']."', 
          '".$data['password']."', '".$data['direccion']."', '".$data['telefono']."')";
        $this->db->query($cadena);
      }

      public function getPedidoUsuario($data){
        $cadena = "select id_pedido, nombre, nombre_mueble, precio, caracteristica, foto, fecha_creado, fecha_entrega from usuario as u
                  inner join pedido as p
                  on u.correo = p.usuario_correo
                  inner join mueble as m
                  on p.mueble_modelo = m.modelo
                  where u.correo ='".$data['correo']."'";
        $query = $this->db->query($cadena);
        if ($query->num_rows() > 0)
          return $query;
        else
          return FALSE;
      }

      public function eliminarPedido($data){
        $cadena= "delete from pedido where id_pedido = ".$data["id_pedido"];
        $this->db->query($cadena);
      }


  }
?>
  
