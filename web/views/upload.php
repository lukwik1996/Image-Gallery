<?php
session_start();
include '../fragments/is_logged.php';
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
                <br />
                <form id="form" enctype="multipart/form-data" action="" method="post">
                    <input type="file" name="image" />
                    <br />
                    <br />
                    <br />
                    Znak wodny:
                    <br />
                    <input type="text" title="watermark" name="watermark_text" placeholder="Miejsce na znak wodny" />
                    <br />
                    <br />
                    Tytuł:
                    <br />
                    <input type="text" title="title" name="title" placeholder="Tytuł zdjęcia" required />
                    <br />
                    <br />
                    Autor:
                    <br />

                    <?php if(!isset($_SESSION['user_login'])): ?>

                        <input type="text" title="author" name="author" placeholder="Autor zdjęcia" required />

                    <?php else: ?>

                        <input type="text" title="author" name="author" value="<?=$_SESSION['user_login'] ?>" required />

                    <?php endif ?>

                    <br />
                    <br />
                    <?php if(isset($_SESSION['user_login'])): ?>
                        <label>
                            <input type="radio" name="privacy" value="private"> prywatne <br/>
                            <input type="radio" name="privacy" value="public"> publiczne <br/>
                        </label>
                    <?php endif ?>
                    <br />
                    <input type="submit" value="Wyślij plik" name="upload" />
                </form>

				<?php

                require_once '../mongodb/functions.php';

                if(isset($_POST['upload'])) {

                    $file = $_FILES['image'];
                    $file_name = $file['name'];
                    $image_size = filesize($file['tmp_name']);
                    $watermark = $_POST['watermark_text'];

                    $mime_type = $file['type'];

                    if ($mime_type != "image/jpg" && $mime_type != "image/jpeg" && $mime_type != "image/png") {

                        header('Location: upload.php?format');
                        exit;
                    }

                    if ($image_size > 1024 * 1024) {

                        header('Location: upload.php?rozmiar');
                        exit;
                    }

                    move_uploaded_file($file['tmp_name'], '../images/original/'.$file['name']);

                    $image = [  'title' => $_POST['title'],
                                'author' => $_POST['author'],
                                'name' => $file['name']
                    ];

                    if(isset($_POST['privacy'])) {

                        $image['privacy']=$_POST['privacy'];
                    }

                    else {

                        $image['privacy']='public';
                    }

                    $target = '../images/original/' . $file['name'];

                if ($mime_type === "image/jpeg") {
                    watermark_jpg($_FILES['image']['name'], $target, $_POST['watermark_text']);
                    make_thumb_jpg($_FILES['image']['name'], $target);
                }

                else if ($mime_type === "image/png") {
                    watermark_png($_FILES['image']['name'], $target, $_POST['watermark_text']);
                    make_thumb_png($_FILES['image']['name'], $target);
                }

                addImgToCollection($image);

                    header('Location: galeria_spolecz.php?success');
                    exit;
                }

                ?>
            </div>

            <div id="stopka">
                <p class="right link"><a href="galeria_spolecz.php">Powrót</a></p>
                <?php include "../fragments/footer.php"; ?>
            </div>
        </div>
    </div>
</body>
</html>