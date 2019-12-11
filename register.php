<?php require_once './includes/header.php'; ?>

    <section>
        <div class="container">

        <h1 class="text-center text-violet mt-4 mb-4"> Créer un compte Jumady </h1>

        <form method="POST" action="./assets/register.php" class="mx-auto" style="max-width: 600px">

            <div class="form-group">
                <label for="last_name"> Nom : </label>
                <input type="text" name="last_name" id="last_name" placeholder="Nom" class="form-control">
            </div>

            <div class="form-group">
                <label for="first_name"> Prénom : </label>
                <input name="first_name" id="first_name" placeholder="Prénom" class="form-control">
            </div>

            <div class="form-group">
                <label for="pseudo">  Pseudo : </label>
                <input name="pseudo" id="pseudo" placeholder="Pseudo" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">  Email : </label>
                <input name="email" id="email" placeholder="Email" class="form-control">
            </div>

            <div class="form-group">
                <label for="password"> Mot de passe : </label>
                <input name="password" id="password" placeholder="Mot de passe" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary text-white"> Créer mon compte </button>
            </div>

            <div class="form-group">
                <a class="btn btn-primary text-white"> Cliquez ici pour vous connecter </a>
            </div>

        </form>
        </div>
    </section>

<?php require_once './includes/footer.php'; ?>
