<?php

$stdin = fopen("php://stdin", "r");

$arr == array();

for ($i = 0; $i < 6; $i++) {
    fscanf($stdin, "%[^\n]", $arr_temp);
    $arr[] = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
}

// print_r(count($arr));

function hourGlassSum($arr) {
    // loop over every row at every 3 position
    for($i = 0; $i <= count($arr) - 3; $i++) {
        // loop over every column at every 3 position
        for($j = 0; $j <= count($arr[$i]) - 3; $j++) {
            // Store sum of each hourglass
            $result[] = intval(
                $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2]
                + $arr[$i+1][$j+1]
                + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2]);
        }
    }
    return max($result);
}

echo hourglassSum($arr);

fclose($stdin);
