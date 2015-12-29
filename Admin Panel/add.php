<?php 
include('dbconnect.php');
include('queries.php');
?>
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
		<?php include('header.php');?>

		<!-- main content -->
		<div id="main_wrapper">
			<div class="col-sm-offset-2 col-sm-8">
			
			
			
				<?php
				if(isset($_POST['pagename']))
					$actionpage=$_POST['pagename'];
				echo '<form class="form-horizontal"  action="'.$actionpage.'" method="post">';
				if(isset($_POST['fields']))
				{
					$fieldnames=$_POST['fields'];
					$tablename=$_POST['tablename'];
					$id=$_POST['id'];
					
				}
				$n=count($fieldnames);
				$max=maxm($tablename,$id);
				$max+=1;
				for($i=0;$i<$n;$i++)
				{
					echo '
					<div class="form-group">
					
					<label class="control-label col-sm-4" for="'.$i.'">'.$fieldnames[$i].'</label>';
					if($id==$fieldnames[$i])
					echo 
					'<input class="form-control col-sm-8 " disabled type="textarea " id="'.$i.'" name="" value="'.$max.'">';
					else
					echo '
					<input class="form-control col-sm-8" type="textarea " id="'.$i.'" name="columnvalues[]" value="">
					<input type="hidden" name="columnnames[]" value="'.$fieldnames[$i].'">';

					echo '</div>';
					
				}
				echo '<input type="hidden" name="table" value="'.$tablename.'">';
				echo '<input type="hidden" name="id" value="'.$id.'">';
				echo '<input type="submit"  class="btn btn-success" name="insert" value="Add To '.$tablename.'">';
				echo '</form>';
				?>

			
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
	
		<!-- ecommerce functions -->
		<script src="assets/js/apps/tisa_ecommerce.js"></script>
		
    </body>
</html>
