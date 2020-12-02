 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class About_api extends Base_Controller 
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
	Purpose: add about details
	return array(
			"state": true,
            "msg": "about Added!",
            "details": {
            "about_id": "xdzJd",
            "about_name": "yogeshwari yawalkar",
             "about_description": "this is about",
             "video": "abc.jpg",
             "modified_by": 1,
             "modified_on": "2020-05-12 18:07:22",
             "inserted_by": 1,
             "inserted_on": "2020-05-12 18:07:22"
		);
	*/
	public function _set_about($details=array())
	{
      	$validation_error='';
      	$details=$this->decryptArray($details);
      	if(isset($details['about_id']) && !empty($details['about_id']))
      	{
      		$flag=1;
      	}
      	else
      	{
      		$flag=0;
      	}
    	if($this->validationAboutDetails($details,$flag))
    	{
      		if($details)
      		{
      			$user_id= $this->session->userdata('user_id');
                $user_id=isset($userdata['user_id'])?$userdata['user_id']:'';
      	 		$about = array
		    	(
		    		'about_id'=>isset($details['about_id'])?$details['about_id']:NULL,
		    		'about_name' =>$details['about_name'],
		      	 	'about_description' =>$details['about_description'], 
		      	 	'video'=>$details['video'], 
		      	 	'modified_by'=>$user_id,
                    'modified_on'=>date('Y-m-d H:i:s')
		      	);	
		  		if($flag==0)
                {
                    $about['inserted_by']=$user_id;
                    $about['inserted_on']=date('Y-m-d H:i:s');
                    $about_id= $this->standard_model->single_insert('tbl_about',$about);
      	 			$about['about_id']=$about_id;
      				$about= $this->encryptArray($about);
      				return array(
                            'state'=>true,
                            'msg'=>'About Data Added Successfully!',
                            'details'=>$about
                            );
                }
				else
				{   
					$about_id=$details['about_id'];
					$about_id=$this->standard_model->selectAllWhr('tbl_about','about_id',$about_id);
					if(isset($about_id) && !empty($about_id))
					{							
                    	$about_id= $this->standard_model->single_insert('tbl_about',$about);
      	 				$about['about_id']=$about_id;
      					$about= $this->encryptArray($about);        		
            				return array(
                    	    			'state'=>true,
                    	    			'msg'=>'About Updated!',
                    	    			'details'=>$about
                    	    			 );
            		}
            		else
            		{
            			return array(
                    	   			 'state'=>false,
                    	   			 'msg'=>'Unable to Update About',
                    	   			 'details'=>false
                    	   			  );
         			}
            	}        			      	 
      		}
      	 	else
        	{
            	return array(
            			'state'=>False,
            			'msg'=>'about Failed to Save!',
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
	Purpose: validation for about
	*/	
     public function validationAboutDetails($details,$flag)
     {
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'about_id'=>isset($details['about_id']) ? $details['about_id'] :'',
        	'about_name'=>isset($details['about_name']) ? $details['about_name'] : '',
            'about_description'=>isset($details['about_description']) ? $details['about_description'] : '',
            'video'=>isset($details['video']) ? $details['video'] : '',
              ));
        $this->form_validation->set_rules('about_id','about_id', array('min_length[1]','max_length[5]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
        array(
            'min_length'=>'about_id Min 1 Number Required.',
		    'max_length'=>'about_id Max 5 Number allowed.',
		    'regex_match'=>'about_id Should Have Only Numbers'
             ));
   //      $this->form_validation->set_rules('about_description','about_description', array('required','min_length[1]','max_length[500]','regex_match[/^([A-Z0-9a-z][A-Z 0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{0,499})$/]'),
	 	// array
	 	// ( 
	 	// 	'min_length'=>'For description Min 1 Number Required.',
	 	// 	'max_length'=>'For description Max 500 Number allowed.',
	 	// 	'required'=>'description required',
	 	// 	'regex_match'=>'description Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	// ));
       //    $this->form_validation->set_rules('video', 'video',array('required'),
       //  array(
	      //   'required'=>'video is Required', 
		     // ));
        if($flag==0)
        {
        $this->form_validation->set_rules('about_name','about_name',array('required','min_length[1]','max_length[100]',"regex_match[/^([A-Za-z][A-Za-z\,\(\)\-\'\"\:\;\&\|\s]{0,99})$/]",'is_unique[tbl_about.about_name]'),
		array(
			'required'=>'Required the name',
			'min_length'=>'Min 1 Character Required.',
			'max_length'=>'Max 100 Character Allowed.',
			'regex_match'=>'about Name only characters are allowed',
			'is_unique' =>'Duplicate entry for Name.'
			));
        }
    	elseif($flag==1)
    	{
        $this->form_validation->set_rules('about_name','about_name',array('required','min_length[1]','max_length[100]',"regex_match[/^([A-Za-z][A-Za-z\,\(\)\-\'\"\:\;\&\|\s]{0,99})$/]"),
		array(
			'required'=>'Required the name',
			'min_length'=>'Min 1 Character Required.',
			'max_length'=>'Max 100 Character Allowed.',
			'regex_match'=>'about Name only characters are allowed',
			));
        }
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
	Purpose: get about details
	return array(
			 "msg": "Record Found!",
             "state": true,
             "details": [
        {
            "about_id": "2nWpd",
            "about_name": "yogeshwari yawalkar",
            "video"": "abc.jpg",
            "about_description": "this is about",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 14:14:12",
            "modified_by": "1",
            "modified_on": "2020-05-12 14:14:12",
            "display": "Y",
            "in_use": "Y",
            "visibility": "show"
		);
	*/
     public function _get_about($details=array())
	 {

		$details = $this->decryptArray($details);
		if(isset($details['about_id']))
        {
        	$id=$details['about_id'];
        $results = $this->standard_model->selectAllWhr('tbl_about','about_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_about');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_about','in_use','Y');        	
          
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
                  'details'=>$details['about_id'],
            );
        }
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: hide about details
	return array(
		{
        "state": true,
        "msg": "about Hidden!",
        "details": [
        {
            "about_id": "71APy",
            "about_name": "yogeshwari yawalkar",
            "video"": "abc.jpg",
            "about_description": "this is about",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 16:31:36",
            "modified_by": "1",
            "modified_on": "2020-05-12 16:31:36",
            "display": "Y",
            "in_use": "N",
            "visibility": "show"
		);
	*/
     public function _hide_about($details=array())
	 {
		$details = $this->decryptArray($details);
		if(isset($details['about_id']))
		{
			$id=$details['about_id'];
			$about=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_about','about_id',$id,$about);
            $resdata = $this->standard_model->selectAllWhr('tbl_about','about_id',$details['about_id']);
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
		                  'msg'=>'About Data Hidden!',
		                  'details'=>$result
								);
			     }
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide about';
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
			'msg'=>'about_id Required!',
			);
		}
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: restore about details
	return array(
			 "state": true,
             "msg": "about Restore!",
             "details": [
            {
            "about_id": "71APy",
            "about_name": "yogeshwari yawalkar",
            "video"": "abc.jpg",
            "about_description": "this is about",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 16:31:36",
            "modified_by": "1",
            "modified_on": "2020-05-12 16:31:36",
            "display": "Y",
            "in_use": "Y",
            "visibility": "show"
		    );
	*/
     public function _restore_about($details=array())
	 {
		$details = $this->decryptArray($details);
		if(isset($details['about_id']))
		{
			$id=$details['about_id'];
			$about=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_about','about_id',$id,$about);

			$resdata = $this->standard_model->selectAllWhr('tbl_about','about_id',$details['about_id']);
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
		                  'msg'=>'About Data Restore!',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore About';
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
			'msg'=>'about_id Required!',
			);
		}
	}
	 /*
	=================================================================================
    Author:Yogeshwari Yawalkar                      Date:12/5/2020
	=================================================================================
	Purpose: delete about details
	"state": true,
    "msg": "about Delete!",
    "details": {
    "about_id": "71APy"
	*/
     public function _delete_about($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['about_id']))
		{    
			$id=$details['about_id'];
		    $about=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_about','about_id',$id,$about);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'About Data Delete!',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete About';
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
			'msg'=>'about_id Required!',
			);
		}
	}
}