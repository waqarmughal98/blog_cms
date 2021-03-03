<?php
$uploaddir = "uploads/";
$imageName1 = rand().'.'.pathinfo($_FILES['featured']['name'],PATHINFO_EXTENSION);
move_uploaded_file($_FILES["featured"]["tmp_name"],$uploaddir . $imageName1);
