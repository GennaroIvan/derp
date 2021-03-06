<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
         function login(){
             $this->load->library('session');
             $this->load->model('usuario_model');
             $idusuario = $this->usuario_model->login($this->input->POST('usuario'),$this->input->POST('contrasena'));
             if($idusuario)
             {
                 $this->session->set_userdata("idusuario", $idusuario);
                 header('Location: '. base_url() );
 
             }
             else
             {
                 echo"Te has equivocado";
             }
        }
        
        function logout(){
            $this->load->library('session');
            $this->load->model('usuario_model');
        }
        
	public function index()
	{
            $this->load->model("usuario_model");
            $data["usuarios"] = $this->usuario_model->get_usuarios();
            $this->load->view('usuarios/lista', $data);
	}
        
        function nuevo(){
            $this->load->view('usuarios/nuevo');
        }
        
        function setnuevo(){
            $this->load->model("usuario_model");
//            var_dump($_POST);
            $this->usuario_model->set($this->input->post());
            $this->index();
        }
        
        function ver($idusuario){
            $this->load->model("usuario_model");
            $data = $this->usuario_model->get_usuario_by_id($idusuario);
            $this->load->view('usuarios/ver', $data);
        }
        
        function salir(){
            $this->session->set_userdata("idusuario",null);
            header('Location: '.base_url());
        }
}
