<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
    <title>Psy</title>
    <?php include "../fragments/head.php"; ?>
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

        </div>
        <div id="kol_srodk">
            <div id="galeria" onclick="zmienZdjecie(event)">
                <img class="galeria_zdjecia" src="../zdjecia/galeria/01.jpg" alt="zdjecie1" />
                <img class="galeria_zdjecia" src="../zdjecia/galeria/02.jpg" alt="zdjecie2" />
                <img class="galeria_zdjecia" src="../zdjecia/galeria/03.jpg" alt="zdjecie3" />
                <img class="galeria_zdjecia" src="../zdjecia/galeria/04.jpg" alt="zdjecie4" />
                <img class="galeria_zdjecia" src="../zdjecia/galeria/05.jpg" alt="zdjecie5" />
                <img class="galeria_zdjecia" src="../zdjecia/galeria/06.jpg" alt="zdjecie6" />
            </div>
            <br />
            <img class="large" src="../zdjecia/galeria/01.jpg" id="mainImg" alt="duże zdjęcie"/>

            <script type="text/javascript">

                var images = document.getElementById("galeria").getElementsByTagName("img");

                for (var i = 0; i < images.length; i++) {
                    images[i].onmouseover = function () {
                        this.style.cursor = 'hand';
                        this.style.borderColor = 'red';
                    }

                    images[i].onmouseout = function () {
                        this.style.cursor = 'pointer';
                        this.style.borderColor = 'grey';
                    }
                }

                function zmienZdjecie(event)
                {
                    event = event || window.event;

                    var targetElement = event.target || event.srcElement;

                    if (targetElement.tagName == "IMG") {

                        document.getElementById("mainImg").src = targetElement.getAttribute('src');
                    }
                }
            </script>
        </div>
    </div>
    <div id="stopka">
        <hr />
        <a href="#naglowek" class="right">Powrót na górę strony</a>
        <?php include "../fragments/footer.php"; ?>
    </div>
</div>
</body>
</html>
