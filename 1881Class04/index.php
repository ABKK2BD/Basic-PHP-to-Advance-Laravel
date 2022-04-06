<?php
	$month = cal_days_in_month(CAL_GREGORIAN, 4, 2022);
	
	
	for ($i=1; $i <=$month; $i++) { 
		echo $i. "<br>";
	 }


	//Question 02:

	for($i=1; $i<=100; $i++){
		if($i%2){
			echo $i . "Is  A Odd Number  " ;
			echo "<br>";
		}
	}

	//Question 03: 
	$num = 7;
	$fact = 1;
	for ($i = $num ;$i >= 1;$i--){
		$fact = $fact * $i; 
		echo $fact ."<br>";
	}
	

	//Question 04: 

	$numbers = 1;
	while($numbers<=100){
		echo $numbers;
		$numbers++;
		echo "<br> ";
	}

	$product  =["Apple", "Orange", "Banana", "Mango"];

    echo "Sl-1 Product = ". $product [0]. "<br>" . "Sl-2 Product = ". $product [1]. "<br>" . "Sl-3 Product =  ". $product [2]. "<br>" . "Sl-4Product = ". $product [3]. "<br>";
 
