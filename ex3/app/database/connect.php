<?php
try{
    $pdo = new PDO("mysql: host=localhost; dbname=site;
     charset=utf8", 'admin', '1111', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch (PDOException $i){
    die('Connection error');
}




