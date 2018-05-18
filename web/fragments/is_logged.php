<?php

if(isset($_GET['account_created'])){
    ?>
    <script>alert('Konto zostało utworzone.')</script>
    <?php
}

else if(isset($_GET['zalogowany'])){
    ?>
    <script>alert('Zalogowany.')</script>
    <?php
}

else if(isset($_GET['login_niepoprawny'])){
    ?>
    <script>alert('Błędny login lub hasło.')</script>
    <?php
}

else if(isset($_GET['format'])){
    ?>
    <script>alert('Wybrany plik nie jest formatu jpg lub png.')</script>
    <?php
}

else if(isset($_GET['rozmiar'])){
    ?>
    <script>alert('Rozmiar pliku przekracza 1MB.')</script>
    <?php
}

else if(isset($_GET['success'])){
    ?>
    <script>alert("Zdjęcie przesłane")</script>
    <?php
}

else if(isset($_GET['logout'])){
    ?>
    <script>alert('Wylogowano pomyślnie.')</script>
    <?php
}

?>