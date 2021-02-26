<?php
//$ds          = DIRECTORY_SEPARATOR;  //1
// 
//$storeFolder = '/admin/upload/';   //2
// 
//$tempFile = $_FILES['file']['tmp_name'];          //3             
//      
//    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
//     
//    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
// 
//    move_uploaded_file($tempFile,$targetFile); //6








            // File path configuration
            $uploadDir = "/admin/upload/";
            $fileName = basename($_FILES['file']['name']);
            $uploadFilePath = $uploadDir.$fileName;
            // Upload file to server
            if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath)):
                // Insert file information in the database 
                //if($this->query("INSERT INTO `media` (`id`, `file_name`, `uploaded_on`) VALUES (NULL, '$fileName', CURRENT_TIMESTAMP)")):
                //    return(TRUE);
                //else:
                //    return(FALSE);
                //endif;
                echo "Hogya j";
            else:
                //return(FALSE);
                echo "Koi nai hoya j";
            endif;









?>   