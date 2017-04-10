<?php
/*
Question:Given an array of integers, find the pair of adjacent elements that has the largest product and return that product.
-----Example----
For inputArray = [3, 6, -2, -5, 7, 3], the output should be
adjacentElementsProduct(inputArray) = 21.
7 and 3 produce the largest product.
Input/Output
[time limit] 4000ms (php)
[input] array.integer inputArray
An array of integers containing at least two elements.
Guaranteed constraints:
2 ≤ inputArray.length ≤ 10,
-1000 ≤ inputArray[i] ≤ 1000.
[output] integer
The largest product of adjacent elements.
*/
function adjacentElementsProduct($inputArray) {
	
	$rs = $inputArray[0] * $inputArray[1];
	
	for ($i = 1; $i < count($inputArray) - 1; $i++) {
		
		$num = $inputArray[$i] * $inputArray[$i + 1];
		
		if ($rs < $num) $rs = $num;
		
	}
	
	return $rs;
	
}

?>