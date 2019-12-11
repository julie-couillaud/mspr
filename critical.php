<?php require_once './includes/header.php'; ?>

    <section>

        <div class="container">

            <h1 class="text-center text-violet mt-4 mb-4"> Laisser un commentaire </h1>

            <?php

            foreach ($recipes as $recipe){

                echo '<h2>' . 'Laisser un commentaire sur ' . $recipe ['title'] . '</h2>';
            }
            ?>

            <form method="post" action="./assets/critical.php">

                <div class ="form-group">
                    <label for="title"> Titre de votre commentaire : </label>
                    <input type="text" name="title" id="title" placeholder="Titre" class="form-control">
                </div>

                <div class ="form-group">
                    <label for="content">Votre commentaire : </label>
                    <input type="text" name="comment" id="comment" placeholder="Commentaire" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">Email : </label>
                    <input name="email" id="email" placeholder="Email" class="form-control">
                </div>

                <div class ="form-group">
                    <label for="username">Pseudo : </label>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" class="form-control">
                </div>

                <div class="form-group">
                    <a class="btn btn-primary text-white"> Envoyer mon commentaire </a>
                </div>

            </form>
        </div>

    </section>

<?php require_once './includes/footer.php'; ?>