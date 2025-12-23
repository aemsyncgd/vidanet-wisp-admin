<?php

define('APP_URL', 'http://localhost/phpmixbill');
$_app_stage = 'Live';

// Database PHPNuxBill
$db_host	    = 'localhost';
$db_user        = 'phpmixbill';
$db_password	= '';
$db_name	    = 'phpmixbill';

// Database Radius
$radius_host	    = 'localhost';
$radius_user        = 'phpmixbill';
$radius_pass    	= '';
$radius_name	    = 'phpmixbill';

if($_app_stage!='Live'){
    error_reporting(E_ERROR);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
}else{
    error_reporting(E_ERROR);
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
}
