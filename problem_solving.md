# HackerRank Problem Solving scripts in PHP

## Compare the Triplet `10.00` points

```php
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

```

## Simple Array Sum `10.00` points

```php
/*
 * Complete the simpleArraySum function below.
 */
function simpleArraySum($ar) {
    /*
     * Write your code here.
     */
    $sum = 0;
    for( $i = 0; $i < count($ar); $i++){
        $sum+=$ar[$i];
    }
    return $sum;
}
```
