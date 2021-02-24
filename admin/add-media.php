<?php
	require_once('assets/attach/top.php');
?>
<link href="../vendors/bower_components/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
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
						  <h5 class="txt-dark">Media</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.php">Dashboard</a></li>
							<li class="active"><span>Media</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Media</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<p class="text-muted"> For multiple file upload add <code>dropzone</code> in form tag and add <code>multiple</code> in input tag.</p>
										<div class="mt-40">
											<form action="upload.php" class="dropzone" enctype='multipart/form-data'>
												<!-- <div class="fallback">
													<input name="file" type="file" multiple />
												</div> -->
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
<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Dropzone JavaScript -->
<script src="../vendors/bower_components/dropzone/dist/dropzone.js"></script>
<?php
	require_once('assets/attach/footer.php');
?>