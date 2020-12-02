<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Slider_api extends Base_Controller 
{
     public function __construct()
  	 {
		parent::__construct();
		$this->load->model('standard/standard_model');
	 }
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: add slider details
	return array(
			"state": true,
            "msg": "Image Added!",
            "details": {
            "children_slider_id": "xdzJd",
            "slider_name": "yogeshwari yawalkar",
             "slider_description": "this is slider",
             "image": "abc.jpg",
             "modified_by": 1,
             "modified_on": "2020-05-12 18:07:22",
             "inserted_by": 1,
             "inserted_on": "2020-05-12 18:07:22"
		);
	*/
     public function _set_slider($details=array())
	 {
      $validation_error='';
      $details=$this->decryptArray($details);
      if(isset($details['children_slider_id']) && !empty($details['children_slider_id']))
      {
      	$flag=1;
      }
      else
      {
      	$flag=0;
      }
     if($this->validationSliderDetails($details,$flag))
     {
      	if($details)
      	{
      	$user_id= $this->session->userdata('user_id');
        $user_id=isset($userdata['user_id'])?$userdata['user_id']:'';
      	 $slider = array
		      	 (  
		      	 	'slider_type_id' =>$details['slider_type_id'] ,
		      	 	'children_slider_id'=>isset($details['children_slider_id'])?$details['children_slider_id']:NULL,
		      	 	'slider_name' =>$details['slider_name'] ,
		      	 	'slider_description' =>$details['slider_description'] ,
		      	 	'image' =>$details['image'] , 
		      	 	'modified_by'=>$user_id,
                    'modified_on'=>date('Y-m-d H:i:s'),
                   
		      	);	
		  if(!isset($details['children_slider_id']) && empty($details['children_slider_id']))
                {
                    $slider['inserted_by']=$user_id;
                    $slider['inserted_on']=date('Y-m-d H:i:s');
                }
      	     $children_slider_id= $this->standard_model->single_insert('tbl_children_slider',$slider);
      	     $slider['children_slider_id']=$children_slider_id;
      	     $slider= $this->encryptArray($slider);
      	    if($flag==0)
            {
                return array(
                            'state'=>true,
                            'msg'=>'Slider Data  Added Successfully!',
                            'details'=>$slider
                            );
            	}else
            	{
            	return array(
                            'state'=>true,
                            'msg'=>'Image updated!',
                            'details'=>$slider
                            );
            	}
        }
      	 else
        {
                return array(
                'state'=>False,
                'msg'=>'Image Failed to Saved!',
                'details'=>false
                );
        }
    }
    else
		{
		    $validation_error = validation_errors();
		    return array(
				'state'=>False,
				'msg'=>$validation_error,
				'details'=>'Validation is failed'
		    );
		}
	}
	
	 /*
	=================================================================================
	Author:Yogeshwari Yawalkar                       Date:12/5/2020
	=================================================================================
	Purpose: validation for slider
	*/	
     public function validationSliderDetails($details,$flag)
     {
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'children_slider_id'=>isset($details['children_slider_id']) ? $details['children_slider_id'] :'',
        	'slider_type_id'=>isset($details['slider_type_id']) ? $details['slider_type_id'] :'',
        	'slider_name'=>isset($details['slider_name']) ? $details['slider_name'] : '',
            'slider_description'=>isset($details['slider_description']) ? $details['slider_description'] : '',
            'image'=>isset($details['image']) ? $details['image'] : '',
              ));
        $this->form_validation->set_rules('children_slider_id','children_slider_id', array('min_length[1]','max_length[5]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
        array(
           'min_length'=>'children_slider_id Min 1 Number Required.',
		   'max_length'=>'children_slider_id Max 5 Number allowed.',
		   'regex_match'=>'children_slider_id Should Have Only Numbers'
             ));
        $this->form_validation->set_rules('slider_type_id','slider_type_id', array('min_length[1]','max_length[5]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
        array(
           'min_length'=>'slider_type_id Min 1 Number Required.',
		   'max_length'=>'slider_type_id Max 5 Number allowed.',
		   'regex_match'=>'slider_type_id Should Have Only Numbers'
             ));
   //       $this->form_validation->set_rules('slider_description', 'slider_description',array('required','min_length[2]'),
   //      array(
	  //      'required'=>'description is Required', 
		 //   'max_length'=>'Max 250 char allowed. ',
			// ));
        $this->form_validation->set_rules('image', 'image',array('required','regex_match[/^[^\?]+\.(jpg|jpeg|gif|png)(?:\?|$)/]'),
		array(
		 	'required'=>'Image is Required',
            'regex_match'=>'Only jpg|png|gif|jpeg are allowed.'
        ));
  //       if($flag==0)
  //       {
  //       $this->form_validation->set_rules('slider_name','slider_name',array('required','min_length[1]','max_length[100]',"regex_match[/^([A-Za-z][A-Za-z\,\(\)\-\'\"\:\;\&\|\s]{0,99})$/]",'is_unique[tbl_children_slider.slider_name]'),
		// array(
		// 	'required'=>'Required the name',
		// 	'min_length'=>'Min 1 Character Required.',
		// 	'max_length'=>'Max 100 Character Allowed.',
		// 	'regex_match'=>'slider Name should not have Numbers'
		// 	));
  //       }
  //        elseif($flag==1)
  //        {
  //        $this->form_validation->set_rules('slider_name','slider_name',array('required','min_length[1]','max_length[100]',"regex_match[/^([A-Za-z][A-Za-z\,\(\)\-\'\"\:\;\&\|\s]{0,99})$/]"),
		// array(
		// 	'required'=>'Required the name',
		// 	'min_length'=>'Min 1 Character Required.',
		// 	'max_length'=>'Max 100 Character Allowed.',
		// 	'regex_match'=>'slider Name should not have Numbers'
		// 	));
  //       } 
        if($this->form_validation->run()==true)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
     /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: get slider details
	return array(
			 "msg": "Record Found!",
             "state": true,
             "details": [
        {
            "children_slider_id": "2nWpd",
            "slider_name": "yogeshwari yawalkar",
            "image": "abc.jpg",
            "slider_description": "this is slider",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 14:14:12",
            "modified_by": "1",
            "modified_on": "2020-05-12 14:14:12",
            "display": "Y",
            "in_use": "Y",
            "visibility": "show"
		);
	*/
     public function _get_slider($details=array())
	{
        $details = $this->decryptArray($details);
		if(isset($details['children_slider_id']))
        {
        	$id=$details['children_slider_id'];
        $results = $this->standard_model->selectAllWhr('tbl_children_slider','children_slider_id',$id);
        }
        else if(isset($details['all']))
        {
        $results = $this->standard_model->selectAll('tbl_children_slider');
        }
       else {
	    $results = $this->standard_model->selectAll('tbl_children_slider','in_use','Y');        	
          
		}
		 if($results)
        {
        	$data=array();
                foreach ($results as $result)
                {
                  $data[] = (array)$result;  
                }
                if(isset($data) && is_array($data)){
                $result = $this->encryptArray($data);
                 }

            return array(
                  'msg'=>'Record Found!',
                  'state'=>true,
                  'details'=>$result
			);
			$result= $this->encryptArray($details);
        }
        else
        {
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['children_slider_id']
            );
        }
    }
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: hide slider details
	return array(
		{
        "state": true,
        "msg": "Image Hidden!",
        "details": [
        {
            "children_slider_id": "71APy",
            "slider_name": "yogeshwari yawalkar",
            "image": "abc.jpg",
            "slider_description": "this is slider",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 16:31:36",
            "modified_by": "1",
            "modified_on": "2020-05-12 16:31:36",
            "display": "Y",
            "in_use": "N",
            "visibility": "show"
		);
	*/
    /* public function _hide_slider($details=false)
	 {
		$details = $this->decryptArray($details);
		if(isset($details['slider_id']))
		{
			$id=$details['slider_id'];
			$slider=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_slider','slider_id',$id,$slider);
            $resdata = $this->standard_model->selectAllWhr('tbl_slider','slider_id',$details['slider_id']);
			if($resdata)
				 {
					$data=array();
		              foreach ($resdata as $result)
		                {
		                  $data[] = (array)$result;  
		                }
		                if(isset($data) && is_array($data)){
		                $result = $this->encryptArray($data);
		                 }
		            	return array(
		                  'state'=>true,
		                  'msg'=>'Image Hidden!',
		                  'details'=>$result
								);
		            
			     }
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Image';
				return array(
					'state'=>false,
					'msg'=>$message,
					'details'=>false
			    );
			}
		}
		else
		{
			return array(
			'state'=>false,
			'msg'=>'slider_id Required!',
			);
		}
	}*/
	public function _hide_slider($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['children_slider_id']))
		{
			$id=$details['children_slider_id'];
			$slider=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_children_slider','children_slider_id',$id,$slider);
			if($results)
			{
				$fetchdata = $this->standard_model->selectAllWhr('tbl_children_slider','children_slider_id',$details['children_slider_id']);
				if($fetchdata)
				{
				    $data=array();
					foreach ($fetchdata as $result)
					{
						$data[] = (array)$result;  
					}
					if(isset($data) && is_array($data)){
					$result = $this->encryptArray($data);
					}
					return array(
						'msg'=>'slider Hidden !',
						'state'=>true,
						'details'=>$result
					);
		        }
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide slider';
				return array(
					'state'=>false,
					'msg'=>$message,
					'details'=>false
				);
			}
		}
		else
		{
			return array(
				'state'=>false,
				'msg'=>'children_slider_id Required!',
			);
		}
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: restore slider details
	return array(
			 "state": true,
             "msg": "image Restore!",
             "details": [
            {
            "children_slider_id": "71APy",
            "slider_name": "yogeshwari yawalkar",
            "image": "abc.jpg",
            "slider_description": "this is slider",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 16:31:36",
            "modified_by": "1",
            "modified_on": "2020-05-12 16:31:36",
            "display": "Y",
            "in_use": "Y",
            "visibility": "show"
		    );
	*/
     public function _restore_slider($details=array())
	 {
		$details = $this->decryptArray($details);
		if(isset($details['children_slider_id']))
		{
			$id=$details['children_slider_id'];
			$slider=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_children_slider','children_slider_id',$id,$slider);

			$resdata = $this->standard_model->selectAllWhr('tbl_children_slider','children_slider_id',$details['children_slider_id']);
			if($resdata)
		    {
					$data=array();
		              foreach ($resdata as $result)
		                {
		                  $data[] = (array)$result;  
		                }
		                if(isset($data) && is_array($data)){
		                $result = $this->encryptArray($data);
		                 }
		            	return array(
		                  'state'=>true,
		                  'msg'=>'slider Restored!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore image';
				return array(
					'state'=>false,
					'msg'=>$message,
					'details'=>false
			    );
			}
		}
		else
		{
			return array(
			'state'=>false,
			'msg'=>'children_slider_id Required!',
			);
		}
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: delete slider details
	"state": true,
    "msg": "Image Delete!",
    "details": {
    "slider_id": "71APy"
	*/
     public function _delete_slider($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['children_slider_id']))
		{    
			$id=$details['children_slider_id'];
		    $slider=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_children_slider','children_slider_id',$id,$slider);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Slider Deleted!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete Image';
				return array(
						'state'=>false,
						'msg'=>$message,
						'details'=>false
				);
			}
		}
		else
		{
			return array(
			'state'=>false,
			'msg'=>'children_slider_id Required!',
			);
		}
	}
}