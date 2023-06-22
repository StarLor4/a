<?php
session_start();
require_once("./db/db.php");

$id_user = $_COOKIE['iduser'];
$id_prod = $_GET['id'];

mysqli_query($link, "INSERT INTO `card`(`iduser`, `idprod`) VALUES ('$id_user','$id_prod')");

$_SESSION['sucBuy'] = "Товар куплен!";
header("Location: " . $_SERVER['HTTP_REFERER']);
?>