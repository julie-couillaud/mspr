<?php require_once './vendor/autoload.php'; ?>
<?php require_once './includes/config.php'; ?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Jumady</title>
    <link rel="stylesheet" href="./public/css/app.css">
</head>
<body>
<nav class="navbar navbar-light bg-warning">
    <a class="navbar-brand text-white" href="">
        <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
        Jumady ses recettes
    </a>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Vous cherchez une recette ?" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
    </form>
</nav>

<div id="app">
    <header id="header">
        //NAVBAR
    </header>
    <main id="main">