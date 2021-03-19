<?php
	require_once('assets/attach/top.php');
	if(isset($_SESSION['userId'])):
		header("location: index.php");
	endif;
?>
		<style>
			/* Background image of body */ 
			.page-wrapper.auth-page {
				background-image: url("../../img/r0gHaKpr8l.jpg");
				/* Full height */
				height: 100%; 
				/* Center and scale the image nicely */
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		</style>
	</head> 
	<body>
		<!--Preloader-->
		<!-- <div class="preloader-it">
			<div class="la-anim-1"></div>
		</div> -->
		<!--/Preloader-->
		
		<div class="wrapper  pa-0">
			<header class="sp-header">
				<div class="clearfix"></div>
			</header>
			
			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<form action="" method="post">
						<div class="table-struct full-width full-height">
							<div class="table-cell vertical-align-middle auth-form-wrap">
								<div class="auth-form  ml-auto mr-auto no-float">
									<div class="row">
										<div class="col-sm-12 col-xs-12">
											<div class="sp-logo-wrap text-center mt-20  mb-20">
												<a href="">
													<img class="brand-img mr-10" src="../img/logo.png" alt="brand"/>
													<span class="brand-text">CryptoInject</span>
												</a>
											</div>
											<div class="mb-30 ">
												<h3 class="text-center mb-10">Sign in to Cryptoinject</h3>
											</div>	
											<div class="form-wrap">
												<form action="" method="POST">
													<div class="form-group">
														<label class="control-label mb-10" for="exampleInputEmail_2">Email address</label>
														<input type="email" class="form-control" required="" name="email" id="exampleInputEmail_2" placeholder="Enter email">
													</div>
													<div class="form-group">
														<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Password</label>
														<a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a>
														<div class="clearfix"></div>
														<input type="password" class="form-control" required="" name="password" id="exampleInputpwd_2" placeholder="Enter password">
													</div>
													<div class="form-group text-center">
														<button type="submit" name="login" class="btn btn-success  btn-rounded">sign in</button>
													</div>
												</form>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- /Row -->	
				</div>
				<?php
				if(isset($_POST['login'])):
					$email = $_POST['email'];
					$password = $_POST['password'];
					 // Check Email & Password Query
					 $check_query = "SELECT * FROM `users` WHERE username = ? OR email = ?";
					 $check_param = [$email,$email];

					 // Run Query
					 if($queries->query($check_query, $check_param)):

						 // Count Rows
						 if($queries->count() > 0):

							 // Fetch Single Row
							 $row = $queries->fetch();
							 $userId = $row->id;
							 $userName = $row->username;
							 $userPass = $row->password;
							 $domain = $row->domain;
							 $userCode = $row->unique_id;
							 $status = 1;

							 // Check Status Verified Or Not
							 if($status == 0):
								 echo("<script>Swal.fire({
									 title: 'Invalid Username: Please Verify Your UserName & Try Again!',
									 icon: 'error'
								   }, function() {
									 window.location = 'login';
								 });</script>");

							 // Match Password
							 else:
								 if(password_verify($password, $userPass)):
									 $_SESSION['userId'] = $userId;
									 $_SESSION['userName'] = $userName;
									 $_SESSION['domain'] = $domain;
									 $_SESSION['userCode'] = $userCode;
									 header("location: index");
									 // echo("<script> window.open('/$lang','_self'); </script>");
								 else:
									 echo("<script>Swal.fire({
										 title: 'Invalid Password Please Enter Valid Password!',
										 icon: 'error'
									   }, function() {
										 window.location = 'login';
									 });</script>");
								 endif;
							 endif;

						 else:
							 echo("<script>Swal.fire({
								 title: 'Invalid Username: Please Enter Valid Username!',
								 icon: 'error'
							   }, function() {
								 window.location = 'login';
							 });</script>");
						 endif;

					 endif;
				endif;
				?>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
<?php
	require_once('assets/attach/footer.php');
?>
