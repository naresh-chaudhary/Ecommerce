<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Tisa Admin Template v1.1 (editable_elements)</title>
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

		<!-- editable elements -->
		<link rel="stylesheet" href="assets/lib/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
		<link rel="stylesheet" href="assets/lib/x-editable/inputs-ext/address/address.css">
		<!-- select2 -->
		<link rel="stylesheet" href="assets/lib/select2/select2.css">
				
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
								<div class="panel-heading">Editable Elements</div>
								<div class="panel-body">
									<table id="x_editable" class="table table-striped clearfix">
										<tbody> 
											<tr>         
												<td style="width:30%">Simple text field</td>
												<td><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
											</tr>
											<tr>         
												<td>Empty text field, required</td>
												<td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
											</tr>  
											<tr>         
												<td>Select, local array, custom display</td>
												<td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
											</tr>
											<tr>         
												<td>Select, remote array, no buttons</td>
												<td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a></td>
											</tr> 
											<tr>         
												<td>Select, error while loading</td>
												<td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a></td>
											</tr>  
											<tr>         
												<td>Combodate (date)</td>
												<td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
											</tr> 
											<tr>         
												<td>Combodate (datetime)</td>
												<td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
											</tr> 
											<tr>         
												<td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
												<td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
											</tr> 
											<tr>         
												<td>Twitter typeahead.js</td>
												<td><a href="#" id="state2" data-type="typeaheadjs" data-pk="1" data-placement="right" data-title="Start typing State.."></a></td>
											</tr>                       
											<tr>         
												<td>Checklist</td>
												<td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
											</tr>
											<tr>         
												<td>Select2 (tags mode)</td>
												<td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a></td>
											</tr>                    
											<tr>         
												<td>Select2 (dropdown mode)</td>
												<td><a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a></td>
											</tr>  
											<tr>         
												<td>Custom input, several fields</td>
												<td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
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

		<!-- mock ajax -->
		<script src="assets/js/jquery.mockjax.js"></script>
		<!-- editable elements -->
		<script src="assets/lib/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script src="assets/lib/x-editable/inputs-ext/address/address.js"></script>
		<script src="assets/lib/x-editable/inputs-ext/typeaheadjs/lib/typeahead.js"></script>
		<script src="assets/lib/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
		<!-- multiselect, tagging -->
		<script src="assets/lib/select2/select2.min.js"></script>
		
		<!-- editable elements functions -->
		<script src="assets/js/apps/tisa_editable_elements.js"></script>
		
    </body>
</html>
