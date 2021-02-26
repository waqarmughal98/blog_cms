<?php
$ds          = DIRECTORY_SEPARATOR;  //1
 
$storeFolder = '../admin/upload';   //2
 
$tempFile = $_FILES['file']['tmp_name'];          //3             
      
    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
 
    move_uploaded_file($tempFile,$targetFile); //6
?>   