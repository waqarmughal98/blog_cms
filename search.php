<?php
    require_once('attach/top.php');
?>
</head>
<body>
<?php
    require_once('attach/header.php');
?>
	<?php
		if(isset($_GET['search'])):
			$search = $_GET['search'];
			$search = ucwords($search);
		endif;
	?>
	<div class="blog_breadcrumb_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="blog_breadcrumb_div">
						<h3>Result : <?php echo $search; ?></h3>
						<ol class="breadcrumb">
							<li>You Searched:</li>
							<li><?php echo $search; ?></li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog_main_wrapper blog_toppadder60 blog_bottompadder40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="blog_food_health blog_topheading_slider_nav blog_topheading_style2 blog_innerpages">
						<div class="blog_food_style2">
							<?php
							$getPost = "SELECT * FROM `posts` WHERE `title` LIKE '%$search%' LIMIT 2";
							$queries->query($getPost);
							if($queries->count() > 0):
								while($row = $queries->fetch()):
									$id = $row->id;
									$title = $row->title;
									$description = $row->description;
									$category = $row->category_id;
									$sub_category = $row->sub_category_id;
									$image = $row->image;
									$seo_url = $row->seo_url;
									$date = $row->date;
									$tags = $row->tags;
									$author = $row->authors;

									$image = "/admin/uploads/".$image;

									if (strlen($description) > 50){
   										$description = substr($description, 0, 50) . '...';
									}
									$seo_url = "post?post=".$seo_url;
							?>
								<div class="blog_food_bigdiv wow fadeInUp">
									<div class="blog_post_style2">
										<div class="blog_post_style2_img">
											<img src="<?php echo $image;?>" class="img-fluid" alt="">
										</div>
										<div class="blog_post_style2_content">
											<h3><a href="<?php echo $seo_url; ?>"><?php echo $title; ?></a></h3>
											<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> <?php echo $author; ?></a></div> 
											<ul class="blog_meta_tags">
											<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
											
											</ul> 
											<p><?php echo $description; ?></p>
											<a href="<?php echo $seo_url; ?>" class="blog_readmore">read more <svg xmlns="http://www.w3.org/2000/svg" width="13px" height="6px"><path fill-rule="evenodd" fill="rgb(255, 54, 87)" d="M12.924,2.786 L10.035,0.042 C9.955,-0.026 9.867,-0.039 9.772,0.003 C9.677,0.045 9.629,0.120 9.629,0.230 L9.629,1.986 L0.242,1.986 C0.172,1.986 0.114,2.010 0.069,2.057 C0.024,2.104 0.001,2.164 0.001,2.237 L0.001,3.743 C0.001,3.816 0.024,3.876 0.069,3.923 C0.114,3.970 0.172,3.994 0.242,3.994 L9.629,3.994 L9.629,5.750 C9.629,5.854 9.677,5.930 9.772,5.977 C9.867,6.019 9.955,6.003 10.035,5.930 L12.924,3.154 C12.974,3.102 12.999,3.039 12.999,2.966 C12.999,2.899 12.974,2.839 12.924,2.786 Z"></path></svg></a>
										</div>
									</div>
								</div>
								<?php 
								// endif; 
								endwhile;
							endif;?>
						</div>
						<div class="blog_technology_slider">
						<?php
							$getPost = "SELECT * FROM `posts` WHERE `title` LIKE '%$search%'";
							$queries->query($getPost);
							if($queries->count() > 0):
								$row = $queries->fetchAll();
								unset($row[0]);
								unset($row[1]);
								foreach($row as $data):
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

									if (strlen($description) > 50){
   										$description = substr($description, 0, 50) . '...';
									}
									$seo_url = "post?post=".$seo_url;
							?>
							<div class="blog_post_style2 wow fadeInUp">
								<div class="blog_post_style2_img">
									<img src="<?php echo $image; ?>" class="img-fluid" alt="">
								</div>
								<div class="blog_post_style2_content">
									<h3><a href="<?php echo $seo_url; ?>"><?php echo $title; ?></a></h3>
									<div class="blog_author_data"><a href="<?php echo $seo_url; ?>"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> <?php echo $author; ?></a></div> 
									<ul class="blog_meta_tags">
										<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
										
									</ul> 
									<p><?php //echo $description; ?></p>
								</div>
							</div>
							<?php
								endforeach;
							else:
								echo"<h1>No Result Found!</h2>";
							endif;
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <div class="blog_instagram_slider">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center blog_bottompadder30">
					<p><svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"><path fill-rule="evenodd"  fill="rgb(0, 0, 0)" d="M17.515,23.999 L6.485,23.999 C2.909,23.999 -0.000,21.090 -0.000,17.514 L-0.000,6.484 C-0.000,2.908 2.909,-0.001 6.485,-0.001 L17.515,-0.001 C21.091,-0.001 24.000,2.908 24.000,6.484 L24.000,17.514 C24.000,21.090 21.091,23.999 17.515,23.999 ZM22.061,6.484 C22.061,3.977 20.022,1.938 17.515,1.938 L6.485,1.938 C3.978,1.938 1.939,3.977 1.939,6.484 L1.939,17.514 C1.939,20.021 3.978,22.060 6.485,22.060 L17.515,22.060 C20.022,22.060 22.061,20.021 22.061,17.514 L22.061,6.484 ZM18.067,6.902 C17.812,6.902 17.562,6.798 17.381,6.618 C17.201,6.437 17.097,6.188 17.097,5.933 C17.097,5.677 17.201,5.427 17.381,5.247 C17.562,5.066 17.812,4.963 18.067,4.963 C18.322,4.963 18.572,5.066 18.752,5.247 C18.933,5.427 19.036,5.677 19.036,5.933 C19.036,6.188 18.933,6.437 18.752,6.618 C18.572,6.798 18.322,6.902 18.067,6.902 ZM16.370,15.158 C15.514,16.312 14.259,17.064 12.837,17.275 C12.569,17.315 12.302,17.334 12.036,17.334 C10.890,17.334 9.779,16.969 8.842,16.274 C7.687,15.417 6.935,14.163 6.724,12.741 C6.513,11.319 6.869,9.900 7.725,8.746 C8.582,7.591 9.836,6.839 11.258,6.628 C11.782,6.550 12.313,6.550 12.837,6.628 C13.988,6.798 15.031,7.323 15.853,8.146 C16.676,8.969 17.201,10.011 17.371,11.162 C17.582,12.584 17.226,14.003 16.370,15.158 ZM15.453,11.447 C15.229,9.936 14.063,8.771 12.553,8.546 C12.385,8.521 12.216,8.509 12.048,8.509 C11.879,8.509 11.710,8.521 11.543,8.546 C10.633,8.681 9.830,9.162 9.282,9.900 C8.735,10.639 8.507,11.547 8.642,12.456 C8.777,13.366 9.258,14.169 9.997,14.717 C10.735,15.264 11.643,15.492 12.553,15.357 C14.430,15.078 15.732,13.324 15.453,11.447 Z"/></svg> @ CryptoInject</p>
				</div>
			</div>
		</div>
		<div class="blog_insta_div">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul>  
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul>  
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul>  
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul>
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul> 
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul> 
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul> 
							</div> 
						</div>
					</div>
					<div class="swiper-slide">
						<div class="blog_post_slider_wrapper"> 
							<a href="#" class="blog_post_slider_img"> 
								<img src="https://via.placeholder.com/301x301" class="img-fluid" alt="">
							</a> 
							<div class="blog_post_slider_content"> 
								<div class="blog_author_data"><a href="#"><img src="https://via.placeholder.com/34x34" class="img-fluid" alt="" width="34" height="34"> John Doe</a></div> 
								<ul class="blog_meta_tags">
									<li><span class="blog_bg_blue"><svg xmlns="http://www.w3.org/2000/svg" width="12px" height="7px"><path fill-rule="evenodd"  fill="rgb(255, 255, 255)" d="M11.829,3.074 C11.732,2.948 9.422,-0.000 6.468,-0.000 C3.514,-0.000 1.203,2.948 1.106,3.074 C0.916,3.320 0.916,3.678 1.106,3.925 C1.203,4.050 3.514,6.999 6.468,6.999 C9.422,6.999 11.732,4.050 11.829,3.925 C12.020,3.678 12.020,3.320 11.829,3.074 ZM7.370,1.771 C7.569,1.651 7.846,1.788 7.989,2.077 C8.132,2.366 8.087,2.696 7.888,2.816 C7.689,2.936 7.412,2.799 7.269,2.510 C7.126,2.221 7.171,1.890 7.370,1.771 ZM6.468,5.930 C4.404,5.930 2.668,4.183 2.067,3.499 C2.473,3.037 3.397,2.091 4.589,1.525 C4.357,1.915 4.220,2.381 4.220,2.883 C4.220,4.251 5.227,5.360 6.468,5.360 C7.709,5.360 8.715,4.251 8.715,2.883 C8.715,2.381 8.579,1.915 8.346,1.525 C9.539,2.091 10.463,3.037 10.869,3.499 C10.268,4.184 8.531,5.930 6.468,5.930 Z"/></svg> <?php echo $date; ?></span></li> 
									
								</ul>
							</div> 
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>	 -->
<?php
    require_once('attach/footer.php');
?>