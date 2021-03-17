<div class="blog_footer blog_toppadder60 blog_bottompadder30">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="blog_footer_div">
						<div class="widget weidget_aboutus">
							<img src="images/logo2.png" class="img-fluid" alt="" style="width: 85%;">
							<p>Lorem ipsum dolor sit etonsecti ietur adipisicing elit, sed do eiusmoempior incididunt ut labore et dolore aigneia aliqua Ut enim ad minim Lorem ipseum dolor sit ametonsectietur.</p>
							<a href="#" class="blog_readmore">read more <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="6px"><path fill-rule="evenodd" fill="rgb(250, 191, 44)" d="M12.924,2.786 L10.035,0.042 C9.955,-0.026 9.867,-0.039 9.772,0.003 C9.677,0.045 9.629,0.120 9.629,0.230 L9.629,1.986 L0.242,1.986 C0.172,1.986 0.114,2.010 0.069,2.057 C0.024,2.104 0.001,2.164 0.001,2.237 L0.001,3.743 C0.001,3.816 0.024,3.876 0.069,3.923 C0.114,3.970 0.172,3.994 0.242,3.994 L9.629,3.994 L9.629,5.750 C9.629,5.854 9.677,5.930 9.772,5.977 C9.867,6.019 9.955,6.003 10.035,5.930 L12.924,3.154 C12.974,3.102 12.999,3.039 12.999,2.966 C12.999,2.899 12.974,2.839 12.924,2.786 Z"></path></svg></a>
							<div class="blog_followus_div">
								<ul>
									<li>Follow Us -</li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="blog_footer_div">
						<div class="widget widget_recent_post">
							<h3 class="widget-title">Recent News</h3>
							<ul>
							<?php
								$selectRecent = "SELECT * FROM `posts` WHERE `domain`='$domain' AND `tags` LIKE '%Recent News%' LIMIT 3";
								$queries->query($selectRecent);
								if($queries->count() > 0):
									while($recent = $queries->fetch()):
										$id = $recent->id;
										$title = $recent->title;
										$description = $recent->description;
										$category = $recent->category_id;
										$sub_category = $recent->sub_category_id;
										$image = $recent->image;
										$seo_url = $recent->seo_url;
										$date = $recent->date;
										$tags = $recent->tags;
										$author = $recent->authors;

										$image = "admin/uploads/".$image;
						
										if (strlen($description) > 50){
   											$description = substr($description, 0, 50) . '...';
										}
										$seo_url = "post?post=".$seo_url;
							?>
								<li>
									<div class="blog_recent_post">
										<div class="blog_recent_post_img">
											<img src="<?php echo $image; ?>" class="img-fluid" alt="">
										</div>
										<div class="blog_recent_post_content">
											<h4><a href="<?php echo $seo_url; ?>"><?php echo $title; ?></a></h4>
											<p><?php echo $date; ?> <a href="category?page=<?php echo $category; ?>">- <?php echo $category; ?></a></p>
										</div>
									</div>
								</li>
							<?php
									endwhile;
								endif;
							?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="blog_footer_div">
						<div class="widget widget_recent_news">
							<h3 class="widget-title">Popular Post</h3>
							<ul>
							<?php
								$getPopular = "SELECT * FROM `posts` WHERE `domain`='$domain' AND `tags` LIKE '%Popular Post%' LIMIT 3";
								$queries->query($getPopular);
								if($queries->count() > 0):
									while($getPop = $queries->fetch()):
										$id = $getPop->id;
										$title = $getPop->title;
										$description = $getPop->description;
										$category = $getPop->category_id;
										$sub_category = $getPop->sub_category_id;
										$image = $getPop->image;
										$seo_url = $getPop->seo_url;
										$date = $getPop->date;
										$tags = $getPop->tags;
										$author = $getPop->authors;

										$image = "admin/uploads/".$image;
						
										if (strlen($description) > 50){
   											$description = substr($description, 0, 50) . '...';
										}
										$seo_url = "post?post=".$seo_url;
							?>
								<li>
									<div class="blog_news">
										<div class="blog_news_title">
											<h4><a href="<?php echo $seo_url; ?>"><?php echo $title; ?></a></h4>
											<p><?php echo $date; ?> <a href="category?page=<?php echo $category; ?>">- <?php echo $category; ?></a></p>
										</div>
									</div>
								</li>
							<?php
									endwhile;
								endif;
							?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12">
					<div class="blog_footer_div">
						<div class="widget widget_newsletter">
							<h3 class="widget-title">Subscribe</h3>
							<div class="blog_newsletter">
								<p>Enter Your Email To Get Notified About Our New  Solutions.</p>
								<form class="form-inline" action="" method="POST">
									<div class="blog_form_group">
										<input type="text" class="form-control" name="email" placeholder=" Email Here...">
									</div>
									<button type="submit" name="submitMail" class="blog_newsletter_btn"><svg xmlns="http://www.w3.org/2000/svg" width="17px" height="16px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M16.914,0.038 C16.838,-0.030 16.731,-0.046 16.639,-0.002 L0.147,7.802 C0.058,7.844 0.001,7.934 0.000,8.034 C-0.001,8.134 0.054,8.225 0.142,8.269 L4.810,10.602 C4.895,10.645 4.997,10.635 5.074,10.577 L9.611,7.123 L6.049,10.855 C5.998,10.908 5.972,10.981 5.978,11.055 L6.333,15.760 C6.340,15.864 6.409,15.953 6.507,15.986 C6.533,15.994 6.560,15.999 6.586,15.999 C6.659,15.999 6.729,15.967 6.778,15.909 L9.256,12.986 L12.318,14.476 C12.384,14.508 12.461,14.509 12.529,14.480 C12.597,14.449 12.648,14.391 12.670,14.320 L16.989,0.310 C17.019,0.212 16.990,0.105 16.914,0.038 Z"/></svg></button>
								</form>
							</div>
							<p>512 Margoa Center Raod, Los Angeles, California,wh1200-124<a href="mailto:info@cryptoinject.com">info@cryptoinject.com</a> 1800-145-1547</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		if(isset($_POST['submitMail'])):
			$email = $_POST['email'];
			$date = $date = date("d-F-Y");
			$insertEmail = "INSERT INTO `newsletter` (`email`, `date`, `domain`) VALUES (?,?,?)";
			$params = [$email,$date,$domain];
			if($queries->query($insertEmail, $params)):
				echo ('<script>alert("Thanks For Subscribing to our Newsletter");</script>');
			endif;
		endif;
	?>
	<div class="blog_copyright_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<p>Copyright &copy; 2021 <a href="index">CryptoInject</a>. All Right Reserved.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12">
					<ul class="blog_footer_menu">
						<li><a href="about.html">About</a></li>
						<li><a href="contactus.html">Contact</a></li>
						<li><a href="terms_condition.html">Terms Of Services</a></li>
						<li><a href="privacy_policy.html">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Main js file Style-->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/theia-sticky-sidebar.js"></script>
<script src="js/plugins/swiper/swiper.min.js"></script>
<script src="js/plugins/magnific/jquery.magnific-popup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="/cryptoinject/pcw/assets/js/dist/app.js"></script> -->
<script src="pcw/assets/js/dist/app.js"></script>
<!--Main js file Style-->
<script>
    var premiumCryptocurrencyWidgets = {
        cryptoComareApiKey: '445cec2f0d8206b8044b33df53a505f6813266d7658fac47bbb5aa258515e885'
    }
</script>
              
<!-- <script>
    var premiumCryptocurrencyWidgets = {
        pluginUrl: '/assets/vendor/pcw',
        cryptoComareApiKey: '445cec2f0d8206b8044b33df53a505f6813266d7658fac47bbb5aa258515e885'
    }
</script> -->

            

</body>
</html>