<?php require_once './includes/header.php'; ?>

<h1 class="text-center text-violet mb-5 my-5"> CONNEXION </h1>

<form  id="form" class="card-body" action="assets/login.php">
    <div class="card mx-5">
        <div class="card-header">
            JUMADY️
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="email">Email :</label>
                <input id="username-input" type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="username">Mot de passe :</label>
                <input id="username-input" type="text" name="username" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-large text-white"> Se connecter </button>
            </div>
        </div>
    </div>
</form>

<?php require_once './includes/footer.php'; ?>