<?php

require_once '../includes/helpers.php';

$data = [];

foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':password', $data['password']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// foreach ($user as $name => $value){
    // $_SESSION["$name"] = $value;
//}

$id = ($user['id']);
//if ($user['password'] == sha1($data['password'])){
    //$_SESSION['auth_id'] = $user['id'];
    //header('Location: ../index.php?id=$id');
//}
//else{
  //  header('Location: ../index.php');
//}

$pathSuccess = "/profil.php?id=" . $_SESSION['id'];
header('Location: ' . $pathSuccess);