<?php require_once '../includes/header.php'; ?>

<?php

//recupère le paramètre d'URL nommé id
$id = $_GET['id'];

// récupérer les albums
$sql = "SELECT *
			FROM recipies
			WHERE id = :id";

//envoie notre requête au serveur MySQL, sans l'exécuter
$stmt = $connexion -> prepare($sql);
//exécute la requête
$stmt -> execute([":id"=> $id]);
//nous retourne les résultats
$albums = $stmt -> fetchAll();


// récupérer les critiques
$sql = "SELECT *
			FROM comments
			WHERE user_id = :id
			ORDER BY date_created DESC";

//envoie notre requête au serveur MySQL, sans l'exécuter
$stmt = $connexion -> prepare($sql);
//exécute la requête
$stmt -> execute([":id" => $id]);
//nous retourne les résultats
$comments = $stmt -> fetchAll();

?>

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

    <h2>Dernières critiques</h2>

    <div class="last_critiques">

        <?php
        foreach ($comments as $comment){

            echo '<h5>' . $comment ['recipies'] . '</h5>';

            // compose une "barre" comprenant la note, le pseudo et la date de création de l'article
            echo '<div>' . "Par " . $comment ['user_id'] . ", le " . $comment ['date_created'] . '</div>';
            echo '</div>';

            echo '<div>' . $comment ['content'] . '</div>';
        }
        ?>
    </div>


<?php require_once 'includes/footer.php'; ?>