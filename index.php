<?php
	include "header.php";
	$time = date("H:M");
	

  
?>
<!DOCTYPE html>
<html lang="en">

<body class="layout-default">
<!-- Begin Menu Navigation
================================================== -->	
<!-- End Menu Navigation
================================================== -->
<div class="site-content">
	<!-- Home Jumbotron
    ================================================== -->
	
	<section class="intro">
	<div class="wrapintro">
		<h5>
			<?php
				if(substr($time,0,2) >= 12)
				{
					echo 'Afternoon';
				}else if(substr($time,0,2) >= 00 && substr($time,0,2) < 12)
				{
					echo 'Morning';
				}
			?>
		</h5>
		<h1>Kasi Diski</h1>
		<h2 class="lead">"Thinking of researving this for ads</h2>
		<a target="_blank" href="ads.com" class="btn">Open Ad</a>
	</div>
	</section>
	<!-- Container
    ================================================== -->
	<div class="container">
		<div class="main-content">
			<!-- Featured
            ================================================== -->
			<section class="featured-posts">
			<div class="section-title">
				<h2><span>Featured</span></h2>
			</div>
			<div class="row listfeaturedtag">
				<!-- begin post -->
				<div class="col-sm-6">
					<div class="card">
						<div class="row">
							<div class="col-md-5 wrapthumbnail">
								<a href="single.html">
								<div class="thumbnail" style="background-image:url(assets/images/1.jpg);">
								</div>
								</a>
							</div>
							<div class="col-md-7">
								<div class="card-block">
									<h2 class="card-title"><a href="single.html">We all wait for summer</a></h2>
									<h4 class="card-text">This is changed. As I engage in the so-called “bull sessions” around and about the school, I too often find that most college men have...</h4>
									<div class="metafooter">
                                        <div class="wrapfooter">
											<span class="meta-footer-thumb">
											<img class="author-thumb" src="https://www.gravatar.com/avatar/b1cc14991db7a456fcd761680bbc8f81?s=250&d=mm&r=x" alt="John">
											</span>
											<span class="author-meta">
											<span class="post-name"><a target="_blank" href="#">John</a></span><br/>
											<span class="post-date">12 Jan 2018</span>
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
				</div>
				<!-- end post -->
				<!-- begin post -->
				<div class="col-sm-6">
					<div class="card">
						<div class="row">
							<div class="col-md-5 wrapthumbnail">
								<a href="single.html">
								<div class="thumbnail" style="background-image:url(assets/images/4.jpg);">
								</div>
								</a>
							</div>
							<div class="col-md-7">
								<div class="card-block">
									<h2 class="card-title"><a href="single.html">Powerful things you can do with the Markdown editor</a></h2>
									<h4 class="card-text">There are lots of powerful things you can do with the Markdown editor </h4>
									<div class="metafooter">
										<div class="wrapfooter">
											<span class="meta-footer-thumb">
											<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&d=mm&r=x" alt="Sal">
											</span>
											<span class="author-meta">
											<span class="post-name"><a target="_blank" href="#">Sal</a></span><br/>
											<span class="post-date">12 Jan 2018</span>
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
				</div>
				<!-- end post -->
			</div>
			</section>
			<!-- Posts Index
        ================================================== -->
			<section class="recent-posts row">
			<div class="col-sm-4">
				<div class="sidebar">
					<div class="sidebar-section">
						<h5><span>Newsletter</span></h5>
						<!-- Go to your Mailchimp account/Lists/Sign Up Forms/Embedded forms and replace the code below with your own  -->
						<!-- Begin MailChimp Signup Form -->
						<link href="https://cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
						<div id="mc_embed_signup">
							<form action="https://wowthemes.us11.list-manage.com/subscribe/post?u=8aeb20a530e124561927d3bd8&amp;id=8c3d2d214b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
								<div id="mc_embed_signup_scroll">
									<h2>Sign up to get our weekly free guide to selling digital downloads</h2>
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
						<h5><span>Useful</span></h5>
						<ul style="list-none;">
							<li><a target="_blank" href="https://m.do.co/c/84c9b45d0c47">Digital Ocean</a></li>
							<li><a target="_blank" href="https://www.cloudways.com/en/pricing.php?id=153986&a_bid=005da123">Cloudways</a></li>
							<li><a target="_blank" href="https://shareasale.com/r.cfm?b=875645&u=1087935&m=41388&urllink=&afftrack=">Page Speed Test</a></li>
							<li><a target="_blank" href="https://elementor.com/?ref=1556">Elementor Page Builder</a></li>
							<li><a target="_blank" href="https://www.wowthemes.net/category/freebies/">Our Freebies</a></li>
						</ul>
					</div>
					<div class="sidebar-section">
						<h5><span>Recommended</span></h5>
						<a href="https://easydigitaldownloads.com/?ref=2135" title="Sell digital downloads with WordPress, for free"><img src="https://easydigitaldownloads.com/wp-content/uploads/2015/02/300x250-2.png" alt="Sell digital downloads with WordPress, for free"/></a>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="section-title">
					<h2><span>All Stories</span></h2>
				</div>
				<div class="masonrygrid row listrecent">
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="card">
							<a href="single.html">
							<img class="img-fluid" src="assets/images/2.jpg" alt="Tree of Codes">
							</a>
							<div class="card-block">
								<h2 class="card-title"><a href="single.html">Tree of Codes</a></h2>
								<h4 class="card-text">The first mass-produced book to deviate from a rectilinear format, at least in the United States, is thought to be this 1863 edition of Red Riding Hood, cut into the...</h4>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
										<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&d=mm&r=x" alt="Sal">
										</span>
										<span class="author-meta">
										<span class="post-name"><a target="_blank" href="#">Sal</a></span><br/>
										<span class="post-date">12 Jan 2018</span>
										</span>
										<span class="post-read-more"><a href="single.html" title="Read Story"><i class="fa fa-link"></i></a></span>
										<div class="clearfix">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="card">
							<a href="single.html">
							<img class="img-fluid" src="assets/images/3.jpg" alt="Red Riding Hood">
							</a>
							<div class="card-block">
								<h2 class="card-title"><a href="single.html">Red Riding Hood</a></h2>
								<h4 class="card-text">The first mass-produced book to deviate from a rectilinear format, at least in the United States, is thought to be this 1863 edition of Red Riding Hood, cut into the...</h4>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
										<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&d=mm&r=x" alt="Sal">
										</span>
										<span class="author-meta">
										<span class="post-name"><a target="_blank" href="#">Sal</a></span><br/>
										<span class="post-date">12 Jan 2018</span>
										</span>
										<span class="post-read-more"><a href="single.html" title="Read Story"><i class="fa fa-link"></i></a></span>
										<div class="clearfix">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="card">
							<a href="single.html">
							<img class="img-fluid" src="assets/images/5.jpg" alt="Is Intelligence Enough">
							</a>
							<div class="card-block">
								<h2 class="card-title"><a href="single.html">Is Intelligence Enough</a></h2>
								<h4 class="card-text">Education must also train one for quick, resolute and effective thinking. To think incisively and to think for one’s self is very difficult. </h4>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
										<img class="author-thumb" src="https://www.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=250&d=mm&r=x" alt="Sal">
										</span>
										<span class="author-meta">
										<span class="post-name"><a target="_blank" href="#">Sal</a></span><br/>
										<span class="post-date">12 Jan 2018</span>
										</span>
										<span class="post-read-more"><a href="single.html" title="Read Story"><i class="fa fa-link"></i></a></span>
										<div class="clearfix">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end post -->
					<!-- begin post -->
					<div class="col-md-6 grid-item">
						<div class="card">
							<a href="single.html">
							<img class="img-fluid" src="assets/images/6.jpg" alt="Markdown Example">
							</a>
							<div class="card-block">
								<h2 class="card-title"><a href="single.html">Markdown Example</a></h2>
								<h4 class="card-text">You’ll find this post in your _posts directory. Go ahead and edit it and re-build the site to see your changes. You can rebuild the site in many different ways,...</h4>
								<div class="metafooter">
									<div class="wrapfooter">
										<span class="meta-footer-thumb">
										<img class="author-thumb" src="https://www.gravatar.com/avatar/b1cc14991db7a456fcd761680bbc8f81?s=250&d=mm&r=x" alt="John">
										</span>
										<span class="author-meta">
										<span class="post-name"><a target="_blank" href="#">John</a></span><br/>
										<span class="post-date">11 Jan 2018</span>
										</span>
										<span class="post-read-more"><a href="single.html" title="Read Story"><i class="fa fa-link"></i></a></span>
										<div class="clearfix">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- end post -->
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
	<!-- /.container -->
	<!-- Before Footer
    ================================================== -->
	<!-- Begin Footer
    ================================================== --
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