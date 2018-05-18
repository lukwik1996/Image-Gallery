
<?php

require_once 'functions.php';

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $login = $_POST['login'];
    $password = $_POST['password'];

        $user = findUser($login);

        if ($user != null){
            if (password_verify($password, $user['password'])) {
                session_start();
                session_regenerate_id();
                $_SESSION['user_id'] = $user['_id'];
                $_SESSION['user_login'] = $user['login'];
                header('Location: ../views/index.php?zalogowany');
                exit;
            }
            else {
                header('Location: ../views/login_page.php?login_niepoprawny');
                exit;
            }
        }

        else{

            header('Location: ../views/login_page.php?login_niepoprawny');
            exit;
        }
}

?>
