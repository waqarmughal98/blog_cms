<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=dropzone", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //   echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }

    // if(isset($_POST['submit'])):
        $tempFile   = $_FILES['file']['tmp_name'];
        $targetFile = $_FILES['file']['name'];

        echo $targetFile;

        $sql = "INSERT INTO `media` (`file`) VALUES ('$targetFile')";

        if($conn->exec($sql)):
            echo "Success";
        endif;
    // endif;
?>