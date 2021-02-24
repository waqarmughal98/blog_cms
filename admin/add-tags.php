<?php
    require_once('assets/attach/top.php');
    $domain = "cryptoinject.com";
    // Run Queries
    $queries = new Queries;
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>

<style>
    .btn-nobg{
        background: none;
        border: none;
    }
</style>
</head>
<body>

<?php
	require_once('assets/attach/sidebar.php');
?>
    <!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">add-tags</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-tags</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form action="" method="POST">
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Add Tags</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Tag Name [Please Add (,) comma sign between tags]</label>
															<input type="text" name="tag_name" id="tagName" class="form-control" placeholder="Enter Tags Name">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
															<label class="control-label mb-10">SEO Url</label>
															<input type="text" name="seo_url" id="seourl" class="form-control" placeholder="Enter SEO Url">
														</div>
													</div>
													<!--/span-->
												</div>
												<hr class="light-grey-hr"/>
												<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left" name="submit-category"> <i class="fa fa-check"></i> <span>Publish</span></button>
													<button type="button" class="btn btn-warning pull-left">Cancel</button>
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

                    <!-- Submit -->
                    <?php
                    // Insert Query
                    if(isset($_POST['submit-category'])):
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
                        
                        $tagName = $_POST['tag_name'];
                        
                        $insertCate = "INSERT INTO tags (`tags`, `seo_url`, `domain`) VALUES (?,?,?)";
                        $values = [$tagName,$url,$domain];
                        $queries->query($insertCate,$values);
                        // Get Data
                        echo("<script> alert('Tags Successfully Added'); </script>");
                        echo("<script> window.open('add-tags.php','_self'); </script>");
                    endif;
                    ?>

					<!-- Row -->
					<div class="row">
                        <div class="col-sm-12">
                            <div class="panel panel-default card-view mt-50">
                                <div class="panel-heading">
                                    <div class="pull-left">
                                        <h6 class="panel-title txt-dark">All Tags</h6>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="panel-wrapper collapse in">
                                    <div class="panel-body">
                                        <div class="table-wrap">
                                            <div>
                                                <form action="" method="POST">
                                                    <table class="tablesaw table-striped table-hover table-bordered table" data-tablesaw-mode="columntoggle">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col" data-tablesaw-sortable-col data-tablesaw-priority="persist">Tags Name</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                            $selectcat = "SELECT * FROM `tags` WHERE domain='$domain'";
                                                            $queries->query($selectcat);
                                                            if($queries->count() > 0):
                                                                while($fetchcat = $queries->fetch()):
                                                                    $id = $fetchcat->id;
                                                                    $tags = $fetchcat->tags;
                                                            ?>
                                                            <tr>
                                                                <!-- <td class="title"><a class="pull-left" href="javascript:void(0)"><?php echo $tags; ?></a> <button class="btn btn-danger pull-right">DELETE</button></td> -->
                                                                <td class="title"><a class="pull-left" href="javascript:void(0)"><?php echo $tags; ?></a> <button class="btn-nobg pull-right" value="<?php echo $id;?>" name="del"><i class="fa fa-close"></i></button></td>
                                                            </tr>
                                                            <?php
                                                                endwhile;
                                                            endif;
                                                            if(isset($_POST['del'])):
                                                                $id=$_POST['del'];
                                                                $delquery = "DELETE FROM `tags` WHERE id='$id'";
                                                                $queries->query($delquery);
                                                                echo '<script>alert("Tag Deleted!!")</script>';
                                                                echo '<script>window.location.href="add-tags.php";</script>';
                                                            endif;
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- /Row -->

				</div>
				
				<!-- Footer -->
<?php
	require_once('assets/attach/footer.php');
?>
