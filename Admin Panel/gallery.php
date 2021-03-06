<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (gallery)</title>
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
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="row sepH_b" id="galery_grid_toolbar" style="display:none">
									<div class="col-sm-4">
										<div class="btn-toolbar" role="toolbar">
											<div class="input-group">
												<select name="item_actions" id="item_actions" class="form-control input-sm">
													<option value="">Bulk Actions</option>
													<option value="1">Edit</option>
													<option value="2">Move to Trash</option>
												</select>
											</div>
											<div class="btn-group">
												<button class="btn btn-default btn-sm">Apply</button>
											</div>
										</div>
									</div>
									<div class="col-sm-8 text-right">
										<div id="gallery_grid_filters">
											<button class="btn btn-info btn-sm">All Images</button>
											<button class="btn btn-default btn-sm" data-filter=".filter_1">Filter 1</button>
											<button class="btn btn-default btn-sm" data-filter=".filter_2">Filter 2</button>
											<button class="btn btn-default btn-sm" data-filter=".filter_3">Filter 3</button>
											<button class="btn btn-default btn-sm" data-filter=".filter_4">Filter 4</button>
										</div>
									</div>
								</div>
								<div id="gallery_grid" class="freewall_container clearfix">
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image001_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Quisquam.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image001.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_2">
										<img src="assets/img/gallery/Image002_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Totam.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image002.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_4 item_selected">
										<img src="assets/img/gallery/Image003_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-check-square-o"></i></span>
											<h4>Nihil.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image003.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image004_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Asperiores.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image004.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image005_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Suscipit.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image005.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image006_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Et.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image006.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_4">
										<img src="assets/img/gallery/Image007_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Incidunt.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image007.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_4">
										<img src="assets/img/gallery/Image008_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Deserunt quidem.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image008.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_2">
										<img src="assets/img/gallery/Image009_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Earum incidunt.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image009.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image010_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Est consectetur.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image010.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_2">
										<img src="assets/img/gallery/Image011_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Rerum.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image011.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_4">
										<img src="assets/img/gallery/Image012_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Et.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image012.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_2">
										<img src="assets/img/gallery/Image013_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Fuga.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image013.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image014_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Qui.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image014.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_4">
										<img src="assets/img/gallery/Image015_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Enim.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image015.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image016_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Est ducimus.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image016.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_3">
										<img src="assets/img/gallery/Image017_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Eos ea.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image017.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_1">
										<img src="assets/img/gallery/Image018_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Voluptatum.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image018.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_2">
										<img src="assets/img/gallery/Image019_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Veniam.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image019.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
									<div class="freewall_item filter_2">
										<img src="assets/img/gallery/Image020_tn.jpg" alt="">
										<div class="item_overlay">
											<span class="item_select"><i class="fa  fa-square-o"></i></span>
											<h4>Laborum quia.jpg</h4>
											<a href="#" class="item_edit"><i class="fa fa-pencil-square-o"></i></a>
											<a href="assets/img/gallery/Image020.jpg" class="item_preview"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>

		<!-- side navigation -->
		<nav id="side_nav">
			<ul>
				<li>
					<a href="dashboard.html"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
				</li>
				<li>
					<a href="#">
						<span class="label label-danger">32</span>
						<span class="ion-clipboard"></span>
						<span class="nav_title">Todo</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">Folders</h4>
							<ul>
								<li><a href="tasks_summary.html"><span class="side_icon ion-ios7-folder-outline"></span><span class="badge badge-primary">7</span> Summary</a></li>
								<li><a href="tasks_starred.html"><span class="side_icon ion-ios7-star-outline"></span> Starred</a></li>
								<li><a href="tasks_today.html"><span class="side_icon ion-ios7-calendar-outline"></span> Today</a></li>
							</ul>
							<h4 class="panel_heading">Labels</h4>
							<ul>
								<li class="add_label">
									<a href="tasks_label.html">Work</a>
									<div class="ts_label">
										<span class="color_a"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.html">Family</a>
									<div class="ts_label">
										<span class="color_b"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.html">Business</a>
									<div class="ts_label">
										<span class="color_c"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.html">Envato</a>
									<div class="ts_label">
										<span class="color_d"></span>
									</div>
								</li>
							</ul>
							<div class="panel_section">
								<button class="btn btn-primary">Add task</button>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-paper-airplane"></span>
						<span class="nav_title">Newsletter</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="newsletter_campaigns.html">Campaigns</a></li>
								<li><a href="newsletter_report.html">Reports</a></li>
								<li><a href="newsletter_templates.html">Templates</a></li>
							</ul>
							<h4 class="panel_heading">Latest Campaigns</h4>
							<ul>
								<li><a href="newsletter_report.html">Stanton LLC</a></li>
								<li><a href="newsletter_report.html">Veum Group</a></li>
								<li><a href="newsletter_report.html">Langosh Inc</a></li>
							</ul>
							<div class="panel_section">
								<button class="btn btn-success btn-sm">New Campaign</button>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-bag"></span>
						<span class="nav_title">Ecommerce</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="ecommerce_sales_report.html">Sales Report</a></li>
								<li><a href="ecommerce_products_list.html">Products List</a></li>
								<li><a href="ecommerce_product_edit.html">Product Edit</a></li>
							</ul>
							<h4 class="panel_heading">Top Products</h4>
							<ul>
								<li><a href="ecommerce_product_edit.html"><span class="badge badge-success">$2 344.00</span> Product A</a></li>
								<li><a href="ecommerce_product_edit.html"><span class="badge badge-default">$1 217.53</span> Product B</a></li>
								<li><a href="ecommerce_product_edit.html"><span class="badge badge-default">$684.62</span> Product C</a></li>
							</ul>
							<h4 class="panel_heading">Top Categories</h4>
							<ul>
								<li><a href="#"><span class="badge badge-success">18</span> Category 1</a></li>
								<li><a href="#"><span class="badge badge-default">9</span> Category 2</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="label label-success">14</span>
						<span class="ion-ios7-email-outline"></span>
						<span class="nav_title">Mailbox</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<form class="panel_section form-search">
								<div class="input-group input-group-sm">
									<input type="text" class="form-control input-sm" placeholder="Search...">
									<span class="input-group-btn">
										<button class="btn btn-default btn-sm" type="submit"><span class="glyphicon glyphicon-search"></span></button>
									</span>
								</div>
							</form>
							<div class="panel_section">
								<a href="mail_compose.html" class="btn btn-sm btn-danger">New message</a>
							</div>
							<h4 class="panel_heading">Folders</h4>
							<ul>
								<li><a href="mail_inbox.html"><span class="side_icon ion-ios7-filing-outline"></span> Inbox <small class="text-muted pull-right">(142)</small></a></li>
								<li><a href="mail_outbox.html"><span class="side_icon ion-ios7-paperplane-outline"></span> Sent Mail</a></li>
								<li><a href="mail_spam.html"><span class="side_icon ion-ios7-close-outline"></span> Spam <small class="text-danger pull-right">(23)</small></a></li>
								<li><a href="#"><span class="side_icon ion-ios7-compose-outline"></span> Drafts</a></li>
								<li><a href="#"><span class="side_icon ion-ios7-trash-outline"></span> Deleted</a></li>
							</ul>
							<h4 class="panel_heading">Labels</h4>
							<ul>
								<li class="add_label">
									<a href="#">Work</a>
									<div class="ts_label">
										<span class="color_a"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="#">Family</a>
									<div class="ts_label">
										<span class="color_b"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="#">Business</a>
									<div class="ts_label">
										<span class="color_c"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="#">Envato</a>
									<div class="ts_label">
										<span class="color_d"></span>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-beaker"></span>
						<span class="nav_title">Components</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">Form Elements</h4>
							<ul>
								<li><a href="form_elements.html">Regular Elements</a></li>
								<li><a href="form_extended_elements.html">Extended Elements</a></li>
								<li><a href="form_validation.html">Form Validation</a></li>
								<li><a href="multiupload.html">Multiupload</a></li>
								<li><a href="form_wizard.html">Wizard</a></li>
								<li><a href="form_wysiwg.html">WYSIWG Editor</a></li>
							</ul>
							<h4 class="panel_heading">Tables</h4>
							<ul>
								<li><a href="tables_regular.html">Regular</a></li>
								<li><a href="tables_datatables.html">Datatables</a></li>
							</ul>
							<h4 class="panel_heading">Other Components</h4>
							<ul>
								<li><a href="calendar.html">Calendar</a></li>
								<li><a href="charts.html">Charts</a></li>
								<li><a href="easy_tree.html">Easy Tree</a></li>
								<li><a href="editable_elements.html">Editable Elements</a></li>
								<li><a href="gallery.html">Gallery</a></li>
								<li><a href="image_zoom.html">Image Zoom</a></li>
								<li><a href="notifications.html">Notifications</a></li>
								<li><a href="modals_lightbox.html">Modals, Lightbox</a></li>
								<li><a href="tabs_accordions.html">Tabs, Accordions</a></li>
								<li><a href="tooltips_popovers.html">Tooltips, Popovers</a></li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						<span class="ion-ios7-albums-outline"></span>
						<span class="nav_title">Others</span>
					</a>
					<div class="sub_panel">
						<div class="side_inner">
							<h4 class="panel_heading panel_heading_first">UI Elements</h4>
							<ul>
								<li><a href="alerts_buttons.html">Alerts, Buttons</a></li>
								<li><a href="grid.html">Grid</a></li>
								<li><a href="icons.html">Icons</a></li>
								<li><a href="sidebar_accordion.html">Sidebar Accordion</a></li>
								<li><a href="typography.html">Typography</a></li>
							</ul>
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="blank.html">Blank</a></li>
								<li><a href="chat.html">Chat</a></li>
								<li><a href="error_404.html">Error 404</a></li>
								<li><a href="invoice.html">Invoice</a></li>
								<li><a href="login_page.html">Login Page</a></li>
								<li><a href="user_list.html">User List</a></li>
								<li><a href="user_profile.html">User Profile</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</nav>

		<!-- right slidebar -->
		<div id="slidebar">
			<div id="slidebar_content">
				<div class="input-group">
					<input type="text" class="form-control input-sm" placeholder="Search...">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="button"><i class="fa fa-search"></i></button>
					</span>
					</div>
				<hr>
					
				<div class="sepH_a">
					<div class="progress">
						<div style="width: 60%;" role="progressbar" class="progress-bar">
							60%
						</div>
					</div>
					<span class="help-block">CPU Usage</span>
				</div>
				<div class="sepH_a">
					<div class="progress">
						<div style="width: 28%;" class="progress-bar progress-bar-success">
							28%
						</div>
					</div>
					<span class="help-block">Disk Usage</span>
				</div>
				<div class="progress">
					<div style="width: 82%;" class="progress-bar progress-bar-danger">
						0.2GB/20GB
					</div>
				</div>
				<span class="help-block">Monthly Transfer</span>
				<hr>
					
				<div class="heading_a">New Users</div>
				<div class="user_img_grid clearfix">
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_3.jpg" alt="" class="img-thumbnail"></a>
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_5.jpg" alt="" class="img-thumbnail"></a>
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_8.jpg" alt="" class="img-thumbnail"></a>
					<a class="user_img_item" href="#"><img src="assets/img/avatars/avatar_6.jpg" alt="" class="img-thumbnail"></a>
				</div>
				<hr>
					
				<form>
					<div class="form-group">
						<input type="text" class="input-sm form-control" placeholder="Tilte...">
					</div>
					<div class="form-group">
						<textarea cols="30" rows="3" class="form-control input-sm" placeholder="Message..."></textarea>
					</div>
					<button type="button" class="btn btn-default btn-sm">Send message</button>
				</form>
				<hr>
				<div class="sepH_a">
					<span class="label label-info">Reminder</span>
				</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat fuga omnis ipsa odit sint aut molestiae enim. Quia cupiditate distinctio ad dicta qui ducimus aspernatur debitis incidunt minima laboriosam atque.</p>
			</div>
		</div>

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

		<!-- immagesloaded -->
		<script src="assets/js/imagesloaded.pkgd.min.js"></script>
		<!-- freewall -->
		<script src="assets/lib/freewall/freewall.js"></script>
		<!-- magnific popup -->
		<script src="assets/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- freewall functions -->
		<script src="assets/js/apps/tisa_freewall.js"></script>
		
    </body>
</html>
