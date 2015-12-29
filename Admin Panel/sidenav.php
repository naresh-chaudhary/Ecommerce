<nav id="side_nav">
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
							<h4 class="panel_heading">Page Display</h4>
							<ul>
								<li><a href="ecommerce_sales_report.php">Sales Report</a></li>

								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Products List" >
									<input type="hidden" name="tablename" value="Products" >
									<input type="hidden" name="primarykey" value="ProductID" >
									<input type="submit" style="width:100%;" class="btn btn-success btn-sm " value="Products List" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Customers List" >
									<input type="hidden" name="tablename" value="Customers" >
									<input type="hidden" name="primarykey" value="CustomerID" >
									<input type="submit" style="width:100%;" class="btn btn-success btn-sm " value="Customers List" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Orders List" >
									<input type="hidden" name="tablename" value="Orders" >
									<input type="hidden" name="primarykey" value="OrderID" >
									<input type="submit" style="width:100%;" class="btn btn-success btn-sm " value="Orders List" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Order Details List" >
									<input type="hidden" name="tablename" value="OrderDetails" >
									<input type="hidden" name="primarykey" value="OrderDetailID" >
									<input type="submit" style="width:100%;"  class="btn btn-success btn-sm " value="Order Details List" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Featured Items List" >
									<input type="hidden" name="tablename" value="FeaturedItems" >
									<input type="hidden" name="primarykey" value="FeaturedID" >
									<input type="submit" style="width:100%;" class="btn btn-success btn-sm " value="Featured Items List" >
									</form>
								</li>
								
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Payment List" >
									<input type="hidden" name="tablename" value="Payment" >
									<input type="hidden" name="primarykey" value="PaymentID" >
									<input type="submit" style="width:100%;"  class="btn btn-success btn-sm "  value="Payment List" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Cart" >
									<input type="hidden" name="tablename" value="Cart" >
									<input type="hidden" name="primarykey" value="CartID" >
									<input type="submit" style="width:100%;" class="btn btn-success btn-sm " value="Cart" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Category List" >
									<input type="hidden" name="tablename" value="Category" >
									<input type="hidden" name="primarykey" value="CategoryID" >
									<input type="submit" style="width:100%;"  class="btn btn-success btn-sm " value="Categories List" >
									</form>
								</li>
								<li>
									<form action="showitems.php" method="post">
									<input type="hidden" name="title" value="Sub Category List" >
									<input type="hidden" name="tablename" value="SubCategory" >
									<input type="hidden" name="primarykey" value="SubCategoryID" >
									<input type="submit" style="width:100%;"  class="btn btn-success btn-sm " value="SubCategories List" >
									</form>
								</li>
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