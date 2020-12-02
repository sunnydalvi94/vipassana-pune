<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_web extends Base_Controller {
 
  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
  }

 public function user_list()
 {
  $data['user_data']=$this->common_model->alljoin2tbl('tbl_role','tbl_user','role_id');
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
  $this->load->view('user-list',$data);
 }
 public function add_user($id=NULL)
 {
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	if($id)
    {
      $data['user_data'] = $this->common_model->selectDetailsWhr('tbl_user','user_id',$id);
    }
    $data['role_data']=$this->common_model->fetchDataDesc('tbl_role','role_id');
    $this->load->view('add-user',$data);
  }

  public function add_change_password($id=NULL)
 {
    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $data['user_data'] = $this->common_model->selectDetailsWhr('tbl_user','user_id',$id);
    $this->load->view('add-change-password',$data);
  }
}
