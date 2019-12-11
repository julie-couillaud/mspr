<?php require_once './includes/header.php'; ?>
<?php use Carbon\Carbon; ?>

<?php

$user = [];

?>

<section>
<div class="container">

    <h1 class="text-center mx-5 my-5">LES RECETTES PREFEREES DES INTERNAUTES</h1>

    <div class="card my-5">

        <div class="card-header">
            Publier une nouvelle recette
        </div>

        <form class="card-body">
            <div class="form-group">
                <input type="text" name="cook" class="form-control">
            </div>

                <div class="form-group">
                    <label for="category">Dans quelle catégorie se trouve votre recette ?</label>
                    <select name="category" id="category" class="custom-select">
                        <option value="aperitif">Apéritif</option>
                        <option value="entry">Entrée</option>
                        <option value="dish">Plat</option>
                        <option value="dessert">Dessert</option>
                    </select>
                </div>
                <button class="btn btn-primary text-white">Publier</button>
            </form>
    </div>

    <div class="card-columns">
        <div class="card">
            <img src="https://picsum.photos/500" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Cheesecake aux fruits rouges</h2>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <?php echo Carbon::make(date('Y-m-d 10:25:00'))->diffForHumans(); ?>
            </div>
        </div>

        <div class="card p-3">
            <blockquote class="blockquote mb-0 card-body">
                <p>111Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>

        <div class="card">
            <img src="https://picsum.photos/500" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div class="card bg-primary text-white text-center p-3">
            <blockquote class="blockquote mb-0">
                <p>Concocter avec amour et pour vous </p>
                <footer class="blockquote-footer text-white">
                    <small>
                        <cite title="Source Title">L'équipe Jumady ses recettes</cite>
                    </small>
                </footer>
            </blockquote>
        </div>

        <div class="card text-center">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has a regular title and short paragraphy of text below it.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <img src="https://picsum.photos/100" class="card-img-top" alt="...">
        </div>
        <div class="card p-3 text-right">
            <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">
                    <small class="text-muted">
                        Someone famous in <cite title="Source Title">Source Title</cite>
                    </small>
                </footer>
            </blockquote>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is another card with title and supporting text below. This card has some additional content to make it slightly taller overall.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>
</section>

<?php require_once 'includes/footer.php'; ?>
