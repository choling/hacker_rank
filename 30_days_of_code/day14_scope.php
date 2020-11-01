<?php
    class Difference{
    private $elements=array();
    public $maximumDifference;

// Write your code here
    // A constructor allows you to initialize an object's properties upon creation of the object.
    function __construct($elements){
        $this->elements = $elements;
        }

    function computeDifference(){
        // Get max value of an array
        $max = max($this->elements);
        // Get min valiue of an array
        $min = min($this->elements);

        $this->maximumDifference = $max - $min;
    }

} //End of Difference class  
     

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);
?>