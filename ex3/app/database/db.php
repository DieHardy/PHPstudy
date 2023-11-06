<?php
require ('connect.php');
function tt($value){
    echo '<pre>';
    print_r($value);
    echo'</pre>';
}

function selectAll($table){
    global $pdo;
    $sql = "SELECT * FROM $table";
    $query = $pdo->prepare($sql);
    $query->execute();

    $errorInfo = $query->errorInfo();
    if($errorInfo[0] !== PDO::ERR_NONE){
        print $errorInfo[2];
        exit();
    }
    $date = $query ->fetchAll();
    return $date;

}



tt(selectAll('users'));