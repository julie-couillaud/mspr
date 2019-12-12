<?php require_once './vendor/autoload.php'; ?>
<?php require_once 'config.php'; ?>
<?php require_once 'helpers.php'; ?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Jumady</title>
    <link rel="stylesheet" href="./public/css/app.css">
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a href="index.php"> <img src="./public/images/logo.png" width="140" height="60" class="d-inline-block align-top" alt=""></a>
        <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item text-violet">
                    <a class="nav-link" href="index.php">Top recettes</a>
                </li>
                <?php if (isAuth()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Apéros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Entrées</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Plats</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Desserts</a>
                    </li>
                <?php endif; ?>
            </ul>
            <div class="custom-control-inline">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Une recette en tête ?" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#debug">
                            Debug
                        </a>
                    </li> -->
                    <?php if (!isAuth()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Se connecter</a>
                        </li>
                    <?php else: ?>
                        <li>
                            <a class="nav-link" href="profil.php?id=<?php echo getAuthId(); ?>">Mon profil</a>
                        </li>
                        <li>
                            <a class="nav-link" href="./assets/logout.php">Se déconnecter</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

</header>

<?php require_once 'debug.php'; ?>

<main id="main">