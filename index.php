<?php require_once './includes/header.php'; ?>

<section>
    <div class="container">
        <h1 class="text-violet text-center mx-5 my-5">LES RECETTES PREFEREES DES INTERNAUTES</h1>
        <div class="card">
            <div class="card-header">
                Publier une nouvelle recette
            </div>
            <div class="card-body">
                <form action="./assets/store-recipe.php" method="POST">
                    <div class="form-group">
                        <label for="title">Titre de la recette</label>
                        <input id="title" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="content">Contenu de la recette</label>
                        <textarea id="content" name="content" class="form-control" required></textarea>
                    </div>
                    <button class="btn btn-primary text-white">
                        Publier
                    </button>
                </form>
            </div>
        </div>

        <div class="card-columns">
            <?php foreach (getRecipes() as $recipe): ?>
                <a href="./recipe.php?id=<?php echo $recipe['id']; ?>" class="card my-5">
                    <div class="card-body">
                        <h2 class="card-title text-violet"><?php echo $recipe['title']; ?></h2>
                        <p class="card-text"><?php echo $recipe['content']; ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php require_once 'includes/footer.php'; ?>
