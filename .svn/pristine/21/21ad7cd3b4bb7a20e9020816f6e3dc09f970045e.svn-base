<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seva_registration_web extends Base_Controller {
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('seva_registration/seva_registration_api');
  }

 public function seva_registration_list()
 { 
   $details=array('all'=>'True');
   $data['seva_registration_data']=$this->seva_registration_api->_get_seva_registration($details);
   $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   $this->load->view('seva-registration-list',$data);
 }

  public function add_seva_registration($id=NULL)
 {
  if($id)
    {
      $details=array('id'=>$id);
      $details =$this->decryptArray($details);
      $id=$details['id'];
      $data['seva_registration_data'] = $this->common_model->selectDetailsWhr('tbl_seva_registration','seva_registration_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-seva-registration',$data);
  }

  public function seva_registration_viewform($id=NULL)
 {
  if($id)
    {
      $details=array('id'=>$id);
      $details =$this->decryptArray($details);
      $id=$details['id'];
      $data['seva_registration_data'] = $this->common_model->selectDetailsWhr('tbl_seva_registration','seva_registration_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('seva-registration-viewform',$data);
  }


}
