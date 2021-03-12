<?php
	require_once('attach/top.php');
	ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
?>
</head>
<body class="homepage2 single_with_sidebar">
<?php
	require_once('attach/header.php');
?>
<?php
	if(isset($_GET['post'])):
		$post = $_GET['post'];
		$getPost = "SELECT * FROM `posts` WHERE domain='$domain' AND seo_url='$post'";
		$queries->query($getPost);
		$data = $queries->fetch();
		$id = $data->id;
		$title = $data->title;
		$description = $data->description;
		$category = $data->category_id;
		$sub_category = $data->sub_category_id;
		$image = $data->image;
		$seo_url = $data->seo_url;
		$date = $data->date;
		$tags = $data->tags;
		$author = $data->authors;

		$image = "/admin/uploads/".$image;
		$seo_urls = "post?post=".$seo_url;
	endif;
?>
	<div class="blog_breadcrumb_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="blog_breadcrumb_div">
						<h3><?php echo $title; ?></h3>
						<ol class="breadcrumb">
							<li>You are here:</li>
							<li><a href="index.html">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li class="active"><?php echo $category; ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog_main_wrapper blog_toppadder60 blog_bottompadder60">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="blog_post_style2 blog_single_div">
						<div class="blog_post_style2_img wow fadeInUp">
							<img src="<?php echo $image; ?>" class="img-fluid" alt="">
						</div>
						<div class="blog_post_style2_content wow fadeInUp">
							<h3><?php echo $title; ?></h3>
							<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> <?php echo $author; ?></a></div> 
							<ul class="blog_meta_tags">
								<li><span class="blog_bg_blue"><?php echo $date; ?></span></li>
							</ul> 
							<p><?php echo $description; ?></p>
						</div>
					</div>
					<div class="blog_comment_div">
						<h3 class="wow fadeInUp">Comments </h3>
						<ol class="comment-list">
							<?php
							$getComment = "SELECT * FROM `comments` WHERE domain='$domain' AND seo_url='$seo_url'";
							$queries->query($getComment);
							if($queries->count() > 0):
								while($gcomment = $queries->fetch()):
								$id = $gcomment->id;
								$name = $gcomment->name;
								$email = $gcomment->email;
								$comment = $gcomment->comment;
								$commentDate = $gcomment->date;
							?>
							<li class="wow fadeInUp">
								<div class="blog_comment">
									<div class="blog_comment_img">
										<img src="https://via.placeholder.com/70x70" class="img-fluid" alt="">
									</div>
									<div class="blog_comment_data">
										<h3><?php echo $name; ?> <span>- <?php echo $commentDate; ?></span></h3>
										<p><?php echo $comment; ?></p>
									</div>
								</div>
							</li>
							<?php
								endwhile;
							endif;
							?>
						</ol>
					</div>
					<div class="blog_comment_formdiv wow fadeInUp">
						<h3>Leave Comments</h3>
						<form class="comment-form" action="" method="POST">
							<div class="blog_row">
								<div class="blog_halfbox">
									<div class="blog_form_group">
										<input type="text" class="form-control" name="name" placeholder="Enter Your Name">
									</div>
								</div>
								<div class="blog_halfbox">
									<div class="blog_form_group">
										<input type="text" class="form-control" name="email" placeholder="Enter Your Email">
									</div>
								</div>
							</div>
							<div class="blog_row">
								<div class="blog_form_group">
									<textarea class="form-control" name="comment" placeholder="Comment" rows="5"></textarea>
								</div>
							</div>
							<div class="blog_row">
								<button class="blog_btn blog_bg_pink" type="submit" name="submitComment">Post comment</button>
							</div>
						</form>
					</div>
					<?php
					if(isset($_POST['submitComment'])):
						$name = $_POST['name'];
						$emailComment = $_POST['email'];
						$comment = $_POST['comment'];
						$dateco = date("d-F-Y");
						$insertComment = "INSERT INTO `comments`(`name`, `email`, `comment`, `date`, `seo_url`, `domain`) VALUES (?,?,?,?,?,?)";
						$paramComment = [$name, $emailComment, $comment, $dateco, $seo_url, $domain];
						if($queries->query($insertComment, $paramComment)):
							// echo "<meta http-equiv='refresh' content='0'>";
							echo "<script> window.open('post?post=$seo_url','_self'); </script>";
						endif;
					endif;
					?>
				</div>

				<div class="col-lg-3 col-md-12 col-sm-12 col-12 theiaStickySidebar">
					<div class="blog_sidebar">
						<div class="widget widget_social wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_pink">CONNECT</h3>
								</div>
							</div>
							<ul>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-facebook"></i>
										<h2>62.5K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-twitter"></i>
										<h2>62K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-youtube-play"></i>
										<h2>45K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-instagram"></i>
										<h2>62.5K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-pinterest-p"></i>
										<h2>62K</h2>
										<p>Followers</p>
									</div>
								</li>
								<li>
									<div class="widget_social_link">
										<i class="fa fa-rss"></i>
										<h2>45K</h2>
										<p>Followers</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="widget widget_recent_post wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_orange">What’s hot</h3>
								</div>
							</div>
							<ul>
								<li>
									<div class="blog_recent_post">
										<div class="blog_recent_post_img">
											<img src="<?php echo $image; ?>" class="img-fluid" alt="">
										</div>
										<div class="blog_recent_post_content">
											<h4><a href="#"><?php echo $title; ?></a></h4>
											<p><?php echo $date; ?> <a href="#">- <?php echo $category; ?></a></p>
										</div>
									</div>
								</li>
							</ul>
						</div>
						<div class="widget widget_instagram_news wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_pink">Instagram</h3>
								</div>
							</div>
							<ul>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
								<li>
									<a href="#"><img src="https://via.placeholder.com/75x75" class=
									"img-fluid" alt=""></a>
									<div class="blog_overlay"></div>
									<div class="blog_overlay_btndiv"><a href="images/slider1.jpg" class="fa fa-search blog_popup"></a></div>
								</li>
							</ul>
						</div>
						<div class="widget widget_categories wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_lightgreen">categories</h3>
								</div>
							</div>
							<ul>
								<?php
									$getCat = "SELECT * FROM `categories` WHERE domain='$domain'";
									$queries->query($getCat);
									if($queries->count() > 0):
										while($getCate = $queries->fetch()):
										$categoryr = $getCate->category_name;
										$cateurl = $getCate->seo_url;
									
								?>
								<li>
									<a href="category?page=<?php echo $cateurl; ?>"><?php echo $categoryr; ?> 
										<!-- <span>(02)</span> -->
									</a>
								</li>
								<?php
										endwhile;
									endif;
								?>
							</ul>
						</div>
						<div class="widget widget_newsletter wow fadeInUp">
							<div class="blog_main_heading_div">
								<div class="blog_heading_div">
									<h3 class="blog_bg_pink">Subscribe</h3>
								</div>
							</div>
							<div class="blog_newsletter">
								<p>Enter Your Email To Get Notified.</p>
								<form class="form-inline" action="" method="POST">
									<div class="blog_form_group">
										<input type="text" class="form-control" name="email" placeholder=" Insert Email Here...">
									</div>
									<button class="blog_newsletter_btn" type="submit" name="submitMail"><svg xmlns="http://www.w3.org/2000/svg" width="17px" height="16px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M16.914,0.038 C16.838,-0.030 16.731,-0.046 16.639,-0.002 L0.147,7.802 C0.058,7.844 0.001,7.934 0.000,8.034 C-0.001,8.134 0.054,8.225 0.142,8.269 L4.810,10.602 C4.895,10.645 4.997,10.635 5.074,10.577 L9.611,7.123 L6.049,10.855 C5.998,10.908 5.972,10.981 5.978,11.055 L6.333,15.760 C6.340,15.864 6.409,15.953 6.507,15.986 C6.533,15.994 6.560,15.999 6.586,15.999 C6.659,15.999 6.729,15.967 6.778,15.909 L9.256,12.986 L12.318,14.476 C12.384,14.508 12.461,14.509 12.529,14.480 C12.597,14.449 12.648,14.391 12.670,14.320 L16.989,0.310 C17.019,0.212 16.990,0.105 16.914,0.038 Z"/></svg></button>
								</form>
							</div>
							<?php
								if(isset($_POST['submitMail'])):
									$email = $_POST['email'];
									$date = date("d-F-Y");
									$insertEmail = "INSERT INTO `newsletter` (`email`, `date`, `domain`) VALUES (?,?,?)";
									$params = [$email,$date,$domain];
									if($queries->query($insertEmail, $params)):
										echo ('<script>alert("Thanks For Subscribing to our Newsletter");</script>');
									endif;
								endif;
							?>
						</div>
						<div class="ads_widget wow fadeInUp">
							<a href="#"><img src="https://via.placeholder.com/280x350?text=Ads%20Area" class="img-fluid" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
	require_once('attach/footer.php');
?>