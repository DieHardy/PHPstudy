<?php

$pdo = new PDO("mysql: host=localhost; dbname=site; charset=utf8", 'admin', '1111');

$sql = "INSERT INTO `users`( `email`, `login`, `password`) VALUES (:email,:login,:password)";


//$count =  $pdo->exec($sql);
//print $count;

$email = "me2ee@mail.ru";
$login = "administrator";
$password = "gigi2";
$params = ['email'=>$email,
    'login'=>$login,
    'password'=>$password];
$query = $pdo->prepare($sql);
$query ->execute($params);