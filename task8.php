<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$str = 'Мой дядя самых честных правил когда не в шутку занемог он уважать себя заставил';
echo $str;

$strArr = explode(' ', $str);
echo '<pre>';
print_r($strArr);
echo '</pre>';

$k = count($strArr);
$i = 0;
while ($i < $k / 2) {
    $curIndex = $i;
    $indexToChange = $k - $i - 1;
    $tmp = $strArr[$curIndex];
    $strArr[$curIndex] = $strArr[$indexToChange];
    $strArr[$indexToChange] = $tmp;
    $i++;
}

echo 'Массив после перестановки:<br>';

echo '<pre>';
print_r($strArr);
echo '</pre>';

$newStr = implode('@', $strArr);
echo $newStr;
