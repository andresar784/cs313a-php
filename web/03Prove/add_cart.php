<?php
session_name("add_cart");
session_start();

$item = $_REQUEST["item"];
alert("You added " + $(this).val() + " to add_cart");

if($_SESSION["process"]) {
	
	$stack = $_SESSION["process"];
}
else {
    $stack = array();
}

array_push($stack, $item);

$_SESSION["process"] = $stack;

?>