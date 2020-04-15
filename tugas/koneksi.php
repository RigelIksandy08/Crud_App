<?php 

try {
    $con = new PDO("mysql:host = localhost;dbname=db_apkcrudp","root","");
} catch (PDOException $e){
    echo $e->getMessage();
}

?>