<?php
// updating the task name
session_start();
include_once("config.php");
$idd = $_SESSION['idUpdate'][0];
$_SESSION['todo'][$idd] = $_POST['data'];
$i = 0;
foreach ($_SESSION['todo'] as $key => $value) {
    echo "<li id='liid'><input type='checkbox' id='" . $i . "' class='check' onclick='completed(this.id)'><label>" . $value . "</label><input type='text' value='Go Shopping'><button
    class='edit' id='" . $i . "' onclick='editTask(this.id)'>Edit</button><button class='delete' id='" . $i . "' onclick='deleteTask(this.id)'>Delete</button></li>";
    $i++;
}
unset($_SESSION['idUpdate']);
?>