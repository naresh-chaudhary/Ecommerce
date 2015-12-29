<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (notifications)</title>
		<meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
		
		<link rel="shortcut icon" href="favicon.ico" />
		
		<!-- bootstrap framework -->
		<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		
		<!-- custom icons -->
			<!-- font awesome icons -->
			<link href="assets/icons/font-awesome/css/font-awesome.min.css" rel="stylesheet" media="screen">
			<!-- ionicons -->	
			<link href="assets/icons/ionicons/css/ionicons.min.css" rel="stylesheet" media="screen">
			<!-- flags -->
			<link rel="stylesheet" href="assets/icons/flags/flags.css">
				
		
		<!-- main stylesheet -->
		<link href="assets/css/style.css" rel="stylesheet" media="screen">
		
		<!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		
		<!-- moment.js (date library) -->
		<script src="assets/lib/moment-js/moment.min.js"></script>
		
    </head>
    <body>
		<!-- top bar -->
		<?php include('header.php');?>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-heading">Notifications</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-3 col-md-2"><button class="noty_btn btn btn-default btn-sm" data-noty-message="Alert notification" data-noty-layout="topRight" data-noty-type="alert">Alert</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn btn btn-success btn-sm" data-noty-message="Success notification" data-noty-layout="topRight" data-noty-type="success">Success</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn btn btn-danger btn-sm" data-noty-message="Error notification" data-noty-layout="topRight" data-noty-type="error">Error</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn btn btn-warning btn-sm" data-noty-message="Warning notification" data-noty-layout="topRight" data-noty-type="warning">Warning</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn btn btn-info btn-sm" data-noty-message="Info notification" data-noty-layout="topRight" data-noty-type="information">Info</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_confirm btn btn-default btn-sm" data-noty-message="Confirm notification" data-noty-layout="topCenter" data-noty-type="confirm">Confirm</button></div>
									</div>
									<div class="heading_a">Notifications position</div>
									<div class="row">
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: topLeft" data-noty-layout="topLeft" data-noty-type="alert">Top Left</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: topCenter" data-noty-layout="topCenter" data-noty-type="alert">Top Center</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: topRight" data-noty-layout="topRight" data-noty-type="alert">Top Right</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: centerLeft" data-noty-layout="centerLeft" data-noty-type="alert">Center Left</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: center" data-noty-layout="center" data-noty-type="alert">Center</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: centerRight" data-noty-layout="centerRight" data-noty-type="alert">Center Right</button></div>
									</div>
									<div class="row">
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: bottomLeft" data-noty-layout="bottomLeft" data-noty-type="alert">Bottom Left</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: bottomCenter" data-noty-layout="bottomCenter" data-noty-type="alert">Bottom Center</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-default btn-sm" data-noty-message="Notification position: bottomRight" data-noty-layout="bottomRight" data-noty-type="alert">Bottom Right</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-danger btn-sm" data-noty-message="Notification position: top" data-noty-layout="top" data-noty-type="error">Top</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_pos btn btn-success btn-sm" data-noty-message="Notification position: bottom" data-noty-layout="bottom" data-noty-type="success">Botttom</button></div>
									</div>
									<div class="heading_a">Custom container</div>
									<div class="row sepH_c">
										<div class="col-sm-3 col-md-2"><button class="noty_btn_inline btn btn-default btn-sm" data-noty-type="alert">Alert</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_inline btn btn-success btn-sm" data-noty-type="success">Success</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_inline btn btn-danger btn-sm" data-noty-type="error">Error</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_inline btn btn-warning btn-sm" data-noty-type="warning">Warning</button></div>
										<div class="col-sm-3 col-md-2"><button class="noty_btn_inline btn btn-info btn-sm" data-noty-type="information">Info</button></div>
									</div>
									<div id="inline_container"></div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">iOS-style overlays/notifications</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-4 col-md-3"><button class="ios_btn_spinner btn btn-default btn-sm">Loading Spinner</button></div>
										<div class="col-sm-4 col-md-3"><button class="ios_btn_success btn btn-default btn-sm">Success</button></div>
										<div class="col-sm-4 col-md-3"><button class="ios_btn_error btn btn-default btn-sm">Error</button></div>
										<div class="col-sm-4 col-md-3"><button class="ios_btn_loading btn btn-default btn-sm">Loading then Success</button></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>

		<!-- side navigation -->
		<?php
		include('sidenav.php');
		include('slidebar.php'); 
		?>

		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		<!-- easing -->
		<script src="assets/js/jquery.easing.1.3.min.js"></script>
		<!-- bootstrap js plugins -->
		<script src="assets/bootstrap/js/bootstrap.min.js"></script>
		<!-- top dropdown navigation -->
		<script src="assets/js/tinynav.js"></script>
		<!-- perfect scrollbar -->
		<script src="assets/lib/perfect-scrollbar/min/perfect-scrollbar-0.4.8.with-mousewheel.min.js"></script>
		
		<!-- common functions -->
		<script src="assets/js/tisa_common.js"></script>
		
		<!-- style switcher -->
		<script src="assets/js/tisa_style_switcher.js"></script>
		
	<!-- page specific plugins -->

		<!-- noty notifications -->
		<script src="assets/lib/noty/js/noty/packaged/jquery.noty.packaged.js"></script>
		<!-- iOS-style overlays/notifications -->
		<script src="assets/lib/iOS-Overlay/js/iosOverlay.js"></script>
		
		<!-- notifications functions -->
		<script src="assets/js/apps/tisa_notifications.js"></script>
		
    </body>
</html>
