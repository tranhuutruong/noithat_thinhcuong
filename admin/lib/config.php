<?php if(!defined('_lib')) die("Error");

	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	$config_url=$_SERVER["SERVER_NAME"].':82/noithat_thinhcuong';	
	
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'noithat_thinhcuong';
	$config['database']['refix'] = 'table_';
	
	$ip_host = '127.0.0.1';
	$mail_host = 'contact@demo40.ninavietnam.org';
	$pass_mail = '1234qwer!@#$';

	$config['lang']=array(''=>'Nội dung');#Danh sách ngôn ngữ hỗ trợ
	
	$config['author']['name'] = '';
	$config['author']['email'] = '';
	$config['author']['timefinish'] = '';
	
	date_default_timezone_set('Asia/Ho_Chi_Minh');

?>