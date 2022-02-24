<?php
$h1 = "Информация обо мне";
$title = "Главная страница - страница обо мне";
$data = "2018";
$content = file_get_contents("site.html");
$content = str_replace("{{ h1 }}", $h1, $content);
$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ data }}", $data, $content);
echo $content;

