<?php
session_start();
?>

<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
    <title>Psy</title>
    <?php include "../fragments/head.php"; ?>

    <script>
        $(function() {
            $("#datepicker").datepicker({
                changeMonth: true,
                changeYear: true
            })
        });

        $(function () {
            $(document).tooltip();
        });
    </script>
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
            <form action="mailto:lukasz.wikariusz@gmail.com?subject=Ankieta" enctype="text/plain" method="post">
                <br /> <br />
                <strong>Data:</strong> <br />
                <input type="text" name="data" id="datepicker" size="10" maxlength="10"/>
                <br /> <br />
                <strong>Imię:</strong> <br />
                <input type="text" name="imie" size="10" />
                <br /> <br />
                <strong>Wiek:</strong> <br />
                <select name="wiek" title="Ta informacja zostanie wykorzystana wyłącznie w celach statystycznych.">
                    <option>mniej niż 15</option>
                    <option>15-29</option>
                    <option>30-44</option>
                    <option>45-59</option>
                    <option>60-75</option>
                    <option>więcej niż 75</option>
                </select> <br /> <br />
                <strong>Płeć:</strong> <br />
                <input type="radio" name="płeć " value=" Mężczyzna"> Mężczyzna <br />
                <input type="radio" name="płeć " value=" Kobieta"> Kobieta <br />
                <input type="radio" name="płeć " value=" Nie wiem"> Nie wiem <br />
                <br /> <br />
                <strong>Czy lubi Pan/Pani psy?</strong> <br />
                <input type="radio" name="czy_lubi " value=" Tak" onclick="this.form.elements['b. małe'].disabled = this.form.elements['małe'].disabled = this.form.elements['średnie'].disabled = this.form.elements['duże'].disabled = this.form.elements['b. duże'].disabled = !this.checked"> Tak <br />
                <input type="radio" name="czy_lubi " value=" Nie" onclick="this.form.elements['b. małe'].disabled = this.form.elements['małe'].disabled = this.form.elements['średnie'].disabled = this.form.elements['duże'].disabled = this.form.elements['b. duże'].disabled = this.checked" > Nie <br />
                <br />
                <strong>Jakie psy Pan/Pani lubi?</strong> <br />
                <input type="checkbox" name="b. małe " value=" Bardzo maŁe" />Bardzo małe <br />
                <input type="checkbox" name="małe " value=" MaŁe" />Małe <br />
                <input type="checkbox" name="średnie " value=" Średnie" />Średnie <br />
                <input type="checkbox" name="duże " value=" Duże" />Duże <br />
                <input type="checkbox" name="b. duże " value=" Bardzo duże" />Bardzo duże <br />
                <br /><br />
                <script>
                    function ile() {
                        document.getElementById("TEKST").value = document.getElementById("RANGE").value;
                    }
                </script>
                <strong>Ile ma Pan/Pani zwierząt? (0-50)</strong> <br />
                <input type="range" min="0" max="50" id="RANGE" value="0" onchange="ile()"/> <br />
                <input type="text" name="ile_zwierząt" size="1" maxlength="2" value="0" id="TEKST"/> <br /> <br />
                <textarea name="Dodatkowe uwagi" style="width: 330px; height: 132px" placeholder="Dodatkowe uwagi..."></textarea> <br />
                <input type="submit" value="Wyślij" />
                <input type="reset" value="Wyczyść" />
            </form>
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
