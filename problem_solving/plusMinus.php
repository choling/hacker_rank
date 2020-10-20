<?php

// Complete the plusMinus function below.
function plusMinus($arr) {
    $positive = 0;
    $negative = 0;
    $zero = 0;
    $total = count($arr);
    for ($i = 0; $i < $total; $i++) {
        if ($arr[$i] > 0) {
            $positive += 1;
        } elseif ($arr[$i] < 0) {
            $negative += 1;
        } else {
            $zero += 1;
        }
    }
    print(number_format($positive/$total, 6)."\n");
    print(number_format($negative/$total, 6)."\n");
    print(number_format($zero/$total, 6)."\n");
}