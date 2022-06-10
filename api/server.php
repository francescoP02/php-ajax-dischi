<?php
require_once __DIR__ . "/../database.php";
// RICERCA GENERE
$result=[];
$genre = $_GET['genre'];

if (empty($genre) ){
  $result = $database;
 
} else {
  foreach($database as $item){
    if($item['genre'] == $genre){
      $result[] = $item;
    }
  }
}

$database_json = json_encode($result);
header("Content-Type: application/json");
echo $database_json;
?>