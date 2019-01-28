<?php
session_start();

$item = $_REQUEST["item"];
if($_SESSION["process"]) {

	$stack = $_SESSION["process"];
}
else {
    $stack = array();
}

array_push($stack, $item);

$_SESSION["process"] = $stack;

?>