<?php

    session_start();
    unset($_SESSION['user_id']);
    unset($_SESSION['user_login']);

header('Location: ../views/index.php?logout');

?>