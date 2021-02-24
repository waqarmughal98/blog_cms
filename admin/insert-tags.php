<?php
$queries = new Queries;

if(isset($_POST["tag"]))
{
 $query = "INSERT INTO tags( tags) VALUES(:tag)";
 $statement = $queries->prepare($query);
 $statement->execute(
  array(
   ':tag' => $_POST["tag"]
  )
 );
 $result = $statement->fetchAll();
 $output = '';
 if(isset($result))
 {
  $output = '
  <div class="alert alert-success">
   Your data has been successfully saved into System
  </div>
  ';
 }
 echo $output;
}

?>