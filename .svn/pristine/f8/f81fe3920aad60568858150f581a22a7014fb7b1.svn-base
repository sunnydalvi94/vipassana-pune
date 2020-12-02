<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ten_day_course_web extends Base_Controller {
public function __construct()
{
  parent::__construct();
  $this->load->model('common_model');
  $this->load->module('ten_day_course/ten_day_course_api');

}
 public function ten_day_course_list()
 {
  // $data['ten_day_course_data']=$this->common_model->fetchDataAsc('tbl_ten_day_course','ten_day_course_id');
  $details = array('all' =>true);
  $data['ten_day_course_data'] = $this->ten_day_course_api->_get_ten_day_course($details);
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);	
  $this->load->view('ten-day-course-list',$data);
 }
 public function add_ten_day_course($id=NULL)
 {
  $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	if($id)
  {
    $details = array('id' =>$id);
    $details = $this->decryptArray($details);
    $id = $details['id'];
    $data['ten_day_course_data'] = $this->common_model->selectDetailsWhr('tbl_ten_day_course','ten_day_course_id',$id);
  }
  $this->load->view('add-ten-day-course',$data);
 }
  public function upload_ten_day_course_image()
  {
      if($_FILES['file']['name'] != '')
      {
          $test =explode(".", $_FILES['file']['name']);
          $extension = end($test);
          $name = rand(100000, 999999) . '.' . $extension;
          $location = './uploads/ten_day_course_images/'.$name;
          move_uploaded_file($_FILES['file']['tmp_name'], $location);
          $img_path = base_url().'uploads/ten_day_course_images/'.$name;
          $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
          echo $img;
      }
  }

}
