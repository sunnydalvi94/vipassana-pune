<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Slider_type_model extends CI_Model
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
    Author:shuhangi Jagadale                                    Date:21/07/2020
    =================================================================================
    */
	public function fetch_slider_type_data($details=array())
	{
		if($details && is_array($details) && isset($details['slider_type']))
		{
            $this->db->WHERE('slider_type',$details['slider_type']);
            $this->db->where('in_use','Y');
        }
       	if($details && is_array($details) && isset($details['recordsPerPage']))
		{
            $recordsPerPage=isset($details['recordsPerPage']) && !empty($details['recordsPerPage'])?$details['recordsPerPage']:1;
            $this->db->limit($recordsPerPage);
       	}
       	else
        {
			   $this->db->limit(50);
		}
        $query=$this->db->select("*")
                         ->from("tbl_slider_type")
                         ->GET();
                       //  echo $this->db->last_query();
        if($query && $query->num_rows()>0)
		{ 
		    $result =  $query->result_array();
            return $result;
           // print_r($result);
		}
		else
	    {
            $this->error=array('message' =>"Record Does not Exist.",'code'=>0);
		    return false;
		}
	}  
}