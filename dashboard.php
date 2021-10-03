<?php
	include "header.php";
	$email = $_SESSION['email'];
	require("checklogin.php");
	check_login();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="assets/images/favicon.ico">
<title>Soccer411</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">
<link href="assets/css/theme.css" rel="stylesheet">
<!-- Begin tracking codes here, including ShareThis/Analytics -->
    
<!-- End tracking codes here, including ShareThis/Analytics -->
</head>
<body class="layout-default">
<!-- Begin Menu Navigation
================================================== -->
<!-- End Menu Navigation
================================================== -->
<div class="site-content">
	<div class="container">
		<div class="main-content">		
			<!-- Category Archive
            ================================================== -->
			<section class="recent-posts row">
			<div class="col-sm-4">
				<div class="sidebar">
				<a href="dashboard.php">
						<h2>DashBoard</h2>
					</a>
					<div class="sidebar-section">
					
					<h6>
						<?php 
							$select = "select * from admin where email ='".$email."'";
							$query = mysqli_query($con, $select);
							$line = mysqli_fetch_assoc($query);
							echo $line['lName'].' '.$line['fName'];
							
							//only authorize superAdmin for this page
							if($line['role'] != "superAdmin")
							{	
								echo '<script type="text/javascript"> alert("You are not Authorized to access this page") </script>';
								echo '<script>
									window.location.href="index.php";
								</script>	
								';//change it from index to that previous page the user was in b4 trying to access this page
							}else if($line['role'] == "superAdmin")
							{
								//echo '<script type="text/javascript"> alert("Welcome Admin") </script>';
							}
						?>
					</h6>
						<h5><span>Manage</span></h5>
						<ul style="list-none;">
							<li><a href="teams">Teams</a></li>
							<li><a href="league">League</a></li>
							<li><a href="">Players</a></li>
							<li><a href="setGame">Games</a></li>
							
						</ul>
					</div>
					<div class="sidebar-section">
						<h5><span>Monitor</span></h5>
						<ul style="list-none;">
							<li><a href="">News Updates</a></li>
							<li><a href="">Stat Updates</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="section-title">
					<h2><span>Messages</span></h2>
				</div>
				<div class="masonrygrid row listrecent">
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-12 grid-item">
						<div class="card">
							<a href="single.html">
							<img class="img-fluid" src="assets/images/5.jpg" alt="No Image">
							</a>
							<div class="card-block">
								<h2 class="card-title"><a href="single.html">Subject</a></h2>
								<h4 class="card-text">Soccer411. </h4>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
										</span>
										<span class="author-meta">
										<span class="post-date"><?php echo date("Y-M-d(D)"); ?></span>
										</span>
										<span class="post-read-more"><a href="single.html" title="Read Story"><i class="fa fa-link"></i></a></span>
										<div class="clearfix">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- Pagination -->
				<div class="bottompagination">
					<div class="navigation">
                        <nav class="pagination">
                            <span class="page-number"> &nbsp; &nbsp; Page 1 of 1 &nbsp; &nbsp; </span>
                        </nav>
					</div>
				</div>
			</div>
			</section>
		</div>
	</div>
	<?php
	
		include "footer.php"
	?>
	<!-- End Footer
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