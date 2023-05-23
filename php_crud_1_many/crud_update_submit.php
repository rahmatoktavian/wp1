<?php
// calling db connection file
include_once("db_connect.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$title = $_POST["title"];
$category_id = $_POST["category_id"];

// update data
$sql = "UPDATE book SET title = '".$title."', 
                            category_id = '".$category_id."' 
            WHERE id = ".$id;
$result = mysqli_query($conn, $sql);

// redirect to table page
header("location: crud_select.php");
?>