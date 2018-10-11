<?php 
include('isols-admin/function.php'); 
//error_reporting(0);
include('connection.php');
session_start();
ob_start();
require_once('class.phpmailer.php');
require_once('class.smtp.php');
$date=date('d-M-Y');
date_default_timezone_set("Asia/Calcutta");
$current_date = date('d-M-Y H:i:s');
 
// Code for Canonical URL
$page_url="http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

// page Title
$whatIWant = substr($page_url, strpos($page_url, "=") + 1);
$page_title=ucwords(remove_hyphen($whatIWant));

// UTM Source
$string=remove_hyphen($_SERVER['PHP_SELF']);
$utm_source1=str_replace('php', '', $string);
$nav_source= ucwords(trim(str_replace(' ', '', $utm_source1)));

$_SESSION['page_url']=$page_url;	
?>
