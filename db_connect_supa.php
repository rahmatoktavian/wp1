<?php
// create connection
$host= 'db.cdjndiwlkguoekmsamkv.supabase.co';
$db = 'postgres';
$user = 'postgres';
$password = 'Merkili!123'; 
$port= '5432';

$dsn = "pgsql:host=$host;port=5432;dbname=$db;port=$port";
$pdo = new PDO($dsn, $user, $password);
?>