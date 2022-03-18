<?php 
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG", ROOT . "/img/");

if(isset($_POST['load'])){
    $way_img = IMG . $_FILES ["img"]["name"];

    if (move_uploaded_file($_FILES["img"]["tmp_name"],$way_img)){
        header("Location: /");
    }

}





function get_img($way) {
    return array_splice(scandir($way), 2);
}

$img=get_img(IMG);
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Урок 4</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="title">Галерея фонов для сайтов</div>
        <div class="gallerey">
            <? foreach ($img as $name):?><a class="photo" href="img/<?=$name?>" target="_blank"><img
                    src="img/<?=$name?>" width="200px" height="200px"></a>
            <? endforeach;?>
        </div>
        <form class="form" method="post" enctype="multipart/form-data"><input type="file" name="img"><input
                type="submit" value="Загрузить" name="load"></form>
    </body>

    </html>