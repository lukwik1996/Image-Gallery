<?php

function get_db()
{
    $mongo = new MongoClient(
        "mongodb://localhost:27017/",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
            'db' => 'wai',
        ]);

    $db = $mongo->wai;

    return $db;
}
function addImgToCollection($image)
{
$db = get_db();
$db->images->insert($image);
}

function findImages()
{
    $db = get_db();
    $images = $db->images->find();
    return $images;
}

function findUser($login)
{
$db = get_db();
$user = $db->users->findOne(['login' => $login]);

    return $user;
}

function findUserEmail($email)
{
    $db = get_db();
    $email = $db->users->findOne(['email' => $email]);
    return $email;
}

function addUser($user)
{
$db = get_db();
$db->users->insert($user);
}


function watermark_jpg($image_name, $src, $watermark){

    $image = imagecreatefromjpeg($src);
    $output = '../images/watermark/'.$image_name;

    $white = imagecolorallocate($image, 255, 255, 255);

    $font_size = 25;
    $rotation = 0;
    $origin_x = 17;
    $origin_y = 25;
    $font = '../fonts/TypoGraphica.otf';

    imagettftext($image, $font_size, $rotation, $origin_x, $origin_y, $white, $font, $watermark);

    imagejpeg($image, $output, 99);

}

function watermark_png($image_name, $src, $watermark){

    $image = imagecreatefrompng($src);
    $output = '../images/watermark/'.$image_name;

    $white = imagecolorallocate($image, 255, 255, 255);

    $font_size = 25;
    $rotation = 0;
    $origin_x = 20;
    $origin_y = 35;
    $font = '../fonts/TypoGraphica.otf';

    imagettftext($image, $font_size, $rotation, $origin_x, $origin_y, $white, $font, $watermark);

    imagepng($image, $output, 9);

}

function make_thumb_jpg($image_name, $src)
{
    $source_image = imagecreatefromjpeg($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    $desired_height = 125;
    $desired_width = 200;

    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    imagejpeg($virtual_image, '../images/mini/'.$image_name);
}

function make_thumb_png($image_name, $src)
{
    $source_image = imagecreatefrompng($src);
    $width = imagesx($source_image);
    $height = imagesy($source_image);

    $desired_height = 125;
    $desired_width = 200;

    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);
    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

    imagepng($virtual_image, '../images/mini/'.$image_name);
}