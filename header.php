<?php
//include important stuff...
include 'stats_web_core/classes.php';

$stats_global = new stats_global();
$bonus_methods = new bonus_methods();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>Minecraft WEBStatsX</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="New Webfrontend for Bukkit Stats, powered by charisma">
	
	<!-- The styles -->
	<link id="bs-css" href="css/bootstrap-spacelab.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="css/bootstrap-responsive.css" rel="stylesheet">
  <link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/charisma-app.css" rel="stylesheet">
	<link href="css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='css/chosen.css' rel='stylesheet'>
	<link href='css/uniform.default.css' rel='stylesheet'>
	<link href='css/colorbox.css' rel='stylesheet'>
	<link href='css/jquery.noty.css' rel='stylesheet'>
	<link href='css/noty_theme_default.css' rel='stylesheet'>
	<!--<link href='css/jquery.iphone.toggle.css' rel='stylesheet'>-->
	<link href='css/opa-icons.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">
		
</head>

<body>
	<?php if(!isset($no_visible_elements) || !$no_visible_elements)	{ ?>
	<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<!--<a class="brand" href="index.php"> <img alt="Charisma Logo" src="img/logo20.png" /> <span>Charisma</span></a>-->
				<a class="brand" href="#"><span>WEBStatsX</span></a>

				<!-- user dropdown starts -->
				<div class="btn-group pull-right">
					<a data-rel="tooltip" title="Server: <?php echo $bonus_methods->server_ip; ?>" class="btn" href="#">
						<i class="icon-hdd"></i> Server status:
						<?php
						$state = $bonus_methods->check_server();
						if(empty($state)){
							echo '<span class="label">unknown</span>';
						} elseif($state === true) {
							echo '<span class="label label-success">Online</span>';
						} else {
							echo '<span class="label label-error">Offline</span>';
						}
						?>
					</a>
				</div>
				<!-- user dropdown ends -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
	<?php } ?>
	<div class="container-fluid">
		<div class="row-fluid">
		<?php if(!isset($no_visible_elements) || !$no_visible_elements) { ?>
		
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href="players.php"><i class="icon-user"></i><span class="hidden-tablet"> Players</span></a></li>
						<li><a class="ajax-link" href="server.php"><i class="icon-hdd"></i><span class="hidden-tablet"> Server</span></a></li> 
            <li><a class="ajax-link" href="map.php"><i class="icon-map-marker"></i><span class="hidden-tablet"> Map</span></a></li>
            
						<?php echo $bonus_methods -> get_custom_links() ?> 

						<li class="nav-header hidden-tablet">More to come :D</li>
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->

			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			<?php } ?>