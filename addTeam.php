<?php
	include "header.php";
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
			<div class="col-sm-3">
				<div class="sidebar">
					<a href="dashboard">
						<h2>DashBoard</h2>
					</a>
					<div class="sidebar-section">
					
					<h6>
						<?php $email = $_SESSION['email'];
							$select = "select * from admin where email ='".$email."'";
							$query = mysqli_query($con, $select);
							$line = mysqli_fetch_assoc($query);
							echo $line['lName'].' '.$line['fName'];
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
							<li><a target="_blank" href="">News Updates</a></li>
							<li><a target="_blank" href="">Stat Updates</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-9">
		
				<div class="section-title">
					<h2><span>Add Team</span></h2>
				</div>
				<div class="masonrygrid row listrecent">
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-12 grid-item">
						<div class="card">
							<div class="card-block">
							
							<a href="teams">
								<h2 align="center" >Enter Team Details</h2>
							</a>
								<form method="POST" enctype="multipart/form-data">
								  <div class="form-group row">
									<label for="teamName" class="col-sm-2 col-form-label">Team Name</label>
									<div class="col-sm-10">
									  <input type="text"  class="form-control" name="teamName" id="teamName" placeholder="Enter Team Name">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="teamOwner" class="col-sm-2 col-form-label">Team Owner</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" id="teamOwner" name="teamOwner" placeholder="Enter Team Owner">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label">Team Email</label>
									<div class="col-sm-10">
									  <input type="email"  class="form-control" id="staticEmail"  name="staticEmail" value="email@example.com">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="teamNumber" class="col-sm-2 col-form-label">Team Tel</label>
									<div class="col-sm-10">
									  <input type="text" class="form-control" id="teamNumber" name="teamNumber" placeholder="Team Tel">
									</div>
								  </div>
								  
								  <!--<div class="form-group row">
									<label for="league" class="col-sm-2 col-form-label">League</label>
									<div class="col-sm-10">
										  <select class="form-control" id="exampleFormControlSelect1">
											  <option>1</option>
											  <option>2</option>
											  <option>3</option>
											  <option>4</option>
											  <option>5</option>
											</select>
									</div>
									</div>-->
									<div class="form-group row">
									<label for="imglink" class="col-sm-2 col-form-label">Team Logo</label>
									<div class="col-sm-10">
									      <input type="file" class="form-control-file" name="imglink" id="exampleFormControlFile1">

									</div>

									</div>
							
							
									<div class="submitB">
									<button type="submit" name="teamSubmit" class="btn submitButton mb-2">Confirm identity</button>
									</div>
								</form>
								
								
								
								
								<?php 
							if(isset($_POST['teamSubmit']))
							{
								
								$teamName =$_POST['teamName'];
								$teamOwner = $_POST['teamOwner'];
								$date = date("Y-m-d");
								$staticEmail = $_POST['staticEmail'];
								
								$teamNumber =$_POST['teamNumber']; 
								
								$img_name = $_FILES['imglink']['name'];
								$img_size =$_FILES['imglink']['size'];
								$img_tmp =$_FILES['imglink']['tmp_name'];
								$league ="KASI PREMIER LEAGUE";
								$tournament1 = "Kasi_Knockout";
								
									$directory = 'logos/';
							
								
								
								$target_file = $directory.$img_name;
								
									if($img_size>2097152)
									{
										echo '<script type="text/javascript"> alert("Image file size larger than 2 MB.. Try another image file") </script>';
									}
									
									else
									{
										move_uploaded_file($img_tmp,$target_file);
											




										$query= "insert into team values('$target_file','jshsabbhhdjk','$teamName ','$teamOwner','$staticEmail','$teamNumber','$league','$tournament1','$date')";
										$query_run = mysqli_query($con,$query);
										
										if($query_run)
										{
											echo '<script type="text/javascript"> alert("NEW TEAM INSERTED") </script>';
											echo '<script language="javascript">document.location="team";</script>';
										}
										else
										{
											echo '<script type="text/javascript"> alert("Error!") </script>';
										}
									}	
									
									
								}
								
	  
				?>	
								
								<div class="metafooter">
									<!--<div class="wrapfooter">
										<span class="meta-footer-thumb">
										</span>
										<span class="author-meta">
										<span class="post-date"><?php date("y-m-d") ?></span>
										</span>
										<span class="post-read-more"><a href="single.html" title="Read Story"><i class="fa fa-link"></i></a></span>
										<div class="clearfix">
										</div>
									</div>-->
								</div>
							</div>
						</div>
					</div>
					
				</div>
				<!-- Pagination 
				<div class="bottompagination">
					<div class="navigation">
                        <nav class="pagination">
                            <span class="page-number"> &nbsp; &nbsp; Page 1 of 1 &nbsp; &nbsp; </span>
                        </nav>
					</div>
				</div>-->
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