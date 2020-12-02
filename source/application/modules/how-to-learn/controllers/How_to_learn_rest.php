<?php defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class How_to_learn_rest extends Rest_Controller 
{
	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function __construct()  
  	{
	    parent::__construct();
	    $this->load->module('how-to-learn/how_to_learn_api');
    }

    /*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/   	
	public function how_to_learn_get($details=array())
	{
		$details = $this->get();
		$response = $this->how_to_learn_api->_get_how_to_learn($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function how_to_learn_post($details=array())
	{
		$details=$this->post();
		$response=$this->how_to_learn_api->_set_how_to_learn($details);
		$this->response($response,REST_Controller::HTTP_OK);	
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function hide_how_to_learn_post($details=array())
	{
		$details=$this->post();
		$response=$this->how_to_learn_api->_hide_how_to_learn($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function restore_how_to_learn_post($details=array())
	{
		$details=$this->post();
		$response=$this->how_to_learn_api->_restore_how_to_learn($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}

	/*    
	=================================================================================
	Author: SNEHAL KULKARNI                         Date:11/05/2020
	=================================================================================
	*/
	public function delete_how_to_learn_delete()
	{
		$details=array('how_to_learn_id'=>$this->uri->segment(2));
		$response = $this->how_to_learn_api->_delete_how_to_learn($details);
		$this->response($response, REST_Controller::HTTP_OK);
	}	
}