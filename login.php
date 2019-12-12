<?php require_once './includes/header.php';

if(isAuth()){
  header('Location: ../');
} ?>

<section>
<div class="container">

<h1 class="text-center text-violet mb-5 my-5"> CONNEXION </h1>

<form  method="POST" class="mx-auto" action="assets/login.php">
    <div class="form-group">
        <div class="form-group">
            <div class="form-group">
                <label for="email">Email :</label>
                <input id="username-input" type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label for="username">Mot de passe :</label>
                <input id="username-input" type="password" name="password" class="form-control">
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary btn-large text-white"> Se connecter </button>
            </div>

            <div class="form-group text-center">
                <a class="btn btn-primary text-white" href="register.php"> Créer votre compte </a>
            </div>

        </div>
    </div>
</form>
</div>
</section>

<?php require_once './includes/footer.php'; ?>