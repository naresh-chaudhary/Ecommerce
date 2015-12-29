<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (modals_lightbox)</title>
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
				
	
	<!-- page specific stylesheets -->

		<!-- magnific popup -->
		<link rel="stylesheet" href="assets/lib/magnific-popup/magnific-popup.css">
				
		<!-- main stylesheet -->
		<link href="assets/css/style.css" rel="stylesheet" media="screen">
		
		<!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		
		<!-- moment.js (date library) -->
		<script src="assets/lib/moment-js/moment.min.js"></script>
		
    </head>
    <body>
		<!-- top bar -->
		<header class="navbar navbar-fixed-top" role="banner">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="dashboard.html" class="navbar-brand"><img src="assets/img/blank.gif" alt="Logo"></a>
				</div>
				<ul class="top_links">
					<li>
						<a href="tasks_summary.html"><span>23</span>Tasks</a>
					</li>
					<li>
						<a href="mail_inbox.html"><span>8</span>Mails</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="lang_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="flag-US"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="user_profile.html"><span class="flag-FR"></span> France</a></li>
							<li><a href="mail_inbox.html"><span class="flag-IN"></span> India</a></li>
							<li><a href="tasks_summary.html"><span class="flag-BR"></span> Brasil</a></li>
							<li><a href="tasks_summary.html"><span class="flag-GB"></span> UK</a></li>
						</ul>
					</li>
					<li class="user_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="user_profile.html">Profile</a></li>
							<li><a href="mail_inbox.html">My messages</a></li>
							<li><a href="tasks_summary.html">My tasks</a></li>
							<li class="divider"></li>
							<li><a href="login_page.html">Log Out</a></li>
						</ul>
					</li>
					<li><a href="javascript:void(0)" class="slidebar-toggle"><span class="navbar_el_icon ion-navicon-round"></span></a></li>
				</ul>
			</div>
		</header>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">Bootstrap Modals</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-4">
											<button class="btn btn-default" data-toggle="modal" data-target="#bs_modal_large">Large modal</button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-default" data-toggle="modal" data-target="#bs_modal_regular">Regular modal</button>
										</div>
										<div class="col-sm-4">
											<button class="btn btn-default btn-sm" data-toggle="modal" data-target="#bs_modal_small">Small modal</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">Bootbox</div>
								<div class="panel-body">
									<div class="row">
										<div class="col-sm-3"><button class="bootbox_alert btn btn-default btm-sm" type="button">Alert</button></div>
										<div class="col-sm-3"><button class="bootbox_confirm btn btn-default btm-sm" type="button">Confirm</button></div>
										<div class="col-sm-3"><button class="bootbox_prompt btn btn-default btm-sm" type="button">Prompt</button></div>
										<div class="col-sm-3"><button class="bootbox_custom_html btn btn-default btm-sm" type="button">Custom HTML</button></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">Magnific</div>
								<div class="panel-body">
									<div class="sepH_c">
										<div class="heading_a">Single image</div>
										<a class="mf_single_img" href="assets/img/gallery/Image011.jpg"><img class="img-thumbnail" src="assets/img/gallery/Image011_tn.jpg" alt=""></a>
									</div>
									<div class="sepH_c">
										<div class="heading_a">Gallery</div>
										<div class="mf_gallery">
											<a class="gallery_item" href="assets/img/gallery/Image014.jpg"><img class="img-thumbnail" src="assets/img/gallery/Image014_tn.jpg" alt=""></a>
											<a class="gallery_item" href="assets/img/gallery/Image015.jpg"><img class="img-thumbnail" src="assets/img/gallery/Image015_tn.jpg" alt=""></a>
											<a class="gallery_item" href="assets/img/gallery/Image005.jpg"><img class="img-thumbnail" src="assets/img/gallery/Image005_tn.jpg" alt=""></a>
											<a class="gallery_item" href="assets/img/gallery/Image007.jpg"><img class="img-thumbnail" src="assets/img/gallery/Image007_tn.jpg" alt=""></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="bs_modal_large">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h2>Large modal</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam earum at inventore voluptatem molestiae aspernatur quibusdam magni sapiente sint fugit beatae recusandae consectetur! Aperiam unde odit placeat voluptas assumenda ea.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="bs_modal_regular">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3>Regular modal</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam earum at inventore voluptatem molestiae aspernatur quibusdam magni sapiente sint fugit beatae recusandae consectetur! Aperiam unde odit placeat voluptas assumenda ea.</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="modal fade" id="bs_modal_small">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4>Small modal</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam earum at inventore voluptatem molestiae aspernatur quibusdam magni sapiente sint fugit beatae recusandae consectetur! Aperiam unde odit placeat voluptas assumenda ea.</p>
						</div>
					</div>
				</div>
			</div>
		
		</div>

		<!-- side navigation -->
		<?php include('sidenav.php');?>
		<!-- right slidebar -->
		<?php include('slidebar.php');?>

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

		<!-- bootbox -->
		<script src="assets/lib/bootbox/bootbox.js"></script>
		<!-- noty notifications -->
		<script src="assets/lib/noty/js/noty/packaged/jquery.noty.packaged.js"></script>
		<!-- magnific popup -->
		<script src="assets/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- modals, lightbox functions -->
		<script src="assets/js/apps/tisa_modals.js"></script>
		
    </body>
</html>
