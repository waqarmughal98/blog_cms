<?php
require_once 'assets/attach/top.php';
require_once 'functions.php';
$queries = new Queries;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css" type="text/css" />
	<title>Create Category tree with PHP and mysql</title>
  </head>
  <body>
    <div id="container">
      <div id="body">
        <div class="mainTitle" >Create Category tree with PHP and mysql</div>
        <div class="height20"></div>
        <?php echo $emsg; ?>
        <article>
			<?php 
			$categoryList = fetchCategoryTree();
			?>
			<div style="text-align:center;" >
				<select style="width:200px;height:35px;border:1px solid #6d37b0;padding:5px;">
				<?php foreach($categoryList as $cl) { ?>
				<option value="<?php echo $cl["id"] ?>"><?php echo $cl["name"]; ?></option>
				<?php } ?>
				</select>
			</div>
			
          <div class="height20"></div>
          <h4>User Tree Listing will be displayed below(if any user will be in database):</h4>
          <ul>
            <?php
            $res = fetchCategoryTreeList();
            foreach ($res as $r) {
              echo  $r;
            }
            ?>
          </ul>
          <div class="height10"></div>
        </article>
        <div class="height10"></div>
      </div>
      <footer>
        <div class="copyright"> &copy; 2013 - 2014 <a href="http://www.thesoftwareguy.in" target="_blank">thesoftwareguy</a>. All rights reserved </div>
        <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
      </footer>
    </div>
  </body>
</html>