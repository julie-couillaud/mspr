<?php require_once 'includes/header.php'; ?>

<?php
//recupère le paramètre d'URL nommé id
$id = isset($_GET['id']) ? $_GET['id'] : null;
if(!$id){
    header('Location: ../index.php');
    exit;
}

$user = getUser($id); ?>
<div class="container">
    <div class="card mx-auto my-3">
        <div class="card-body align-content-center">
            <img src="https://www.gravatar.com/avatar/" alt="" class="rounded"/>
        </div>
        <div class="card-body col-lg-10">
            <h2>Profil de <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h2>

            <p><small><?php echo $user['pseudo']; ?></small></p>
            <p><?php echo $user['email']; ?></p>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>
