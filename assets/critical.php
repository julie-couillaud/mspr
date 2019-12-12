<?php
require_once '../includes/helpers.php';
$id = $_GET['id'];

$data = [];
foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();

$stmt = $dbh->prepare("INSERT INTO comments (title, content, email, pseudo, recipe_id) VALUES (:title, :content, :email, :pseudo, :recipe_id)");
$stmt->bindValue(':title', $data['title']);
$stmt->bindValue(':content', $data['content']);
$stmt->bindValue(':email', $data['email']);
$stmt->bindValue(':pseudo', $data['pseudo']);
$stmt->bindValue(':recipe_id', $id);
$stmt->execute();

$pathSuccess = "/recipe.php?id=" . $id;
header('Location: ' . $pathSuccess);