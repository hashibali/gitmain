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

    $n = 0;
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
    ?>


  </div>

</body>

</html>