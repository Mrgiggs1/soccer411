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
					<a href="dashboard.php">
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
					<h2><span>Teams</span></h2>
				</div>
				<a href="addTeam"><button type="button" class="btn customeButAdd">Add Team</button></a>
				<div class="masonrygrid row listrecent">
				
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-12 grid-item">
						<div class="card">
							<div class="card-block">
								<table  style="width:100%; text-align: center; "  class="table col-xl-12 col-lg-6 col-md-5 col-sm-5">
											<thead>
												<tr>
													<th scope="col"></th>
													<th scope="col">Club</th>
													<th scope="col">Owner</th>
													<th  scope="col" >Email</th>
													<th scope="col">Tel</th>
													<th scope="col">League</th>
												</tr>
											</thead>
								<?php			
									$quer = "SELECT * FROM team order by teamName";
									$result = mysqli_query($con,$quer);
									$counter=1;
									
									while($team = mysqli_fetch_assoc($result))
									{
									?>
									<tbody>
										<tr>
											<th colspan="2" scope="row"> 
											
												<div style="float:left; margin-left:10px;">
												<?php echo $counter." "; ?>&nbsp;&nbsp;&nbsp;&nbsp;
													<a href="team_Profile.php?id=<?php echo $team['teamId']; ?>">
														<img style="width:30px; height:30px; border-radius:50%" alt="No Logo" src="<?php echo $team['logo']; ?>">
													</a>
													&nbsp;&nbsp;&nbsp;&nbsp;
													<?php echo " ".$team['teamName'] ?>
												</div>
											</th>									
											<td><?php echo $team['teamOwner'] ?></td>
											<td><?php echo $team['email'] ?></td>
											<td><a href="tel:0<?php echo $team['landLine'] ?>">0<?php echo $team['landLine'] ?></a></td>
											
											<td><?php echo $team['league'] ?></td>
										</tr>
									
									<?php
										$counter++;
										
										}
								?>
									</tbody>	
								</table>
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