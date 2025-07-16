<?php
    $conn = mysqli_connect('localhost', 'root', '', 'hire_a_driver');
    if (!$conn) {
        die("Connection Problem => ".mysqli_connect_error($conn));
    }
    error_reporting(0);
?>