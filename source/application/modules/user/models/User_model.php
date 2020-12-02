<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class User_model extends CI_Model
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
	================================================================================
	Author:Shubhangi Jagadale                        Date:10/06/2020
	=================================================================================
	*/
	public function updateActivationCode($details=array(),$user_id,$activation_code)
	{
        $query = $this->db->WHERE('user_id',$user_id)
                          ->WHERE('in_use','Y')
                          ->UPDATE('tbl_user',array('activation_code'=>$activation_code));
                       //   echo $this->db->last_query();
                          if($query)
                          {
                              if($this->db->affected_rows()>0)
                              {
                                  return true;
                              }
                              else
                              {
                                  $this->error=array('message' =>"No Changes Made.",'code'=>0);
                                  return false;
                              }
                          }
                                                
    }
    /*
	================================================================================
	Author:Shubhangi Jagadale                        Date:10/06/2020
	=================================================================================
	*/
	public function update_student_profile($details=array(),$user_id,$student_image)
	{
        $query = $this->db->WHERE('user_id',$user_id)
                        ->WHERE('in_use','Y')
                        ->UPDATE('tbl_student',array('student_image'=>$student_image));
              // echo $this->db->last_query();
        if($query)
        {
            if($this->db->affected_rows()>0)
            {
                return true;
            }
            else
            {
                $this->error=array('message' =>"No Changes Made.",'code'=>0);
                return false;
            }
        }
    }
    /*
    =================================================================================
    Author:shuhangi Jagadale                                       Date:13/07/2020
    =================================================================================
    */
    public function fetch_user_data($details=array())
	{
		if($details && is_array($details) && isset($details['user_id']))
		{
			$this->db->WHERE('tu.user_id',$details['user_id']);
        }
        else if(!isset($details['all']) && !isset($details['user_id'])){
             $this->db->where('tu.in_use','Y');
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
        $query=$this->db->select("tu.user_id,tu.role_id,tu.personal_details_id,tu.fullname,tu.email,tu.mobile,tu.username,tu.activation_code,tu.city,tu.pincode,tu.pan_no,tu.address,tu.user_image,tu.inserted_by,tu.inserted_on,tu.modified_by,tu.modified_on,tu.in_use,tu.display")
                         ->from("tbl_user as tu")
                         ->join("tbl_role as tr","tu.role_id =tr.role_id ","left")
                         ->join("tbl_personal_details as tpd","tu.personal_details_id =tpd.personal_details_id ","left")
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
    /*
    =================================================================================
    Author:shuhangi Jagadale                                    Date:27/07/2020
    =================================================================================
    */
	public function get_oldpassword($details=array(),$old_password)
    {
        if(isset($details))
        {
             $sql=$this->db->SELECT("user_id")
                            ->FROM('tbl_user')
                            ->WHERE('password',$old_password)     
                            ->GET(); 
            //echo $this->db->last_query();    
            $error=$this->db->error();   
            if($sql && $sql->num_rows()>0)
            {
                return $sql->row_array();
            }
            else
            {
                $this->error=$error['message'];
                return false;
            }
        }
    }
}