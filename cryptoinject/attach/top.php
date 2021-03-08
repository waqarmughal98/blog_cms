<?php
// Connection File
require_once("../admin/assets/config/config.php");
require_once("../admin/assets/config/queries.php");
// require_once("assets/config/validation.php");
// require_once("assets/config/sendemail.php");
session_start();
ob_start();
$queries = new Queries;
//Domain
$domain = "cryptoinject.com";
// Show Errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--<![endif]-->
<!-- Begin Head -->

<head>
    <title>Cryptoinject</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="Blog">
    <meta name="keywords" content="">
    <meta name="author" content="kamleshyadav">
    <meta name="MobileOptimized" content="320">
    <!--Start Style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/swiper/swiper.css">
    <link rel="stylesheet" type="text/css" href="js/plugins/magnific/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon Link -->
    <link rel="shortcut icon" type="image/png" href="/images/favicon.png">