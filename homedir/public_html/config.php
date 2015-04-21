<?php

$livemode=true;

if($livemode){
	//For Live
	define('HOST',"localhost");
	define('USER',"vaishnav_samuser");
	define('PASS',"=IU&c4emRcM2");
	define('DATABASE',"vaishnav_samiti_db");
	define('SITEURL',"http://vaishnavsamiti.com/");
	define('ADMIN',"http://vaishnavsamiti.com/admin/");
}else{
	//For Local
	define('HOST',"localhost");
	define('USER',"root");
	define('PASS',"");
	define('DATABASE',"vaishnavsamaj_db");
	define('SITEURL',"http://localhost/vaishnavsamaj/");
	define('ADMIN',"http://localhost/vaishnavsamaj/admin/");
}

?>
