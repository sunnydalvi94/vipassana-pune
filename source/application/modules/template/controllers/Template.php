<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends Base_Controller {
public function __construct()
  {
    parent::__construct();
    $this->load->model('common_model');
  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	 public function sidebar()
    {
 	$data['album_category_data']=$this->common_model->fetchDataASC('tbl_album','album_id');
 	$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
 	$this->load->view('template/sidebar',$data);
    }
}
