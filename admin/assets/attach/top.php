<?php
// Connection File
require_once("assets/config/config.php");
require_once("assets/config/queries.php");
// require_once("assets/config/validation.php");
// require_once("assets/config/sendemail.php");
session_start();
ob_start();
//Domain
$domain = "cryptoinject.com";
// Show Errors
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Cryptoinject</title>
	<meta name="description" content="" />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms" />
	<meta name="author" content="IDC"/>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Data table CSS -->
	<link href="../vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
	
	<!-- Toast CSS -->
	<link href="../vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	
	<!-- Custom CSS -->
	<link href="dist/css/style.css" rel="stylesheet" type="text/css">