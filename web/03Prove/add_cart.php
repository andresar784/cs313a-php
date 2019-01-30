<?php
session_name('add_cart');
session_start();

if(!isset($_SESSION['add_cart'])) 
{ 
   echo "no hay session";

}else{
    echo " si hay session";
    echo "NOMBRE".$_SESSION['add_cart'];
}

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