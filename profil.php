<?php require_once 'includes/header.php'; ?>

<?php
//recupère le paramètre d'URL nommé id
$id = isset($_GET['id']) ? $_GET['id'] : null;
if(!$id){
    header('Location: ./');
    exit;
}

$user = getUser($id); ?>

<div class="container">
    <div class="card mx-auto my-3">
        <div class="card-body">
            <img src="http://placehold.it/300" alt="" class="img-rounded img-responsive" />
        </div>
        <div class="card-body col-lg-10">
            <h2>Profil de <?php echo getAuth()['first_name']; ?></h2>
            <p><small> San Francisco, USA</small></p>
            <p> email@example.com </p>
            <p> www.jquery2dotnet.com </p>
            <p> June 02, 1988 </p>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
