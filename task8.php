<?php
$str = 'Мой дядя самых честных правил когда не в шутку занемог он уважать себя заставил';
echo $str;

$strArr = explode(' ', $str);
echo '<pre>';
print_r($strArr);
echo '</pre>';

$k = count($strArr);
$i = 0;
while ($i < $k / 2) {
    $tmp = $strArr[$i];
    $strArr[$i] = $strArr[$k - $i];
    $strArr[$k - $i] = $tmp;
    $i++;
}

$newStr = implode('@', $strArr);
echo $newStr;
