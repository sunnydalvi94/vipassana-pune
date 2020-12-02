<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class sliders_model extends CI_Model
{
	private $returnarray;
	public $error;
	public $error_code;
    public function __construct() 
    {
	  parent::__construct();
	  $this->error=array();
      $error = Array('code'=>'', 'message'=>'');
    }
     /*
    =================================================================================
    Author:Mrudul Thite                                           Date:13/06/2020
    =================================================================================
    */

    public function childrenSliderAllJoing2Tbl($slider_type_id)
    {
        $query = $this->db->query("SELECT tcs.*,tst.slider_type FROM tbl_children_slider tcs LEFT JOIN tbl_slider_type tst ON tcs.slider_type_id=tst.slider_type_id where tcs.display='Y' AND tcs.slider_type_id=".$slider_type_id."");
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }
 
   
    
}//EOF