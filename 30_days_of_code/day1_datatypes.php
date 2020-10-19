<?php

/**
 * Given
 */
$handle = fopen("php://stdin", "r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
// Read and save an integer, double, and String to your variables.
$i2 = fgets($handle);
$d2 = fgets($handle);
$s2 = fgets($handle);
// Print the sum of both integer variables on a new line.
printf("%d\n", intval($i) + intval($i2)); // intval() to avoid warning: notice a non well formed numeric value encountered

// Print the sum of the double variables on a new line.
printf("%.1f\n", floatval($d) + floatval($d2)); // floatval() to avoid warning: notice a non well formed numeric value encountered

// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
printf($s . $s2 . "\n");

fclose($handle);
