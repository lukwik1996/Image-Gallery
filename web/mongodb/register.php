<?php

require_once 'functions.php';

$user = [
    'login' => null,
    'password' => null,
    'email' => null,
    '_id'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $login = $_POST['login'];
        $password = $_POST['pass'];
        $password2 = $_POST['pass2'];
        $email = $_POST['email'];
        $id = new MongoId();

        if ($password != $password2) {
            header('Location: ../views/login_page.php?error=inne_hasla');
            exit;
        }

        $user_login = findUser($login);
        $user_email = findUserEmail($email);

        if ($user_login !== null) {
            header('Location: ../views/login_page.php?error=user_exists');
            exit;
        }

        if ($user_email !== null) {
            header('Location: ../views/login_page.php?error=user_email_exists');
            exit;
        }


        $hash = password_hash($password, PASSWORD_DEFAULT);
        $user = [
            'login' => $login,
            'password' => $hash,
            'email' => $email,
            '_id' => $id
        ];

        addUser($user);

        header('Location: ../views/index.php?account_created');
        exit;
}
/*
require_once 'functions.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $password = $_POST['pass'];
    $repeat_password = $_POST['pass2'];
    $login = $_POST['login'];
    $mail = $_POST['email'];
    if ($password == '' || $repeat_password == '' || $login == '' || $mail == '')
    {
        echo 'Podaj wszystkie dane';
    }
    else if ($password === $repeat_password)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $user = ['login' => $login,
                 'password' => $hash,
                 'email' => $mail ];

        addUser($user);
        header('Location: ../views/index.php?account_created');
        exit;
    }
    else
    {
        echo 'Hasla nie sa identyczne';
    }
}
header('Location: login_page.php?error=inne_hasla');
*/
?>