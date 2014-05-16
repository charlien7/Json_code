<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('asset_url()'))
	{
		function asset_url()
		{
			echo base_url().'assets/';
		}
	}