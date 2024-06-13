<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/src/core.php";

date_default_timezone_set('Europe/Moscow');
$currentTime = date('d/m/Y H:i', time());

?>

<?php includeTemplate('head.php') ?>

<!DOCTYPE html>
<html lang="en">
<body class="index-page">
    <?php includeTemplate('header.php', ["currentTime" => $currentTime]) ?>

    <main class="main">
        <?php 
            includeTemplate('hero.php');
            includeTemplate('about.php');
            includeTemplate('galery.php');
            includeTemplate('service.php');
            includeTemplate('testimonials.php');
            includeTemplate('contacts.php');
        ?>
    </main>

    <?php includeTemplate('footer.php') ?>
</body>

</html>