<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 1 - Иванов И.И., группа 123</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Логотип университета" class="logo">
        <h1>Лабораторная работа №9, Долгов Д.А., группа 231-362</h1>
    </header>

    <main>
    <?php
        $start_value = -10;  // начальное значение аргумента
        $encounting = 10000; // количество вычисляемых значений
        $step = 2;           // шаг изменения аргумента
        $type = 'D';         // тип верстки ('A', 'B', 'C', 'D', 'E')

        $x = $start_value;   // текущее значение аргумента. равно начальному


        switch ($type) {
            // Простая текстовая верстка (for)
            case 'A':
                for ($i = 0; $i < $encounting; $i++) {
                    if ($x <= 10) {
                        $f = 10 * $x - 5; // Вычисляем функцию для x <= 10
                    } elseif ($x < 20) {
                        $f = ($x + 3) * $x * $x; // Вычисляем функцию для 10 < x < 20
                    } else {
                        $f = 3 / ($x - 25); // Вычисляем функцию для x >= 20
                    }

                    // Пропускаем итерацию, если результат NaN
                    if (is_nan($f)) {
                        $x += $step;
                        continue;
                    }

                    // Прерываем цикл, если аргумент больше или равен 30
                    if ($x >= 30) {
                        break;
                    }

                    echo 'f(' . $x . ') = ' . $f . '<br>';
                    $x += $step;
                }
                break;

            // Маркированный список (while)
            case 'B':
                echo "<ul>";
                $x = $start_value;
                $i = 0;
                $f = 0;

                while ($i < $encounting && ($f >= -1000 || $f <= 1000 || !$i)) {
                    if ($x <= 10) {
                        $f = 10 * $x - 5;
                    } elseif ($x < 20) {
                        $f = ($x + 3) * $x * $x;
                    } else {
                        $f = 3 / ($x - 25);
                    }

                    // Пропускаем итерацию, если результат NaN
                    if (is_nan($f)) {
                        $x += $step;
                        continue;
                    }

                    // Прерываем цикл, если аргумент больше или равен 30
                    if ($x >= 30) {
                        break;
                    }

                    echo "<li>f(" . $x . ") = " . $f . "</li>";
                    $i++;
                    $x += $step;
                }
                echo "</ul>";
                break;

            // Нумерованный список (do-while)
            case 'C':
                echo "<ol>";
                $x = $start_value;
                $i = 0;

                do {
                    if ($x <= 10) {
                        $f = 10 * $x - 5;
                    } elseif ($x < 20) {
                        $f = ($x + 3) * $x * $x;
                    } else {
                        $f = 3 / ($x - 25);
                    }

                    // Пропускаем итерацию, если результат NaN
                    if (is_nan($f)) {
                        $x += $step;
                        continue;
                    }

                    echo "<li>f(" . $x . ") = " . $f . "</li>";
                    $i++;
                    $x += $step;

                    // Прерываем цикл, если аргумент больше или равен 30
                    if ($x >= 30) {
                        break;
                    }
                } while ($i < $encounting && ($f >= -1000 || $f <= 1000));
                echo "</ol>";
                break;

            // Табличная верстка (for)
            case 'D':
                echo "<table border='1' style='border-collapse: collapse;'><tr><th>#</th><th>Аргумент</th><th>Значение функции</th></tr>";
                $x = $start_value;
                for ($i = 0; $i < $encounting; $i++) {
                    if ($x <= 10) {
                        $f = 10 * $x - 5;
                    } elseif ($x < 20) {
                        $f = ($x + 3) * $x * $x;
                    } else {
                        $f = 3 / ($x - 25);
                    }

                    // Пропускаем итерацию, если результат NaN
                    if (is_nan($f)) {
                        $x += $step;
                        continue;
                    }

                    // Прерываем цикл, если аргумент больше или равен 30
                    if ($x >= 30) {
                        break;
                    }

                    echo "<tr><td>" . ($i + 1) . "</td><td>" . $x . "</td><td>" . $f . "</td></tr>";
                    $x += $step;
                }
                echo "</table>";
                break;

            // Блочная верстка (while)
            case 'E':
                $x = $start_value;
                $i = 0;
                $f = 0;

                while ($i < $encounting && ($f >= -1000 || $f <= 1000 || !$i)) {
                    if ($x <= 10) {
                        $f = 10 * $x - 5;
                    } elseif ($x < 20) {
                        $f = ($x + 3) * $x * $x;
                    } else {
                        $f = 3 / ($x - 25);
                    }

                    // Пропускаем итерацию, если результат NaN
                    if (is_nan($f)) {
                        $x += $step;
                        continue;
                    }

                    // Прерываем цикл, если аргумент больше или равен 30
                    if ($x >= 30) {
                        break;
                    }

                    echo "<div class='block'>f(" . $x . ") = " . $f . "</div>";
                    $i++;
                    $x += $step;
                }
                break;

            default:
                echo "Неверный тип верстки";
                break;
        }
?>


    </main>

    <footer>
        <p>Тип верстки: <?php echo $type; ?></p>
    </footer>
</body>
</html>
