<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (sidebar_accordion)</title>
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
    <body class="side_nav_accordion">
		<!-- top bar -->
		<header class="navbar navbar-fixed-top" role="banner">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="dashboard.php" class="navbar-brand"><img src="assets/img/blank.gif" alt="Logo"></a>
				</div>
				<ul class="top_links">
					<li>
						<a href="tasks_summary.php"><span>23</span>Tasks</a>
					</li>
					<li>
						<a href="mail_inbox.php"><span>8</span>Mails</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="lang_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="flag-US"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="user_profile.php"><span class="flag-FR"></span> France</a></li>
							<li><a href="mail_inbox.php"><span class="flag-IN"></span> India</a></li>
							<li><a href="tasks_summary.php"><span class="flag-BR"></span> Brasil</a></li>
							<li><a href="tasks_summary.php"><span class="flag-GB"></span> UK</a></li>
						</ul>
					</li>
					<li class="user_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="navbar_el_icon ion-person"></span> <span class="caret"></span>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="user_profile.php">Profile</a></li>
							<li><a href="mail_inbox.php">My messages</a></li>
							<li><a href="tasks_summary.php">My tasks</a></li>
							<li class="divider"></li>
							<li><a href="login_page.php">Log Out</a></li>
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
								<div class="panel-heading">Sidebar accordion menu</div>
								<div class="panel-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quasi molestiae distinctio doloribus recusandae sit hic maiores consequuntur quos illo animi molestias eligendi perferendis! Repellendus nostrum delectus fugiat corporis voluptatibus.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quasi molestiae distinctio doloribus recusandae sit hic maiores consequuntur quos illo animi molestias eligendi perferendis! Repellendus nostrum delectus fugiat corporis voluptatibus.
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo quasi molestiae distinctio doloribus recusandae sit hic maiores consequuntur quos illo animi molestias eligendi perferendis! Repellendus nostrum delectus fugiat corporis voluptatibus.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- side navigation -->
		<nav id="side_nav_acc_wrapper">
			<ul>
				<li>
					<a href="dashboard.php"><span class="ion-speedometer"></span> <span class="nav_title">Dashboard</span></a>
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
								<li><a href="tasks_summary.php"><span class="side_icon ion-ios7-folder-outline"></span><span class="badge badge-primary">7</span> Summary</a></li>
								<li><a href="tasks_starred.php"><span class="side_icon ion-ios7-star-outline"></span> Starred</a></li>
								<li><a href="tasks_today.php"><span class="side_icon ion-ios7-calendar-outline"></span> Today</a></li>
							</ul>
							<h4 class="panel_heading">Labels</h4>
							<ul>
								<li class="add_label">
									<a href="tasks_label.php">Work</a>
									<div class="ts_label">
										<span class="color_a"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.php">Family</a>
									<div class="ts_label">
										<span class="color_b"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.php">Business</a>
									<div class="ts_label">
										<span class="color_c"></span>
									</div>
								</li>
								<li class="add_label">
									<a href="tasks_label.php">Envato</a>
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
								<li><a href="newsletter_campaigns.php">Campaigns</a></li>
								<li><a href="newsletter_report.php">Reports</a></li>
								<li><a href="newsletter_templates.php">Templates</a></li>
							</ul>
							<h4 class="panel_heading">Latest Campaigns</h4>
							<ul>
								<li><a href="newsletter_report.php">Stanton LLC</a></li>
								<li><a href="newsletter_report.php">Veum Group</a></li>
								<li><a href="newsletter_report.php">Langosh Inc</a></li>
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
								<li><a href="ecommerce_sales_report.php">Sales Report</a></li>
								<li><a href="ecommerce_products_list.php">Products List</a></li>
								<li><a href="ecommerce_product_edit.php">Product Edit</a></li>
							</ul>
							<h4 class="panel_heading">Top Products</h4>
							<ul>
								<li><a href="ecommerce_product_edit.php"><span class="badge badge-success">$2 344.00</span> Product A</a></li>
								<li><a href="ecommerce_product_edit.php"><span class="badge badge-default">$1 217.53</span> Product B</a></li>
								<li><a href="ecommerce_product_edit.php"><span class="badge badge-default">$684.62</span> Product C</a></li>
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
								<a href="mail_compose.php" class="btn btn-sm btn-danger">New message</a>
							</div>
							<h4 class="panel_heading">Folders</h4>
							<ul>
								<li><a href="mail_inbox.php"><span class="side_icon ion-ios7-filing-outline"></span> Inbox <small class="text-muted pull-right">(142)</small></a></li>
								<li><a href="mail_outbox.php"><span class="side_icon ion-ios7-paperplane-outline"></span> Sent Mail</a></li>
								<li><a href="mail_spam.php"><span class="side_icon ion-ios7-close-outline"></span> Spam <small class="text-danger pull-right">(23)</small></a></li>
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
								<li><a href="form_elements.php">Regular Elements</a></li>
								<li><a href="form_extended_elements.php">Extended Elements</a></li>
								<li><a href="form_validation.php">Form Validation</a></li>
								<li><a href="multiupload.php">Multiupload</a></li>
								<li><a href="form_wizard.php">Wizard</a></li>
								<li><a href="form_wysiwg.php">WYSIWG Editor</a></li>
							</ul>
							<h4 class="panel_heading">Tables</h4>
							<ul>
								<li><a href="tables_regular.php">Regular</a></li>
								<li><a href="tables_datatables.php">Datatables</a></li>
							</ul>
							<h4 class="panel_heading">Other Components</h4>
							<ul>
								<li><a href="calendar.php">Calendar</a></li>
								<li><a href="charts.php">Charts</a></li>
								<li><a href="easy_tree.php">Easy Tree</a></li>
								<li><a href="editable_elements.php">Editable Elements</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="image_zoom.php">Image Zoom</a></li>
								<li><a href="notifications.php">Notifications</a></li>
								<li><a href="modals_lightbox.php">Modals, Lightbox</a></li>
								<li><a href="tabs_accordions.php">Tabs, Accordions</a></li>
								<li><a href="tooltips_popovers.php">Tooltips, Popovers</a></li>
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
								<li><a href="alerts_buttons.php">Alerts, Buttons</a></li>
								<li><a href="grid.php">Grid</a></li>
								<li><a href="icons.php">Icons</a></li>
								<li><a href="sidebar_accordion.php">Sidebar Accordion</a></li>
								<li><a href="typography.php">Typography</a></li>
							</ul>
							<h4 class="panel_heading">Pages</h4>
							<ul>
								<li><a href="blank.php">Blank</a></li>
								<li><a href="chat.php">Chat</a></li>
								<li><a href="error_404.php">Error 404</a></li>
								<li><a href="invoice.php">Invoice</a></li>
								<li><a href="login_page.php">Login Page</a></li>
								<li><a href="user_list.php">User List</a></li>
								<li><a href="user_profile.php">User Profile</a></li>
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
		
    </body>
</html>