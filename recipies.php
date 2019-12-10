<?php require_once 'includes/header.php'; ?>

<h1> PAGE RECETTE </h1>
    <div class="card">
        <div class="card-header">
            //Nom de la recette
        </div>

        <div class="card-body">
            <img src="https://picsum.photos/500" class="card-img-top" alt="...">
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
    </div>

    <h3>Dernières critiques</h3>

    <div class="last_critiques">

        <?php
        foreach ($comments as $comment){

            echo '<h5>' . $comment ['recipie'] . '</h5>';

            // compose une "barre" comprenant la note, le pseudo et la date de création de l'article
            echo '<div>' . "Par " . $comment ['pseudo'] . ", le " . $comment ['date_created'] . '</div>';
            echo '</div>';

            echo '<div>' . $comment ['content'] . '</div>';
        }
        ?>
    </div>


<?php require_once 'includes/footer.php'; ?>