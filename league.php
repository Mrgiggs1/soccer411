<?php
	include "header.php";
	require("checklogin.php");
	
	check_login();
	
	
	  echo $_SERVER['PATH_INFO'];
    // outputs '/63.html'

	
?>

<Files news>
    ForceType application/x-httpd-php
</Files>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="icon" href="assets/images/favicon.ico">
<title>League</title>
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
				
					
					<h2><span>League</span> </h2>
				</div>
				
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
													<th scope="col">MP</th>
													<th scope="col">W</th>
													<th scope="col">D</th>
													<th scope="col">L</th>
													<th scope="col">GF</th>
													<th scope="col">GA</th>
													<th scope="col">GD</th>
													<th scope="col">PTS</th>
													<th scope="col">LAST 5</th>
													
													
												</tr>
											</thead>
								<?php			
									$quer = "SELECT * FROM team , league WHERE team.teamId = league.teamId order by teamName";
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
											<td><?php echo " ".$team['played'] ?></td>
											<td><?php echo " ".$team['win'] ?></td>
											<td><?php echo " ".$team['draw'] ?></td>
											<td><?php echo " ".$team['lose'] ?></td>
											<td><?php echo " ".$team['goals_for'] ?></td>
											<td><?php echo " ".$team['goals_against'] ?></td>
											<td><?php echo " ".$team['goals_diff'] ?></td>
											<td><?php echo " ".$team['points'] ?></td>
											<td></td>
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