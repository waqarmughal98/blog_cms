<?php
require_once("assets/config/config.php");
require_once("assets/config/queries.php");
$queries = new Queries;

function fetchCategoryTree($parent = 0, $spacing = '', $user_tree_array = '') {

  if (!is_array($user_tree_array))
    $user_tree_array = array();

  $sql = "SELECT `cid`, `name`, `parent` FROM `category` WHERE 1 AND `parent` = $parent ORDER BY cid ASC";
  $queries->query($sql);
  if (mysql_num_rows($queries) > 0) {
    while ($row = mysql_fetch_object($queries)) {
      $user_tree_array[] = array("id" => $row->cid, "name" => $spacing . $row->name);
      $user_tree_array = fetchCategoryTree($row->cid, $spacing . '&nbsp;&nbsp;', $user_tree_array);
    }
  }
  return $user_tree_array;
}

function fetchCategoryTreeList($parent = 0, $user_tree_array = '') {

    if (!is_array($user_tree_array))
    $user_tree_array = array();

  $sql = "SELECT `cid`, `name`, `parent` FROM `category` WHERE 1 AND `parent` = $parent ORDER BY cid ASC";
  $queries->query($sql);
  if (mysql_num_rows($queries) > 0) {
     $user_tree_array[] = "<ul>";
    while ($row = mysql_fetch_object($queries)) {
	  $user_tree_array[] = "<li>". $row->name."</li>";
      $user_tree_array = fetchCategoryTreeList($row->cid, $user_tree_array);
    }
	$user_tree_array[] = "</ul>";
  }
  return $user_tree_array;
}
?>