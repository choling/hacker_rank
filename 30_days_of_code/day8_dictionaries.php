<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$phoneBook = array();
$queryList = array();
$tempPhoneBook = array();

while( $fileContent = fgets($_fp)) {
   if(strpos($fileContent," ")){
      $tempPhoneBook = explode(" " , $fileContent);
      $phoneBook[$tempPhoneBook[0]] = $tempPhoneBook[1];
   } else {
       array_push($queryList,$fileContent);
   }
}

// print_r($queryList);

// First row is not needed, so start at second row
for ($i = 1; $i < count($queryList); $i++) {
    $name = trim($queryList[$i]);
    if (array_key_exists($name, $phoneBook)) {
        print ($name."=".$phoneBook[$name]);
    } else {
        print ("Not found\n");
    }
}