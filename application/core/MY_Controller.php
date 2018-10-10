<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * MY Core Controller
 */

class MY_Controller extends CI_Controller
{
	public $site_name 	= 'Shahriyear'; 			// _GoToFront_Global method for access globaly

	public function p_r($data){
		echo "<pre/>";
		print_r($data);
		exit();
	}

	//used for set pageTitle and set view page location in main content
	public function set_data_view($pageName,$main_content,$etc = null){

		if(isset($pageName) && isset($main_content)):
			$data = [
				'title'  				=>	$pageName.' | '.$this->site_name,
				'miniTitle' 			=> 	$pageName,
				'content_path'			=>	$this->content_path,
				'main_content' 			=> 	$main_content,
			];
			if(isset($etc)):
			$result = array_merge($data,$etc);
			$this->load->view($this->master_path,$result);
			else:
			$this->load->view($this->master_path,$data);
			endif;
		endif;
	}

	public function set_flash_redir($condition,$success_mess,$failed_mess){
    	if($condition):
           $this->session->set_flashdata('feedback',$success_mess);
           $this->session->set_flashdata('feedback_class','alert-success');
        else:
           $this->session->set_flashdata('feedback',$failed_mess);
           $this->session->set_flashdata('feedback_class','alert-danger'); 
        endif;
        return redirect($this->redirect);
	}

}

?>