<!DOCTYPE html>
<html lang="en">
<?php 


include("head.php");?>
<script src="js/gen_validatorv4.js" type="text/javascript"></script>
</head>
<body>
<?php

include ("topheader.php") ;
include ("middleheader.php") ;
include ("bottomheader.php") ;

?>
	<input id="loggedin" type="hidden" value= <?php echo $_SESSION['userdetails']['logged_in'];?> >
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form id="login" action="register.php" method="post"> 
							<input name="email" type="email" placeholder="Email Address" />
							<input name="password" type="password" placeholder="********" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button name="signin" type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form id="signup" action="register.php" method="post">
							<input name="fname" type="text" placeholder="First Name"/>
							<input name="lname" type="text" placeholder="Last Name"/>
							<input name="email" type="email" placeholder="Email Address"/>
							<input name="password" type="password" placeholder="Password"/>
							<input name="cnfpassword" type="password" placeholder="Confirm Password"/>
							<input name="phone" placeholder="Phone Number"/>
							<button name="register" type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
<script type="text/javascript">
function MatchPasswords()
{
  var frm = document.forms["signup"];
  if(frm.password.value != frm.cnfpassword.value)
  {
    sfm_show_error_msg('Passwords do not match!',frm.cnfpassword);
    return false;
  }
  else
  {
    return true;
  }
}
var validator=new Validator("signup");
validator.addValidation("fname","req","Please enter your First Name");
validator.addValidation("email","req","Please enter your email address");
validator.addValidation("email","email");
validator.addValidation("password","req","Password field can't be left blank");
validator.setAddnlValidationFunction(MatchPasswords);
validator.addValidation("phone","req","Please enter phone number");
validator.addValidation("phone","maxlen=10","Enter a valid phone number");
</script>
<?php
include ("topfooter.php") ;
include ("widgetfooter.php") ;
include ("bottomfooter.php") ;
?>
</body>
</html>