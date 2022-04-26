<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function agent($value) { 
        
        if($value <= 10){
            return "you are children";
        }else if($value <=18){
            return "you are teenagerst";
        }else if($value <= 30){
            return "you are young";
        }else if($value <= 67){
            return "you are old people";
        }


    };
    
    echo agent(9) . "<br>";  
    echo agent(11) ."<br>"; 
    echo agent(19) . "<br>";  
    echo agent(40) . "<br>";  

//=======================question 02=========================================

function rec ($type = "s",$length = 0 ,$width = 0) {
    if ($type == "s") {
        return $length*$length;
    }else if ($type == "r"){
        return $length*$width;
    }else if($type == "t"){
        return .5*$length*$width;
    }
   
}

echo rec("t",20 , 10);



        ?>
</body>
</html>