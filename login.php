<?php
    require_once('attach/top.php');
?>
</head>
<body class="homepage2">
<?php
    require_once('attach/header.php');
?>
	<div class="blog_breadcrumb_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="blog_breadcrumb_div">
						<h3>Login / Sign up</h3>
						<ol class="breadcrumb">
							<li>You are here:</li>
							<li><a href="index">Home</a></li>
							<li class="active">Login-Sign up</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog_main_wrapper blog_toppadder60 blog_bottompadder60">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 blog_toppadder40">
					<div class="blog_contact_form_div wow fadeInUp">
						<div class="blog_main_heading_div">
							<div class="blog_heading_div">
								<h3 class="blog_bg_orange">Login</h3>
							</div>
						</div>
						<div class="blog_contact_form_div_inner">
							<h4>Please Login to Enter</h4>
                            <form action="" method="post">
							    <div class="contact_form">
							    	<div class="row">
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="text" id="mail" name="email" class="form-control" placeholder="Username">
							    			</div>
							    		</div>
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="password" id="password" name="password" class="form-control" placeholder="Password">
							    			</div>
							    		</div>
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<button type="submit" id="submit" name="login" class="blog_btn blog_bg_pink">Submit</button>
							    		</div>
							    	</div>
							    </div>
                            </form>
                            <?php
                            if(isset($_POST['login'])):
                                $email = $_POST['email'];
                                $password = $_POST['password'];
                                // Check Email & Password Query
                                $check_query = "SELECT * FROM `site_user` WHERE username = ? OR email = ? AND domain='$domain'";
                                $check_param = [$email,$email];

                                // Run Query
                                if($queries->query($check_query, $check_param)):

                                    // Count Rows
                                    if($queries->count() > 0):

                                        // Fetch Single Row
                                        $row = $queries->fetch();
                                        $userId = $row->id;
                                        $userCode = $row->user_id;
                                        $userName = $row->username;
                                        $userPass = $row->password;
                                        $domain = $row->domain;
                                        $status = 1;

                                        // Check Status Verified Or Not
                                        if($status == 0):
                                            echo("<script>Swal.fire({
                                                title: 'Invalid Username: Please Verify Your UserName & Try Again!',
                                                icon: 'error'
                                              }, function() {
                                                window.location = '/login';
                                            });</script>");

                                        // Match Password
                                        else:
                                            if(password_verify($password, $userPass)):
                                                $_SESSION['userId'] = $userId;
                                                $_SESSION['userName'] = $userName;
                                                $_SESSION['domain'] = $domain;
                                                $_SESSION['userCode'] = $userCode;
                                                header("location: /index");
                                                // echo("<script> window.open('/$lang','_self'); </script>");
                                            else:
                                                echo("<script>Swal.fire({
                                                    title: 'Invalid Password Please Enter Valid Password!',
                                                    icon: 'error'
                                                  }, function() {
                                                    window.location = '/login';
                                                });</script>");
                                            endif;
                                        endif;

                                    else:
                                        echo("<script>Swal.fire({
                                            title: 'Invalid Username: Please Enter Valid Username!',
                                            icon: 'error'
                                          }, function() {
                                            window.location = '/login';
                                        });</script>");
                                    endif;

                                endif;
                            endif;
                            ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-12 blog_toppadder40">
					<div class="blog_contact_form_div wow fadeInUp">
						<div class="blog_main_heading_div">
							<div class="blog_heading_div">
								<h3 class="blog_bg_pink">Sign Up</h3>
							</div>
						</div>
						<div class="blog_contact_form_div_inner">
							<h4>Create Account</h4>
                            <form action="" method="post">
							    <div class="contact_form">
							    	<div class="row">
							    		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name">
							    			</div>
							    		</div>
							    		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name">
							    			</div>
							    		</div>
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="email" id="email" name="email" class="form-control" placeholder="Email">
							    			</div>
							    		</div>
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="text" id="username" name="username" class="form-control" placeholder="Username">
							    			</div>
							    		</div>
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<div class="blog_form_group">
							    				<input type="password" id="password" name="password" class="form-control" placeholder="Password">
							    			</div>
							    		</div>
							    		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
							    			<button type="submit" id="send_btn" name="sign_up" class="blog_btn blog_bg_pink">Submit</button>
							    		</div>
							    	</div>
							    </div>
                            </form>
                            <?php
                                if(isset($_POST['sign_up'])):
                                    $firstName = $_POST['first_name'];
                                    $lastName = $_POST['last_name'];
                                    $email = $_POST['email'];
                                    $username = $_POST['username'];
                                    $password = $_POST['password'];


                                    $password = password_hash($password, PASSWORD_DEFAULT);
                                    $userId = rand();

                                    // Check Email
                                    $chcekEmail = "SELECT * FROM `site_user` WHERE `domain`='$domain' AND `email`='$email'";
                                    $queries->query($chcekEmail);

                                    if($queries->count() > 0):
                                      echo("<script>Swal.fire({
										title: 'Email already exists please try another!',
										icon: 'error'
									  }, function() {
                                        window.location = '/login';
                                    });</script>");
                                    //   echo("<script> window.open('/login','_self'); </script>");
                                      exit;
                                    endif;

                                    // Check Username
                                    $chcekUsername = "SELECT * FROM `site_user` WHERE `domain`='$domain' AND `username`='$username'";
                                    $queries->query($chcekUsername);

                                    if($queries->count() > 0):
                                      echo("<script>Swal.fire({
										title: 'Username already exists please try another!',
										icon: 'error'
									  }, function() {
                                        window.location = '/login';
                                    });</script>");
                                    //   echo("<script> window.open('/login','_self'); </script>");
                                      exit;
                                    endif;

                                    $date = date("l-d-m-y");

                                    $addUser = "INSERT INTO `site_user` (`first_name`, `last_name`, `email`, `username`, `password`, `user_id`, `domain`, `date`) VALUES (?,?,?,?,?,?,?,?)";
                                    $values = [$firstName,$lastName,$email,$username,$password,$userId,$domain,$date];

                                    if($queries->query($addUser,$values)):
                                      echo("<script>Swal.fire({
										title: 'Registered Successfully Login to Continue!',
										icon: 'success'
									  }, function() {
                                        window.location = '/login';
                                    });</script>");
                                    //   echo("<script> window.open('/login','_self'); </script>");
                                    endif;
                                endif
                            ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
    require_once('attach/footer.php');
?>