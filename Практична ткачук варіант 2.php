<?php
$a = 5;
$b = 10;
echo "Сума: " . ($a + $b) . "<br>";
echo "Різниця: " . ($a - $b) . "<br>";
echo "Добуток: " . ($a * $b) . "<br>";
echo "Ділення: " . ($a / $b) . "<br><br>";
$days = ["Понеділок", "Вівторок", "Середа", "Четвер", "П’ятниця", "Субота", "Неділя"];
echo "3-й день: " . $days[2] . "<br>";
echo "5-й день: " . $days[4] . "<br><br>";
$products = [
    "Хліб" => 20,
    "Молоко" => 30,
    "Сир" => 100
];
foreach ($products as $product => $price) {
    echo "$product: $price грн<br>";
}
echo "<br>";
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Початок робочого тижня<br>";
        break;
    case "Friday":
        echo "Кінець робочого тижня<br>";
        break;
    case "Saturday":
    case "Sunday":
        echo "Вихідний день<br>";
        break;
    default:
        echo "Звичайний день<br>";
}
echo "<br>";
$x = 15;
if ($x % 2 == 0) {
    echo "$x — парне число";
} else {
    echo "$x — непарне число";
}
?>
