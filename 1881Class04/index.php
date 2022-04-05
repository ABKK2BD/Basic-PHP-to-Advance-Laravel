<?php

// Question 01:
	$month_length = cal_days_in_month(CAL_GREGORIAN, 8, 2009);

	for ($i=1; $i <=$month_length ; $i++) { 
		echo $i;
		echo "<br> ";
	}
	//Question 02:

	// for ($i=0; $i <=100; $i++) { 
	// 	if ($i/1) {
	// 		echo $i;
	// 	}
	// }
	for($i=1; $i<=100; $i++){
		if($i%2){
			echo "$i . Is  A Odd Number  " ;
			echo "<br>";
		}
	}

