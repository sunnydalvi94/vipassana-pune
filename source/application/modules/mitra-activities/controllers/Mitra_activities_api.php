<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mitra_activities_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	 "msg": "Record Found!",
    "state": true,
    "details": [
        {
            "mitra_activity_id": "2nWpd",
            "mitra_activity_title": "Meditation",
            "mitra_activity_cover_image": "abc.jpg",
            "mitra_activity_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
            "visibilty": "show",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 00:00:00",
            "modified_by": "1",
            "modified_on": "2020-05-12 11:41:56",
            "in_use": "Y"
        }
    */
	public function _get_mitra_activities($details=array())
    {
		// $details = $this->decryptArray($details['mitra_activity_id']);
		if(isset($details['mitra_activity_id']))
        {
        	$id=$details['mitra_activity_id'];
        $results = $this->standard_model->selectAllWhr('tbl_mitra_activity','mitra_activity_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_mitra_activity');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_mitra_activity','in_use','Y');        	
          
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
                  'details'=>$details['mitra_activity_id']
            );
        }
    }
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "mitra_activity updated!",
    "details": {
        "mitra_activity_title": "Meditation1",
        "mitra_activity_cover_image": "abc.jpg",
        "mitra_activity_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
        "modified_by": 1,
        "modified_on": "2020-05-15 11:22:00",
        "visibilty": "show",
        "mitra_activity_id": "518Yn"
    }
    */
    public function _set_mitra_activities($details=array())
	{
		
	  	$validation_error='';
        $details = $this->decryptArray($details);
        if(isset($details['mitra_activity_id']) && !empty($details['mitra_activity_id']))
		{
				$results = $this->standard_model->selectAllWhr('tbl_mitra_activity','mitra_activity_id',$details['mitra_activity_id']); 
	            if(!empty($results))
				{
				$flag=1;
				}
				else
				{
					return array(
                            'state'=>false,
                            'msg'=>'mitra activity id not exit!',
                            'details'=>false
                            );
				}	
		}
		else
		{
		 $flag=0;	
		}
        if($this->validationmitra_activityMasterDetails($details))
		{
            if($details)
            {
                $user_id= $this->session->userdata('user_id');
                $mitra_activity = array(
                		'mitra_activity_id'=>isset($details['mitra_activity_id'])?$details['mitra_activity_id']:NULL,
					    // 'mitra_activity_title'=>$details['mitra_activity_title'],
                        // 'mitra_activity_cover_image'=>$details['mitra_activity_cover_image'],
                        'mitra_activity_images'=>$details['mitra_activity_images'],
                        'mitra_activity_image_description'=>$details['mitra_activity_image_description'],
                        'mitra_activity_video_url'=>$details['mitra_activity_video_url'],
                        'modified_by'=>$user_id,
                        'modified_on'=>date('Y-m-d H:i:s'),
                        
                        );
                if(empty($details['visibilty']))
                {
                    $mitra_activity['visibilty']='show';
                }else
                {
                     $mitra_activity['visibilty']=$details['visibilty'];
                }
                if(!isset($details['mitra_activity_id']) && empty($details['mitra_activity_id']))
                {
                    $mitra_activity['inserted_by']=$user_id;
                    $mitra_activity['inserted_on']=date('Y-m-d H:i:s');
                }
                $mitra_activity_id = $this->standard_model->single_insert('tbl_mitra_activity',$mitra_activity);
                $mitra_activity['mitra_activity_id']=$mitra_activity_id;
                $mitra_activity= $this->encryptArray($mitra_activity);
                if($flag==0)
                {
                return array(
                            'state'=>true,
                            'msg'=>'Mitra Activities Data added Successfully!',
                            'details'=>$mitra_activity
                            );
            	}else
            	{
            	return array(
                            'state'=>true,
                            'msg'=>'Mitra Activities Data updated Successfully!',
                            'details'=>$mitra_activity
                            );
            	}
            }
            else
            {
                return array(
                'state'=>False,
                'msg'=>'mitra activity Failed to Saved!',
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
	=========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	Purpose: validation for mitra_activity
	*/
	function validationmitra_activityMasterDetails($details)
    {
	 	$var1="'";
	 	$var2='"';
	 	if(isset($details['mitra_activity_id']) && !empty($details['mitra_activity_id']))
            {
                $falg=1;
            }
            else
            {
                $falg=0;
            }
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
		 	'mitra_activity_id'=>isset($details['mitra_activity_id']) ? $details['mitra_activity_id'] :'',
			// 'mitra_activity_title'=>isset($details['mitra_activity_title']) ? $details['mitra_activity_title'] :'',
			'mitra_activity_video_url'=>isset($details['mitra_activity_video_url']) ? $details['mitra_activity_video_url'] :'',
			// 'mitra_activity_cover_image'=>isset($details['mitra_activity_cover_image']) ? $details['mitra_activity_cover_image'] :'',
			'mitra_activity_images'=>isset($details['mitra_activity_images']) ? $details['mitra_activity_images'] :'',
			'mitra_activity_image_description'=>isset($details['mitra_activity_image_description']) ? $details['mitra_activity_image_description'] :''
		)); 
		
		$this->form_validation->set_rules('mitra_activity_id','mitra_activity_id', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
		array(    
			'min_length'=>'Min 1 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>'mitra_activity_id Should Have Only Numbers'
		));

		// if($falg==0)
		// {
		// $this->form_validation->set_rules('mitra_activity_title','mitra_activity_title', array('required','min_length[1]','max_length[99]','is_unique[tbl_mitra_activity.mitra_activity_title]','regex_match[/^([A-Z0-9a-z][A-Z0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,99})$/]'),
	 // 	array( 
	 		                                                                                      
	 // 		'min_length'=>'For mitra_activity_title Min 1 Number Required.',
	 // 		'max_length'=>'For mitra_activity_title Max 99 Number allowed.',
	 // 		'required'=>'Required mitra_activity_title',
	 // 		'is_unique'=>'duplicate entry for mitra_activity_title',
	 // 		'regex_match'=>'Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 // 	));
	 //    }else
	 //    {
	 //     $this->form_validation->set_rules('mitra_activity_title','mitra_activity_title', array('required'),
	 //     	// ,'min_length[1]','max_length[99]','regex_match[/^([A-Z0-9a-z][A-Z0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,99})$/]'
	 // 	array( 
	 		                                                                                      
	 // 		// 'min_length'=>'For mitra_activity_title Min 1 Number Required.',
	 // 		// 'max_length'=>'For mitra_activity_title Max 99 Number allowed.',
	 // 		'required'=>'Required mitra_activity_title',
	 // 		// 'regex_match'=>'Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 // 	));	
	 //    }

		$this->form_validation->set_rules('mitra_activity_video_url','mitra_activity_video_url',array('max_length[249]','regex_match[/^http:\/\/|(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/]'),
		array(
		 	// 'required'=>'Required mitra activity video url',
		 	'max_length'=>'For mitra activity video url Max 249 Character Allowed.',
		 	'regex_match'=>'mitra activity video url Should proper video format'
		));

  //      $this->form_validation->set_rules('mitra_activity_cover_image','mitra_activity_cover_image',array('required'),
		// array(
		//  	'required'=>'Required mitra_activity_cover_image',
		//  	// 'max_length'=>'For mitra_activity_cover_image Max 254 Character Allowed.',
		//  	// 'regex_match'=>'mitra_activity_cover_image Should in jpg|png|gif format.'
		//  ));

		$this->form_validation->set_rules('mitra_activity_images','mitra_activity_images',array('required' ,'max_length[499]','regex_match[/^[^\?]+\.(?i)(jpg|jpeg|gif|png|bmp|tiff|psd|pdf|eps|al|indd|raw)(?:\?|$)/]'),
		array(
		 	'required'=>'Mitra Activities Image is Required ',
		 	'max_length'=>'For mitra activity images Max 499 Character Allowed.',
		 	'regex_match'=>'mitra activity images Should in jpg|png|gif format.'
		));

		$this->form_validation->set_rules('mitra_activity_image_description','mitra_activity_image_description',array('max_length[270]'),
		array(
		 	// 'required'=>'Required mitra_activity_image_description',
		 	 'max_length'=>'Image Description Max 270 Character is Allowed.',
		));

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
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "mitra_activity Hidden!",
    "details": [
        {
            "mitra_activity_id": "518Yn",
            "mitra_activity_title": "Meditation1",
            "mitra_activity_cover_image": "abc.jpg",
            "mitra_activity_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
            "visibilty": "show",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 12:22:04",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:22:52",
            "in_use": "N"
        }
    ]
	*/
	public function _hide_mitra_activities($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['mitra_activity_id']))
		{
			$id=$details['mitra_activity_id'];
			$mitra_activity=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_mitra_activity','mitra_activity_id',$id,$mitra_activity);
			$resdata = $this->standard_model->selectAllWhr('tbl_mitra_activity','mitra_activity_id',$details['mitra_activity_id']);
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
		                  'msg'=>'Hidden Mitra Activities !',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide mitra_activity';
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
			'msg'=>'mitra_activity_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	 "state": true,
    "msg": "mitra_activity Restore!",
    "details": [
        {
            "mitra_activity_id": "518Yn",
            "mitra_activity_title": "Meditation1",
            "mitra_activity_cover_image": "abc.jpg",
            "mitra_activity_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
            "visibilty": "show",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 12:22:04",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:25:06",
            "in_use": "Y"
        }
	*/
	public function _restore_mitra_activities($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['mitra_activity_id']))
		{	
		    $id=$details['mitra_activity_id'];
			$mitra_activity=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_mitra_activity','mitra_activity_id',$id,$mitra_activity);
			$resdata = $this->standard_model->selectAllWhr('tbl_mitra_activity','mitra_activity_id',$details['mitra_activity_id']);
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
		                  'msg'=>'Restored Mitra Activities !',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore mitra_activity';
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
			'msg'=>'mitra_activity_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "mitra_activity Delete!",
    "details": {
        "mitra_activity_id": "518Yn"
    }
	*/
	public function _delete_mitra_activities($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['mitra_activity_id']))
		{    
			$id=$details['mitra_activity_id'];
		    $mitra_activity=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_mitra_activity','mitra_activity_id',$id,$mitra_activity);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted Mitra Activity !',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete mitra_activity';
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
			'msg'=>'mitra_activity_id Required!',
			);
		}
	 }
}