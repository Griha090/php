<?php
$a = rand(-100, 100);
$b = rand(-100, 100);

echo "Перовое число = $a</br>";
echo "Второе число = $b </br>";

if ($a >=0 && $b >=0) {
    echo 
     "Числа положительные";
}
elseif ($a <0 && $b <0){
    echo
    "Числа отрицательные";
}
else{
    echo
    "Числа разных знаков";
}