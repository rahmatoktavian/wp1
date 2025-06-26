<?php
// create connection
$host= 'aws-0-ap-southeast-1.pooler.supabase.com';
$db = 'postgres';
$user = 'postgres.boosiwjmzafecgvteifj';
$password = 'Merkili!123'; 
$port= '5432';

$dsn = "pgsql:host=$host;port=5432;dbname=$db;port=$port";
$pdo = new PDO($dsn, $user, $password);
?>
