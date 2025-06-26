<?php
// calling db connection file
include_once("../db_connect.php");

// data from crud_insert form
$name = $_POST["name"];

// insert data
$sql = "INSERT INTO category (name) VALUES ('".$name."')";
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>