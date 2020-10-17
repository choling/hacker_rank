# HackerRank Problem Solving scripts in PHP

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
