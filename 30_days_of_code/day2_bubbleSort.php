<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here

$totalSwap = 0;

for ($i = 0; $i < count($a); $i++) {
    $numberSwap = 0;

    for ($j = 0; $j < count($a) - 1; $j++) {
        if($a[$j] > $a[$j+1]) {
            $temp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j+1] = $temp;
            $numberSwap += 1;
        }
    }

    $totalSwap += $numberSwap;

    echo "Array is sorted in ". $totalSwap." swaps.\n";
    echo "First Element: ". $a[0]. "\n";
    echo "Last Element: ". end($a). "\n";

    if ($numberSwap == 0) {
    break;
    }
}

?>