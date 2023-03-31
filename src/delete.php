<?php
// deleting item from todo
session_start();
include_once("config.php");
array_splice($_SESSION['todo'], $_POST['id'], 1);
$i = 0;
foreach ($_SESSION['todo'] as $key => $value) {
    echo "<li><input type='checkbox' id='" . $i . "' onclick='completed(this.id)'><label>" . $value . "</label><input type='text' value='Go Shopping'><button
    class='edit' id='" . $i . "' onclick='editTask(this.id)'>Edit</button><button class='delete' id='" . $i . "' onclick='deleteTask(this.id)'>Delete</button></li>";
    $i++;
}
?>