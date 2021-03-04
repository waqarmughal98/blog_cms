<?php
    require_once('assets/attach/top.php');
    $domain = "cryptoinject.com";
    // Run Queries
    $queries = new Queries;
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
						  <h5 class="txt-dark">All-Pages</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>all-pages</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->

					<!-- Row -->
					<div class="row">
					
					<!-- Bordered Table -->
			        		<div class="col-sm-12">
			        			<div class="panel panel-default card-view">
			        				<div class="panel-heading">
			        					<div class="pull-left">
			        						<h6 class="panel-title txt-dark">All Pages</h6>
			        					</div>
			        					<div class="clearfix"></div>
			        				</div>
			        				<div class="panel-wrapper collapse in">
			        					<div class="panel-body">
			        						<div class="table-wrap">
			        							<div class="table-responsive">
			        							  <table class="table table-hover table-bordered mb-0">
			        								<thead>
			        								  <tr>
			        									<th>Title</th>
			        									<th>Date</th>
			        									<th>Status</th>
			        									<th class="text-nowrap">Action</th>
			        								  </tr>
			        								</thead>
			        								<tbody>
                                                        <?php
                                                            $selectPosts = "SELECT * FROM `pages` WHERE domain='$domain'";
                                                            $queries->query($selectPosts);
                                                            if($queries->count() > 0):
                                                                while($fetchPost = $queries->fetch()):
                                                                    $id = $fetchPost->id;
                                                                    $page_title = $fetchPost->page_title;
                                                                    $date = $fetchPost->date;
                                                                    $status = $fetchPost->status;
                                                        ?>
                                                        <tr>
                                                            <form action="" method="POST">
			        								        <td><?php echo $page_title; ?></td>
			        								        <td><?php echo $date; ?></td>
                                                            <td><span class="label label-success"><?php echo $status; ?></span></td>
			        								        <td class="text-nowrap"><button class="btn-nobg pull-left" value="<?php echo $id;?>" name="edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </button> <button class="btn-nobg pull-left" value="<?php echo $id;?>" name="del"> <i class="fa fa-close text-danger"></i> </button> </td>
                                                            </form>
                                                        </tr>
                                                        <?php
                                                                endwhile;
                                                            endif;
                                                            if(isset($_POST['del'])):
                                                                $id=$_POST['del'];
                                                                $delquery = "DELETE FROM `pages` WHERE id='$id'";
                                                                $queries->query($delquery);
                                                                echo '<script>alert("Page Deleted!!")</script>';
                                                                echo '<script>window.location.href="all-pages.php";</script>';
                                                            endif;
                                                            if(isset($_POST['edit'])):
                                                                $editval = $_POST['edit'];
                                                                echo "<script>window.location.href='edit-post.php?id=$editval'</script>";
                                                            endif;
                                                        ?>
			        								</tbody>
			        							  </table>
			        							</div>
			        						</div>
			        					</div>
			        				</div>
			        			</div>
			        		</div>
			        		<!-- /Bordered Table -->
                        <?php

                        ?>
			        </div>
					<!-- /Row -->

				</div>
				
				<!-- Footer -->
<?php
	require_once('assets/attach/footer.php');
?>