<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
    $connection = mysqli_connect("localhost", "root", "");
    if (!$connection) die("<ERROR: Cannot connect to database>");
    $database = mysqli_select_db($connection, "furniture");
    if (!$database) die("<ERROR:Cannot select database>");
