<?php
    $hotels = [

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
    //   foreach ($hotels as $hotel) {
    //     if ($hotel['parking']) {
    //         echo $hotel['name'] . " ha il parcheggio.<br>";
    //     } else {
    //         echo $hotel['name'] . " non ha il parcheggio.<br>";
    //     }
    // }
    //  var_dump($hotels);
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
      <h1  class="d-flex justify-content-center p-2 shadow">HOTELS</h1>
      <br>
      <div class="container p-3">
        <div class="row">
            <div class="col shadow p-3">
                <form  method="GET">
                    <div>
                        <label for="parking-filter" class="form-label"><h3>Search Hotels with Parking</h3></label>
                        <select class="form-select" id="parking-filter" name="parking-filter">
                            <option value="all">All Hotels</option>
                            <?php foreach ($hotels as $hotel): ?>
                                <?php if ($hotel['parking']): ?>
                                    <option value="<?php echo $hotel['name']; ?>">Hotels with Parking - <?php echo $hotel['name']; ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $hotel['name']; ?>">Hotels without Parking - <?php echo $hotel['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </form>
                <!-- hotel parking -->
              <div class="col mt-5">
                <form  method="GET" >
                  <div>
                    <label for="vote-filter" class="form-label"><h3 >Search Hotels stars</h3></label>
                    <select class="form-select" id="vote-filter" name="vote-filter">
                        <option value="all">All Hotels</option>
                        <?php foreach ($hotels as $hotel): ?>
                            <?php if ($hotel['vote']): ?>
                                <option value="<?php echo $hotel['vote']; ?>">Hotels with vote - <?php echo $hotel['vote'] . ' --> ' . $hotel['name']; ?></option>
                            <?php else: ?>
                                <option value="<?php echo $hotel['vote']; ?>">Hotels without vote - <?php echo $hotel['vote'] . ' --> ' . $hotel['name']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                  </div>
                </form>
                <!-- hotel vote -->
            </div>
        </div>
    </div>
      <div class="row  d-flex justify-content-center mt-5">
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