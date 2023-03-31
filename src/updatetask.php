<?php
// updating the task
session_start();
include_once("config.php");
array_push($_SESSION['idUpdate'], $_POST['id']);
echo $_SESSION['todo'][$_POST['id']];
?>