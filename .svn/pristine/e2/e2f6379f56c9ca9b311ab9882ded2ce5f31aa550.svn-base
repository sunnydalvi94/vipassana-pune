<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class Faq_model extends CI_Model
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
    Author:shuhangi Jagadale                                    Date:20/07/2020
    =================================================================================
    */
	public function fetch_faq($details=array())
	{
		if($details && is_array($details) && isset($details['faq_id']))
		{
			$this->db->WHERE('faq_id',$details['faq_id']);
        }
        else if(!isset($details['all']) && !isset($details['faq_id'])){
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
                         ->from("tbl_faq")
                         ->order_by('sequence,faq_id')
                         ->GET();
                        // echo $this->db->last_query();
                         //die;
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