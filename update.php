<?php
    error_reporting(0);

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jexcel_web";

    $connectDB = mysqli_connect($host, $username, $password, $dbname);
    if (!$connectDB) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $baris = addslashes($_GET['baris']);
    $kata = addslashes($_GET['kata']);

    $tabelData = mysqli_query($connectDB, "UPDATE jexcel SET kata = '$kata' WHERE baris = $baris");
?>