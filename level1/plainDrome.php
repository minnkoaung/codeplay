<?php
# Question : Given the string, check if it is a palindrome.
# A palindrome is a string that reads the same left-to-right and right-to-left.

function checkPalindrome($inputString) {
    $reverse_srt = strrev($inputString);
    //$strrev = Returns string, reversed.
    echo $reverse_srt;
    if($inputString==$reverse_srt){
        return TRUE;
    }else{
         return FALSE;
    }
}
?>