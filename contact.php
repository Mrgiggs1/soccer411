<?php
	include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<body class="layout-page">
<!-- Begin Menu Navigation
================================================== 
<!-- End Menu Navigation
================================================== -->
<div class="site-content">
	<div class="container">
		<!-- Content (replace with your e-mail address below)
    ================================================== -->
		<div class="main-content">
			<section>
			<div class="section-title" style="text-align: center;">
				<h2><span>Contact</span></h2>
			</div>
			<div class="article-post">
				<form action="https://formspree.io/wowthemesnet@gmail.com" method="POST">
					<div class="form-group row">
						<div class="col-md-3">
							<input class="form-control" type="text" name="name" placeholder="Full Name">
						</div>
						<div class="col-md-3">
							<input class="form-control" type="text" name="Subject" placeholder="Subject">
						</div>
						<div class="col-md-3">
							<input class="form-control" type="email" name="replyTo" placeholder="E-mail Address">
						</div>
					</div>
					<textarea rows="8" class="form-control mb-3" name="submit" placeholder="Message"></textarea>
					<input class="btn btn-success" type="submit" value="Send">
				</form>
			</div>
			</section>
		</div>
	</div>
	<!-- /.container -->
	<!-- Before Footer
    ================================================== -->
	<?php
	;
	if(isset($_POST["submit"]))
	{
			if(filter_var($_POST['replyTo'], FILTER_VALIDATE_EMAIL))
			{
				$name = $_POST['name'];
				$email = $_POST['replyTo'];
				$subject = $_POST['subject'];
				$message = $_POST['message'];
				
				
				
				$body .="From: ".$name."\r\n";
				$body .="Email: ".$email."\r\n";
				$body .="Email To: ".$to."\r\n";
				$body .="Message: ".$message."\r\n";
				$headers = "From: soccer411@kasidiski.co.za" . "\r\n" .
											"CC: rudolphpuane@gmail.com";
				
				
				//$mail($to,$subject,$body,$headers,$teamEmail);
				  
				$to_email = 'rudolphpuane@gmail.com';
				mail($to_email,$subject,$body,$headers);
			}
			else
			{
				echo '<script type="text/javascript"> alert("Invalid Email") </script>';
			}
		
	}
		include "footer.php"
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