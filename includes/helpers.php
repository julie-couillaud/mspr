<?php

require_once './env.php';

session_start();

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
    $dbh->query("SELECT * FROM users WHERE id = $id LIMIT 1");
    return $dbh->fetch();
}