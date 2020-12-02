<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class album_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI                Date: 11 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Save Album Details
	Response:return array(
						  	{
							    "state": true,
							    "msg": "Album Added Successfully!",
							    "details": {
							        "album_id": "7yPXy",
							        "album_name": "Vipassana Aurangabad center",
							        "sequence": "1",
							        "album_cover_photo": "Gautam_Buddha.png",
							        "modified_by": 1,
							        "modified_on": "2020-05-12 18:00:53",
							        "inserted_by": 1,
							        "inserted_on": "2020-05-12 18:00:53"
							    }
							}
						  );
    */
	public function _set_album($details=array())
	{
      	$validation_error='';
      	$details=$this->decryptArray($details);
      	$user_id= $this->session->userdata('user_id');
      	if(isset($details['album_id']) && !empty($details['album_id']))
      	{
      		$flag=1;
      	}
      	else
      	{
      		$flag=0;
      	}
    	if($this->validationAlbumDetails($details,$flag))
    	{
      		if($details)
      		{
      	 		$album = array
		    	(
		    		'album_id'=>isset($details['album_id'])?$details['album_id']:NULL,
		    		'album_name' =>$details['album_name'],
		      	 	'sequence' =>$details['sequence'], 
		      	 	'album_cover_photo'=>$details['album_cover_photo'], 
		      	 	'modified_by'=>$user_id,
                    'modified_on'=>date('Y-m-d H:i:s')
		      	);	
		  		if($flag==0)
                {
                    $album['inserted_by']=$user_id;
                    $album['inserted_on']=date('Y-m-d H:i:s');
                    $album['display']='Y';
                    $album['in_use']='Y';
                    $album_id= $this->standard_model->single_insert('tbl_album',$album);
      	 			$album['album_id']=$album_id;
      				$album= $this->encryptArray($album);
      				return array(
                            'state'=>true,
                            'msg'=>'Album Added Successfully!',
                            'details'=>$album
                            );
                }
				else
				{   
					$album_id=$details['album_id'];
					$present_album_id=$this->standard_model->selectAllWhr('tbl_album','album_id',$album_id);
					if(isset($present_album_id) && !empty($present_album_id))
					{							
                    	$album_id= $this->standard_model->single_insert('tbl_album',$album);
      	 				$album['album_id']=$album_id;
      					$album= $this->encryptArray($album);        		
            				return array(
                    	    			'state'=>true,
                    	    			'msg'=>'Album Updated!',
                    	    			'details'=>$album
                    	    			 );
            		}
            		else
            		{
            			return array(
                    	   			 'state'=>false,
                    	   			 'msg'=>'Unable to Update Album! album_id is not present!',
                    	   			 'details'=>false
                    	   			  );
         			}
            	}        			      	 
      		}
      	 	else
        	{
            	return array(
            			'state'=>False,
            			'msg'=>'Album Failed to Save!',
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
	-----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI               Date: 11 May 2020
    -----------------------------------------------------------------------------------
	Purpose: Validations for album
	*/
	public function validationAlbumDetails($details,$flag)
	{
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'album_id'=>isset($details['album_id']) ? $details['album_id'] :'',
        	'album_name'=>isset($details['album_name']) ? $details['album_name'] :'',
        	'sequence'=>isset($details['sequence']) ? $details['sequence'] :'',
         	'album_cover_photo'=>isset($details['album_cover_photo']) ? $details['album_cover_photo'] :''
		));
        $this->form_validation->set_rules('album_id','album_id', array('min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
		array(
       			'min_length'=>'album_id Min 1 Number Required.',
				'max_length'=>'album _id Max 10 Number allowed.',
				'regex_match'=>'album_id Should Have Only Numbers'
             ));
        if($flag==0)
        {
        	$this->form_validation->set_rules('album_name','album_name',array('required','min_length[1]','max_length[99]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,99}$/]",'is_unique[tbl_album.album_name]'),
			array(
				'required'=>'Album Name is Required',
				'min_length'=>'Album Name Min 2 Characters Required.',
				'max_length'=>'In album Name Field Maximum 100 Characters are Allowed.',
				'regex_match'=>'Album Name is Not Valid',
				'is_unique' =>'Duplicate entry for Album Name.'
			  ));
        }
    	elseif($flag==1)
    	{
    		$this->form_validation->set_rules('album_name','album_name',array('required','min_length[1]','max_length[99]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,99}$/]"),
			array(
				'required'=>'Album Name is Required',
				'min_length'=>'Album Name Min 2 Characters Required.',
				'max_length'=>'In album Name Field Maximum 100 Characters are Allowed.',
				'regex_match'=>'Album Name is Not Valid'
			  ));
    	}
    	$this->form_validation->set_rules('sequence','sequence',array('required','min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
			array(
				'required'=>'Sequence Required',
				'min_length'=>'Sequence Min 1 Number Required.',
				'max_length'=>'Sequence Max 10 Number allowed.',
				'regex_match'=>'Sequence Should Have Only Numbers'
			  ));
        $this->form_validation->set_rules('album_cover_photo','album_cover_photo',array('required',"regex_match[/^[^\?]+\.(?i)(jpg|jpeg|gif|png|bmp|tiff|psd|pdf|eps|al|indd|raw)(?:\?|$)/]"),
		array(
				'required'=>'Album Cover Photo Required',
				'regex_match'=>'Album Cover Photo is not valid.'
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
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 11 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Get Album Details
    parameter:none,all,album_id
	Response: return array{
						    "msg": "Record Found!",
						    "state": true,
						    "details": [
						        {
						            "album_id": "2nWpd",
						            "album_name": "Vipassana pune center",
						            "sequence": "1",
						            "album_cover_photo": "prathana hall.png",
						            "inserted_by": "1",
						            "inserted_on": "2020-05-12 11:20:37",
						            "modified_by": "1",
						            "modified_on": "2020-05-12 16:13:18",
						            "display": "Y",
						            "in_use": "Y"
						        }
						    ]
						}
	*/

	public function _get_album($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['album_id']))
        {
        	$id=$details['album_id'];
        	$results = $this->standard_model->selectAllWhr('tbl_album','album_id',$id);
        }
        else if(isset($details['all']))
        {
        	$results = $this->standard_model->selectAll('tbl_album');
        }
        else 
        {
	    	$results = $this->standard_model->selectAll('tbl_album','in_use','Y');      
		}
		if($results)
        {
        	$data=array();
            foreach ($results as $result)
            {
              	$data[] = (array)$result;  
            }
            if(isset($data) && is_array($data))
            {
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
            if(isset($details['album_id'])) 
        	{
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['album_id']
                  );
        	}
        	else
        	{
        		return array(
                  'msg'=>'No Records Found!',
                  'state'=>false
                  );
        	}
        }
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 11 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Hide Album Details
    parameter:album_id
	Response:return array(
		         		{
						    "state": true,
						    "msg": "Album Hidden!",
						    "details": [
						        {
						            "album_id": "2nWpd",
						            "album_name": "Vipassana pune center",
						            "sequence": "1",
						            "album_cover_photo": "prathana hall.png",
						            "inserted_by": "1",
						            "inserted_on": "2020-05-12 11:20:37",
						            "modified_by": "1",
						            "modified_on": "2020-05-12 18:16:49",
						            "display": "Y",
						            "in_use": "N"
						        }
						    ]
						}
		         		);
	*/
	public function _hide_album($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['album_id']))
		{
			$id=$details['album_id'];
			$album=array(
							'in_use'=>'N',
						  );
			$results = $this->standard_model->updateRecord('tbl_album','album_id',$id,$album);
			$resdata = $this->standard_model->selectAllWhr('tbl_album','album_id',$details['album_id']);
			if($resdata)
			{
				$data=array();
		      	foreach ($resdata as $result)
		        {
		            $data[] = (array)$result;  
		        }    
		     	if(isset($data) && is_array($data))
		        {
		         	$result = $this->encryptArray($data);
		        }
		        return array(
		                 	 'state'=>true,
		                 	 'msg'=>'Album Hidden!',
		                 	 'details'=>$result
						    );
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide Album!';
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
			'msg'=>'album_id Required!',
			);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 11 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Restored Album Details
    parameter:album_id
	Response:return array(
		         			{
							    "state": true,
							    "msg": "Album Restored!",
							    "details": [
							        {
							            "album_id": "2nWpd",
							            "album_name": "Vipassana pune center",
							            "sequence": "1",
							            "album_cover_photo": "prathana hall.png",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-12 11:20:37",
							            "modified_by": "1",
							            "modified_on": "2020-05-12 18:18:03",
							            "display": "Y",
							            "in_use": "Y"
							        }
							    ]
							}
		         		);
	*/
	public function _restore_album($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['album_id']))
		{
			$id=$details['album_id'];
			$album=array(
							'in_use'=>'Y',
							);
			$results = $this->standard_model->updateRecord('tbl_album','album_id',$id,$album);
			$resdata = $this->standard_model->selectAllWhr('tbl_album','album_id',$details['album_id']);
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
		                 		 'msg'=>'Album Restored!',
		                 		 'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore Album';
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
						'msg'=>'album_id Required!',
						);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 29 April 2020
    -----------------------------------------------------------------------------------
    Purpose: Delete Album Details
    parameter:album_id
	Response: return array(
							{
							    "state": true,
							    "msg": "Album Deleted!",
							    "details": {
							        "album_id": "2nWpd"
							    }
							}
						);
	*/
	public function _delete_album($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['album_id']))
		{    
			$id=$details['album_id'];
		    $album=array(
							'display'=>'N',
							);
			$results = $this->standard_model->updateRecord('tbl_album','album_id',$id,$album);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
							'state'=>true,
							'msg'=>'Album Deleted!',
							'details'=>$results
							);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete Album!';
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
			'msg'=>'album_id Required!',
			);
		}
	}
}