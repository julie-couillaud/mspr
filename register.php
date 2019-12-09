<?php require_once 'includes/header.php'; ?>

    <h1 class="text-center text-info mt-4 mb-4"> S'INSCRIRE </h1>

    <form method="post" action="register.php">

        <div class="form-group">
            <label for="name"> Votre nom : </label>
            <input type="text" name="name" id="name" placeholder="Nom"> <br>
        </div>

        <label for="first_name"> Votre prénom : </label>
        <input name="first_name" id="first_name" placeholder="Prénom"><br>

        <label for="adress">  Votre adresse postale : </label>
        <input name="adress" id="adress" placeholder="Adresse postale"><br>

        <label for="mail">  Votre email: </label>
        <input name="mail" id="mail" placeholder="Email"><br>

        <label for="pwd">  Votre mot de passe : </label>
        <input name="pwd" id="pwd" placeholder="Mot de passe"><br>

        <input type="submit" name="Inscription">

    </form>

<?php require_once 'includes/footer.php'; ?>