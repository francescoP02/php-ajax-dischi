<?php
require_once __DIR__ . "/../database.php";
// RICHIAMO IL DATABASE COME FILE JSON
$database_json = json_encode($database);
header("Content-Type: application/json");
echo $database_json;
?>