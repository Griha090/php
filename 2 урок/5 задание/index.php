<?php
// 1 задание
echo "<h1>Задание №1</h1> </br>";
$b = rand(-100, 100);
$c = rand(-100, 100);

echo "Перовое число = $b</br>";
echo "Второе число = $c </br>";

if ($b >=0 && $c >=0) {
    echo 
     "Числа положительные";
}
elseif ($b <0 && $c <0){
    echo
    "Числа отрицательные";
}
else{
    echo
    "Числа разных знаков";
}
//  2 задание
echo "<h1>Задание №2</h1></br>";

$a = rand(0, 15);

switch ($a){
    case 1: echo $a++ ."</br>";
    case 3: echo $a++ ."</br>";
    case 4: echo $a++ ."</br>";
    case 2: echo $a++ ."</br>";
    case 5: echo $a++ ."</br>";
    case 6: echo $a++ ."</br>";
    case 7: echo $a++ ."</br>";
    case 8: echo $a++ ."</br>";
    case 9: echo $a++ ."</br>";
    case 10: echo $a++ ."</br>";
    case 11: echo $a++ ."</br>";
    case 12: echo $a++ ."</br>";
    case 13: echo $a++ ."</br>";  
    case 14: echo $a++ ."</br>";
    case 15: echo $a++ ."</br>";
    break;
}
?>
<!-- 3 Задание -->
<h1>Задание №3</h1></br>

<?php
$x = rand(-100, 100);
$y = rand(-100, 100);
echo "Число $x </br> Число $y </br>";
function add($x, $y){
    return $x + $y;
}
function sub($x, $y){
    return $x - $y;
}
function mul($x, $y){
    return $x * $y;
}
function div($x, $y){
    if ($y === 0 ){
        return "Делим на 0!";
    return $x / $y;
    }
}

echo "Сложение " . add($x, $y) . "</br>";
echo "Вычитание " . sub($x, $y) . "</br>";
echo "Умножение ". mul($x,$y) . "</br>";
// Почему-то не выводит
echo "Деление " . div($x,$y) . "</br>";    
?>

<!-- Задание 5 -->

<h1>Задание 5</h1>
<?php
$about = renderTemplate('about', 123465877);
$menu = renderTemplate('menu' );
echo renderTemplate('layout', $about, $menu);

function renderTemplate($page, $content = '', $menu = ''){
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}