<?php
extract($_POST);

require("./database.class.php");
require("./chat.class.php");

$search = $_POST['search'];

$chatinfos = $chat->getChatBySearch($search);

?>

<?php foreach ($chatinfos as $chatinfo) { ?>
    <div class="listset">
        <img src="<?= $chatinfo['img']?>" alt="">
        <button type="button" class="btn-type-list"><?= $chatinfo['type']?></button>
        <button type="button" class="btn-goto-list" data-id="<?= $chatinfo['type']?>" title="Acceder à la page">➜</button>
    </div>
<?php } ?>