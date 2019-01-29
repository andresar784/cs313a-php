<?php

session_start();

if(!isset($_SESSION['nombre'])) 
{ 
   echo "no hay session";

}else{
    echo " si hay session";
    echo "NOMBRE".$_SESSION['nombre'];
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