<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class Jsonci extends CI_CONTROLLER
{
	public function __construct()
	{
		parent::__construct();
		
	}


	public function index()
	{
		$this->load->model('jsonci_model');
	    $some_data = $this->jsonci_model->usuarios();

	    $data = array (
	        'data' => $some_data
	    );

	    
	    $this->load->view('json_result_view', $data);

	}
}