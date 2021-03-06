<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/env.php';

session_start();

function dd($var){
    var_dump($var);
    die();
}

function connectDB(){
    return new PDO("mysql:host=localhost;dbname=mspr", "root", "", [
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ]);
}

function isAuth(){
    return isset($_SESSION['auth_id']);
}

function getAuth(){
    if (!isAuth()){
        return false;
    }
    return getUser($_SESSION['auth_id']);
}

function getAuthId(){
    $auth = getAuth();
    return $auth['id'];
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

function getRecipes(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM recipes');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getRecipe($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM recipes WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute([":id"=> $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function getComments(){
    $dbh = connectDB();
    $stmt = $dbh->prepare('SELECT * FROM comments');
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getComment($id){
    $dbh = connectDB();
    $stmt = $dbh->prepare("SELECT * FROM comments WHERE id = :id");
    $stmt->bindValue(':id', $id);
    $stmt->execute([":id"=> $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

