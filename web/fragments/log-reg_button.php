<br />

<?php if(!isset($_SESSION['user_id'])): ?>

    <form action="../views/login_page.php">
        <input type="submit" class="przycisk" id="login" name="login" value="Rejestracja/Login"/>
    </form>

<?php else: ?>

    <form action="../mongodb/logout.php">
        <b>Witaj, <?=$_SESSION['user_login'] ?></b>
        <br />
        <br />
        <input type="submit" class="przycisk" id="logout" name="logout" value="Wyloguj"/>
    </form>

<?php endif ?>
