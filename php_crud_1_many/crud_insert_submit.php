<?php
// calling db connection file
include_once("../db_connect.php");

// data from crud_insert form
$title = $_POST["title"];
$category_id = $_POST["category_id"];

// insert data
$sql = "INSERT INTO book (category_id, title) VALUES ('".$category_id."', '".$title."')";
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>