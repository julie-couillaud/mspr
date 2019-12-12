<?php
require_once '../includes/helpers.php';

$data = [];

foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();

$stmt = $dbh->prepare('INSERT INTO recipes (title, content, email, pseudo, recipie_id, date_created) VALUES (:title, :content, :email, :pseudo, :recipie_id, :date_created)');
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':pseudo', $data['pseudo']);
$stmt->bindValue(':recipie_id', $data['recipie_id']);
$stmt->bindValue(':date_created', $data['date_created']);
$stmt->execute();

$id = $dbh->lastInsertId();

$_SESSION['id'] = $id;

$pathSuccess = "/recipe.php?id=" . $_SESSION['id'];
header('Location: ' . $pathSuccess);