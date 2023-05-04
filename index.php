<?php
 
    $hotels =[

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
      ];
 
      
    // var_dump($hotels);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--Script Bootstrap bundle-->
</head>
<body >

<div class="container pt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-10 shadow p-5">
       
          <?php foreach ($hotels as $hotel)?>
          <h3 class="card-title"><?php echo $hotel['name']; ?></h3><br>
          <p class="card-text"><?php echo $hotel['description']; ?></p><br>
          <p class="card-title"><?php echo $hotel['parking']; ?></p><br>
          <p class="card-title"><?php echo $hotel['vote']; ?></p><br>
          <p class="card-title"><?php echo $hotel['distance_to_center']; 
               
            // var_dump($hotels);
          ?></p><br>
        </div>
    
    </div>
   </div>
    
</body>
</html>