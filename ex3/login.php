
<?php
$title = "Account";
include ("./modules/header.php");
?>

<body>
<div class="container">
    <?php
    require_once 'db.php';
$login = $_POST['login'];
$password = $_POST['password'];
if (empty($login) || empty($password)){
    echo "Enter all fields";
} else{
    $sql = "SELECT * FROM `users` WHERE login =:login AND password = :password";
    $parameters = $conn->prepare($sql);
    $parameters->bindParam('login', $login);
    $parameters->bindParam('password', $password);
    $parameters->execute();
    if($parameters->rowCount() > 0 ){
        while($row = $parameters->fetch(PDO::FETCH_ASSOC)){
            print "<br><h1>Welcome, " . $row['login'] . "!</h1>";
        }
    }
}  ?>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
