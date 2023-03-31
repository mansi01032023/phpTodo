<?php
// taking all the constants used 
if(!isset($_SESSION['todo'])){
    $_SESSION['todo'] = array();
}
if(!isset($_SESSION['completed'])){
    $_SESSION['completed'] = array();
}
if(!isset($_SESSION['idUpdate'])){
    $_SESSION['idUpdate'] = array();
}
?>