<?php
session_start();

$itemnumber = $_REQUEST["item"];

unset($_SESSION["process"][$itemnumber]);

$_SESSION["process"] = array_values($_SESSION["process"]);

var_dump($_SESSION["process"]);
?>