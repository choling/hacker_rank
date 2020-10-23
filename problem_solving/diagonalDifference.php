<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    // Write your code here
    // Pseudo code
    // $left_sum = $arr[0][0] + $arr[1][1] + $arr[2][2];
    // $right_sum = $arr[0][2] + $arr[1][1] + $arr[2][0];
    // return abs($left_sum - $right_sum);
    $left_sum = 0;
    $right_sum = 0;
    $length = count($arr);
    for ($i = 0; $i < $length; $i++) {
        $left_sum += $arr[$i][$i];
        $right_sum += $arr[$i][$length -1 -$i];
    }
    return abs($left_sum - $right_sum);
}

for ($i = 0; $i < $n; $i++) {
    $arr_temp = rtrim(fgets(STDIN));

    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

$result = diagonalDifference($arr);

fwrite($fptr, $result . "\n");

fclose($fptr);