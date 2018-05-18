<?php
session_start();
include '../fragments/is_logged.php';
?>

<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
    <title>Psy</title>
    <?php include "../fragments/head.php"; ?>
    <link rel="stylesheet" href="../css/images.css" />
</head>
<body>
<div id="dokument">
    <div id="naglowek">
        <figure>
            <img class="head_l" src="../zdjecia/head_l.jpg" alt="Młody labrador" />
            <img class="head_r" src="../zdjecia/head_r.jpg" alt="Młody beagle" />
        </figure>
        <h1 class="small">MOJE HOBBY</h1>
        <h1 class="center">PSY</h1>
    </div>
    <div>
        <div id="kol_lewa">
            <?php include "../fragments/linki.php"; ?>
        </div>
        <div id="kol_prawa" class="center">

            <?php include "../fragments/log-reg_button.php"; ?>
            <br />
            <br />
        </div>
        <div id="kol_srodk" style="width: auto">
            <br />
            <h1 class="link2">Dodaj zdjęcie:</h1>
            <form action="upload.php">
                <br />
                <input type="submit" class="przycisk" name="dodaj_zdjecie" value="Dodaj zdjęcie" />
            </form>
            <br />
            <br />

            <?php

            require_once '../mongodb/functions.php';

            $images = findImages();

            if($images->count()): ?>
                <div class="images cf">
                    <?php foreach($images as $image): ?>
                        <?php if($image['privacy']=='public' || (isset($_SESSION['user_login']) && $_SESSION['user_login'] == $image['author'])): ?>
                            <div class="image">
                                <?php

                                    $img_mini = '../images/mini/' . $image['name'];
                                    $img_watermark = '../images/watermark/' . $image['name'];
                                    $priv = "";
                                    if ($image['privacy'] == 'private'){
                                        $priv = "prywatne";
                                    }
                                    echo '<a href="' . $img_watermark . '"><img src="' . $img_mini . '" alt="obrazek" /></a>	<br/> Autor: ' . $image['author'] . '<br/> Tytuł: ' . $image['title']. '<br/>' . $priv;

                                ?>
                            </div>
                        <?php endif ?>
                    <?php endforeach; ?>
                </div>
            <?php else:
                echo 'Galeria jest pusta.';
            endif ?>

        </div>
    </div>
    <div id="stopka">
        <hr />
        <a href="#naglowek" class="right">Powrót na górę strony</a>
        <br />
        <h2 class="stopka_tekst">
            <strong>Autor: </strong>
        </h2>
        <h2 class="link">Łukasz Wikariusz  &nbsp; <a href="mailto:lukasz.wikariusz@gmail.com">lukasz.wikariusz@gmail.com</a></h2>
        <br />
        <h2 class="stopka_tekst"><strong>Źródła: </strong></h2>
        <ul>
            <li><h2 class="link"><a href="http://www.dogopedia.pl">DOGOPEDIA</a></h2>
            <li><h2 class="link"><a href="http://www.google.com">GOOGLE GRAFIKA</a></h2>
            <li><h2 class="link"><a href="http://www.psy.pl/ciekawostki">PSY.PL</a></h2>
        </ul>
    </div>
</div>
</body>
</html>

