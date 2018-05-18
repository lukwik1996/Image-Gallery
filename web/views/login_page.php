<?php
session_start();
require_once '../fragments/is_logged.php'
?>

<!DOCTYPE HTML>
<html lang="pl-PL" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Psy</title>
    <?php include "../fragments/head.php"; ?>
</head>
<body>
<div id="dokument">
    <div id="naglowek">
        <figure>
            <img class="head_l" src="../zdjecia/head_l.jpg" alt="MĹ‚ody labrador" />
            <img class="head_r" src="../zdjecia/head_r.jpg" alt="MĹ‚ody beagle" />
        </figure>
        <h1 class="small">MOJE HOBBY</h1>
        <h1 class="center">PSY</h1>
    </div>
    <div>
        <div id="kol_lewa">
            <?php include "../fragments/linki.php"; ?>
        </div>
        <div>
            <?php
                if(isset($_GET['error'])){
                    echo "<pre>";
                    switch($_GET['error']){
                        case 'login_niepoprawny':
                    ?>
                    <script>alert('Niepoprawny login lub hasło.')</script>
                    <?php
                    break;
                    case 'inne_hasla':
                    ?>
                    <script>alert('Podane hasła różnią się.')</script>
                    <?php
                    break;
                    case 'user_exists':
                    ?>
                    <script>alert('Użytkownik o takim loginie już istnieje.')</script>
                    <?php
                    break;
                    case 'user_email_exists':
                    ?>
                    <script>alert('Użytkownik o takim adresie e-mail już istnieje.')</script>
                    <?php
                    break;
                    case 'user_not_exists':
                    ?>
                    <script>alert('Taki użytkownik nie istnieje.')</script>
                    <?php
                    break;
                    default:
                    ?>
                    <script>alert('Nieznany błąd. Spróbuj ponownie.')</script>
                    <?php
                    break;
                }
                echo "</pre>";
            }
            ?>
        </div>
        <div id="kol_srodk" style="float: right; width: 60%">
            <br />
            <form method="post" title="register" action="../mongodb/register.php">
                <table width='400' border='5' align="left">
                    <tr>
                        <td colspan="5"><h3 class="link" style="font-size: 30px">Rejestracja</h3></td>
                    </tr>
                    <tr>
                        <td>Adres E-Mail</td>
                        <td><input type="email" name="email" title="email" style="background-color: transparent" required /></td>
                    </tr>
                    <tr>
                        <td>Login</td>
                        <td><input type="text" name="login" title="login" style="background-color: transparent" required /></td>
                    </tr>
                    <tr>
                        <td>Hasło</td>
                        <td><input type='password' name="pass" title="password" style="background-color: transparent" required /></td>
                    </tr>
                    <tr>
                        <td>Potwierdź hasło</td>
                        <td><input type='password' name="pass2" title="password_repeat" style="background-color: transparent" required /></td>
                    </tr>
                    <tr>
                        <td colspan="5"><input type="submit" name="register" title="register" value="Stwórz nowe konto"></td>
                    </tr>
                </table>
            </form>
        </div>
        <div id="kol_srodk" style="float: right; width: 60%">
            <br />
            <form method="post" title="login" action="../mongodb/login.php">
                <input type="hidden" />
                <table width='400' border='5' align="right">
                    <tr>
                        <td colspan="5"><h3 class="link" style="font-size: 30px">Zaloguj się</h3></td>
                    </tr>
                    <tr>
                        <td>Login</td>
                        <td>
                            <input type="text" name="login" title="login" style="background-color: transparent" required /></td>
                    </tr>
                    <tr>
                        <td>Hasło</td>
                        <td><input type='password' name="password" title="password" style="background-color: transparent" required /></td>
                    </tr>
                    <tr>
                        <td colspan="5"><input type="submit" name="log" value="Zaloguj się"></td>
                    </tr>
                </table>
            </form>

        </div>
        <div id="stopka">
            <p class="right link"><a href="index.php">Powrót na stronę główną</a></p>
            <br /><br />
            <hr />
            <?php include "../fragments/footer.php"; ?>
        </div>
    </div>
</div>
</body>
</html>