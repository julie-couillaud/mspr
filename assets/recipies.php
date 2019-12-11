<?php
require_once '../includes/helpers.php';

$data = [];

foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO recipes (title, user_id, content, date_created) VALUES (:title, :user_id, :content, :date_created)');
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':user_id', $data['user_id']);
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':date_created', $data['date_created']);
$stmt->execute();
$id = $dbh->lastInsertId();

$_SESSION['id'] = $id;

$pathSuccess = "/index.php?id=" . $_SESSION['id'];
header('Location: ' . $pathSuccess);