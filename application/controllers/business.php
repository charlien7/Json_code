<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Business extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->model('business_model');
	}

	function index()
	{
		$this->create_business();
	}

	function create_business()
	{
		$this->load->helper('form');
		$this->load->view('business_create_form');
	}
}