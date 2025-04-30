<?php
$name = "Валентин";
$age = 17;
$is_student = true;

echo "Мене звати $name, мені $age років. Студент: " . ($is_student ? "Так" : "Ні") . ".<br>";


$numbers = [1, 2, 3, 4, 5];
$sum = array_sum($numbers);
echo "Сума чисел від 1 до 5: $sum<br>";

$user = [
    "name" => "Іван",
    "email" => "ivan@gmail.com",
    "phone" => "+38084478464"
];

echo "<ul>";
foreach ($user as $key => $value) {
    echo "<li><strong>$key:</strong> $value</li>";
}
echo "</ul>";

$Sage = 17;
if ($Sage < 18) {
    echo "Користувач повнолітній.<br>";
} else {
    echo "Користувач неповнолітній.<br>";
}

$Sgrade = 85;

if ($Sgrade >= 90 && $Sgrade <= 100) {
    echo "Оцінка: Відмінно<br>";
} elseif ($Sgrade >= 70 && $Sgrade <= 89) {
    echo "Оцінка: Добре<br>";
} elseif ($Sgrade >= 50 && $Sgrade <= 69) {
    echo "Оцінка: Задовільно<br>";
} else {
    echo "Оцінка: Незадовільно<br>";
}
?>