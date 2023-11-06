<?php
require_once ('db.php');
$email = str_replace(' ', '', $_POST['email']);
$login = str_replace(' ', '', $_POST['login']);
$password = str_replace(' ', '', $_POST['password']);
$reppas = str_replace(' ', '', $_POST['reppas']);
$auth =
$query = "INSERT INTO `users` (`email`, `login`, `password`) 
VALUES ('$email', '$login', '$password')";

if (empty($email) && empty($login) && empty($password) && empty($reppas)){
    echo "<br>please enter all fields";
}
else{
    if($password == $reppas){
        if($conn->exec($query) === TRUE) {
            echo "<br> rows successfully added";
        }
    } else{
        echo "passwords are different";
    }
}



