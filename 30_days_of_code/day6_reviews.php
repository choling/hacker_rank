<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

fscanf($_fp, "%d\n", $n);
for ($i = 0; $i < $n; $i++)
{
    fscanf($_fp, "%s\n", $str);
    for ($j = 0; $j < strlen($str); $j += 2) {
        print ($str[$j]);
    };
    print(" ");
    for ($j = 1; $j < strlen($str); $j += 2) {
        print ($str[$j]);
    }
    print("\n");
}

fclose($_fp);

