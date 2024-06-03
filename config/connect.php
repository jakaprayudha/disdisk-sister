<?php
// $host = "154.41.240.170";
// $uname = "u938510003_demo";
// $password = "hG0|Pa|1z+=";
// $database = "u938510003_demomedicine";
date_default_timezone_set('Asia/Jakarta');

$host = "localhost";
$uname = "root";
$password = "";
$database = "db_disdik_sister";
$koneksi = mysqli_connect($host, $uname, $password, $database);


// function connectToDatabase()
// {
//    global $host;
//    global $uname;
//    global $password;
//    global $database;

//    try {
//       $conn = new PDO("mysql:host=$host;dbname=$database", $uname, $password);
//       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//       return $conn;
//    } catch (Exception $e) {
//       throw new Exception("Connection failed: " . $$e->getMessage(), 400);
//    }
// }

// function executeQuery($connection, $sql, $params = [])
// {
//    try {
//       $statement = $connection->prepare($sql);
//       $statement->execute($params);
//       return $statement;
//    } catch (Exception $e) {
//       throw new Exception("Query failed: " . $e->getMessage(), 400);
//    }
// }