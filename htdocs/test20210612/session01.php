<?php
session_start();

$_SESSION["name"]="山崎";
$_SESSION["num"]="1000";

echo $_SESSION["name"];
echo $_SESSION["num"];


?>