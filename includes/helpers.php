<?php

require_once './env.php';

function dd($var){
    var_dump($var);
    die();
}

function connectDB(){
    return new PDO("mysql:host=localhost;dbname=mspr", "root", "");
}

function getUser($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->execute([":id"=> $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}