<?php
session_start();
require_once '../fragments/is_logged.php'
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
            <br />
            <br />

        </div>
        <div id="kol_srodk">
            <h2 class="center">10 mitów o psach</h2> <br />

            <script>
                $(function() {
                    $("#accordion").accordion();
                });
            </script>

            <a id="mity"></a>
            <div id="accordion">
                <h3>MIT 1</h3>
                <div>
                    <p class="mit">Owczarki niemieckie można szkolić tylko w języku niemieckim, ponieważ nie rozumieją innych języków.</p>
                    <p class="info"><strong>FAŁSZ</strong> To oczywiście nieprawda, chociaż czasem można usłyszeć takie absurdalne teorie. Każdego psa można wychować w każdym języku, niezależnie od tego, skąd pochodzą jego czworonożni przodkowie.</p> <br />
                </div>
                <h3>MIT 2</h3>
                <div>
                    <p class="mit">Twój pies robi wszystko, by cię zdominować.</p>
                    <p class="info"><strong>FAŁSZ</strong> Pies instynktownie robi wszystko, by jego potrzeby były spełnione. Dąży do upragnionych celów – takich jak pożywienie, zabawa itd. To on potrzebuje lidera, który nim pokieruje, czyli ciebie. Jeśli nie staniesz na wysokości zadania, twój pupil stanie się jak dziecko, którego nikt nie wychowuje.</p> <br />
                </div>
                <h3>MIT 3</h3>
                <div>
                    <p class="mit">Psy mogą zjeść wszystko.</p>
                    <p class="info"><strong>FAŁSZ</strong> Być może jesteś opiekunem psa, który jest w stanie zjeść wszystko, ale to nie znaczy, że powinien. Niektóre produkty dla nas, ludzi, są jadalne, natomiast dla psów – absolutnie nie! Należą do nich m.in.: czosnek, cebula, orzechy makadamia, winogrona, czekolada, alkohol.</p> <br />
                </div>
                <h3>MIT 4</h3>
                <div>
                    <p class="mit">Pies to tylko pies.</p>
                    <p class="info"><strong>FAŁSZ</strong> Każdy właściciel psa z pewnością potwierdzi, że jego pies jest dla niego przyjacielem, towarzyszem dnia codziennego, kumplem do zabaw i pocieszycielem w smutne dni. Pies to aż pies.</p> <br />
                </div>
                <h3>MIT 5</h3>
                <div>
                    <p class="mit">Psia ślina ma właściwości lecznicze.</p>
                    <p class="info"><strong>PRAWDA</strong> Owszem, psia ślina ma takie właściwości, ale tylko dla psa. Jeśli więc nasz zwierzak się skaleczy i wylizuje sobie ranę, dzięki temu usuwa z jej powierzchni zanieczyszczenia. Ale takie czyszczenie skaleczonego miejsca psim jęzorem już nam, ludziom, może zaszkodzić.</p> <br />
                </div>
                <h3>MIT 6</h3>
                <div>
                    <p class="mit">Psy nie czują bólu.</p>
                    <p class="info"><strong>FAŁSZ</strong> Psy to żywe istoty, które odczuwają ból tak samo jak koty, świnki morskie czy słonie. Co prawda instynkt często nakazuje im ukrywać, że coś je boli, ale to, że po psie nie widać bólu, nie znaczy, że nie cierpi.</p> <br />
                </div>
                <h3>MIT 7</h3>
                <div>
                    <p class="mit"> Częste kąpiele mogą powodować u psów łupież.</p>
                    <p class="info"><strong>PRAWDA</strong> Rzeczywiście tak jest – gdy kąpiemy psa zbyt często, jego skóra może pokryć się białymi płatkami. Nie chodzi oczywiście o to, że nie można opłukać psa z błota – sama woda mu nie zaszkodzi. Ale używanie szamponu dla psów za każdym razem warto przemyśleć.</p> <br />
                </div>
                <h3>MIT 8</h3>
                <div>
                    <p class="mit">Zimny, mokry nos to u psa oznaka zdrowia.</p>
                    <p class="info"><strong>FAŁSZ</strong> Temperatura ani wilgotność psiego nosa nie świadczą o tym, czy zwierzak jest zdrowy. Zwróć uwagę, że po obudzeniu psy zawsze mają suche, ciepłe nosy, co wcale nie oznacza, że coś im dolega – to zupełnie normalne.</p> <br />
                </div>
                <h3>MIT 9</h3>
                <div>
                    <p class="mit">Psy nie widzą kolorów.</p>
                    <p class="info"><strong>FAŁSZ</strong> Kiedyś sądzono nawet, że psy widzą świat w barwach czarno-białych. Dziś wiadomo już, że widzą kolory, ale w pastelowych odcieniach, nie tak ostre, jakimi widzimy je my.</p> <br />
                </div>
                <h3>MIT 10</h3>
                <div>
                    <p class="mit">Starszego psa nie da się już niczego nauczyć.</p>
                    <p class="info"><strong>FAŁSZ</strong> Ten mit pokutuje od lat wśród psiarzy. Nie ma jednak wiele wspólnego z prawdą – każdego psa można czegoś nauczyć! Nauka seniora może zająć nieco więcej czasu i wymaga dużo cierpliwości, ale to nie znaczy, że nie warto próbować. </p> <br />
                </div>
                <a id="stopka"></a>
            </div>
        </div>
    </div>
    <div id="stopk">
        <hr />
        <a href="#naglowek" class="right">Powrót na górę strony</a>
        <?php include "../fragments/footer.php"; ?>
    </div>
</div>
</body>
</html>
