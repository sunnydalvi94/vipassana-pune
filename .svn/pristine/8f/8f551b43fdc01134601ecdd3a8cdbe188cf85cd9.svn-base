<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class One_day_course_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
     $this->load->module('one_day_course/one_day_course_api');
  }

 public function one_day_course_list()
 {
  $details = array('all' =>true);
  $data['one_day_course_data'] = $this->one_day_course_api->_get_one_day_course($details);
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	$this->load->view('one-day-course-list',$data);
 }
 public function add_one_day_course($id=NULL)
 {
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	if($id)
    {
      $details = array('id' =>$id);
      $details = $this->decryptArray($details);
      $id = $details['id'];
      $data['one_day_course_data'] = $this->common_model->selectDetailsWhr('tbl_one_day_course','one_day_course_id',$id);
    }
    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    $this->load->view('add-one-day-course',$data);
  }
     public function upload_one_day_course_image()
    {
        if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000, 999999) . '.' . $extension;
            $location = './uploads/one_day_course_images/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $img_path = base_url().'uploads/one_day_course_images/'.$name;
            $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
            echo $img;
        }
    }
}
