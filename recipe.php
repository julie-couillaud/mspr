<?php require_once './includes/header.php';
$id = $_GET['id'];
$recipe = getRecipe($id);
?>

    <section class="py-5">
        <div class="container">

            <h1 class="text-violet text-center my-3"> <?php echo $recipe['title']; ?> </h1>

            <div class="card mx-5">
                <div class="card-body">
                    <p class="card-text"><?php echo $recipe['content']; ?></p>
                </div>
            </div>

            <div class="form-group">
                <a class="btn btn-primary text-white my-5" href="critical.php?id=<?php echo $recipe['id']; ?>"> Laisser une critique </a>
            </div>

            <div class="card-columns">
                <?php foreach (getComments() as $comment): ?>
                    <a href="./recipe.php?id=<?php echo $comment['id']; ?>" class="card my-5">
                        <div class="card-body">
                            <p class="card-title text-violet"><?php echo $comment['title']; ?></p>
                            <p class="card-text"><?php echo $comment['content']; ?></p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

        </div>

    </section>

<?php require_once 'includes/footer.php'; ?>