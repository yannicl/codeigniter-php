<?php
require(APPPATH.'/libraries/REST_Controller.php');

class Email extends REST_Controller {
	
	public function config_get() {
		
		$vcap_services = getenv("VCAP_SERVICES");
		$vcap_services_json = json_decode($vcap_services,true);
		
		$vcap_sendgrid_config = $vcap_services_json["sendgrid"][0]["credentials"];
		$vcap_host = $vcap_sendgrid_config["hostname"];
		$vcap_username = $vcap_sendgrid_config["username"];
		$vcap_password = $vcap_sendgrid_config["password"];
		
		unset($vcap_sendgrid_config['password']);

		$this->response($vcap_sendgrid_config);
		
	}
	
	public function send_get() {
	
		$this->load->library('email');
		$this->email->from('yannic.luyckx@gmail.com');
		$this->email->to('yannic.luyckx@gmail.com');
		$this->email->subject('Test from CodeIgniter using SendGrid');
		$this->email->message('Hello World');
		$this->email->send();
			
		$this->response(array('status'=>'OK'));
	
	}
	
}