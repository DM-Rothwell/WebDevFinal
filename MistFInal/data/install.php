<?php
require "config.php";

try{
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    $sql = file_get_contents("init.sql");
    $connection->exec($sql);

    echo"Database created";
}catch (PDOException $error){
    echo $sql. "<br>" . $error->getMessage();
}