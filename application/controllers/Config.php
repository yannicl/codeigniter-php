<?php
require(APPPATH.'/libraries/REST_Controller.php');

class Config extends REST_Controller {
	
	public function config_get() {
		
		$vcap_services = getenv("VCAP_SERVICES");
		$vcap_services_json = json_decode($vcap_services,true);
		
		$vcap_mysql_config = $vcap_services_json["cleardb"][0]["credentials"];
		$vcap_db = $vcap_mysql_config["name"];
		$vcap_host = $vcap_mysql_config["hostname"];
		$vcap_port = $vcap_mysql_config["port"];
		$vcap_username = $vcap_mysql_config["username"];
		$vcap_password = $vcap_mysql_config["password"];
		
		unset($vcap_mysql_config['password']);

		$this->response($vcap_mysql_config);
		
	}
	
}