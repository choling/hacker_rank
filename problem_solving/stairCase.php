<?php

// Complete the staircase function below.
function staircase($n) {
    $symbol = "#";
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i).str_repeat($symbol, $i) . "\n";
    }
}