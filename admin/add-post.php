<?php
    require_once('assets/attach/top.php');
    // Run Queries
    $queries = new Queries;
?>
	</head>
	<body>
		<!--sidebar-->
<?php
	require_once('assets/attach/sidebar.php');
?>
			
			<!-- Main Content -->
			<div class="page-wrapper">
				<div class="container-fluid">
					<!-- Title -->
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">add-posts</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-post</span></li>
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
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about post</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Title</label>
															<input type="text" id="firstName" class="form-control" placeholder="Enter your title">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Meta title</label>
															<input type="text" id="lastName" class="form-control" placeholder="Enter meta title">
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- Row -->
                                                <div class="row">
                                                    <div class="col-md-12">
														<div class="form-group">
															<label class="control-label mb-10">Meta description</label>
                                                            <textarea class="form-control" name="meta_description_en" rows="2" cols="80" placeholder="Meta Description"></textarea>
														</div>
													</div>
                                                </div>
												<!-- Row -->
                                                <div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Post Description</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" rows="4"></textarea>
														</div>
													</div>
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Category</label>
															<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
																<option value="Category 1">Category 1</option>
																<option value="Category 2">Category 2</option>
																<option value="Category 3">Category 5</option>
																<option value="Category 4">Category 4</option>
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Status</label>
															<div class="radio-list">
																<div class="radio-inline pl-0">
																	<div class="radio radio-info">
																		<input type="radio" name="radio" id="radio1" value="option1">
																		<label for="radio1">Published</label>
																	</div>
																</div>
																<div class="radio-inline">
																	<div class="radio radio-info">
																		<input type="radio" name="radio" id="radio2" value="option2">
																		<label for="radio2">Draft</label>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" class="form-control" id="exampleInputuname" placeholder="153">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Discount</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-cut"></i></div>
																<input type="text" class="form-control" id="exampleInputuname_1" placeholder="36%">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Meta Title</label>
															<input type="text" class="form-control">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Meta Keyword</label>
															<input type="text" class="form-control">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-lg-12">
														<div class="img-upload-wrap">
															<img class="img-responsive" src="../img/chair.jpg" alt="upload_img"> 
														</div>
														<div class="fileupload btn btn-info btn-anim"><i class="fa fa-upload"></i><span class="btn-text">Upload new image</span>
															<input type="file" class="upload">
														</div>
													</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-calendar-note mr-10"></i>general info</h6>
												<hr class="light-grey-hr"/>
												
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Brand">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Stellar">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Delivery Condition">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Knock Down">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Seat Lock Included">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Yes">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Type">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Office Chair">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Style">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Contemporary & Modern">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Wheels Included">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Yes">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Upholstery Included">
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Yes">
														</div>
													</div>
												</div>
												<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
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

				</div>
				
				<!-- Footer -->
<?php
    require_once('admin/assets/footer.php');
?>