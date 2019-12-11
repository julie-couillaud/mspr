<?php require_once './includes/header.php'; ?>

<h1> PAGE <?php echo $recipes['title']; ?> </h1>

    <div class="card">
        <div class="card-header">
           <?php echo $recipes['title']; ?>
        </div>

        <div class="card-body">
            <img src="https://picsum.photos/500" class="img-top" alt="...">
            <p class="card-text"><?php echo $recipes['content']; ?></p>
        </div>
    </div>

    <div class="form-group">
        <a class="btn btn-primary text-white" href="critical.php"> Laisser un commentaire </a>
    </div>

<?php require_once 'includes/footer.php'; ?>