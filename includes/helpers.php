<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/env.php';

function dd($var){
    var_dump($var);
    die();
}

function connectDB(){
    return new PDO("mysql:host=localhost;dbname=mspr", "root", "");
}

function getUsers(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM users');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getUser($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute([":id"=> $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function isAuth(){
    return isset($_SESSION['auth_id']);
}