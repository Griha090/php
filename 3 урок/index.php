<h1>Задание 1</h1>
<div id="1"></div>
<?php
// Задание 1
$i = 0;

while($i<=100)
{
    if($i % 3===0)
    {
        echo $i . "</br>";
    }

$i++;
}

echo "<h1>Задание 2</h1> ";
// Задание 2

$o = 0;

do {
    if ($o === 0){
        echo $o . " Это ноль;  <br>";
    } 
    elseif ($o & 1 !==0){
        echo $o . " Не четносе число;  <br>";
    }
    else {
        echo $o . " Четное число;  <br>";
    }
    $o++;
}while ($o <= 10);

echo "<h1> Задание 3 </h1>";
// Задание 3

$region = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Скопин','Сасово', 'Рыбное' ]
];
foreach ($region as $key => $city){
    echo $key . ": <br>";
    echo implode (' ,' , $city) . ".<br>";
}

echo "<h1>Задание 4</h1>";
// Задание 4

$str = "ТрАнСлиТеРаЦиИ СтРоК";
echo  $str . "<br>";

$alfavit = [
    'а' => 'a', 'б'=> 'b', 'в'=> 'v', 'г'=>'g',
    'д'=>'d',  'е'=>'e',  'ё'=>'e',  'ж'=>'zh',
    'з'=>'z',  'и'=>'i',  'й'=>'y',  'к'=>'k',
    'л'=>'l',  'м'=>'m',  'н'=>'n',  'о'=>'o',
    'п'=>'p',  'р'=>'r',  'с'=>'s',  'т'=>'t',
    'у'=>'u',  'ф'=>'f',  'х'=>'h',  'ц'=>'c',
    'ч'=>'ch',  'ш'=>'sh',  'щ'=>'sch',  'ь'=>'-',
    'ы'=>'y',  'ъ'=>'-',  'э'=>'e',  'ю'=>'yu',  
    'я'=>'ya'
];

function translate($str, $alfavit)
{
    return strtr($str, $alfavit);
}
echo translate($str, $alfavit);

echo "<h1>Задание 5</h1> ";
// Задание 5
 
function replace($str){
    return str_replace (' ', '-', $str);
}

echo replace($str);

// Задание 6
?>
<h1>Задание 6</h1>
<?php 
$menu = [
    [
    'name' =>'Задание1',
    'url' =>''
    ],
    [
    'name' =>'Задание2',
    'url' =>''
    ],
    [
    'name' =>'Задание3',
    'url' =>''
    ],
    [
    'name' =>'Задание4',
    'url' =>''
    ],
    [
    'name' =>'Задание5',
    'url' =>''
    ],
    [
    'name' =>'Задание6',
    'url' =>''
], 
];
?>
<ul>
    <?php foreach ($menu as $key => $value): ?>
    <li><a href='<?php $value['url']?>'><?=$value['name']?></a></li>
    <?php endforeach; ?>
</ul>