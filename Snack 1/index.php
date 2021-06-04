<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>


<?php

$matches = [
  [
    'casa' => 'New York',
    'ospite' => 'London',
    'puntiCasa' => 34,
    'puntiOspite' => 18
  ],
  [
    'casa' => 'Roma',
    'ospite' => 'Bangkok',
    'puntiCasa' => 246,
    'puntiOspite' => 8
  ],
  [
    'casa' => 'Rimini',
    'ospite' => 'Palermo',
    'puntiCasa' => 47,
    'puntiOspite' => 23
  ],
  [
    'casa' => 'Lecce',
    'ospite' => 'Milano',
    'puntiCasa' => 78,
    'puntiOspite' => 63
  ]
];

foreach ($matches as $match) {
    echo "<li>" . $match['casa'] . " - " . $match['ospite'] . " | " . $match['puntiCasa'] . "-" . $match['puntiOspite'] . "</li>";
}

?>


  
</body>
</html>