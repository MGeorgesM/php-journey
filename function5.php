<?php
function mergeSort($array) {
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }

    $middleIndex = (int)($length / 2);

    $leftHalf = array_slice($array, 0, $middleIndex);
    $rightHalf = array_slice($array, $middleIndex);

    $leftHalf = mergeSort($leftHalf);
    $rightHalf = mergeSort($rightHalf);

    return merge($leftHalf, $rightHalf);
}

function merge($leftHalf, $rightHalf) {
    $result = [];
    $leftLength = count($leftHalf);
    $rightLength = count($rightHalf);
    $i = $j = 0;

    while ($i < $leftLength && $j < $rightLength) {
        if ($leftHalf[$i] < $rightHalf[$j]) {
            $result[] = $leftHalf[$i];
            $i++;
        } else {
            $result[] = $rightHalf[$j];
            $j++;
        }
    }

    while ($i < $leftLength) {
        $result[] = $leftHalf[$i];
        $i++;
    }

    while ($j < $rightLength) {
        $result[] = $rightHalf[$j];
        $j++;
    }

    return $result;
}

$array = [15, 10, 11, 7, 9, 1];
$array = mergeSort($array);
print_r($array)
?>
