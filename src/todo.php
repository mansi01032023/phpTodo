<?php
session_start();
?>
<html>

<head>
    <title>TODO List</title>
    <link href="./CSS/style.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <!-- container section -->
    <div class="container">
        <h2>TODO LIST</h2>
        <h3>Add Item</h3>
        <p>
            <input id="new-task" type="text">
            <button id="addTask">Add</button>
        <p id="error"></p>
        </p>
        <!-- todo section -->
        <h3>Todo</h3>
        <ul id="incomplete-tasks">
        </ul>
        <!-- completed section -->
        <h3>Completed</h3>
        <ul id="completed-tasks">
        </ul>
    </div>
</body>
<?php
// unset($_SESSION['todo']);
// unset($_SESSION['completed']);
?>
<script src="./JS/main.js">

</Script>

</html>