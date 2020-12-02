<?php defined('BASEPATH') OR exit('No direct script access allowed');
Class donation_model extends CI_Model
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
    public function fetch_donation($details=array())
	{
		if($details && is_array($details) && isset($details['donation_id']))
		{
			$this->db->WHERE('d.donation_id',$details['donation_id']);
        }
         else if(!isset($details['all']) && !isset($details['donation_id'])){
             $this->db->where('d.in_use','Y');
         }
		if($details && is_array($details) && isset($details['recordsPerPage']))
		{
            $recordsPerPage=isset($details['recordsPerPage']) && !empty($details['recordsPerPage'])?$details['recordsPerPage']:1;
            $this->db->limit($recordsPerPage);
       	}
       	else{
			   $this->db->limit(50);
		}
        $query=$this->db->select("*,d.inserted_by,d.inserted_on,d.modified_by,d.modified_on,d.in_use,d.display")
                         ->from("tbl_donation as d")
                         ->join("tbl_payment as p","d.payment_id=p.payment_id","left")
                         ->GET(); 
                        // echo $this->db->last_query();
		if($query && $query->num_rows()>0)
		{ 
		    $result =  $query->result_array();
            return $result;
           // print_r($result);
		}
		else
	    {
            $this->error=array('message' =>"Record doesnt exist.",'code'=>0);
		    return false;
		}
	} 

    public function fetchDataAsc($table_name,$asc_by_col_name,$form_date=NULL,$to_date=NULL,$status=NULL)
    {       
      //  echo $form_date,$to_date; die;
       $a=$this->db->select('*')->from($table_name)->where('display','Y')->order_by($asc_by_col_name, "ASC");

        if (isset($form_date) && !empty($form_date)) {
              # code...
            if($status=="4")
            {
                $where='inserted_on between "'.$form_date.'" AND "'.$to_date.'"';
            }else
            {
                $where='status='.$status.' AND inserted_on between "'.$form_date.'" AND "'.$to_date.'"'; 
            }
            $this->db->where($where);
          }
          
          $qry = $this->db->get();

         //   echo $a=$this->db->last_query(); die;

        if($qry->num_rows()>0)
        {
           
            return $qry->result();
        }
        else
        {
            return false;
        }
    }
 
   
    
}//EOF