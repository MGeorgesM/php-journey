<?php 
$number = 1256;

function flipNumber($number)
{
    $numberAsString = (string) $number;
    $reverseNumberArray = [];
    for ($i=strlen($numberAsString)-1;$i >= 0; $i--) {
        array_push($reverseNumberArray, $numberAsString[$i]);
    }
    return implode('',$reverseNumberArray);
}
echo flipNumber($number);
?>