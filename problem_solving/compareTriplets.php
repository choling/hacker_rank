<?php

// Complete the compareTriplets function below.
function compareTriplets($a, $b) {
    $aliceScore = 0;
    $bobScore = 0;
    for ($i = 0; $i < count($a); $i++) {
        if ($a[$i] == $b[$i]) {
            continue;
        } elseif ($a[$i] > $b[$i]) {
            $aliceScore += 1;
        } else {
            $bobScore += 1;
        }
    }
    return [$aliceScore, $bobScore];
}
