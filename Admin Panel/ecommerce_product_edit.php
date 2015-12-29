<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (ecommerce_product_edit)</title>
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

		<!-- select2 -->
		<link rel="stylesheet" href="assets/lib/select2/select2.css">
		<!-- bootstrap-datepicker -->
		<link rel="stylesheet" href="assets/lib/bootstrap-datepicker/css/datepicker3.css">
		<!-- bootstrap switches -->
		<link href="assets/lib/bootstrap-switch/build/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
		<!-- 2col multiselect -->
		<link href="assets/lib/multi-select/css/multi-select.css" rel="stylesheet">
		<!-- date range picker -->
		<link rel="stylesheet" href="assets/lib/bootstrap-daterangepicker/daterangepicker-bs3.css">
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
			<form>
				<div class="page_bar clearfix">
					<div class="row">
						<div class="col-md-8">
							<h1 class="page_title">Product A</h1>
							<p class="text-muted">Lorem ipsum dolor sit amet&hellip;</p>
						</div>
						<div class="col-md-4 text-right">
							<button type="button" class="btn btn-success"><i class="fa fa-save"></i> Save</button>
							<button type="button" class="btn btn-default">Cancel</button>
							<button type="button" class="btn btn-link">Delete</button>
						</div>
					</div>
				</div>
				<nav class="breadcrumbs">
					<ul>
						<li><a href="#">Ecommerce</a></li>
						<li class="sep">\</li>
						<li>Product Edit</li>
					</ul>
				</nav>
				<div class="page_content">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-12">
								<div class="panel panel-default">
									<div class="panel-body">
										<div class="tabbable tabs-left">
											<ul class="nav nav-tabs">
												<li class="active"><a data-toggle="tab" href="#prod_tab_general" class="tab-default">General</a></li>
												<li><a data-toggle="tab" href="#prod_tab_data" class="tab-default">Data</a></li>
												<li><a data-toggle="tab" href="#prod_tab_links" class="tab-default">Links</a></li>
												<li><a data-toggle="tab" href="#prod_tab_images" class="tab-default">Images</a></li>
												<li><a data-toggle="tab" href="#prod_tab_discount" class="tab-default">Discount</a></li>
											</ul>
											<div class="tab-content">
												<div id="prod_tab_general" class="tab-pane active">
													<div class="form-group">
														<div class="row">
															<div class="col-lg-6">
																<label for="p_name" class="req">Product name</label>
																<input type="text" id="p_name" class="form-control" value="Product A">
															</div>
															<div class="col-lg-6">
																<label for="p_model">Model</label>
																<input type="text" id="p_model" class="form-control">
															</div>
														</div>
													</div>
													<div class="form-group form-sep">
														<div class="row">
															<div class="col-lg-12">
																<label for="p_description" class="req">Product description</label>
																<textarea name="p_description" id="p_description" cols="30" rows="4" class="form-control">
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore tempore dolore dolor fugiat vitae praesentium nesciunt minima vel eaque maiores laborum velit iusto unde consequuntur eos quae excepturi quod. Delectus.
																</textarea>
															</div>
														</div>
													</div>
													<div class="form-group form-sep">
														<div class="row">
															<div class="col-lg-12">
																<label for="p_keywords">Keywords</label>
																<input type="text" id="p_keywords" class="form-control" value="blue,yellow">
															</div>
														</div>
													</div>
												</div>
												<div id="prod_tab_data" class="tab-pane">
													<div class="form-group">
														<div class="form-group">
															<div class="row">
																<div class="col-lg-3">
																	<label for="p_sku">SKU</label>
																	<input type="text" id="p_sku" class="form-control">
																	<span class="help-block">Stock Keeping Unit</span>
																</div>
																<div class="col-lg-3">
																	<label for="p_ean">EAN</label>
																	<input type="text" id="p_ean" class="form-control">
																	<span class="help-block">European Article Number</span>
																</div>
																<div class="col-lg-3">
																	<label for="p_isbn">ISBN</label>
																	<input type="text" id="p_isbn" class="form-control">
																</div>
																<div class="col-lg-3">
																	<label for="p_mpn">MPN</label>
																	<input type="text" id="p_mpn" class="form-control">
																</div>
															</div>
														</div>
														<div class="form-group form-sep">
															<div class="row">
																<div class="col-lg-3">
																	<label for="p_date_available">Date Available</label>
																	<input type="text" id="p_date_available" class="form-control">
																</div>
																<div class="col-lg-3">
																	<label>Requires Shipping</label>
																	<input class="bs_switch" type="checkbox" name="p_req_shipping" id="p_req_shipping" data-on-color="success" data-on-text="Yes" data-off-text="No">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id="prod_tab_links" class="tab-pane">
													<div class="row">
														<div class="col-lg-6">
															<label for="p_category">Category</label>
															<div class="sepH_a">
																<a href="#" class="btn btn-link btn-xs" id="p_cat_select_all">Select All</a>
																<a href="#" class="btn btn-link btn-xs" id="p_cat_deselect_all">Deselect All</a>
															</div>
															<select name="p_category" id="p_category" multiple>
																<optgroup label="Category A">
																	<option value="subcat_a1">Eveniet quidem illo.</option>
																	<option value="subcat_a2">Tempora modi aut sunt.</option>
																	<option value="subcat_a3">Soluta eaque quisquam.</option>
																	<option value="subcat_a4">Aspernatur quia vel magni.</option>
																	<option value="subcat_a5">Iste ipsam id voluptates ut.</option>
																</optgroup>
																<optgroup label="Category B">
																	<option value="subcat_b1">Et autem optio laudantium assumenda et.</option>
																	<option value="subcat_b2">Voluptatem voluptatem numquam.</option>
																	<option value="subcat_b3">Sit molestiae ea id.</option>
																</optgroup>
															</select>
														</div>
														<div class="col-lg-6">
															<label for="p_related_products">Related Products</label>
															<div class="sepH_a">
																<a href="#" class="btn btn-link btn-xs" id="p_related_select_5">Select 5 products</a>
																<a href="#" class="btn btn-link btn-xs" id="p_related_deselect_5">Deselect 5 products</a>
															</div>
															<select name="p_related_products" id="p_related_products" multiple>
																	<option value="prod_1">Assumenda repellendus totam corrupti.</option>
																	<option value="prod_2">Quas tempora consequatur quis.</option>
																	<option value="prod_3">Hic est distinctio debitis.</option>
																	<option value="prod_4">Ipsum eaque delectus minus.</option>
																	<option value="prod_5">Vel quaerat ut.</option>
																	<option value="prod_6">Eos aut consequatur omnis.</option>
																	<option value="prod_7">Ad animi consequuntur veritatis numquam.</option>
																	<option value="prod_8">Neque qui.</option>
															</select>
														</div>
													</div>
												</div>
												<div id="prod_tab_images" class="tab-pane">
													<div class="fileinput-button btn btn-success sepH_b">
														<i class="fa fa-plus"></i>
														<span>Add files...</span>
														<input id="image_upload" type="file" name="files[]" multiple>
													</div>
													<ul class="img-grid clearfix" id="img_grid_upload">
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
														<li><a href="assets/img/examples/big_image_800x600.gif"><img src="assets/img/examples/image_220x220.gif" class="thumbnail img-responsive" alt=""/></a></li>
													</ul>
												</div>
												<div id="prod_tab_discount" class="tab-pane">
													<div class="table-responsive">
														<table class="table table-striped">
															<thead>
																<tr>
																	<th>Customer Group</th>
																	<th>Quantity</th>
																	<th>Priority</th>
																	<th>Price</th>
																	<th>Date start/end</th>
																	<th></th>
																</tr>
															</thead>
															<tbody>
																<tr id="discount_row_1">
																	<td>
																		<select name="discount_group_h9dpg5knk" id="discount_group_h9dpg5knk" class="form-control">
																			<option value="">---</option>
																			<option value="1" selected>General</option>
																			<option value="2">Retailer</option>
																			<option value="3">Wholesale</option>
																		</select>
																	</td>
																	<td><input type="text" class="form-control" value="12"></td>
																	<td><input type="text" class="form-control" value="1"></td>
																	<td>
																		<div class="input-group">
																			<span class="input-group-addon input-group-primary"><i class="fa fa-dollar"></i></span>
																			<input type="text" class="form-control" value="12.33">
																		</div>
																	</td>
																	<td><input type="text" class="form-control discound_date_range"></td>
																	<td><a href="#" class="btn btn-sm btn-default tr_remove">Remove</a></td>
																</tr>
																<tr id="discount_row_2">
																	<td>
																		<select name="discount_group_sj3cwamxt" id="discount_group_sj3cwamxt" class="form-control">
																			<option value="">---</option>
																			<option value="1">General</option>
																			<option value="2" selected>Retailer</option>
																			<option value="3">Wholesale</option>
																		</select>
																	</td>
																	<td><input type="text" class="form-control" value="4"></td>
																	<td><input type="text" class="form-control" value="2"></td>
																	<td>
																		<div class="input-group">
																			<span class="input-group-addon input-group-primary"><i class="fa fa-dollar"></i></span>
																			<input type="text" class="form-control" value="14.83">
																		</div>
																	</td>
																	<td><input type="text" class="form-control discound_date_range"></td>
																	<td><a href="#" class="btn btn-sm btn-default tr_remove">Remove</a></td>
																</tr>
																<tr id="discount_row_3">
																	<td>
																		<select name="discount_group_i1l1i6hzm" id="discount_group_i1l1i6hzm" class="form-control">
																			<option value="">---</option>
																			<option value="1">General</option>
																			<option value="2">Retailer</option>
																			<option value="3" selected>Wholesale</option>
																		</select>
																	</td>
																	<td><input type="text" class="form-control" value="7"></td>
																	<td><input type="text" class="form-control" value="2"></td>
																	<td>
																		<div class="input-group">
																			<span class="input-group-addon input-group-primary"><i class="fa fa-dollar"></i></span>
																			<input type="text" class="form-control" value="22.96">
																		</div>
																	</td>
																	<td><input type="text" class="form-control discound_date_range"></td>
																	<td><a href="#" class="btn btn-sm btn-default tr_remove">Remove</a></td>
																</tr>
																<tr id="tr_add">
																	<td colspan="5"></td>
																	<td><a href="#" class="btn btn-sm btn-primary" id="tr_add_btn">Add discount</a></td>
																</tr>
																<tr id="tr_clone" style="display:none">
																	<td>
																		<select name="clone_id" id="clone_id" class="form-control">
																			<option value="" selected>---</option>
																			<option value="1">General</option>
																			<option value="2">Retailer</option>
																			<option value="3">Wholesale</option>
																		</select>
																	</td>
																	<td><input type="text" class="form-control" value=""></td>
																	<td><input type="text" class="form-control" value=""></td>
																	<td>
																		<div class="input-group">
																			<span class="input-group-addon input-group-primary"><i class="fa fa-dollar"></i></span>
																			<input type="text" class="form-control" value="">
																		</div>
																	</td>
																	<td><input type="text" class="form-control discound_date_range"></td>
																	<td><a href="#" class="btn btn-sm btn-default tr_remove">Remove</a></td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		
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

		<!-- wysiwg editor -->
		<script src="assets/lib/ckeditor/ckeditor.js"></script>
		<script src="assets/lib/ckeditor/adapters/jquery.js"></script>
		<!-- select2 -->
		<script src="assets/lib/select2/select2.min.js"></script>
		<!--  bootstrap-datepicker -->
		<script src="assets/lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<!--  bootstrap switches -->
		<script src="assets/lib/bootstrap-switch/build/js/bootstrap-switch.min.js"></script>
		<!--  2col multiselect -->
		<script src="assets/lib/multi-select/js/jquery.multi-select.js"></script>
		<!-- multiupload -->
		<script src="assets/lib/jQuery-UI/jquery.ui.widget.min.js"></script>
		<script src="assets/lib/jQuery-File-Upload/js/jquery.fileupload.js"></script>
		<script src="assets/lib/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
		<script src="assets/lib/jQuery-File-Upload/js/extras/load-image.min.js"></script>
		<script src="assets/lib/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
		<script src="assets/lib/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>
		<!-- date range picker -->
		<script src="assets/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
		<!-- magnific popup -->
		<script src="assets/lib/magnific-popup/jquery.magnific-popup.min.js"></script>
		
		<!-- ecommerce functions -->
		<script src="assets/js/apps/tisa_ecommerce.js"></script>
		
    </body>
</html>
