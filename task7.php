<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Таблица умножения</title>
    <style>
        table {
            border: 2px solid black; /* Рамка вокруг таблицы */
            border-collapse: collapse; /* Отображать только одинарные линии */
            font-family: "Courier New", monospace;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        tr {
            height: 50px;
        }

        td {
            padding: 0;
            margin: 0;
            width: 50px;
            border: 1px solid black;
            vertical-align: middle;
        }

        .zero-col, .zero-row {
            background-color: lightblue;
        }
    </style>
</head>
<body>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
<table>
    <tbody>

    <!-- "Нулевая" строка - содержит множители -->
    <tr class="zero-row">
        <td>#</td>
        <?php
        for ($i = 1; $i <= 9; $i++) {
            echo '<td>' . $i . '</td>';
        }
        ?>
    </tr>

    <!-- Цикл в цикле -->
    <?php
    for ($i = 1; $i <= 9; $i++) {
        echo '<tr>' . PHP_EOL;
        echo '<td class="zero-col">' . $i . '</td>';
        for ($j = 1; $j <= 9; $j++) {
            if (($i % 2 == 0) && ($j % 2 == 0)) {
                // Индекс строки и столбца - чётный
                echo '<td>(' . $i * $j . ')</td>';
            } elseif (($i % 2 == 1) && ($j % 2 == 1)) {
                // Индекс строки и столбца - нечётный
                echo '<td>[' . $i * $j . ']</td>';
            } else {
                echo '<td>' . $i * $j . '</td>';
            }
        }
        echo '</tr>' . PHP_EOL;
    }
    ?>

    </tbody>
</table>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

</body>
</html>
