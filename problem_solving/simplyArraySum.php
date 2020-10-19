<?php

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