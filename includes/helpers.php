<?php

require_once './env.php';

function connectDB(){
    return new PDO("mysql:host=localhost;dbname=mspr", "root", "");
}

function getUser($id){
    $dbh = connectDB();
    $dbh->query("SELECT * FROM users WHERE id = $id LIMIT 1");
    return $dbh->fetch();
}