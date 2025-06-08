<?php
$con = mysqli_connect("localhost", "furbiture_user", "yourpassword", "furbiture");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>