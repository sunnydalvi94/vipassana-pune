<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class How_to_learn_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('how-to-learn/how_to_learn_api');
  }

 public function how_to_learn_list()
 {
  
  // $data['how_to_learn_data']=$this->common_model->fetchDataAsc('tbl_how_to_learn','how_to_learn_id');

  $details = array('all' =>true);
  $data['how_to_learn_data'] = $this->how_to_learn_api->_get_how_to_learn($details);
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);	
  $this->load->view('how-to-learn-list',$data);
 }
 public function add_how_to_learn($id=NULL)
 {
 	if($id)
    {
      $details = array('id' =>$id);
      $details = $this->decryptArray($details);
      $id = $details['id'];
      $data['how_to_learn_data'] = $this->common_model->selectDetailsWhr('tbl_how_to_learn','how_to_learn_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-how-to-learn',$data);
  }
}