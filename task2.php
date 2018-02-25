<?php
$totalDrawings = 80;
$byFeltpen = 23;
$byPencil = 40;
$byPaints = $totalDrawings - $byFeltpen - $byPencil;

echo '<b>Задача:</b><br>';
echo "На школьной выставке $totalDrawings рисунков. $byFeltpen из них выполнены<br>";
echo "фломастерами, $byPencil карандашами, а остальные - красками. <br>";
echo "Сколько рисунков, выполненных красками, на школьной выставке?<br>";
echo '<br>';
echo '<b>Решение:</b><br>';
echo 'Количество рисунков, выполненных красками = <br>';
echo 'Общее количество рисунков - Количество рисунков фломастерами - Количество рисунков карандашами<br>';
echo '<br>';
echo '<b>Ответ:</b><br>';
echo $totalDrawings - $byFeltpen - $byPencil;
