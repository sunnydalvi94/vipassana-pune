<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends Base_Controller {

	/*
	-------------------------------------------------------------
	Author 	: Sunny Dalvi				Date: 03/02/2020
	-------------------------------------------------------------
	*/
	public function __construct()
  	{
		parent::__construct();
		$this->load->model("site_model");
		$this->load->model("common_model");
		$this->load->module('group_sitting/group_sitting_api');

    }
	public function index()
	
	{
		$data['about_data']=$this->common_model->fetchDataSiteASC('tbl_about','about_id');
		$data['our_centers_data']=$this->common_model->fetchDataSiteASC('tbl_our_centers','our_center_id');
		$data['how_to_learn']=$this->common_model->fetchDataSiteASC('tbl_how_to_learn','how_to_learn_id');
		$data['home_slider_data']=$this->common_model->fetchDataHomeSlider('tbl_children_slider','slider_type_id');
        $this->load->view('index',$data);
	}
	public function header()
	{
       $data['album_category_data']=$this->common_model->fetchDataSiteASC('tbl_album','album_id');
		$this->load->view('site/header',$data);
	}
	// public function album_images($id)
	// {
 //        $data['album_image_data']=$this->common_model->alljoin2tbl_whr('tbl_album_image','tbl_album','album_id','album_id',$id);
	// 	$this->load->view('site/album_images',$data);
	// }

	public function dhamma_punna_gallery()
	{   
		$data['Punna_gallery_data']=$this->common_model->fetchDataPunnaGalleryAsc();
        $this->load->view('dhamma_punna_gallery',$data);
	}
	public function dhamma_ananda_gallery()
	{   $data['ananda_gallery_data']=$this->common_model->fetchDataAnandaGalleryAsc();
        $this->load->view('dhamma_ananda_gallery',$data);
	}
	public function menu_dhamma_ananda()
	{
        $this->load->view('menu_dhamma_ananda');
	}
	
	public function mitra_pune_activities()
	{
		$data['mitra_activities_video_data']=$this->common_model->fetchMitraActivityVideoSiteASC('tbl_mitra_activity','mitra_activity_id');
		$data['mitra_activities_data']=$this->common_model->fetchDataSiteASC('tbl_mitra_activity','mitra_activity_id');
        $this->load->view('mitra_pune_activities',$data);
	}
	
	public function code_of_discipline()
	{
        $this->load->view('code_of_discipline');
	}
	public function questions_answers_vipassana()
	{
		$data['faq_data']=$this->common_model->fetchFaqDataSiteASC('tbl_faq','sequence');
        $this->load->view('questions_answers_vipassana',$data);
	}
	public function what_to_bring_to_center()
	{
        $this->load->view('what-to-bring-to-center');
	}
	public function apply_for_ten_days_courses()
	{
		$data['ten_day_course_data']=$this->common_model->fetchDataSiteASC('tbl_ten_day_course','ten_day_course_id');
        $this->load->view('apply_for_ten_days_courses',$data);
	}
	public function children_courses()
	{
		$data['children_course_data']=$this->common_model->fetchDataSiteASC('tbl_children_course','children_course_id');
		$data['children_feedback1_data']=$this->common_model->fetchDataFeedback1Asc('tbl_children_slider','slider_type_id');
		$data['children_feedback2_data']=$this->common_model->fetchDataFeedback2Asc('tbl_children_slider','slider_type_id');
        $this->load->view('children_courses',$data);
	}
	public function teenager_courses()
	{
		$data['teenager_course_data']=$this->common_model->fetchDataSiteASC('tbl_teenager_course','teenager_course_id');
        $this->load->view('teenager_courses',$data);
	}
	public function hearing_speech_impaired_children_courses()
	{
		$data['hearing_speech_impaired_children_data']=$this->common_model->fetchDataSiteASC('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id');
        $this->load->view('hearing_speech_impaired_children_courses',$data);
	}
	public function dhamma_ananda()
	{
		$data['dhamma_ananda_data']=$this->common_model->fetchDataDhammaAnandaCenterAsc('tbl_children_slider','slider_type_id');
        $this->load->view('dhamma_ananda',$data);
	}
	public function dhamma_punna()
	{
		$data['dhamma_punna_data']=$this->common_model->fetchDataDhammaPunnaCenterAsc('tbl_children_slider','slider_type_id');
        $this->load->view('dhamma_punna',$data);
	}
	public function seva_registration()
	{
		$data['keydata']=$this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        $this->load->view('seva_registration',$data);
	}
	public function mitra_school_seva_registration()
	{
		$data['keydata']=$this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        $this->load->view('mitra_school_seva_registration',$data);
	}
	public function one_day_vipassana_courses()
	{
		$data['one_day_course_data']=$this->common_model->fetchDataSiteASC('tbl_one_day_course','one_day_course_id');
        $this->load->view('one_day_vipassana_courses',$data);
	}
    public function group_sitting_in_pune_area()
	{
		// $details=array('all'=>'True');
		// $data['group_sitting_data']= $this->group_sitting_api->_get_group_sitting($details);
		$data['group_sitting_all_tab']=$this->common_model->fetchGrpSittingTabSiteASC('tbl_group_sitting');
		$data['group_sitting_table_data']=$this->common_model->fetchGrpSittingTableSiteASC('tbl_group_sitting');
		// echo ('<pre/>');
		// print_r($data['group_sitting_table_data']);die();
        $this->load->view('group_sitting_in_pune_area',$data);
	}
	 public function children_anapana()
	{
		$data['one_day_course_data']=$this->common_model->fetchDataSiteASC('tbl_one_day_course','one_day_course_id');
        $this->load->view('children_anapana',$data);
	}
	public function rough_work()
	{
		$data['album_category_data']=$this->common_model->fetchDataSiteASC('tbl_album','album_id');
        $this->load->view('rough_work',$data);

	}
	
		public function donation_registration()
	{
        $this->load->view('donation_registration');
	}
		public function payment_successful()
	{
        $this->load->view('payment_successful');
	}
		public function payment_failed()
	{
        $this->load->view('payment_failed');
	}
		public function redirecting_page()
	{
        $this->load->view('redirecting_page');
	}
	    public function donation()
	{
 	    $data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        $this->load->view('donation',$data);
	}
		public function login_fetch_user_details($id=NULL)
	{
		$role_id=$this->session->userdata('role_id');
		$data['login_fetch_user_data'] = $this->common_model->selectDetailsWhr('tbl_user','user_id',$role_id);
		$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
	    $this->load->view('login_fetch_user_details',$data);
	}
	public function new_registration_form()
	{
		$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        $this->load->view('new_registration_form',$data);
	}
	public function user_change_password()
	{
		$this->load->view('user_change_password');
	}
    public function forgot_password()
	{
		$this->session->set_userdata('email');
		$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
        $this->load->view('forgot_password',$data);
	}
	public function reset_password()
	{
		$this->session->userdata('email');
		$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
		$user_id = $this->session->userdata('user_id');
		if (!isset($user_id) && empty($user_id)){
			$this->load->view('reset_password',$data);
		}
		else{
			return "please enter activation code !";
		}
		
	}
	public function reset_password_page()
	{
		$data['keydata'] = $this->common_model->selectDetailsWhr('tbl_rest_keys','id',1);
		$user_id = $this->session->userdata('user_id');
		if (!isset($user_id) && empty($user_id)){
			redirect('site');
		}
		$this->load->view('reset_password_page');
	}
	
}




