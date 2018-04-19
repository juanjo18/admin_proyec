<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	function __construct(){
		parent::__construct();
     	$this->load->model('bases');
     	$this->load->config('grocery_crud');
     	$this->config->set_item('grocery_crud_xss_clean', true);
		$this->load->library('grocery_CRUD');
		$this->load->library('session');
    }

	public function index(){
		$data['ofertas'] = $this->bases->getOfertas();
		$this->load->view('header');
		$this->load->view('inicio', $data);
		$this->load->view('footer');
	}
	
	public function login(){
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function registro(){
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('registro');
		$this->load->view('footer');
	}

	public function validaUsuario(){
		$correo = $this->input->post('correo',TRUE);
		$password = $this->input->post('password',TRUE);

		 $data = array(
			   'correo'=> $correo,
			   'password'=>$password);

		$data['usuario']=$this->bases->validaUsuario($data);
        if ($data['usuario']==FALSE)
         	redirect('/Principal/login/', 'location');
       else{
		
			$usuario=$data["usuario"]->row_array(0);
         	$datasession = array(
				'correo'=> $usuario["correo"],
				'contrasena'=> $usuario["contrasena"],
				'nombre'=> $usuario["nombre"],);	
			$this->session->set_userdata($datasession);
			$this->load->view('header');
			$this->load->view('encabezado_cerrar_sesion');
			$this->load->view('sesion_inicio');
			$this->load->view('footer');
						
       	}
	}

	public function cerrar_sesion(){
        $datasession = array('correo' => '');
        $this->session->unset_userdata($datasession);
       	$this->session->sess_destroy();
       redirect('/Principal/index/', 'refresh');
	}

	public function validaRegistro(){
		$nombre = $this->input->post('nombre',TRUE);
		$correo = $this->input->post('correo',TRUE);
		$password = $this->input->post('password',TRUE);
		$direccion = $this->input->post('direccion',TRUE);
		$telefono=$this->input->post('telefono',TRUE);

		$data = array(
			   'nombre'=> $nombre,
			   'correo'=> $correo,
			   'password'=>$password,
			   'direccion'=> $direccion,
			   'telefono'=> $telefono);
		
		$correoExiste = $this->bases->validaCorreo($data);
		 if ($correoExiste != FALSE)
			redirect('/Principal/registro/', 'location'); 	
       else{
			$this->bases->insertaUsuario($data);
			$this->login();	
	   }
			
	}

	public function muestra_pedidos(){
		$data['correo'] = $this->session->userdata('correo');
		$pedidos['pedidos'] = $this->bases->getPedidoUsuario($data);

		$this->load->view('header');
		$this->load->view('encabezado_cerrar_sesion');
		$this->load->view('pedidos', $pedidos);
		$this->load->view('footer');
	}

	public function eliminaPedido(){
		$data["id_pedido"] = $this->uri->segment(3);
		$this->bases->eliminarPedido($data);
		redirect('/Principal/muestra_pedidos/', 'refresh');  
	    
	}

	public function catalogo_muebles(){
		echo "Aqui se ven los muebles";
	}

	public function catalogo_sillas(){
		echo "Aqui se ven los sillas";
	}

	public function catalogo_roperos(){
		echo "Aqui se ven los roperos";
	}

	public function catalogo_tocadores(){
		echo "Aqui se ven los tocadores";
	}

	public function catalogo_basesCama(){
		echo "Aqui se ven las bases de la cama";
	}

	public function catalogo_bares(){
		echo "Aqui se ven los bases";
	}

	public function catalogo_cocinas(){
		echo "Aqui se ven las cocinas";
	}

	public function info_carpinteria(){
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('informacion_empresa');
		$this->load->view('footer');
	}
}
