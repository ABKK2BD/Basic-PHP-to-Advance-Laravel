<?php

$purchased_products = array(

    array('name' => 'banana',  'qty' => 10, 'total_price' => 550),

    array('name' => 'apple',     'qty' => 50,  'total_price' => 1500),

    array('name' => 'orange',  'qty' => 7,    'total_price' => 600),
);
    //-------------------------1st way---------------------------------------
    // $qti = array_column($purchased_products,'qty');
    // $totalQty = array_sum($qti);
    // echo "$totalQty";
    // echo "<pre>";
    // $price = array_column($purchased_products, 'total_price');
    // $totalPrice = array_sum($price);
    // echo "$totalPrice";
//-------------------------2nd way---------------------------------------
$totalQty = 0;
    foreach ($purchased_products as $key => $value) {
        $totalQty +=$value['qty'];
    }
    echo $totalQty;

$totalPrice = 0;
    foreach ($purchased_products as $key => $value) {
        $totalPrice +=$value['total_price'];
    }
    echo "<pre>";
    echo $totalPrice;

//Question 02: 

$first_email_array = ["abc@gmail.com", "xyz@gmail.com", "demo@gmail.com"]; 
$second_email_array = ["efg@gmail.com", "xyz@gmail.com", "dummy@gmail.com"];
$unique_email_array = array_unique (array_merge($first_email_array,$second_email_array));
echo "<pre>";
print_r($unique_email_array);

//Question 03:
$citylist = array( "Black Canyon City", "Chandler", "Flagstaff", "Gilbert", "Glendale", "Globe", "Mesa", "Miami", "Phoenix", "Peoria", "Prescott", "Scottsdale", "Sun City", "Surprise", "Tempe", "Tucson", "Wickenburg" );
echo "<pre>";
print_r(array_chunk( $citylist, 4));
