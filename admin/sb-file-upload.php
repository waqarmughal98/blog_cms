<?php
    // Connection File
    require_once("assets/config/config.php");
    require_once("assets/config/queries.php");
    $queries = new Queries;

    $tempFile   = $_FILES['file']['tmp_name'];
    $targetFile = $_FILES['file']['name'];

    $domain = "cryptoinject.com";

    echo $targetFile;
    extract($_POST);
    $error=array();
    $extension=array("jpeg","jpg","png","gif");
    $file_name=$_FILES["file"]["name"];
    $file_tmp=$_FILES['file']['tmp_name'];
    $ext=pathinfo($file_name,PATHINFO_EXTENSION);
    $uploaddir = "uploads/";
    if(in_array($ext,$extension)){
        if(!file_exists($uploaddir.$file_name)){
            move_uploaded_file($file_tmp=$_FILES['file']['tmp_name'],$uploaddir.$file_name);
            $insertQuery = "INSERT INTO `media` (`image_name`, `domain`) VALUES (?,?)";
            $insertValue = [$file_name,$domain];
            $queries->query($insertQuery,$insertValue);
        }
        else {
            $filename=basename($file_name,$ext);
            $newFileName=$filename.time().".".$ext;
            move_uploaded_file($file_tmp=$_FILES['file']['tmp_name'],$uploaddir.$newFileName);
            $insertQuery = "INSERT INTO `media` (`image_name`, `domain`) VALUES (?,?)";
            $insertValue = [$file_name,$domain];
            $queries->query($insertQuery,$insertValue);
        }
    }
    else{
        array_push($error,"$file_name,");
    }
    echo("<script> alert('Media Uploaded!!'); </script>");
    echo "<script>window.open('all-media.php','_self'); </script>";
?>