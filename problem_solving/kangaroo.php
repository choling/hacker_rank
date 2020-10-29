<?php

// Complete the kangaroo function below.
function kangaroo($x1, $v1, $x2, $v2) {
    if ($x1 > $x2 && $v1 > $v2) {
        return "NO";
    } elseif ($x1 < $x2 && $v1 < $v2) {
        return "NO";
    } elseif ($v1 == $v2) {
        return "NO";
    } else {
        // they meet when x1 + v1*n = x2 + v2*n, because left distance = right distance
        // where n = no. of jumps
        // n = (x2-x1)/(v1-v2), and n must be a whole number with no remainder
        return (($x2 - $x1) % ($v1 - $v2) == 0 ? "YES" : "NO");
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $x1V1X2V2_temp);
$x1V1X2V2 = explode(' ', $x1V1X2V2_temp);

$x1 = intval($x1V1X2V2[0]);

$v1 = intval($x1V1X2V2[1]);

$x2 = intval($x1V1X2V2[2]);

$v2 = intval($x1V1X2V2[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
