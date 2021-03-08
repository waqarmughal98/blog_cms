<?php
	require_once('assets/attach/top.php');
?>

	<!-- Bootstrap Dropzone CSS -->
	<link href="../vendors/bower_components/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css"/>
<style>
	.ico {
	    position: absolute;
	    right: 20px;
	    bottom: 5px;
	    color: red;
	    font-size: 20px;
	    background: none;
	    border: none;
		cursor: pointer;
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
										<div class="">
											<?php
                                                $selectImages = "SELECT * FROM `media` WHERE domain='$domain'";
                                                $queries->query($selectImages);
                                                if($queries->count() > 0):
                                                    while($fetchImages = $queries->fetch()):
                                                        $id = $fetchImages->id;
                                                        $images = $fetchImages->image_name;
                                            ?>
                                            	<div class="col-lg-2 col-md-4 col-sm-6 col-xs-12  file-box">
													<div class="file">
														<a class="copy_text" href="uploads/<?php echo $images;?>" target="_blank">
															<div class="image" style="background-image:url(uploads/<?php echo $images;?>); background-size: contain; background-repeat: no-repeat; background-position: center;">
															</div>
															<div class="file-name">
                                            	                <?php echo $images;?>
															</div>
														</a>
													</div>
													<form action="" method="POST">
														<button class="ico" name="del" value="<?php echo $id;?>"><i class="fa fa-close"></i></button>
													</form>
												</div>
                                            <?php
                                                    endwhile;
                                                endif;
												if(isset($_POST['del'])):
													$id=$_POST['del'];
													$delquery = "DELETE FROM `media` WHERE id='$id'";
													$queries->query($delquery);
													echo '<script>alert("Media Deleted!!")</script>';
													echo '<script>window.location.href="all-media.php";</script>';
												endif;
                                            ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
                    
                    <script>
                    //     $('.copy_text').click(function (e) {
                    //    e.preventDefault();
                    //    var copyText = $(this).attr('href');
                    
                    //    document.addEventListener('copy', function(e) {
                    //       e.clipboardData.setData('text/plain', copyText);
                    //       e.preventDefault();
                    //    }, true);
                    
                    //    document.execCommand('copy');  
                    //    console.log('copied text : ', copyText);
                    //    alert('copied text: ' + copyText); 
                    //  });
                    </script>
				</div>
				
<!-- Footer -->
<!-- jQuery -->
<script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Dropzone JavaScript -->
<script src="../vendors/bower_components/dropzone/dist/dropzone.js"></script>

<!-- Dropzone Init JavaScript -->
<script src="dist/js/dropzone-data.js"></script>

<!-- Fancy Dropdown JS -->
<script src="dist/js/dropdown-bootstrap-extended.js"></script>

<?php
	require_once('assets/attach/footer.php');
?>