<?php
// calling db connection file
include_once("../db_connect_supa.php");

// data from url
$id = $_GET["id"];

// data from crud_insert form
$name = $_POST["name"];

// update data
$sql = "UPDATE category SET name = '".$name."'
            WHERE id = ".$id;
$result = $pdo->query($sql);

// redirect to table page
header("location: crud_select.php");
?>