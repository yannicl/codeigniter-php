<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * SendGrid Setup
 */
$vcap_services = getenv("VCAP_SERVICES");
$vcap_services_json = json_decode($vcap_services,true);
$vcap_sendgrid_config = $vcap_services_json["sendgrid"][0]["credentials"];
$vcap_host = $vcap_sendgrid_config["hostname"];
$vcap_username = $vcap_sendgrid_config["username"];
$vcap_password = $vcap_sendgrid_config["password"];

$config['protocol'] = 'smtp';
$config['smtp_port'] = '587';
$config['smtp_host'] = $vcap_host;
$config['smtp_user'] = $vcap_username;
$config['smtp_pass'] = $vcap_password;


?>