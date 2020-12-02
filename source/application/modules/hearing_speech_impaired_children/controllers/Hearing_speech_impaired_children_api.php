<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hearing_speech_impaired_children_api extends Base_Controller 
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
            "hearing_speech_impaired_children_id": "2nWpd",
            "hearing_speech_impaired_children_title": "Meditation",
            "hearing_speech_impaired_children_date": "abc.jpg",
            "hearing_speech_impaired_children_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
            "visibilty": "show",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 00:00:00",
            "modified_by": "1",
            "modified_on": "2020-05-12 11:41:56",
            "in_use": "Y"
        }
    */
	public function _get_hearing_speech_impaired_children($details=array())
    {
		$details = $this->decryptArray($details);
		if(isset($details['hearing_speech_impaired_children_id']))
        {
        	$id=$details['hearing_speech_impaired_children_id'];
        $results = $this->standard_model->selectAllWhr('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$id);
        }
        else if(isset($details['all'])){
        $results = $this->standard_model->selectAll('tbl_hearing_speech_impaired_children');
        }
        else {
	    $results = $this->standard_model->selectAll('tbl_hearing_speech_impaired_children','in_use','Y');        	
          
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
                  'details'=>false
            );
        }
    }
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "hearing_speech_impaired_children updated!",
    "details": {
        "hearing_speech_impaired_children_title": "Meditation1",
        "hearing_speech_impaired_children_date": "abc.jpg",
        "hearing_speech_impaired_children_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
        "modified_by": 1,
        "modified_on": "2020-05-15 11:22:00",
        "visibilty": "show",
        "hearing_speech_impaired_children_id": "518Yn"
    }
    */
    public function _set_hearing_speech_impaired_children($details=array())
	{
		
		
	  	$validation_error='';
        $details = $this->decryptArray($details);
        if(isset($details['hearing_speech_impaired_children_id']) && !empty($details['hearing_speech_impaired_children_id']))
		{
				$results = $this->standard_model->selectAllWhr('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$details['hearing_speech_impaired_children_id']); 
	            if(!empty($results))
				{
				$flag=1;
				}
				else
				{
					return array(
                            'state'=>false,
                            'msg'=>'hearing speech impaired children id not exit!',
                            'details'=>false
                            );
				}	
		}
		else
		{
		 $flag=0;	
		}
        if($this->validationhearing_speech_impaired_childrenMasterDetails($details,$flag))
		{
            if($details)
            {
                $user_id= $this->session->userdata('user_id');
                $hearing_speech_impaired_children = array(
                'hearing_speech_impaired_children_id'=>isset($details['hearing_speech_impaired_children_id'])?$details
                ['hearing_speech_impaired_children_id']:NULL,
			    'hearing_speech_impaired_children_title'=>$details['hearing_speech_impaired_children_title'],
			    // 'hearing_speech_impaired_children_description' =>$details['hearing_speech_impaired_children_description'],
			    'hearing_speech_impaired_children_date'=>$details['hearing_speech_impaired_children_date'],
                'hearing_speech_impaired_children_duration'=>$details['hearing_speech_impaired_children_duration'],
                'hearing_speech_impaired_children_cover_image'=>$details['hearing_speech_impaired_children_cover_image'],
                'hearing_speech_impaired_children_video_url'=>$details['hearing_speech_impaired_children_video_url'],
                'hearing_speech_impaired_children_location' =>$details['hearing_speech_impaired_children_location'],
                'hearing_speech_impaired_children_note' =>$details['hearing_speech_impaired_children_note'],
                'modified_by'=>$user_id,
                'modified_on'=>date('Y-m-d H:i:s'),
                        
                );
                
                if(!isset($details['hearing_speech_impaired_children_id']) && empty($details['hearing_speech_impaired_children_id']))
                {
                    $hearing_speech_impaired_children['inserted_by']=$user_id;
                    $hearing_speech_impaired_children['inserted_on']=date('Y-m-d H:i:s');
                }
                $hearing_speech_impaired_children_id = $this->standard_model->single_insert('tbl_hearing_speech_impaired_children',$hearing_speech_impaired_children);
                $hearing_speech_impaired_children['hearing_speech_impaired_children_id']=$hearing_speech_impaired_children_id;
                $hearing_speech_impaired_children= $this->encryptArray($hearing_speech_impaired_children);
                if($flag==0)
                {
                return array(
                            'state'=>true,
                            'msg'=>'Hearing Speech Impaired Children Added!',
                            'details'=>$hearing_speech_impaired_children
                            );
            	}else
            	{
            	return array(
                            'state'=>true,
                            'msg'=>'hearing speech impaired children updated!',
                            'details'=>$hearing_speech_impaired_children
                            );
            	}
            }
            else
            {
                return array(
                'state'=>False,
                'msg'=>'hearing_speech_impaired_children Failed to Saved!',
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
	Purpose: validation for hearing_speech_impaired_children
	*/
	function validationhearing_speech_impaired_childrenMasterDetails($details,$flag)
    {
	 	$var1="'";
	 	$var2='"';
	 	
	 	$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
		array(
		'hearing_speech_impaired_children_id'=>isset($details['hearing_speech_impaired_children_id']) ? $details['hearing_speech_impaired_children_id'] :'',
		'hearing_speech_impaired_children_title'=>isset($details['hearing_speech_impaired_children_title']) ? $details['hearing_speech_impaired_children_title'] :'',
		// 'hearing_speech_impaired_children_description'=>isset($details['hearing_speech_impaired_children_description']) ? $details['hearing_speech_impaired_children_description'] :'',
		'hearing_speech_impaired_children_cover_image'=>isset($details['hearing_speech_impaired_children_cover_image']) ? $details['hearing_speech_impaired_children_cover_image'] :'',
		'hearing_speech_impaired_children_video_url'=>isset($details['hearing_speech_impaired_children_video_url']) ? $details['hearing_speech_impaired_children_video_url'] :'',
		'hearing_speech_impaired_children_date'=>isset($details['hearing_speech_impaired_children_date']) ? $details['hearing_speech_impaired_children_date'] :'',
		'hearing_speech_impaired_children_duration'=>isset($details['hearing_speech_impaired_children_duration']) ? $details['hearing_speech_impaired_children_duration'] :'',
		'hearing_speech_impaired_children_location'=>isset($details['hearing_speech_impaired_children_location']) ? $details['hearing_speech_impaired_children_location'] :'',
		'hearing_speech_impaired_children_note'=>isset($details['hearing_speech_impaired_children_note']) ? $details['hearing_speech_impaired_children_note'] :''

			
		)); 
		
		$this->form_validation->set_rules('hearing_speech_impaired_children_id','hearing_speech_impaired_children_id', array('min_length[1]','max_length[20]',"regex_match[/^([0-9][0-9]{0,4})$/]"),
		array(    
			'min_length'=>'Min 1 Number Required.',
			'max_length'=>'Max 20 Number allowed.',
			'regex_match'=>'hearing_speech_impaired_children_id Should Have Only Numbers'
		));

		if($flag==0)
		{
		$this->form_validation->set_rules('hearing_speech_impaired_children_title','hearing_speech_impaired_children_title', array('required','min_length[1]','max_length[99]','is_unique[tbl_hearing_speech_impaired_children.hearing_speech_impaired_children_title]','regex_match[/^([A-Z0-9a-z][A-Z0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,99})$/]'),
	 	array( 
	 		                                                                                      
	 		'min_length'=>'For hearing_speech_impaired_children_title Min 1 Number Required.',
	 		'max_length'=>'For hearing_speech_impaired_children_title Max 99 Number allowed.',
	 		'required'=>'Hearing Speech Impaired Children Title is Required',
	 		// 'is_unique'=>'duplicate entry for hearing_speech_impaired_children_title',
	 		'regex_match'=>'Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));
	    }else
	    {
	     $this->form_validation->set_rules('hearing_speech_impaired_children_title','hearing_speech_impaired_children_title', array('required','min_length[1]','max_length[99]','regex_match[/^([A-Z0-9a-z][A-Z0-9a-z\(\)\&\-\.\,\_\'\/\[\]\"\:\;\s]{1,99})$/]'),
	 	array( 
	 		                                                                                      
	 		'min_length'=>'For hearing_speech_impaired_children_title Min 2 char allowed.',
	 		'max_length'=>'For hearing_speech_impaired_children_title Max 100 char allowed.',
	 		'required'=>'Hearing Speech Impaired Children Title is Required',
	 		 'regex_match'=>'Only alphanumeric chars and special char & ( ) / . ,  - _ | [ ] " : ; space are allowed.'
	 	));	
	    }

	 //    $this->form_validation->set_rules('hearing_speech_impaired_children_description','hearing_speech_impaired_children_description',array('required','max_length[499]'),
		// array(
		//  	'required'=>'Required hearing_speech_impaired_children_description',
		//  	 'max_length'=>'For hearing_speech_impaired_children_description Max 500 Character Allowed.',
		// ));

		// $this->form_validation->set_rules('hearing_speech_impaired_children_video_url','hearing_speech_impaired_children_video_url',array('required','max_length[249]','regex_match[/^http:\/\/|(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/]'),
		// array(
		//  	'required'=>'Required hearing_speech_impaired_children_video_url',
		//  	'max_length'=>'For hearing_speech_impaired_children_video_url Max 249 Character Allowed.',
		//  	'regex_match'=>'hearing_speech_impaired_children_video_url Should proper video format'
		// ));
	 //    $this->form_validation->set_rules('hearing_speech_impaired_children_cover_image','hearing_speech_impaired_children_cover_image',array('max_length[499]','regex_match[/^[^\?]+\.(?i)(jpg|jpeg|gif|png|bmp|tiff|psd|pdf|eps|al|indd|raw)(?:\?|$)/]'),
		// array(
		//  	'required'=>' Cover Image is Required ',
		//  	'max_length'=>'Cover Image Max 499 Character Allowed.',
		//  	'regex_match'=>'mitra activity images Should in jpg|png|gif format.'
		// ));
       $this->form_validation->set_rules('hearing_speech_impaired_children_date','hearing_speech_impaired_children_date',array('required','max_length[249]'),
		array(
		 	'required'=>'Required hearing_speech_impaired_children_date',
		 	'max_length'=>'For hearing_speech_impaired_children_date Max 254 Character Allowed.',
		 	
		 ));

		$this->form_validation->set_rules('hearing_speech_impaired_children_duration','hearing_speech_impaired_children_duration',array('required' ,'max_length[249]'),
		array(
		 	'required'=>'Required hearing_speech_impaired_children_duration',
		 	'max_length'=>'For hearing_speech_impaired_children_duration Max 250 Character Allowed.',
		 	
		));

		
		$this->form_validation->set_rules('hearing_speech_impaired_children_location','hearing_speech_impaired_children_location',array('min_length[1]','max_length[99]','regex_match[/^([A-Za-z0-9][A-Za-z0-9\,\.\|\(\)\-\_\'\"\?\:\;\&\s]{1,99})$/]'),
	    array(
			'min_length'=>'hearing_speech_impaired_children_location Min 2 Character Required.',
			'max_length'=>'hearing_speech_impaired_children_location Max 100 Character Allowed.',
			'regex_match'=>'hearing_speech_impaired_children_location Should Have Only Alphanumeric character and Special Character ,'.$var1.'( )'.$var2.' - \ & _ : ; | & Space are Allowed'
		));

		// $this->form_validation->set_rules('hearing_speech_impaired_children_note','hearing_speech_impaired_children_note',array('required','max_length[99]'),
		// array(
		//  	'required'=>'Required hearing_speech_impaired_children_note',
		//  	 'max_length'=>'For hearing_speech_impaired_children_note Max 100 Character Allowed.',
		// ));


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
    "msg": "hearing_speech_impaired_children Hidden!",
    "details": [
        {
            "hearing_speech_impaired_children_id": "518Yn",
            "hearing_speech_impaired_children_title": "Meditation1",
            "hearing_speech_impaired_children_date": "abc.jpg",
            "hearing_speech_impaired_children_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
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
	public function _hide_hearing_speech_impaired_children($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['hearing_speech_impaired_children_id']))
		{
			$id=$details['hearing_speech_impaired_children_id'];
			$hearing_speech_impaired_children=array(
				'in_use'=>'N',
			);
			$results = $this->standard_model->updateRecord('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$id,$hearing_speech_impaired_children);
			$resdata = $this->standard_model->selectAllWhr('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$details['hearing_speech_impaired_children_id']);
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
		                  'msg'=>'Hidden Hearing Speech Impaired Children !',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide hearing_speech_impaired_children';
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
			'msg'=>'hearing_speech_impaired_children_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	 "state": true,
    "msg": "hearing_speech_impaired_children Restore!",
    "details": [
        {
            "hearing_speech_impaired_children_id": "518Yn",
            "hearing_speech_impaired_children_title": "Meditation1",
            "hearing_speech_impaired_children_date": "abc.jpg",
            "hearing_speech_impaired_children_video_url": "https://www.youtube.com/embed/BzQM6GNBbak",
            "visibilty": "show",
            "display": "Y",
            "inserted_by": "1",
            "inserted_on": "2020-05-12 12:22:04",
            "modified_by": "1",
            "modified_on": "2020-05-15 11:25:06",
            "in_use": "Y"
        }
	*/
	public function _restore_hearing_speech_impaired_children($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['hearing_speech_impaired_children_id']))
		{	
		    $id=$details['hearing_speech_impaired_children_id'];
			$hearing_speech_impaired_children=array(
				'in_use'=>'Y',
			);
			$results = $this->standard_model->updateRecord('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$id,$hearing_speech_impaired_children);
			$resdata = $this->standard_model->selectAllWhr('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$details['hearing_speech_impaired_children_id']);
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
		                  'msg'=>'Restored Hearing Speech Impaired Children !',
		                  'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore hearing_speech_impaired_children';
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
			'msg'=>'hearing_speech_impaired_children_id Required!',
			);
		}
	}
	/*
	========================================================
	Author:Mrudul Thite                     Date:12/05/2020
	========================================================
	"state": true,
    "msg": "hearing_speech_impaired_children Delete!",
    "details": {
        "hearing_speech_impaired_children_id": "518Yn"
    }
	*/
	public function _delete_hearing_speech_impaired_children($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['hearing_speech_impaired_children_id']))
		{    
			$id=$details['hearing_speech_impaired_children_id'];
		    $hearing_speech_impaired_children=array(
					'display'=>'N',
				);
			$results = $this->standard_model->updateRecord('tbl_hearing_speech_impaired_children','hearing_speech_impaired_children_id',$id,$hearing_speech_impaired_children);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
					'state'=>true,
					'msg'=>'Deleted Hearing Speech Impaired Children !',
					'details'=>$results
				);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete hearing_speech_impaired_children';
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
			'msg'=>'hearing_speech_impaired_children_id Required!',
			);
		}
	 }
}