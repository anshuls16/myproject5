<?php
$servername = "sql108.epizy.com";
// Enter your MySQL username below(default=root)
$username = "epiz_31208468";
// Enter your MySQL password below
$password = "sfM5svO7TH";
$dbname = "epiz_31208468_astha";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}