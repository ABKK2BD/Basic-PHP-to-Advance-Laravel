<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daynamic MCQ</title>
</head>
<body>
    <?php
            $questionSet = [
                [
        
                    'question' => ' The postmaster to help lencho by giving him
                    -- as a reply from God.',
        
                    'options' => [
        
                        'Money', ' Crops', 'Letter', 'Gold'
        
                    ]
        
                ],
                [
        
                    'question' => 'What was the only thing that the Earth needed according to Lencho? ?',
        
                    'options' => [
        
                        'a shower', 'a snowfall', 'strong winds', 'sunlight'
        
                    ]
        
                ],
                [
        
                    'question' => 'Where did Lencho expect the downpour to come from ?',
        
                    'options' => [
        
                        'north', 'north-east', 'north-west', 'south-east'
        
                    ]
        
                ],
        
                [
        
                    'question' => ' What did Lencho compare the large raindrops with ?',
        
                    'options' => [
        
                        'silver coins', 'pearls', 'diamonds', 'new coins'
        
                    ]
        
                ],
                [
        
                    'question' => 'Which crop was growing on Lencho’s fields?',
        
                    'options' => [
        
                        'Corn', 'Barley', 'Rice', 'None of the above'
        
                    ]
        
                ],
                [
        
                    'question' => 'What destroyed Lencho’s fields?',
        
                    'options' => [
        
                        ' heavy rainfall', 'hailstorm', 'landslide', 'flood'
        
                    ]
        
                ],
                [
        
                    'question' => 'The field looked as if it were covered in _______.',
        
                    'options' => [
        
                        'salt', 'locusts', 'sugar', 'ice'
        
                    ]
        
                ],
                [
        
                    'question' => 'Lencho compared the quantum of damage with?',
        
                    'options' => [
        
                        'attack by rats', 'attack by crows', 'plague of locusts', 'None of the above'
        
                    ]
        
                ]
        
        
            ];

    ?>
<div class= "container mt-5">
              

              <?php 
          
                  shuffle ($questionSet);  
                  foreach($questionSet as $key => $qun){
          
                  
                  echo ++$key ." . ".  $qun['question'];      
          
                  foreach($qun ['options'] as $key1 => $mcq){         
              
          
              ?>
          
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                      <?php echo $mcq ?>      
                      </label>
                  </div>
                  
          
                  <?php }  echo "<br>" ?> 
             
                  
              <?php } ?>
             
           </div>



             
</body>
</html>