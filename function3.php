<?php
$decimal = 10;
function convertToBinary($decimal)
{
    if ($decimal == 1) {
        return '1';
    } elseif ($decimal == 0) {
        return '0';
    } else {
        return convertToBinary(intdiv($decimal,2)).($decimal % 2);
    }
}
echo convertToBinary($decimal);
?>