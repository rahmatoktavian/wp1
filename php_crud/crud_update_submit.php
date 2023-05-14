<?php
// calling db connection file
include_once("db_connect.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$name = $_POST["name"];

// update data
$sql = "UPDATE category SET name = '".$name."' WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

header("location: crud_select.php");
?>