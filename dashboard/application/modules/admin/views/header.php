<?php 
    $sesiondata=$this->session->all_userdata();
   
   ?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.wowthemes.net/demo/calypso/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jul 2015 14:28:14 GMT -->
<head>
<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Event</title>
<!-- Style <?php echo base_url(); ?>/assets/ -->
 <script src="<?php echo base_url(); ?>/assets/bower_components/jquery/jquery.min.js"></script>

<link id="bs-css"  href="<?php echo base_url(); ?>/assets/css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/assets/css/charisma-app.css" rel="stylesheet">
  <link href='<?php echo base_url(); ?>/assets/css/jquery.noty.css' rel='stylesheet'>
    
    <link href='<?php echo base_url(); ?>/assets/css/bootstrap-darkly.min.css' rel='stylesheet'>
    
    <!-- jQuery -->
   
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">


</head>
<body>

    <div class="navbar navbar-default" role="navigation">

        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html"> 
                <span style="    margin-top: -10px;sss">SmartShop Dashboard</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> admin</span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="<?php echo base_url('admin/logout'); ?>">Logout</a></li>
                </ul>
            </div>
            <!-- user dropdown ends -->

            <!-- theme selector starts -->
           
            <!-- theme selector ends -->

        

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/showAdminuser"><i class="glyphicon glyphicon-user"></i><span> Admin Users</span></a>
                        </li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/showMerchant"><i class="glyphicon glyphicon-user"></i><span> Merchants</span></a>
                        </li>
                         <li><a class="ajax-link" href="<?php echo base_url(); ?>admin/showCustomer"><i class="glyphicon glyphicon-user"></i><span> Customers</span></a>
                        </li>
                       </ul>
                   
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->