<?php
require_once '../includes/helpers.php';

$data = [];
foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare('INSERT INTO recipes (title, content) VALUES (:title, :content)');
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':content', $data['content']);
$stmt->execute();

$id = $dbh->lastInsertId();

$pathSuccess = "/recipe.php?id=$id";
header('Location: ' . $pathSuccess);