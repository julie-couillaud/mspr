<?php require_once '../includes/header.php'; ?>

<?php

$id= $_GET['id'];

$sql = "SELECT *
		FROM recipie 
		WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt->execute([":id" => $id]);
$recipie = $stmt->fetchAll();

//on initialise nos variables pour éviter les erreurs php
$errors = [];
$email= "";
$pseudo = "";
$title ="";
$note = "";
$content = "";

//si le formulaire est soumis
if (!empty($_POST)){
    //on crée une variable pour chaque champs du formulaire
    $email = $_POST['email'];
    $pseudo = $_POST['pseudo'];
    $title = $_POST['title'];
    $note = $_POST['note'];
    $content = $_POST['content'];

    // on valide les données : si un mail n'est pas trop long par exemple
    // validation de l'email
    if (empty($email)){
        $errors[] = "Veuillez inscrire un email valide !";
    }

    //validation du pseudo
    if (empty($pseudo)){
        $errors[] = "Veuillez inscrire votre pseudo !";

    }

    //validation du titre
    if (empty($title)){
        $errors[] = "Veuillez donner un titre à votre critique !";
    }

    //validation de la note
    if (empty($note)){
        $errors[] = "Veuillez donner une note sur 10 à cette critique !";
    }

    //validation de la critique
    if (empty($content)){
        $errors[] = "Veuillez donner votre avis !";
    }

    //si tout est valide
    if (empty($errors)){

        $sql = "INSERT INTO comments
		VALUES (NULL, :title, :note, :content, :email, :pseudo, :album_id, NOW())";

        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":title" => $title,
            ":note" => $note,
            ":content" => $content,
            ":email" => $email,
            ":pseudo" => $pseudo,
            ":album_id" => $id,
        ]);

        // redirige sur la page de l'album une fois la critique publiée
        header("Location: detail-album.php?id=" . $id);

    }
}
?>

    <title> Cookies page B! </title>

    <?php if (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'grey'){ ?>
        <link rel="stylesheet" href= "grey.css">
    <?php }
    elseif (!empty($_COOKIE['theme']) && $_COOKIE['theme'] == 'blue'){ ?>
        <link rel="stylesheet" href= "blue.css">

    <?php } ?>

</head>

<body>
<header>

    <div class="title">

        <a class="home" href="index.php">
            <img class="logo" src="img/logo.png">
            <div class="musi">Musi</div><span class="KA">ka</span>
            <img alt="joker" class="joker"src="img/joker.gif">
        </a>

    </div>

    <div class="sous-titre">
        <nav>

            <a  class="Tous"  href="index.php">Tous les albums | </a>

            <?php
            foreach ($albums as $album){
                echo '<span>' . $album ['title'] . '</span>';
            }
            ?>

            <a  class="critique"  href="critique.php"> | Laisser une critique</a>

        </nav>

        <form action="recherche.php">

            <div class="recherche">
                <input type="search" name="search" placeholder="Bob Marley">
                <button class="ok">ok</button>
            </div>

        </form>

</header>

<main>

    </div>

    <section class="cadrerouge">

        <div class="col_left">
            <?php

            foreach ($albums as $album){

                echo '<div><img class=img src=img/covers/' . $album ['picture'] . '></div>';
                echo '<div>' . $album ['price'] . ' €</div>';
                ?>
                <a href="<?php echo $album['amazon_url']?>" class="boutonamazon">Acheter sur Amazon.fr !</a>

                <?php
            }
            ?>
        </div>

        <div class="col_right">
            <?php

            foreach ($albums as $album){

                echo '<h4 class=title_critique>' . 'Laisser une critique sur ' . $album ['title'] . '</h4>';
                echo '<h4>' . 'par '. $album ['artist'] . '</h4>';
            }
            ?>

            <a href="critique.php"></a>

            <form method="post">

                <div class="right">
                    <label for="email">Email</label>
                    <input class="i" name= "email" id="email"></input>
                </div>

                <div class ="right">
                    <label for="username">Pseudo</label>
                    <input class="i" type="text" name="pseudo" id="username ">
                </div>

                <div class ="right">
                    <label for="title"> Titre de votre critique </label>
                    <input class="i" type="title" name="title" id="title ">
                </div>

                <div class ="right">
                    <div> Votre note sur 10 </div>

                    <div>
                        <input type="radio" value="1" name="note"> 1
                        <input type="radio" value="2" name="note"> 2
                        <input type="radio" value="3" name="note" > 3
                        <input type="radio" value="4" name="note" > 4
                        <input type="radio" value="5" name="note" > 5
                        <input type="radio" value="6" name="note" > 6
                        <input type="radio" value="7" name="note" > 7
                        <input type="radio" value="8" name="note" > 8
                        <input type="radio" value="9" name="note" > 9
                        <input type="radio" value="10" name="note" > 10
                    </div>

                </div>

                <div class ="right">
                    <label for="content">Votre critique</label>
                    <textarea  class="l" type="content" name="content" id="content "></textarea>
                </div>

                <!-- affiche les éventuels message d'erreurs -->
                <div class="errors">
                    <?php echo implode('<br>', $errors); ?>
                </div>

                <div class ="right">
                    <button class= "button_envoyer">Envoyer !</button>
                </div>

            </form>
        </div>

    </section>

</main>

<?php require_once './includes/footer.php'; ?>