<?php
    require_once('assets/attach/top.php');
    $domain = "cryptoinject.com";
    // Run Queries
    $queries = new Queries;
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
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
						  <h5 class="txt-dark">Add-New-User</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-new-user</span></li>
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
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>Add New User</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">First Name</label>
															<input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter First Name">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
															<label class="control-label mb-10">Last Name</label>
															<input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter Last Name">
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Email</label>
															<input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
															<label class="control-label mb-10">Username</label>
															<input type="text" name="username" id="username" class="form-control" placeholder="Enter your Username">
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Password</label>
															<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
															<label class="control-label mb-10">Domain</label>
															<input type="text" name="domain" id="domain" class="form-control" placeholder="Enter your Domain">
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Company Name</label>
															<input type="text" name="company" id="company" class="form-control" placeholder="Enter Company">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
                                                        <div class="form-group">
															<label class="control-label mb-10">Address</label>
															<input type="text" name="address" id="address" class="form-control" placeholder="Enter your Address">
														</div>
													</div>
													<!--/span-->
												</div>
												<hr class="light-grey-hr"/>
												<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left" name="addUser"> <i class="fa fa-check"></i> <span>Publish</span></button>
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
                    if(isset($_POST['addUser'])):

                        $firstName = $_POST['firstName'];
                        $lastName = $_POST['lastName'];
                        $email = $_POST['email'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $domain = $_POST['domain'];
                        $company = $_POST['company'];
                        $address = $_POST['address'];
                        $uniqueid = rand();
                        $role = "Admin";
                        $date = date("l-d-m-y");

                        $password = password_hash($password, PASSWORD_DEFAULT);
                        
                        $checkUser = "SELECT * FROM `users` WHERE domain='$domain'";
                        $queries->query($checkUser);
                        if($queries->count() > 0):
                            echo("<script> alert('Domain Already exists!'); </script>");
                        else:
                            $insertAuser = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `username`, `password`, `domain`, `company_name`, `address`, `unique_id`, `role`,  `date`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                            $values = [$firstName,$lastName,$email,$username,$password,$domain,$company,$address,$uniqueid,$role,$date];
                            $queries->query($insertAuser,$values);
                            // Get Data
                            echo("<script> alert('User Successfully Added'); </script>");
                            // echo("<script> window.open('add-categories.php','_self'); </script>");
                        endif;
                    endif;
                    ?>

				</div>
				
				<!-- Footer -->
<?php
	require_once('assets/attach/footer.php');
?>