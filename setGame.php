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
							<li><a href="teams.php">Teams</a></li>
							<li><a href="">League</a></li>
							<li><a href="">Players</a></li>
							<li><a href="setGame.php">Games</a></li>
							
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
				<div class="masonrygrid row listrecent">
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-12 grid-item">
						<div class="card">
							<div class="card-block">
								<form method="POST">
								<table border="1px" style="width:100%; text-align: center;" align="center-desk" class="col-xl-12 col-lg-6 col-md-5 col-sm-5">
									<tr>
										<th><div id="txt"> </div> </th>
									</tr>
									<br>
									<tr>
									
										<th>Home Team</th>
										<th>Away Team</th><br>
										<th>Match Day</th>
										<th>Game Time</th>
										<th></th>
									</tr>	
									<br>
									<tr>
										
										<td>
											<select  class="form-control" name="homeTeam" ><optgroup>
																	<?php
																		$query = "SELECT * FROM league inner join team ON league.teamID = team.teamID";
																		$result = mysqli_query($con,$query);
																		
																	while($rows = mysqli_fetch_assoc($result))
																	{
																		echo "<option>";													
																		echo $rows['teamName'];														
																		echo "</option>";
																	}
																	?>
											</optgroup></select>
										</td>
									
										
										<td>
											<select  class="form-control" name="awayTeam"><optgroup>
														<?php
															$query = "SELECT * FROM league inner join team ON league.teamID = team.teamID";
															$result = mysqli_query($con,$query);
															
														while($rows = mysqli_fetch_assoc($result))
														{
															echo "<option>";													
															echo $rows['teamName'];														
															echo "</option>";
														}
														?>
											</optgroup></select>
										</td>
										<td>
											<label for="gameDate"></label>
											<input type="date" required id="gameDate" name="gameDate">
										</td>
										
										<td>
											<label><select required class="form-control" id="gameTime" name="gameTime" ><optgroup>
												<option value="10:00">10:00</option>
												<option value="12:00">12:00</option>
												<option value="14:00">14:00</option>
												<option value="16:00">16:00</option>
												<option value="18:00">18:00</option>
        									</optgroup>
        									</select>
        									</label>
										</td>
									
										<td>
											<input align="text-center" type="submit" name="submit" value="confirm">
										</td>
										
									</tr>
								</table><br><br>
	
							</form>
								<?php
								$today = date("Y-m-d");
								$time = date("H:M");
								if(isset($_POST['submit']))
								{
									$homeTeam = $_POST['homeTeam'];
									$awayTeam = $_POST['awayTeam'];
									$matchDate = $_POST['gameDate'];
									$matchTime = $_POST['gameTime'];
									
									
									
									if($matchDate > $today)
									{
											if($homeTeam != $awayTeam)
											{
												$sel = "select * from game where home='".$homeTeam."' AND away='".$awayTeam."' AND gameDate='".$matchDate."'";
												$run = mysqli_query($con,$sel);
												$rowNum = mysqli_num_rows($run);
												if($rowNum>0)
												{
													echo '<script type="text/javascript"> alert("Game date is already set") </script>';
												}
												else{
													//gameID home scoreH away scoreW gameDate gameTime

													$gameID = substr($homeTeam,0,4).'_'.substr($awayTeam,0,4);
													
													$insert_game= "INSERT INTO game values('$gameID','$homeTeam','0', '$awayTeam','0','$matchDate','$matchTime')";
													$resul = mysqli_query($con,$insert_game);
													if($resul)
													{
														echo '<script type="text/javascript"> alert("Game date is set") </script>';
													}
													else{
														echo '<script type="text/javascript"> alert("Failed to set Match date") </script>';
													}
												}
												
												
												
											}
											else{
												echo '<script type="text/javascript"> alert("Choose different Teams for Home And Away") </script>';
											}
									}
									else
									{
										echo '<script type="text/javascript"> alert("You can not arrange a match on previous date or today") </script>';
									}
								}
								
								?>
							
							<!----Upcoming games-->
								<table class="col-xl-8 col-lg-6 col-md-5 col-sm-5" style="width: 100%">
								<?php
									$sel = "select * from game where gameDate >= '".$today."' order by gameDate";
									$res = mysqli_query($con,$sel);
									
									
									$counter=1;
									
									while($pick = mysqli_fetch_assoc($res))
									{
								?>
									
										
											<tr>
												<td>Fixture <?php echo $counter ?></td>
												<td><?php echo $pick['home'] ?></td>
												<td><?php echo $pick['away'] ?></td>
												<td><?php echo $pick['gameDate'] ?></td>
												<td><?php echo $pick['gameTime'] ?></td>
												<!--<td>
													<a href="updateFixture.php?id=<?php  echo $pick['gameID']; ?>">
														<i class="material-icons">edit</i>													
													</a>
												</td>-->
												<td>
													<a href="deleteFixture.php?id=<?php  echo $pick['gameID']; ?>">
														<i onclick="return confirm('Are you sure');" class="material-icons">delete</i>
													</a>
												</td>
											</tr>
										
										
										
									<?php
										$counter++;
									}
									
									
								?>
									</table>
								<br>
								
							</div>
						</div>
					</div>
					
				</div>
	
			</div><!--teams div-->
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