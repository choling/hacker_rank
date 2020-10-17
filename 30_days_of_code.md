# Objective

In this challenge, we review some basic concepts that will get you started with this series.
You will need to use the same (or similar) syntax to read input and write output in challenges throughout HackerRank.
Check out the [Tutorial tab](https://www.hackerrank.com/challenges/30-hello-world/tutorial) for learning materials and an instructional video!

## Day 0: Hello, World

```php
<?php
$_fp = fopen("php://stdin", "r");

$inputString = fgets($_fp); // get a line of input from stdin and save it to our variable

// Your first line of output goes here
print("Hello, World.\n");

// Write the second line of output
print($inputString);

fclose($_fp);
?>
```
