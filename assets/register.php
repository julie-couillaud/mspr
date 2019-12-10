<?php
require_once '../includes/helpers.php';

$data = [];

foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

$dbh = connectDB();
$stmt = $dbh->prepare('SELECT (firts_name, last_name) FROM users');
$stmt->execute();
return $stmt->fetch(PDO::FETCH_ASSOC);