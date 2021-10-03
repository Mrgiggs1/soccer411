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
<body class="layout-page">
<!-- Begin Menu Navigation
================================================== --
<!-- End Menu Navigation
================================================== -->
<?php
	$id = $_GET['id'];
	$select = "select * from team where teamId='".$id."'";
	$run  = mysqli_query($con,$select);
	$row = mysqli_fetch_assoc($run);
?>
<div class="site-content">
	<div class="container">
		<!-- Content
    ================================================== -->
		<div class="main-content">
			<!-- Begin Article
            ================================================== -->
			<div class="row">
				<!-- Sidebar -->
				<div class="col-sm-4">
					<div class="sidebar">
						<div class="sidebar-section">
							<h5><span>Ads</span></h5>
							<!-- Go to your Mailchimp account/Lists/Sign Up Forms/Embedded forms and replace the code below with your own  -->
                            <!-- Begin MailChimp Signup Form -->
                            <link href="https://cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                            <div id="mc_embed_signup">
                                <form action="https://wowthemes.us11.list-manage.com/subscribe/post?u=8aeb20a530e124561927d3bd8&amp;id=8c3d2d214b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">
                                        <h2>Adverts</h2>
                                        <div class="mc-field-group">
                                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="E-mail Address">
                                        </div>
                                        <div id="mce-responses" class="clear">
                                            <div class="response" id="mce-error-response" style="display:none">
                                            </div>
                                            <div class="response" id="mce-success-response" style="display:none">
                                            </div>
                                        </div>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_8aeb20a530e124561927d3bd8_8c3d2d214b" tabindex="-1" value="">
                                        </div>
                                        <div class="clear">
                                            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <script type='text/javascript' src='https://s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                            <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[3]='MMERGE3';ftypes[3]='text';fnames[1]='MMERGE1';ftypes[1]='text';fnames[2]='MMERGE2';ftypes[2]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='MMERGE5';ftypes[5]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                            <!--End mc_embed_signup-->
						</div>
						<div class="sidebar-section">
							<h5><span>Ads</span></h5>
							<ul style="list-none;">
								<li><a target="_blank" href="">Ad 1</a></li>
								<li><a target="_blank" href="">Ad 2</a></li>
								<li><a target="_blank" href="">Ad 3</a></li>
								<li><a target="_blank" href="">Ad 4</a></li>
								<li><a target="_blank" href="">Ad 5</a></li>
								<li><a target="_blank" href="">Ad 6</a></li>	
							</ul>
						</div>
					</div>
				</div>
				<!-- Post -->
				<div class="col-sm-8">
					<div class="mainheading">
						<!-- Post Categories 
						<div class="after-post-tags">
							<ul class="tags">
								<li>
								<a href="#">bootstrap</a>
								</li>
								<li>
								<a href="#">tutorial</a>
								</li>
							</ul>
						</div>-->
						
						<!-- End Categories -->
						<!-- Post Title -->
						<h1 class="posttitle"><?php echo $row['teamName']; ?></h1>
					</div>
					<!-- Post Featured Image <img style="width:30px; height:30px; border-radius:50%" alt="No Logo" src="<?php echo $team['logo']; ?>">-->
					<img class="featured-image img-fluid" style="width:80%; height:30%; border-radius:5%;"  src="<?php echo $row['logo']; ?>" alt="">
					<!-- End Featured Image -->
					<!-- Post Content -->
					<div class="article-post">
						
						<blockquote>
							<p>
								<?php echo $row['teamName']; ?> is a football club owned by <?php echo $row['teamOwner']; ?>, This team was created on <?php echo $row['createdDate']; ?>
								, they are participating at the current  <?php echo $row['league']; ?>.<br>
							</p>
						</blockquote>
						
						<div class="clearfix">
						</div>
					</div>
					<!-- Post Date -->
					<p>
						<small>
						<span class="post-date"><time class="post-date" datetime="<?php echo date("y-m-d"); ?>">Today: <?php echo date("Y-M-d"); ?></time></span>
						</small>
					</p>
					<!-- Prev/Next -->
					<div class="row PageNavigation mt-4 prevnextlinks">
						<div class="col-md-6 rightborder pl-0">
							<a class="thepostlink">Announcements</a>
						</div>
						<div class="col-md-6 text-right pr-0">
							<a class="thepostlink"></a>
						</div>
					</div>
					<!-- End Prev/Next -->
					<!-- Author Box -->
					<div class="row post-top-meta">
						<div class="col-md-2">
							<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&amp;d=mm&amp;r=x" alt="">
						</div>
						<div class="col-md-10">
							<?php echo $row['teamName']; ?> Media <br><a target="_blank" href="https://fb.me/"><i class="fa fa-facebook"></i></a>
							<span class="author-description">We as <?php echo $row['teamName']; ?>, we are promising to win all the remaining games for us to qualify for top 8 or even win the <?php echo $row['league']; ?></span>
						</div>
					</div>
					<!-- Begin Comments
                    ================================================== -->
					
				</div>
				
				<!-- End Post -->
			</div>
			<!-- End Article
            ================================================== -->
		</div>
		
	</div>
	<!-- /.container -->
	<!-- Footer
	
	<!-- End Footer
    ================================================== -->
</div>
<?php
		include "footer.php";
	?>
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