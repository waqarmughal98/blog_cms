<?php
	require_once('assets/attach/top.php');
?>

	<!-- Bootstrap Dropzone CSS -->
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
										<div class="">
											<?php
                                                $selectImages = "SELECT * FROM `media` WHERE domain='$domain'";
                                                $queries->query($selectImages);
                                                if($queries->count() > 0):
                                                    while($fetchImages = $queries->fetch()):
                                                        $id = $fetchImages->id;
                                                        $images = $fetchImages->image_name;
                                            ?>
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12  file-box">
												<div class="file">
													<a class="copy_text" href="uploads/<?php echo $images;?>">
														
														<div class="image" style="background-image:url(uploads/<?php echo $images;?>)">
														</div>
														<div class="file-name">
                                                            <?php echo $images;?>
														</div>
													</a>
												</div>
											</div>
                                            <?php
                                                    endwhile;
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
                        $('.copy_text').click(function (e) {
                       e.preventDefault();
                       var copyText = $(this).attr('href');
                    
                       document.addEventListener('copy', function(e) {
                          e.clipboardData.setData('text/plain', copyText);
                          e.preventDefault();
                       }, true);
                    
                       document.execCommand('copy');  
                       console.log('copied text : ', copyText);
                       alert('copied text: ' + copyText); 
                     });
                    </script>

					<?php
						if(isset($_POST['upload'])):

							// Run Queries
                            $queries = new Queries;
                            // Get Data
                            extract($_POST);
                            $error=array();
                            $extension=array("jpeg","jpg","png","gif");
                            foreach($_FILES["images"]["tmp_name"] as $key=>$tmp_name){
                                $file_name=$_FILES["images"]["name"][$key];
                                $file_tmp=$_FILES["images"]["tmp_name"][$key];
                                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                                $uploaddir = "uploads/";
                                if(in_array($ext,$extension)){
                                    if(!file_exists($uploaddir.$file_name)){
                                        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],$uploaddir.$file_name);
                                        $insertQuery = "INSERT INTO media (`image_name`, `domain`) VALUES (?,?)";
                                        $insertValue = [$file_name,$domain];
                                        $queries->query($insertQuery,$insertValue);
                                    }
                                    else {
                                        $filename=basename($file_name,$ext);
                                        $newFileName=$filename.time().".".$ext;
                                        move_uploaded_file($file_tmp=$_FILES["images"]["tmp_name"][$key],$uploaddir.$newFileName);
                                        $insertQuery = "INSERT INTO media (`image_name`, `domain`) VALUES (?,?)";
                                        $insertValue = [$file_name,$domain];
                                        $queries->query($insertQuery,$insertValue);
                                    }
                                }
                                else{
                                    array_push($error,"$file_name,");
                                }
                            }
							echo("<script> alert('Media Uploaded!!'); </script>");
							echo "<script>window.open('all-media.php','_self'); </script>";

						endif;
					?>
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