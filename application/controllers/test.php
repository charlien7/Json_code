<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('business_model');
	}

	public function hola_mundo()
	{
		$business_list = $this->business_model->get_all();

		$data['title'] = 'Hola Mundo';
		$data['business_list'] = $business_list;

		$this->load->view('test', $data);
	}

	public function negocio($id)
	{
		$business = $this->business_model->get_by_id($id);

		$title = 'Business';

		$data = array(
				'business' 	=> $business,
				'title'		=> $title
			);

		$this->load->view('business', $data);
	}
}