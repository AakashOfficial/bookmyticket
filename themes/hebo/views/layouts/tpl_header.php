<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
    
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    	<meta name="application-name" content="Book My Ticket">
		<meta name="author" content="KD - kunaldethe.in">
		<meta name="description" content="Online Ticket Booking System">
		<meta name="generator" content="">
		<meta name="keywords" content="">
	    
		<?php
		  $baseUrl = Yii::app()->theme->baseUrl; 
		  $cs = Yii::app()->getClientScript();
		  Yii::app()->clientScript->registerCoreScript('jquery');
		?>
	
		<!-- Custom Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl;?>/css/form.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl;?>/css/custom_column.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl;?>/css/custom_pager.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl;?>/css/custom_job.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl;?>/css/custom_emp_list.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $baseUrl;?>/css/jquery.mCustomScrollbar.css" />

		<!-- the styles -->
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/bootstrap-responsive.min.css">
		<!-- link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Pontano+Sans' -->
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/themes/default/default.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/nivo-slider/nivo-slider.css" >
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/js/lightbox/css/lightbox.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/template.css">   
		<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/css/style1.css" />
		<link rel="alternate stylesheet" type="text/css" media="screen" title="style2" href="<?php echo $baseUrl;?>/css/style2.css" />
		<link rel="alternate stylesheet" type="text/css" media="screen" title="style3" href="<?php echo $baseUrl;?>/css/style3.css" />
		<link rel="alternate stylesheet" type="text/css" media="screen" title="style4" href="<?php echo $baseUrl;?>/css/style4.css" />
		<link rel="alternate stylesheet" type="text/css" media="screen" title="style5" href="<?php echo $baseUrl;?>/css/style5.css" />
		<link rel="alternate stylesheet" type="text/css" media="screen" title="style6" href="<?php echo $baseUrl;?>/css/style6.css" />
	    
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/swfobject/swfobject.js"></script>
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/lightbox/js/lightbox.js"></script>

		<!-- style switcher -->
		<script type="text/javascript" src="<?php echo $baseUrl;?>/js/styleswitcher.js"></script>

		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- The fav and touch icons -->
		<link rel="shortcut icon" href="<?php echo $baseUrl;?>/img/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl;?>/img/ico/apple-touch-icon-57-precomposed.png">
	</head>

<body>

	<div id="header">
	<!-- Include the header bar -->
		<?php include_once('header.php');?>
	<!-- /.container -->  
	</div><!-- /#header -->
