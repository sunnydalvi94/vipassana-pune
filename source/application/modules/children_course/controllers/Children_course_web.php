<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Children_course_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('children_course/children_course_api');
  }

 public function children_course_list()
 {
  $details=array('all'=>'True');
  $data['children_course_data']=$this->children_course_api->_get_children_course($details);
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1); 
  $this->load->view('children-course-list',$data);
 }
 public function add_children_course($id=NULL)
 {
  if($id)
    {
      $details=array('id'=>$id);
      $details =$this->decryptArray($details);
      $id=$details['id'];
      $data['children_course_data'] = $this->common_model->selectDetailsWhr('tbl_children_course','children_course_id',$id);
    }
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-children-course',$data);
  }
}