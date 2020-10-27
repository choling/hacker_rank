<?php

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$binaryValue = decbin($n);
$binaryArray = str_split($binaryValue);

$a = $binaryArray;
$count = 0;
$i = 0;
$consecCount = 0;

foreach($a as $value){
    // Add 1 to $count
    if ($a[$i] == 1) {
        $count ++;
        $i++;
    } else {
        // Store consecutive count
        if ($count > $consecCount) {
            $consecCount = $count;
        }
        $i++;
        $count = 0;
    }

    // Final check consecutive count
    if($count > $consecCount){
    $consecCount = $count;
    }
}

echo $consecCount;

fclose($stdin);