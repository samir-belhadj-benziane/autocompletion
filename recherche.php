<?php
require("./database.class.php");
require("./chat.class.php");

$chatinfos = $chat->getChatBySearch($_GET["search"]);
?>

<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <script src="./jquery-3.6.0.js"></script>
    <script src="./autocompletion.js"></script>
    <script src="./script.js"></script>
    <title>Autocompletion</title>
</head>

<body>
    <header>
        <div class="search-container row justify-center ">
            <div class="searchandlist">
                <input type="text" name="" id="search-input" placeholder="Trouver votre chat ...">
                <div class="listsearch"></div>
            </div>
            <div class="btn-search">
                <button type="button" class="search-btn">Rechercher</button>
            </div>
        </div>
    </header>
    <main>
        <div class="best-carousel">
            <h1 class="title-main">Vos resultats pour :</h1>
            <div class="slick-cards">
                <?php foreach ($chatinfos as $chatinfo) { ?>
                    <div class="slick-card">
                        <img src="<?= $chatinfo["img"] ?>" alt="" class="slick-img">

                        <div class="slick-card-infos">
                            <h3><?= $chatinfo["type"] ?></h3>
                        </div>

                        <button class="btn-goto-list button-me" data-id="<?= $chatinfo["type"] ?>" title="Acceder à la page">Voir La Page ➜</button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>