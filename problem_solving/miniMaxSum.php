<?php

// Complete the miniMaxSum function below.
function miniMaxSum($arr) {
    sort($arr);
    $total = array_sum($arr);
    $final = [];
    for ($i = 0; $i < count($arr); $i++) {
        $newTotal = $total - $arr[$i];
        array_push($final, $newTotal);
    }

    echo min($final)." ".max($final);
}
