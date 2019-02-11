<?php
require_once('db.php');
$db = DB::init();

$statement = $db->prepare("SELECT id, name FROM place");
$statement->execute();
$place_1 = SELECT * FROM place WHERE placeid = 1;
$place_2 = SELECT * FROM place WHERE placeid = 2;
$place_3 = SELECT * FROM place WHERE placeid = 3;
$place_4 = SELECT * FROM place WHERE placeid = 4;
$place_5 = SELECT * FROM place WHERE placeid = 5;

echo $place_1;
?>