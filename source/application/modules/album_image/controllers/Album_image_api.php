<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Album_image_api extends Base_Controller 
{
    public function __construct()
  	{
		parent::__construct();
		$this->load->model('standard/standard_model');
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI                Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Save Album Image Details
	Response:return array(
						  	{
							    "state": true,
							    "msg": "Album Image Added Successfully!",
							    "details": {
							        "album_image_id": "518Yn",
							        "album_id": "7yPXy",
							        "album_image_description": "Gautam Buddha Image in Aurangabad Center.",
							        "album_image_path": "image.tex",
							        "album_image_path": "1",
							        "modified_by": 1,
							        "modified_on": "2020-05-12 18:01:49",
							        "inserted_by": 1,
							        "inserted_on": "2020-05-12 18:01:49"
							    }
							}
						  );
    */
	public function _set_album_image($details=array())
	{
      	$validation_error='';
      	$details=$this->decryptArray($details);
      	$user_id= $this->session->userdata('user_id');
      	if(isset($details['album_image_id']) && !empty($details['album_image_id']))
      	{
      		$flag=1;
      	}
      	else
      	{
      		$flag=0;
      	}
    	if($this->validationAlbumimageDetails($details,$flag))
    	{
      		if($details)
      		{
      	 		$album_image = array
		    	(
		    		'album_image_id'=>isset($details['album_image_id'])?$details['album_image_id']:NULL,
		    		'album_id' =>$details['album_id'],
		    		'album_image_description' =>$details['album_image_description'],
		      	 	'album_image_path' =>$details['album_image_path'], 
		      	 	'album_image_sequence'=>$details['album_image_sequence'], 
		      	 	'modified_by'=>isset($user_id)?$user_id:'NULL',
                    'modified_on'=>date('Y-m-d H:i:s')
		      	);
		      	$album_id=$details['album_id'];
		      	$present_album_id=$this->standard_model->selectAllWhr('tbl_album','album_id',$album_id);
		      	if(isset($present_album_id) && !empty($present_album_id))
				{
					if($flag==0)
                	{
                		// Code for checking Album and Album-Image combination
						$AlbumImageUnique=$this->standard_model->selectMultiData('tbl_album_image','album_id','album_image_sequence',$album_id,$details['album_image_sequence']);
						//print_r($AlbumImageUnique);die;
						//echo $this->db->last_query();die;
						if(isset($AlbumImageUnique) && !empty($AlbumImageUnique))
						{
							return array(
	                    	   			'state'=>false,
	                    	   			'msg'=>'This Sequence Number is Already Assigned To Another Image in This Album.'
	                    	   		);
						}
						else
						{
	                    	$album_image['inserted_by']=isset($user_id)?$user_id:'NULL';
	                    	$album_image['inserted_on']=date('Y-m-d H:i:s');
	                    	$album_image['display']='Y';
	                    	$album_image['in_use']='Y';
	                    	$album_image_id= $this->standard_model->single_insert('tbl_album_image',$album_image);
	      	 				$album_image['album_image_id']=$album_image_id;
	      					$album_image= $this->encryptArray($album_image);
	      					return array(
	                            'state'=>true,
	                            'msg'=>'Gallery Image Added Successfully!',
	                            'details'=>$album_image
	                            );
	      				}
                	}
					else
					{ 
						// Code for checking Album and Album-Image combination
						$AlbumImageUnique=$this->standard_model->selectMultiData('tbl_album_image','album_id','album_image_sequence',$album_id,$details['album_image_sequence']);
						if(isset($AlbumImageUnique) && !empty($AlbumImageUnique))
						{
							$albumImage_id=$details['album_image_id'];
							$tblAlbumImage_id= $AlbumImageUnique[0]->album_image_id;
							if($tblAlbumImage_id==$albumImage_id)
							{ 									
		                    	$album_image_id= $this->standard_model->single_insert('tbl_album_image',$album_image);
		      	 				$album_image['album_image_id']=$album_image_id;
		      					$album_image= $this->encryptArray($album_image);        		
		            			return array(
		                    	    			'state'=>true,
		                    	    			'msg'=>'Gallery Images Updated!',
		                    	    			'details'=>$album_image
		                    	    			 );
		            		}
		            		else
		            		{
		            			return array(
	                    	   			'state'=>false,
	                    	   			'msg'=>'This Sequence Number is Already Assigned To Another Image in This Album.'
	                    	   		);
		            		}
            			}
            			else
            			{
            				$album_image_id= $this->standard_model->single_insert('tbl_album_image',$album_image);
		      	 				$album_image['album_image_id']=$album_image_id;
		      					$album_image= $this->encryptArray($album_image);        		
		            			return array(
		                    	    			'state'=>true,
		                    	    			'msg'=>'Gallery Images Updated!',
		                    	    			'details'=>$album_image
		                    	    			 );
            			}
            		}      
				}
				else
				{
					return array(
                    	   			'state'=>false,
                    	   			'msg'=>'Invalid Album Id! album_id is not present!',
                    	   			'details'=>false
                    	   		);
				}
		  		  			      	 
      		}
      	 	else
        	{
            	return array(
            			'state'=>False,
            			'msg'=>'Album Image Failed to Save!',
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
    Author: SNEHAL KULKARNI               Date: 12 May 2020
    -----------------------------------------------------------------------------------
	Purpose: Validations for Album Image
	*/
	public function validationAlbumimageDetails($details,$flag)
	{
		$this->form_validation->set_error_delimiters('','');
		$this->form_validation->set_data(
        array(
        	'album_image_id'=>isset($details['album_image_id']) ? $details['album_image_id'] :'',
        	'album_id'=>isset($details['album_id']) ? $details['album_id'] :'',
        	'album_image_description'=>isset($details['album_image_description']) ? $details['album_image_description'] :'',
         	'album_image_path'=>isset($details['album_image_path']) ? $details['album_image_path'] :'',
         	'album_image_sequence'=>isset($details['album_image_sequence']) ? $details['album_image_sequence'] :''
		));
        $this->form_validation->set_rules('album_image_id','album_image_id', array('min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
		array(
       			'min_length'=>'album_image_id Min 1 Number Required.',
				'max_length'=>'album_image _id Max 10 Number allowed.',
				'regex_match'=>'album_image_id Should Have Only Numbers'
             ));
        $this->form_validation->set_rules('album_id','album_id',array('required','max_length[10]',"regex_match[/^[0-9]*$/]"),
		array(
				'required'=>'album_id is Required',
				'max_length'=>'In album_id Field Maximum 10 Characters are Allowed.',
				'regex_match'=>'album_id Should Have Only Numbers'
			  ));
   //      if($flag==0)
   //      {
   //      	$this->form_validation->set_rules('album_image_description','album_image_description',array('required','min_length[1]','max_length[99]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,49}$/]",'is_unique[tbl_album_image.album_image_description]'),
			// array(
		 //  	  'required'=>'Album Image Description is Required',
		 //  	  'min_length'=>'Album Image Description Min 2 Characters Required.',
		 //  	  'max_length'=>'In Album Image Description Field Maximum 100 Characters are Allowed.',
		 //  	  'regex_match'=>'Album Image Description is Not Valid',
		 //  	  'is_unique' =>'Duplicate Record.'
		 //  	));
   //      }
   //  	elseif($flag==1)
   //  	{
   //  		$this->form_validation->set_rules('album_image_description','album_image_description',array('required','min_length[1]','max_length[99]',"regex_match[/^[A-Za-z][-@.\/#&,':;()<>_+\w\s]{1,49}$/]"),
			// array(
		 //  	  'required'=>'Album Image Description is Required',
		 //  	  'min_length'=>'Album Image Description Min 2 Characters Required.',
		 //  	  'max_length'=>'In Album Image Description Field Maximum 100 Characters are Allowed.',
		 //  	  'regex_match'=>'Album Image Description is Not Valid'
		 //  	));
   //  	} 
    	$this->form_validation->set_rules('album_image_sequence','album_image_sequence',array('required','min_length[1]','max_length[10]',"regex_match[/^[0-9]*$/]"),
			array(
				'required'=>'Album Image Sequence Required',
				'min_length'=>'Album Image Sequence Min 1 Number Required.',
				'max_length'=>'Album Image Sequence Max 10 Number allowed.',
				'regex_match'=>'Album Image Sequence Should Have Only Numbers.'
			  ));
	    $this->form_validation->set_rules('album_image_path','album_image_path','required',
	    array(
			'required'=>'Image is Required'
		));		       
        $this->form_validation->set_rules('album_image_path','album_image_path',array('required',"regex_match[/^[^\?]+\.(?i)(jpg|jpeg|gif|png|bmp|tiff|psd|pdf|eps|al|indd|raw)(?:\?|$)/]"),
		array(
		  	  'required'=>' Image is Required.',
		  	  'regex_match'=>' Image  is not valid.'
		  	));
        // return true;
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
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Get Album Image Details
    parameter:none,all,album_image_id
	Response:return array(
                  			{
							    "msg": "Record Found!",
							    "state": true,
							    "details": [
							        {
							            "album_image_id": "518Yn",
							            "album_id": "7yPXy",
							            "album_image_path": "image.tex",
							            "album_image_description": "Gautam Buddha Image in Aurangabad Center.",
							            "album_image_path": "1",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-12 18:00:53",
							            "modified_by": "1",
							            "modified_on": "2020-05-12 18:00:53",
							            "display": "Y",
							            "in_use": "Y",
							            "album_name": "Vipassana Aurangabad center",
							            "sequence": "1",
							            "album_cover_photo": "Gautam_Buddha.png"
							        }
							    ]
							}
						);
	*/

	public function _get_album_image($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['album_image_id']))
        {
        	$id=$details['album_image_id'];
        	//$results = $this->standard_model->selectAllWhr('tbl_album_image','album_image_id',$id);
        	$results=$this->standard_model->alljoin2tbl_whr('tbl_album_image','tbl_album','album_id','album_id',$id);
        }
        else if(isset($details['all']))
        {
        	//$results = $this->standard_model->selectAll('tbl_album_image');
        	$results=$this->standard_model->selectAllJoin('tbl_album_image','tbl_album','album_id');
        }
        else 
        {
	    	//$results = $this->standard_model->selectAll('tbl_album_image','in_use','Y');
	    	$results=$this->standard_model->selectAllJoin('tbl_album_image','tbl_album','album_id','in_use','Y');      
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
            if(isset($details['album_image_id'])) 
        	{
             return array(
                  'msg'=>'Record not Found!',
                  'state'=>false,
                  'details'=>$details['album_image_id']
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
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Hide Album Image Details
    parameter:album_image_id
	Response:return array(
		         			{
							    "state": true,
							    "msg": "Album Image Hidden!",
							    "details": [
							        {
							            "album_image_id": "2nWpd",
							            "album_id": "2nWpd",
							            "album_image_path": "image.tex",
							            "album_image_description": "good hd image",
							            "album_image_path": "1",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-12 15:20:45",
							            "modified_by": "1",
							            "modified_on": "2020-05-12 18:11:45",
							            "display": "Y",
							            "in_use": "N"
							        }
							    ]
							}
		         			);
	*/
	public function _hide_album_image($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['album_image_id']))
		{
			$id=$details['album_image_id'];
			$album_image=array(
							'in_use'=>'N',
						  );
			$results = $this->standard_model->updateRecord('tbl_album_image','album_image_id',$id,$album_image);
			$resdata = $this->standard_model->selectAllWhr('tbl_album_image','album_image_id',$details['album_image_id']);
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
		                 	 'msg'=>'Gallery Image Hidden!',
		                 	 'details'=>$result
						    );
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Hide album_image!';
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
			'msg'=>'album_image_id Required!',
			);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Restored Album Image Details
    parameter:album_image_id
	Response:return array(
		         			{
							    "state": true,
							    "msg": "Album Image Restored!",
							    "details": [
							        {
							            "album_image_id": "2nWpd",
							            "album_id": "2nWpd",
							            "album_image_path": "image.tex",
							            "album_image_description": "good hd image",
							            "album_image_path": "1",
							            "inserted_by": "1",
							            "inserted_on": "2020-05-12 15:20:45",
							            "modified_by": "1",
							            "modified_on": "2020-05-12 18:13:01",
							            "display": "Y",
							            "in_use": "Y"
							        }
							    ]
							}
		         			);
	*/
	public function _restore_album_image($details=array())
	{
		$details = $this->decryptArray($details);
		if(isset($details['album_image_id']))
		{
			$id=$details['album_image_id'];
			$album_image=array(
							'in_use'=>'Y',
							);
			$results = $this->standard_model->updateRecord('tbl_album_image','album_image_id',$id,$album_image);
			$resdata = $this->standard_model->selectAllWhr('tbl_album_image','album_image_id',$details['album_image_id']);
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
		                 		 'msg'=>'Gallery Image Restored!',
		                 		 'details'=>$result
								);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Restore Album Image';
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
						'msg'=>'album_image_id Required!',
						);
		}
	}

	/*
    -----------------------------------------------------------------------------------
    Author: SNEHAL KULKARNI             Date: 12 May 2020
    -----------------------------------------------------------------------------------
    Purpose: Delete Album Image Details
    parameter:album_image_id
	Response: return array(
							{
							    "state": true,
							    "msg": "Album Image Deleted!",
							    "details": {
							        "album_image_id": "2nWpd"
							    }
							}
							);
	*/
	public function _delete_album_image($details=array())
	{  
		$details = $this->decryptArray($details);
		if(isset($details['album_image_id']))
		{    
			$id=$details['album_image_id'];
		    $album_image=array(
							'display'=>'N',
							);
			$results = $this->standard_model->updateRecord('tbl_album_image','album_image_id',$id,$album_image);
			if($results)
			{
				$results = $this->encryptArray($details);
				return array(
							'state'=>true,
							'msg'=>'Gallery Image Deleted!',
							'details'=>$results
							);
			}
			else
			{
				$message=isset($this->standard_model->error )? $this->standard_model->error['message']:'Unable to Delete album_image!';
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
			'msg'=>'album_image_id Required!',
			);
		}
	}
}