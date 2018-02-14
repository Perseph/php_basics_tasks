<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по основам PHP</title>
</head>
<body>
<?php
include ("9.php");
    switch ($day) {
        case 1:
            echo "Это рабочий день(Понедельник)";
            break;
        case 2:
            echo "Это рабочий день(Вторник)";
            break;
        case 3:
            echo "Это рабочий день(Среда)";
            break;
        case 4:
            echo "Это рабочий день(Четверг)";
            break;
        case 5:
            echo "Это рабочий день(Пятница)";
            break;
    }
?>
</body>
</html>
