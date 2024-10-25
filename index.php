<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа 9 - Долгов Д.А., группа 231-362</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <img src="logo.png" alt="Логотип университета" class="logo">
        <h1>Лабораторная работа №9, Долгов Д.А., группа 231-362</h1>
    </header>

    <main>
    <?php
        $start_value = -10;
        $encounting = 19;
        $step = 2;
        $type = 'D';
        $type_name = "";

        $x = $start_value;

        // Инициализация переменных для вычислений
        $max_value = PHP_FLOAT_MIN;
        $min_value = PHP_FLOAT_MAX;
        $sum = 0;
        $count = 0;

        switch ($type) {
            case 'A':
                $type_name = "Простая верстка";
                for ($i = 0; $i < $encounting; $i++) {
                    if ($x <= 10) {
                        $f = round(3 * $x * $x + 2, 2);
                    } elseif ($x < 20 && $x > 10) {
                        $f = round(5 * $x + 7, 2);
                    } elseif($x >= 20 && $x !=22) {
                        $f = round($x / (22 - $x), 2);
                    }else{
                        echo 'f(' . $x . ') = ' . $f . '<br>';
                        $x += $step;   
                        continue; 
                    }

                    

                    

                    // Обновление статистических значений
                    $max_value = max($max_value, $f);
                    $min_value = min($min_value, $f);
                    $sum += $f;
                    $count++;

                    echo 'f(' . $x . ') = ' . $f . '<br>';
                    $x += $step;
                }
                break;

            case 'B':
                echo "<ul>";
                $i = 0;
                $type_name = "Маркированный список";
                while (true) {
                    if ($x <= 10) {
                        $f = round(3 * $x * $x + 2, 2);
                    } elseif ($x < 20 && $x > 10) {
                        $f = round(5 * $x + 7, 2);
                    } elseif($x >= 20 && $x !=22) {
                        $f = round($x / (22 - $x), 2);
                    }else{
                        echo "<li>f(" . $x . ") = " . $f . "</li>";
                    
                        $x += $step;
                        continue;
                    }

                    

                    if ($x >= 30) {
                        break;
                    }

                    $max_value = max($max_value, $f);
                    $min_value = min($min_value, $f);
                    $sum += $f;
                    $count++;

                    echo "<li>f(" . $x . ") = " . $f . "</li>";
                    
                    $x += $step;
                }
                echo "</ul>";
                break;

            case 'C':
                echo "<ol>";
                $i = 0;
                $type_name = "Нумерованный список";
                do {
                    if ($x <= 10) {
                        $f = round(3 * $x * $x + 2, 2);
                    } elseif ($x < 20 && $x > 10) {
                        $f = round(5 * $x + 7, 2);
                    } elseif($x >= 20 && $x !=22) {
                        $f = round($x / (22 - $x), 2);
                    }else{
                        echo "<li>f(" . $x . ") = error</li>";
                    
                        $x += $step;
                        continue;
                    }

                    

                    if ($x >= 30) {
                        break;
                    }

                    $max_value = max($max_value, $f);
                    $min_value = min($min_value, $f);
                    $sum += $f;
                    $count++;

                    echo "<li>f(" . $x . ") = " . $f . "</li>";
                    
                    $x += $step;
                } while (true);
                echo "</ol>";
                break;

            case 'D':
                echo "<table border='1' style='border-collapse: collapse;'><tr><th>#</th><th>Аргумент</th><th>Значение функции</th></tr>";
                $type_name = "Табличная верстка";
                for ($i = 0; $i < $encounting; $i++) {
                    if ($x <= 10) {
                        $f = round(3 * $x * $x + 2, 2);
                    } elseif ($x < 20 && $x > 10) {
                        $f = round(5 * $x + 7, 2);
                    } elseif($x >= 20 && $x !=22) {
                        $f = round($x / (22 - $x), 2);
                    }else{
                        echo "<tr><td>" . ($i + 1) . "</td><td>" . $x . "</td><td>error</td></tr>";
                       
                        
                    }

                    

                    

                    $max_value = max($max_value, $f);
                    $min_value = min($min_value, $f);
                    $sum += $f;
                    $count++;

                    echo "<tr><td>" . ($i + 1) . "</td><td>" . $x . "</td><td>" . $f . "</td></tr>";
                    $x += $step;
                    
                }
                echo "</table>";
                break;

            case 'E':
                $type_name = "Блояная верстка";
                $i = 0;
                while (true) {
                    if ($x <= 10) {
                        $f = round(3 * $x * $x + 2, 2);
                    } elseif ($x < 20 && $x > 10) {
                        $f = round(5 * $x + 7, 2);
                    } elseif($x >= 20 && $x !=22) {
                        $f = round($x / (22 - $x), 2);
                    }else{
                        echo "<div class='block'>f(" . $x . ") = error </div>";
                        $i++;
                        $x += $step;
                        continue;
                    }

                    

                    if ($x >= 30) {
                        break;
                    }

                    $max_value = max($max_value, $f);
                    $min_value = min($min_value, $f);
                    $sum += $f;
                    $count++;

                    echo "<div class='block'>f(" . $x . ") = " . $f . "</div>";
                    $i++;
                    $x += $step;
                }
                break;

            default:
                echo "Неверный тип верстки";
                break;
        }

        // Вычисляем среднее арифметическое
        $average = round($sum/$count,2);

        // Вывод статистики
        echo "<div class='stats'>
                <p>Максимальное значение: ".$max_value."</p>
                <p>Минимальное значение: ".$min_value."</p>
                <p>Сумма значений: ".$sum."</p>
                <p>Среднее арифметическое: ".$average."</p>
              </div>";
    ?>
    </main>

    <footer>
        <p>Тип верстки: <?php echo $type_name; ?></p>
    </footer>
</body>
</html>
