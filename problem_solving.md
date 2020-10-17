# HackerRank Problem Solving scripts in PHP

## Compare the Triplet

```php
// Complete the compareTriplets function below.
function compareTriplets($a, $b) {
    for ($i = 0; $i < count($a); $i++) {
        $aliceScore = 0;
        $bobScore = 0;
        $final = $a[$i] - $b[$i];
        Switch ($final) {
            case ($final > 0):
                $aliceScore += 1;
                break;
            case ($final < 0):
                $bobScore += 1;
                break;
            case ($final == 0):
                break;
        }
        return [$aliceScore, $bobScore];
    }
}

```

## Simple Array Sum `10.00 points`

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
