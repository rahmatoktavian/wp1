<?php
// connection access
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wp1";

// create connection
$conn = mysqli_connect($servername, $username, $password, $dbname); 
 
// check connection
if (mysqli_connect_errno()) {
  die("Connection failed");
}
?>