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
    <div class="row  d-flex justify-content-center ">
      <?php foreach ($hotels as $hotel):?>
        <div class="col shadow p-3">
          <h2 class="card-title shadow p-3"><?php echo $hotel['name']; ?></h2><br>
          <p class="card-text p-2"><b>desciption:</b>  <?php echo $hotel['description']; ?></p><br>
          <p class="card-title"> <b>parking available: </b> <font color="red"><?php echo $hotel['parking'] ? 'Yes' : 'No'; ?> </font color="red"></p><br>
          <p class="card-title"> <b>vote:</b>  <?php echo $hotel['vote']; ?></p><br>
          <p class="card-title"> <b>distance to center:</b>  <?php echo $hotel['distance_to_center'];?> <u>Km</u> </p><br>
        </div>
      <?php endforeach; ?>
    </div>
   </div>
    
</body>
</html>