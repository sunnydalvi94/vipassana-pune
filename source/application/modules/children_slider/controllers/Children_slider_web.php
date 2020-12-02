<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Children_slider_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
     $this->load->model('children_slider/sliders_model');
     $this->load->library('Encryptdecryptstring'); 
    
  }

  public function children_slider_list()
 {

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
       $slider_type_id=$this->input->post('slider_type_id');
       $data['children_slider_data']=$this->sliders_model->childrenSliderAllJoing2Tbl($slider_type_id);
       $data['slider_type_data']=$this->common_model->fetchDataAsc('tbl_slider_type','slider_type_id');
    }else
    { 
       $details=array('all'=>'True');
       $data['children_slider_data']=$this->common_model->childrenSliderAllJoing2Tbl();
      
       $data['slider_type_data']=$this->common_model->fetchDataAsc('tbl_slider_type','slider_type_id');
    }

    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   
    
   // $data['children_slider_data1']= $this->encryptArray($data['children_slider_data']);
   

     $this->load->view('children-slider-list',$data);
 }
  public function add_children_slider($id=NULL)
  {
    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
    if ($id) {
          $id = $this->encryptdecryptstring->decrypt_string($id);
          $children_slider = $this->decryptArray(array('children_slider_id' =>$id ));
          $data["children_slider_data"]=$this->common_model->selectDetailsWhr("tbl_children_slider","children_slider_id",$children_slider['children_slider_id']);
    }
    $data['slider_type_data']=$this->common_model->fetchDataAsc('tbl_slider_type','slider_type_id');
    $this->load->view('add-children-slider',$data);
  }
  public function upload_children_slider_image()
    {
      if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000, 999999) . '.' . $extension;
            $location = './uploads/children_slider_images/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $img_path = base_url().'uploads/children_slider_images/'.$name;
            $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
            echo $img;
        }
    }
}
