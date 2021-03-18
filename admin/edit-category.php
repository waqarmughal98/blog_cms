<?php
    include('assets/attach/top.php');
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
?>
<style>
	.upload{
		color: #e7368d;
		border: solid 1px #e7368d;
	}
</style>
	</head>
	<body>
		<!--Preloader-->
<?php
    include('assets/attach/sidebar.php');
?>
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">Add-Categories</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-categories</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->

                    <?php
                        if(isset($_GET['id'])):
                            $pageId = $_GET['id'];

                            $getPage = "SELECT * FROM `categories` WHERE id='$pageId' AND domain='$domain'";
                            $queries->query($getPage);
                            if($queries->count() > 0):
                                while($row = $queries->fetch()):
                                    $category_name = $row->category_name;
                                    $seo_url  = $row->seo_url;
                    ?>
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post" enctype="multipart/form-data"> 
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about category</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category Name</label>
															<input type="text" id="title" name="category_name" class="form-control" placeholder="Enter your title" value="<?php echo $category_name; ?>">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">SEO Url</label>
															<input type="text" id="meta_title" name="seo_url" class="form-control" placeholder="Enter your seo url" value="<?php echo $seo_url; ?>">
														</div>
													</div>
													<!--/span-->
												</div>
												<hr class="light-grey-hr"/>
												<div class="form-actions">
													<button class="btn btn-success" type="submit" name="publish"> <i class="fa fa-check"></i> <span>Update</span></button>
													<div class="clearfix"></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
                    
                    <?php
                                endwhile;
                            endif;
                        endif;
						if(isset($_POST['publish'])):
							$category_name = $_POST['category_name'];
							
							// Seo Url
                            $seoUrl = $_POST['seo_url'];
                            
                            // Make Seo Friendly Url
                            function seoUrl($seoUrl) {
                                //Lower case everything
                                $seoUrl = strtolower($seoUrl);
                                //Make alphanumeric (removes all other characters)
                                $seoUrl = preg_replace("/[^a-z0-9_\s-]/", "", $seoUrl);
                                //Clean up multiple dashes or whitespaces
                                $seoUrl = preg_replace("/[\s-]+/", " ", $seoUrl);
                                //Convert whitespaces and underscore to dash
                                $seoUrl = preg_replace("/[\s_]/", "-", $seoUrl);
                                return $seoUrl;
                            }
                            $url = seoUrl($seoUrl);
							
							// Validate Seo Url
                            $checkUrl = "SELECT * FROM `categories` WHERE seo_url='$url' AND id!='$pageId'";
                            $queries->query($checkUrl);
                            if($queries->count() > 0):
                                echo("<script> alert('Url is alredy exist, Please try another Url'); </script>");
                                exit();
                            endif;

							$insertBlog = "UPDATE `categories` SET `category_name`='$category_name', `seo_url`='$url' WHERE id='$pageId' AND domain='$domain'";
							if($queries->query($insertBlog)):
								echo '<script>alert("Category Updated!");</script>';
							endif;
							echo("<script> window.open('all-categories.php','_self'); </script>");
						endif;
					?>

				</div>
<!-- jQuery -->
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Footer -->
<?php
    include('assets/attach/footer.php');
?>