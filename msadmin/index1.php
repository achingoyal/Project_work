<?php ob_start(); ?>

<?php
require_once("inc_dbcon1.php");

if (!empty($_POST['username']))
{
	$temp_username = $_POST['username'];
	$temp_password = $_POST['password'];

	$sql = "SELECT * FROM member WHERE username = '$temp_username' AND password = '$temp_password'";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
	
	$row_un = $row[username];
	$row_pwd = $row[password];
	$name = $row[Name];

			
	$encoded_un=hash("sha256", $row_un);
	$encoded_pwd=hash("sha256", $row_pwd);
			
	$encoded_temp_un=hash("sha256", $temp_username);
	$encoded_temp_pwd=hash("sha256", $temp_password);
	
	if ($encoded_un==$encoded_temp_un and $encoded_pwd==$encoded_temp_pwd){
		// Setting the session
		session_start();
		$_SESSION["username"] = $row_un;
		$_SESSION["myname"] = $name;
		header( 'Location: home.php' ) ;
	} else {
	echo "Incorrect Credentials!!";
}
	}
} else {
	echo "No User Found with given Credentials!!";
}
}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include 'inc_head.php'?>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="index1.php" method="post" >
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="User ID" autofocus name="username">
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password">
		           <!-- <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>-->
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            <!--<div class="login-social-link centered">
		            <p>or you can sign in via your social network</p>
		                <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
		                <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
		            </div>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="#">
		                    Create an account
		                </a>
		            </div>-->
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
