<?php require_once 'includes/header.php'; ?>

    <section>
        <div class="container">

        <h1 class="text-center text-info mt-4 mb-4"> Créer un compte Jumady </h1>

        <form method="post" action="register.php" class="mx-auto" style="max-width: 600px">

            <div class="form-group">
                <label for="name"> Nom : </label>
                <input type="text" name="name" id="name" placeholder="Nom" class="form-control">
            </div>

            <div class="form-group">
                <label for="first_name"> Prénom : </label>
                <input name="first_name" id="first_name" placeholder="Prénom" class="form-control">
            </div>

            <div class="form-group">
                <label for="mail">  Email : </label>
                <input name="mail" id="mail" placeholder="Email" class="form-control">
            </div>

            <div class="form-group">
                <label for="pwd">  Mot de passe : </label>
                <input name="pwd" id="pwd" placeholder="Mot de passe" class="form-control">
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-danger"> Créer mon compte </button>
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-danger center-block"> Cliquez ici pour vous connecter </button>
            </div>

        </form>
        </div>
    </section>

<?php require_once 'includes/footer.php'; ?>