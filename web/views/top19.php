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

            <br />
            <br />
            <strong>Dodaj rasę psa do listy</strong>
            <input type="text" class="tekst" id="pole_text" placeholder="tu wpisz rasę psa" />
            <br />
            <input type="button" class="przycisk" id="dodaj" name="dodaj" value="Dodaj nowy element" onclick="dodaj()" />
            <br />
            <input type="button" class="przycisk" id="zobacz" name="zobacz" value="Wczytaj poprzedni" onclick="zobacz()" />
            <br />
            <input type="button" class="przycisk" id="wyczysc" name="wyczysc" value="Wyczyść listę" onclick="wyczysc()" onmouseover="hover()" />
            <br />
            <input type="button" class="przycisk" id="edytuj" name="edytuj" value="Edytuj ostatni" onclick="edytuj()" onmouseover="hover()" />
            <br />
            <input type="button" class="przycisk" id="usun" name="usun" value="Usuń ostatni" onclick="usun()" onmouseover="hover()" />
            <br />
            <input type="button" class="przycisk" id="zobacz2" name="zobacz2" value="Wczytaj poprzedni (local)" onclick="zobacz2()" />
            <br />
            <input type="button" class="przycisk" id="zobacz3" name="zobacz3" value="Wczytaj poprzedni (sesja)" onclick="zobacz3()" />
        </div>
        <div id="kol_srodk">
            <br />
            <br />
            <table id="tabela">
                <caption>Top 19 ras psów w Polsce</caption>
                <tr>
                    <th>L. p.</th>
                    <th>Rasa</th>
                    <th>Kraj pochodzenia</th>
                    <th>Rozmiar (1-5)</th>
                    <th class="collapse">Zdjęcie</th>
                </tr>
                <tr id="Amerykański staffordshire terrier">
                    <td>1.</td>
                    <td>Amerykański staffordshire terrier</td>
                    <td>USA</td>
                    <td>4</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/01.jpg" alt="Amerykański staffordshire terrier"/></td>
                </tr>
                <tr id="Beagle">
                    <td>2.</td>
                    <td>Beagle</td>
                    <td>Wielka Brytania</td>
                    <td>3</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/02.jpg" alt="Beagle" /></td>
                </tr>
                <tr id="Berneński pies pasterski">
                    <td>3.</td>
                    <td>Berneński pies pasterski</td>
                    <td>Szwajcaria</td>
                    <td>5</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/03.jpg" alt="Berneński pies pasterski" /></td>
                </tr>
                <tr id="Buldog angielski">
                    <td>4.</td>
                    <td>Buldog angielski</td>
                    <td>Wielka Brytania</td>
                    <td>3</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/04.jpg" alt="Buldog angielski" /></td>
                </tr>
                <tr id="Buldog francuski">
                    <td>5.</td>
                    <td>Buldog francuski</td>
                    <td>Francja</td>
                    <td>3</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/05.jpg" alt="Buldog francuski" /></td>
                </tr>
                <tr id="Bulterier">
                    <td>6.</td>
                    <td>Bulterier</td>
                    <td>Wielka Brytania</td>
                    <td>3</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/06.jpg" alt="Bulterier" /></td>
                </tr>
                <tr id="Cavalier king charles spaniel">
                    <td>7.</td>
                    <td>Cavalier king charles spaniel</td>
                    <td>Wielka Brytania</td>
                    <td>2</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/07.jpg" alt="Cavalier king charles spaniel" /></td>
                </tr>
                <tr id="Dog niemiecki">
                    <td>8.</td>
                    <td>Dog niemiecki</td>
                    <td>Niemcy</td>
                    <td>5</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/08.jpg" alt="Dog niemiecki" /></td>
                </tr>
                <tr id="Golden retriever">
                    <td>9.</td>
                    <td>Golden retriever</td>
                    <td>Wielka Brytania</td>
                    <td>4</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/09.jpg" alt="Golden retriever" /></td>
                </tr>
                <tr id="Grzywacz chiński">
                    <td>10.</td>
                    <td>Grzywacz chiński</td>
                    <td>Chiny</td>
                    <td>1</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/10.jpg" alt="Grzywacz chiński" /></td>
                </tr>
                <tr id="Labrador retriever">
                    <td>11.</td>
                    <td>Labrador retriever</td>
                    <td>Wielka Brytania</td>
                    <td>4</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/11.jpg" alt="Labrador retriever" /></td>
                </tr>
                <tr id="Mops">
                    <td>12.</td>
                    <td>Mops</td>
                    <td>Chiny</td>
                    <td>2</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/12.jpg" alt="Mops" /></td>
                </tr>
                <tr id="Owczarek niemiecki">
                    <td>13.</td>
                    <td>Owczarek niemiecki</td>
                    <td>Niemcy</td>
                    <td>4</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/13.jpg" alt="Owczarek niemiecki" /></td>
                </tr>
                <tr id="Owczarek środkowoazjatycki">
                    <td>14.</td>
                    <td>Owczarek środkowoazjatycki</td>
                    <td>Rosja</td>
                    <td>5</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/14.jpg" alt="Owczarek środkowoazjatycki" /></td>
                </tr>
                <tr id="Rottweiler">
                    <td>15.</td>
                    <td>Rottweiler</td>
                    <td>Niemcy</td>
                    <td>5</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/15.jpg" alt="Rottweiler" /></td>
                </tr>
                <tr id="Siberian husky">
                    <td>16.</td>
                    <td>Siberian husky</td>
                    <td>Rosja</td>
                    <td>4</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/16.jpg" alt="Siberian husky" /></td>
                </tr>
                <tr id="Sznaucer miniaturowy">
                    <td>17.</td>
                    <td>Sznaucer miniaturowy</td>
                    <td>Niemcy</td>
                    <td>2</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/17.jpg" alt="Sznaucer miniaturowy" /></td>
                </tr>
                <tr id="West highland white terrier">
                    <td>18.</td>
                    <td>West highland white terrier</td>
                    <td>Wielka Brytania</td>
                    <td>2</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/18.jpg" alt="West highland white terrier" /></td>
                </tr>
                <tr id="Yorkshire terrer">
                    <td>19.</td>
                    <td>Yorkshire terrer</td>
                    <td>Wielka Brytania</td>
                    <td>1</td>
                    <td class="collapse"><img class="table hover" src="../zdjecia/tabela/19.jpg" alt="Yorkshire terrer" /></td>
                </tr>
            </table>
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
