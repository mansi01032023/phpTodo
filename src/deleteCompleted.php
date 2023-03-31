<?php
// deleting item from completed
session_start();
include_once("config.php");
array_splice($_SESSION['completed'], $_POST['id'], 1);
$i = 0;
foreach ($_SESSION['completed'] as $key => $value) {
    echo "<li><input type='checkbox' id='" . $i . "' onclick='completed(this.id)'><label>" . $value . "</label><input type='text' value='Go Shopping'><button class='delete' id='" . $i . "' onclick='deleteTaskCompleted(this.id)'>Delete</button></li>";
    $i++;
}
?>