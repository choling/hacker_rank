<?php

class Solution {
    // Write your code here
    public $stack = [];
    // Last-In-First-Out
    public $stack_head = 0;
    public $queue = [];
    // First-In-First-Out
    public $queue_head = -1;

    public function pushCharacter($s){
        array_push($this->stack, $s);
    }
    public function popCharacter(){
        // Get the value from position = 0
        $result = $this->stack[$this->stack_head];
        // Increase the stacking position by 1
        $this->stack_head++;
        return $result;
    }
    public function enqueueCharacter($s){
        // Add value at the rear side
        $this->queue_head++;
        array_push($this->queue, $s);
    }
    public function dequeueCharacter(){
        $result = $this->queue[$this->queue_head];
        $this->queue_head--;
        return $result;
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;

        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>