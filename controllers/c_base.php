<?php

class base_controller {
	
	
	public $template;
	public $email_template;
	

	/*-------------------------------------------------------------------------------------------------

	-------------------------------------------------------------------------------------------------*/
	public function __construct() {
						
				
						
		# Set up templates
			$this->template 	  = View::instance('_v_template');
			$this->email_template = View::instance('_v_email');			
								
		
			
	}
	
	
	
} # eoc
  
  