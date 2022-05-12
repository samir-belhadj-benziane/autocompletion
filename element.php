<?php
require("./database.class.php");
require("./chat.class.php");

$chatinfos = $chat->getChatById($_GET["id"]);
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
            <h1 class="title-main"><?= $chatinfos["type"] ?></h1>
            <div class="slick-cards">
                <img src="<?= $chatinfos["img"] ?>" alt="" class="slick-img">
                <div class="describ">
                    <h3>Description :</h3>
                    <p><?= $chatinfos["describ"] ?></p>
                </div>

            </div>
        </div>
    </main>
</body>

</html>