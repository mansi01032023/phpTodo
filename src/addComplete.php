<?php
// to add completed task 
session_start();
include("config.php");
array_push($_SESSION['completed'], $_SESSION['todo'][$_POST['id']]);
$i = 0;
foreach ($_SESSION['completed'] as $key => $value) {
    echo "<li><input type='checkbox' id='" . $i . "' onclick='completedRevert(this.id)'><label>" . $value . "</label><input type='text' value='Go Shopping'><button class='delete' id='" . $i . "' onclick='deleteTaskCompleted(this.id)'>Delete</button></li>";
    $i++;
}
?>