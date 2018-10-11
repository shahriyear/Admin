<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Dashboard
 */
class Dashboard extends MY_Controller
{

/*
|--------------------------------------------------------------------------
| Initilize Every Controller 
|--------------------------------------------------------------------------
*/
	public $master_path 	= 'backend/dashboard'; 
	public $content_path 	= '';	
	public $redirect 		= 'Dashboard';			
	public $name			= 'Dashboard';				
	
/*
|--------------------------------------------------------------------------
| Initilize Every Controller 
|--------------------------------------------------------------------------
*/
	
	function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
	}


	public function index()
	{
		$this->set_data_view($this->name,'backend/partials/dashboard_content');
		//$this->load->view('backend/dashboard');
	}

	
}


 ?>