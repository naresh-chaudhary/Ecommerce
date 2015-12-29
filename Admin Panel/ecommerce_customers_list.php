<?php 
include('dbconnect.php');
include('queries.php');
?>


<!DOCTYPE html>
<html>
    <head>
		<meta charset="UTF-8">
		<title>Customers List</title>
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

		<!-- iCheck -->
		<link rel="stylesheet" href="assets/lib/iCheck/skins/minimal/green.css">
				
		<!-- main stylesheet -->
		<link href="assets/css/style.css" rel="stylesheet" media="screen">
		
		<!-- google webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400&amp;subset=latin-ext,latin' rel='stylesheet' type='text/css'>
		
		<!-- moment.js (date library) -->
		<script src="assets/lib/moment-js/moment.min.js"></script>
		
    </head>
    <body>
		<!-- top bar -->
		<?php include('header.php');

		$rec_limit=10;
		$rec_count=totalrecords('Customers');
		if( isset($_GET{'page'} ) )
         {
            $page = $_GET{'page'} + 1;
            $offset = $rec_limit * $page ;
         }
         else
         {
            $page = 0;
            $offset = 0;
         }
         $left_rec = $rec_count - ($page * $rec_limit);
		?>
		
		<!-- main content -->
		<div id="main_wrapper">
			<div class="page_bar clearfix">
				<div class="row">
					<div class="col-md-10">
						<h1 class="page_title">Manage Customers</h1>
						<p class="text-muted"><?php echo $rec_count;?> <a href="#">customers</a></p>
					</div>
					<div class="col-md-2 text-right">
						<button class="btn btn-success">Add Customer</button>
					</div>
				</div>
			</div>
			<div class="page_content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default" style="overflow:auto; height:500px;">
								<div class="text-center">
									<ul class="pagination pagination-sm">';
							<?php			
							if( $page > 0 )
					         {
					            $last = $page - 2;
					            echo '<li><a href='.$_PHP_SELF.'?page='.$last.'>
					            <i class="fa fa-angle-double-left"></i> Last 10 Records</a></li>';
					            echo '<li><a href='.$_PHP_SELF.'?page='.$page.'>Next 10 Records
					            <i class="fa fa-angle-double-right"></i></a></li>';
					         }
							         
					         else if( $page == 0 )
					         {
					            echo '<li><a href='.$_PHP_SELF.'?page='.$page.'>Next 10 Records
					            <i class="fa fa-angle-double-right"></i></a></li>';
							 }
								
					         else if( $left_rec < $rec_limit )
					         {
					            $last = $page - 2;
					            echo '<li><a href='.$_PHP_SELF.'?page='.$last.'>Last 10 Records
					            <i class="fa fa-angle-double-left"></i></a></li>';
					         }
							echo '			
									</ul>
								</div>';
								?>



								<div class="table-responsive">
									<table class="table info_table" id="prod_table">
										<thead>
											<tr>
												
												<th class="visible-lg"></th>
												
												<?php
												
												$result=select('Customers','','',$rec_limit,$offset);
												$n=mysql_num_fields($result);
												
												for($i=0;$i<$n;$i++)
												{
												echo 
												'<th class="sub_col">'.mysql_field_name($result, $i).'</th>';
												}

												echo 
												'
												<th></th>
											</tr>
										</thead>';
										
											
										while($rows=mysql_fetch_array($result,MYSQL_NUM))
											{
											echo'
										<tr>
											
											<td class="col_sm visible-lg"><img src="assets/img/examples/image_60x60.gif" class="img-thumbnail" alt=""></td>';
											for($i=0;$i<$n;$i++)
											{
												echo '
											<td class="sub_col">'.$rows[$i].'</td>';
											}
											echo '
											<td class="sub_col"><span class="label label-success">enabled</span></td>
											<td class="sub_col"><a href="#" class="btn btn-default btn-sm"><span class="fa fa-pencil-square-o fa-lg"></span> Details</a></td>
										</tr>';
											}
								echo '		
									</table>
								</div>';
							
					         
								

								?>
							</div>
						</div>
					</div>
				</div>
			</div>
					
		</div>

		
		<!-- side navigation -->
		<?php include('sidenav.php');?>
		<!--right slidebar-->
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

		<!-- iCheck -->
		<script src="assets/lib/iCheck/jquery.icheck.min.js"></script>
		
		<!-- ecommerce functions -->
		<script src="assets/js/apps/tisa_ecommerce.js"></script>
		
    </body>
</html>
