<?php require_once 'includes/header.php'; ?>

    <h1 class="text-center text-info mt-4 mb-4"> Créer un compte Jumady </h1>

    <form method="post" action="register.php" class="justify-content-center">

        <div class="form-group">
            <label for="name"> Votre nom : </label>
            <input type="text" name="name" id="name" placeholder="Nom" class="form-control col-md-2">
        </div>

        <div class="form-group">
            <label for="first_name"> Votre prénom : </label>
            <input name="first_name" id="first_name" placeholder="Prénom" class="form-control col-md-2">
        </div>

        <div class="form-group">
            <label for="mail">  Votre email : </label>
            <input name="mail" id="mail" placeholder="Email" class="form-control col-md-2">
        </div>

        <div class="form-group">
            <label for="pwd">  Votre mot de passe : </label>
            <input name="pwd" id="pwd" placeholder="Mot de passe" class="form-control col-md-2">
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-danger form-control col-md-2"> Créer mon compte </button>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-danger form-control col-md-2"> Cliquez ici pour vous connecter </button>
        </div>

    </form>

<?php require_once 'includes/footer.php'; ?>