<?php require_once './includes/header.php';
$id = $_GET['id'];
?>

    <section>

        <div class="container">

            <h1 class="text-center text-violet mt-4 mb-4"> Laisser un commentaire </h1>
            <form method="post" action="./assets/critical.php?id=<?php echo $id; ?>">

                <div class ="form-group">
                    <label for="title"> Titre de votre commentaire : </label>
                    <input type="text" name="title" id="title" placeholder="Titre" class="form-control">
                </div>

                <div class ="form-group">
                    <label for="content">Votre commentaire : </label>
                    <textarea type="text" name="comment" id="comment" placeholder="Commentaire" class="form-control"></textarea>
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
                    <button  class="btn btn-primary text-white" type="submit"> Envoyer mon commentaire </button>
                </div>

            </form>
        </div>

    </section>

<?php require_once './includes/footer.php'; ?>