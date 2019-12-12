<?php

require_once '../includes/helpers.php';

$data = [];
foreach ($_POST as $name => $value){
    $data[$name] = $value;
}

//hasher le password recu
$password = $data['password']; //sha1($data['password']);

// on va chercher le bon user par l'email
$dbh = connectDB();
$stmt = $dbh->prepare("SELECT * FROM users WHERE email = :email");
$stmt->bindValue(':email', $data['email']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// Compaerer le hash du mot de passe du form et celui de l'user
if ($password === $user['password']){
    // Si egaux alors connexion + redirection home

} else {
    // Sinon redirection formulaire
    header(Location:'');
}