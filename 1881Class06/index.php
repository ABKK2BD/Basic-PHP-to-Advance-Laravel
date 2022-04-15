
<?php
 //Question 01: 

//  Wer have an array i,[34,2,6, 78, 67]). Mhat kind of array is this? Find all prime numbers from this array.
//  Step 1: Finst let us find the factors of the given number( factors are the number that completely divides the
//  Step 2: Then check the total number of factors of that number
//  Step 3: Hence, If the total number of factors is more than two, it is not a prine number but a composite numbe

$number = 67;
$isPrime = true;
	for ($i=2; $i<= $number -1 ; $i++) { 
		if ($i%2 == 0) {
			$isPrime = false;
		}
	}
	if ($isPrime) {
		echo "{$number} is prim number ";
	}else {
		echo "{$number} is  not prime number";
	}
	echo "<br>";
	// Question 03:
	// This is an array array(9, 10, 80, 67, 60, 89,91, 56,45, 39, 95, 83, 99)
	// Find the maximum value from this array.
	// Pust use a foreach loop
	$givenNumber = array(0, 10, 80, 67, 60, 89,91, 56,45, 39, 95, 83, 99);
	$maxValue = 0;
	foreach ($givenNumber as $key => $number) {
		if ( $number > $maxValue ) {
			$maxValue = $number;
		}
	}
		echo "max value is  $maxValue ";
 