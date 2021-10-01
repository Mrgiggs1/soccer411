<?php
	include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<body class="layout-page">
<!-- Begin Menu Navigation
================================================== 
<!-- End Menu Navigation
================================================== -->

		
<div class="site-content">
	<div class="about">
   <div class="container">
      <div class="row">
			 <dir class="col-xl-3 col-lg-6 col-md-12 col-sm-12">
				<div class="about_box">
				   <figure><img src="assets/logo/tabLogo.jpg"/></figure>
				</div>
			 </dir>
			 
			 <dir class="col-xl-7 col-lg-6 col-md-12 col-sm-12">
				<div class="about_box">
				   <h2>Login</h2>
				</div>
				<?php
				
				if(strlen($_SESSION['email'])<=0)
				{
				
					echo ' <div class="article-post">
						
						<form method="POST">
							<input required type="radio" name="login" value = "superAdmin"> Super Admin
							<input required type="radio" name="login" value = "eventAdmin"> Event Admin
							<input required type="radio" name="login" value = "teamManager" > Team Manager
							<div class="row">
								<div class="col-md-8">
									<input class="form-control" required type="text" name="email_address" placeholder="Email">
								</div><br>
								<div class="col-md-8">
									<input class="form-control" required type="password" name="pass" placeholder="Password">
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="submit" value="Sign In">
						</form>
					</div>';
				}else{
					echo '<div class="article-post">
						<h2>Already LoggedIn</h2>
					</div>';
				}
				?>
			</dir>
		</div>
	</div>
</div>
	<!-- /.container -->
	<!-- Before Footer
    ================================================== -->
	<?php
		if(isset($_POST["submit"]))
		{
			if(filter_var($_POST['email_address'], FILTER_VALIDATE_EMAIL))
			{		
				$login = $_POST['login'];
				$email = $_POST['email_address'];
				$pw = $_POST['pass'];
				if($login == "superAdmin")
				{
					$select = "select * from admin where email='".$email."' AND password = '".$pw."' AND role = '".$login."'";
					$query = mysqli_query($con, $select);
					$line = mysqli_fetch_assoc($query);
					
					if($line)
					{
						$_SESSION['email']= $line['email'];								
						$email = $_SESSION['email'];
						echo '<script type="text/javascript"> alert("Super Admin successfully logged in") </script>';
						echo '<script>
							window.location.href="dashboard.php";
						</script>
						';								
					}	
					else{
						echo '<script type="text/javascript"> alert("wrong super admin email and password") </script>';
					}
				}
				else if($login =="eventAdmin")
				{
					
					$sel_event = "select * from admin where email='".$email."' AND password = '".$pw."' AND role = '".$login."'";
					$query1 = mysqli_query($con,$sel_event);
					$line = mysqli_fetch_assoc($query1);
					if($line)
					{
						$_SESSION['email']= $line['email'];								
						$email = $_SESSION['email'];
						echo '<script type="text/javascript"> alert("event Admin successfully logged in") </script>';
						echo '<script>
							window.location.href="admin/registerTeam.php";
						</script>
						';						
					}
					else{
						echo '<script type="text/javascript"> alert("wrong event admin email and password") </script>';
					}
				}
				else if($login=="teamManager")
				{
					$sel_teamM = "select * from teammanager where email='".$email."' AND password = '".$pw."'";
					$query2 = mysqli_query($con,$sel_teamM);
					$line = mysqli_fetch_assoc($query2);
					if($line)
					{
						$_SESSION['teamID']= $line['teamID'];								
						$teamID = $_SESSION['teamID'];
						$_SESSION['email']= $line['email'];
						echo '<script type="text/javascript"> alert("Team Manager is successfully logged in") </script>';
						echo '<script>
							window.location.href="admin/teamProfile.php";
						</script>
						';						
					}
					else{
						echo '<script type="text/javascript"> alert("wrong team Manager email and password") </script>';
					}
				}else{
					
					echo '<script type="text/javascript"> alert("Choose A Role") </script>';				
				}
				
				
			}else
			{
				echo '<script type="text/javascript"> alert("Invalid Email") </script>';
			}

		}
		include "footer.php";
?>
	<!-- Begin Footer
    
    ================================================== -->
</div>
<!-- JavaScript
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>