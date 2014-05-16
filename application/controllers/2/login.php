<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->do_login();
	}

	public function do_login(){

		$this->load->model('user_model');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$error = TRUE;
		
		if ( $email && $password ) {
			//Get user from database
			$user_from_base = $this->user_model->get_user_by_email($email);
			//Check for password
			if ( $user_from_base ) {
				if ( ($password) == $user_from_base->password) {
					$user_data = array(
						'logged_user'  => array(
							'name'		=> 	$user_from_base->full_name,
							'email'		=>	$email)
					);
					
					$this->session->set_userdata($user_data);
					$error = FALSE;
				}
			}
		}
		
		$output = array();
		if ( $error ) {			
			$output['error'] = TRUE;
			$output['message'] = 'Login failed. Please, try again.';
		}else {
			$output['error'] = FALSE;
		}

		echo json_encode($output);
	}
	public function do_logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}
