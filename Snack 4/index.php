<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 4</title>
</head>
<body>

  <?php

    $arrNum = [];
    while (count($arrNum) < 15) {
      $numRan = rand(0, 100);
      if (!in_array($numRan, $arrNum)) {
        array_push($arrNum, $numRan);
      }
    }
    var_dump($arrNum);

  ?>

</body>
</html>