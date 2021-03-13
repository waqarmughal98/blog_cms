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
						  <h5 class="txt-dark">Edit-Post</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>edit-post</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
                    <?php
                        if(isset($_GET['id'])):
                            $gid = $_GET['id'];
                            $selectpost = "SELECT * FROM posts WHERE id='$gid' AND domain='$domain'";
                            $queries->query($selectpost);
                            if($queries->count() > 0):
                                $old = $queries->fetch();
                                $oldtitle = $old->title;
                                $olddescription = $old->description;
                                $oldmeta_title = $old->meta_title;
                                $oldmeta_description = $old->meta_description;
                                $oldcategory_id = $old->category_id;
                                $oldsub_category_id = $old->sub_category_id;
                                $oldimage = $old->image;
                                $oldseo_url = $old->seo_url;
                                $oldtags = $old->tags;
                                $oldauthors = $old->authors;
                                $oldstatus = $old->status;
                            endif;
                        endif;
                    ?>

					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="post" enctype="multipart/form-data"> 
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about post</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Title</label>
															<input type="text" id="title" name="title" class="form-control" placeholder="Enter your title" value="<?php echo($oldtitle); ?>">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Meta title</label>
															<input type="text" id="meta_title" name="meta_title" class="form-control" placeholder="Enter your Meta title" value="<?php echo($oldmeta_title); ?>">
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<!--/span-->
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Meta description</label>
															<input type="text" id="meta_description" name="meta_description" class="form-control" placeholder="Enter your Meta description" value="<?php echo($oldmeta_description); ?>">
														</div>
													</div>
													<!--/span-->
												</div>
                                                <!-- Row -->
												<h6 class="txt-dark capitalize-font mt-15"><i class="zmdi zmdi-comment-text mr-10"></i>Post Description</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
                                                            <textarea name="description" id="editor1" rows="10" cols="80"><?php echo($olddescription); ?></textarea>
														</div>
													</div>
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Author</label>
															<input type="text" id="author" name="author" class="form-control" placeholder="Enter Author" value="<?php echo($oldauthors); ?>">
															<!-- <select class="form-control" data-placeholder="Choose a Category" name="category">
                                                                <option value="" selected disabled>Please Select Author</option>
																<option value="Admin">Admin</option>
																<option value="Admin">Admin</option>
															</select> -->
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category</label>
															<select class="form-control" data-placeholder="Choose a Category" name="category">
                                                                <option value="" disabled>Please Select Category</option>
																<?php
																$selcat = "SELECT * FROM `categories` WHERE domain='$domain'";
																$queries->query($selcat);
																if($queries->count() > 0):
																	while($fetchcat = $queries->fetch()):
																		$id = $fetchcat->id;
                                                                    	$category = $fetchcat->category_name;
																?>
																<option value="<?php echo $category; ?>" <?php if($oldcategory_id == "$category") echo " selected"; ?>><?php echo $category; ?></option>
																<?php
																	endwhile;
																endif;
																?>
															</select>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
                                                <div class="col-md-6 mt-10">
														<div class="form-group">
															<label class="control-label mb-10" required>Tags <span class="text-danger">[Please Add (,) comma sign between tags]</span></label>
															<input name="tags" type="text" name="tags" class="form-control" value="<?php echo($oldtags); ?>">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6 mt-10">
														<div class="form-group">
															<label class="control-label mb-10" required>Seo Url</label>
															<input name="seo_url" type="text" class="form-control" value="<?php echo($oldseo_url); ?>">
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<p style="margin-top: 10px">Previous Image:</p>
														<div class="img-upload-wrap">
															<img class="img-responsive mb-20" src="/admin/uploads/<?php echo($oldimage); ?>" alt="upload_img" style="width: 250px;"> 
														</div>
														<input type="hidden" name="old-featured" value="<?php echo($oldimage); ?>">

														<p style="margin-top: 10px">Upload New Image:</p>
														<input type="file" class="" name="featured">
														<!-- <div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
															<input type="file" class="upload" name="featured">
														</div> -->
														<div class="seprator-block"></div>
														<div class="col-md-12">
															<div class="form-group">
																<label class="control-label mb-10">Status</label>
																<div class="radio-list">
																	<div class="radio-inline pl-0">
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio1" value="publish" <?php if($oldstatus == "publish") echo " checked"; ?>>
																			<label for="radio1">Published</label>
																		</div>
																	</div>
																	<div class="radio-inline">
																		<div class="radio radio-info">
																			<input type="radio" name="radio" id="radio2" value="darft" <?php if($oldstatus == "darft") echo " checked"; ?>>
																			<label for="radio2">Draft</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--/span-->
													</div>
												</div>
												<hr class="light-grey-hr"/>
												<div class="form-actions">
													<button class="btn btn-success" type="submit" name="publish"> <i class="fa fa-check"></i> <span>Publish</span></button>
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
						if(isset($_POST['publish'])):
							$title = htmlentities($_POST['title']);
							$meta_title = htmlentities($_POST['meta_title']);
							$meta_description = htmlentities($_POST['meta_description']);
							$description = $_POST['description'];
							$category = $_POST['category'];
							$tags = $_POST['tags'];
							$featured = $_FILES['featured'];
							$author = $_POST['author'];
							$status = $_POST['radio'];
							
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
                            $checkUrl = "SELECT * FROM `posts` WHERE seo_url='$url' AND id!='$gid'";
                            $queries->query($checkUrl);
                            if($queries->count() > 0):
                                echo("<script> alert('Url is alredy exist, Please try another Url'); </script>");
                                exit();
                            endif;

							//date
							$date = date("l-d-m-y");

							// Featured Image							
                            //$target_dir = "uploads/";
							//$target_file = $target_dir . basename($_FILES["featured"]["name"]);
							//$imageFileType = rand().'.'.pathinfo($target_file,PATHINFO_EXTENSION);
							//move_uploaded_file($_FILES["featured"]["tmp_name"], $target_file);

							// echo $_FILES['featured']['name'];
							
							if(!empty($_FILES['featured']['name'])):
								$uploaddir = "uploads/";
								$imageName1 = rand().'.'.pathinfo($_FILES['featured']['name'],PATHINFO_EXTENSION);
								move_uploaded_file($_FILES["featured"]["tmp_name"],$uploaddir . $imageName1);
							else:
								$imageName1 = $_POST['old-featured'];
							endif;

							$insertBlog = "UPDATE posts SET `title`='$title' , `description`='$description', `meta_title`='$meta_title', `meta_description`='$meta_description', `category_id`='$category', `sub_category_id`=NULL, `image`='$imageName1' , `seo_url`='$url', `date`='$date', `tags`='$tags',`authors`='$author',`status`='$status' WHERE `domain`='$domain' AND `id`='$gid'";
							if($queries->query($insertBlog)):
								echo '<script>alert("Post Updated!");</script>';
							endif;
							echo("<script> window.open('all-posts.php','_self'); </script>");
						endif;
					?>

				</div>
<!-- jQuery -->
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="https://cdn.ckeditor.com/4.13.1/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
    CKEDITOR.replace( 'editor3' );
    CKEDITOR.replace( 'editor4' );
    CKEDITOR.replace( 'editor5' );
    CKEDITOR.replace( 'editor1', {
        extraPlugins: 'sourcedialog',
        removePlugins: 'sourcearea',
        removePlugins: 'htmlwriter'
    });
</script>
<!-- Footer -->
<?php
    include('assets/attach/footer.php');
?>