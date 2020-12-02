<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class album_image_web extends Base_Controller {
 

  public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
    $this->load->module('album_image/album_image_api');
  }
 public function album_image_list()
 {
    // $data['album_image_data']=$this->common_model->customalljoing2tbl();
    $details = array('all' =>true);
    $data['album_image_data'] = $this->album_image_api->_get_album_image($details);
   	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
   	$this->load->view('album-image-list',$data);
 }
 public function add_album_image($id=NULL)
  {
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	
    if($id){
            $details = array('id' =>$id);
            $details = $this->decryptArray($details);
            $id = $details['id'];
            $data["album_image_data"]=$this->common_model->selectDetailsWhr("tbl_album_image","album_image_id",$id);
    }
    $data['album_data']=$this->common_model->fetchDataAsc('tbl_album','album_id');
 
    $this->load->view('add-album-image',$data);
  }

    public function upload_album_image()
    {
        if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000, 999999) . '.' . $extension;
            $location = './uploads/album_image_images/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $img_path = base_url().'uploads/album_image_images/'.$name;
            $img =  '<img src="'.$img_path.'" style="height: 150px; width: 200px;" class="img-thumbnail"/>';
            echo $img;
        }
    }
}