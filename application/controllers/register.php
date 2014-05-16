<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {


	public function __construct()
        {
        parent:: __construct();
        $this->load->model('login_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        }

	function index()
	{
		$this->load->model('login_model');

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm = $this->input->post('confirm');

		$output = array();
		$output['error'] = FALSE;

		if ( !$name ||  !$email ||  !$password ) {
			$output['error'] = TRUE;
			$output['message'] = 'Please, complete all the fields.';
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$output['error'] = TRUE;
			$output['message'] = 'Please, write a valid email address.';
		}elseif ( $password != $confirm) {
			$output['error'] = TRUE;
			$output['message'] = 'Passwords don\'t match';
		}else {
			//register
			$insert_data = array(
				'nombre' 		=> $name,
				'email' 		=> $email,
				'password' 		=> $password
			);

			$this->login_model->insert_user($insert_data);

			/*$new_id = $this->db->insert_id();*/

			$user_data = array(
				'logged_user'  => array(
					'name'		=> 	$name,
					'email'		=>	$email
					)
			);
			
			$this->session->set_userdata($user_data);
		}
	if ($output['error'] == FALSE) {
		$datos['msg'] = "<h5>Usuario creado con exito. Use sus datos para entrar</h5>";
		$msg ="<h5>Usuario creado con exito. Use sus datos para entrar</h5>";
		$this->load->view('login', $datos);
	}
		//echo json_encode($output);
	}
}