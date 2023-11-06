<?php
$servername = "localhost";
$dbname = "mysite";
 try{
     $conn = new PDO("mysql: host=$servername;dbname=$dbname;",
         "admin", '1111');
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }
 catch (PDOException $error){
     echo "Connection failed: " . $error->getMessage();
 }