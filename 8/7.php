<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по основам PHP</title>
</head>
<body>
<?php
include("2.php");
$work_age_min = 18;
$work_age_max = 59;

if ($age >= $work_age_min and $age <= $work_age_max) {
    echo "Вам еще работать и работать";
}elseif ($age > $work_age_max)
    echo "Вам пора на пенсию";
else
    echo "Вам ещё рано работать";
?>
</body>
</html>
