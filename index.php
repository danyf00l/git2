<?php
$num1 = 13;
$num2 = 999;

echo "Первое число: " . $num1 . "\n";
echo "Второе число: " . $num2 . "\n\n";

$sum = $num1 + $num2;
echo "Сложение: " . $num1 . " + " . $num2 . " = " . $sum . "\n";

$dif = $num1 - $num2;
echo "Вычитание: " . $num1 . " - " . $num2 . " = " . $dif . "\n";

if ($num2 != 0) {
    $div = $num1 / $num2;
    echo "Деление: " . $num1 . " / " . $num2 . " = " . $div . "\n";
} else {
    echo "Деление: Ошибка! Деление на ноль невозможно.\n";
}

$exp = $num2 ** $num1;
echo "Возведение в степень: " . $num1 . " ^ " . $num2 . " = " . $exp . "\n";

echo "Конец программы!";
?>
