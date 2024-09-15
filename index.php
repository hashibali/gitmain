<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>

<body>
  <h1> This is My First PHP code</h1>
  <div class="new">
    <?php

    // Determine the value of Even and Odd Number 
    $n = 10;
    $r = $n % 2;

    switch (true) {
      case ($r == 0 && $n > 0):
        echo "$n is an even positive number";
        break;

      case ($r != 0 && $n > 0):
        echo "$n is an odd positive number";
        break;

      case ($r == 0 && $n < 0):
        echo "$n is an even negative number";
        break;

      case ($r != 0 && $n < 0):
        echo "$n is an odd negative number";
        break;

      default:
        echo "$n is zero";
    }

    // Determine the Latitude and Longitude for practice

    list($defalut_lat, $defalut_lot, $user_lat, $user_lon) = [12.5, 13.5, 5, 7];

    $lat = $user_lat ?? $defalut_lat;
    $lon = $user_lon ?? $defalut_lot;

    echo "The Lat is : $lat And the Lon is : $lon";


    ?>


  </div>

</body>

</html>