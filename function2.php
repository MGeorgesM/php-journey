<?php

$testString = 'hpd12aq3@8w$5 ';

function filterNumbers ($string)
{
    $numbers = [];

    for ($i=0; $i<strlen($string); $i++) {
        if (ctype_digit($string[$i])) {
            array_push($numbers,$string[$i]);
        }
    }
    sort($numbers);
    return $numbers;
}
print_r(filterNumbers($testString));
?>