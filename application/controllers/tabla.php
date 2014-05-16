<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabla extends CI_Controller {

	public function index()
	{
		$this->load->view('listar');
	}
}