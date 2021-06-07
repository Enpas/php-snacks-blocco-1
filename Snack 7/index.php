<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>

<?php

  $students = [
    
    [
      'name' => 'Mario',
      'lastname' => 'Rossi',
      'votes' => [6, 7, 9, 2, 8],
    ],
    [
      'name' => 'Pietro',
      'lastname' => 'Smusi',
      'votes' => [4, 3, 6, 5, 10],
    ],
    [
      'name' => 'Giacomo',
      'lastname' => 'Gianciotti',
      'votes' => [8, 4, 5, 6, 1],
    ],
    [
      'name' => 'Sandro',
      'lastname' => 'Sandrino',
      'votes' => [3, 6, 5, 7, 8],
    ],

  ];
  
?>

<?php

foreach ($students as $student) { ?>

  <ul>
    <li>Nome: <?php echo $student['name'] ?> </li>
    <li>Cognome: <?php echo $student['lastname'] ?> </li>
    <li>Media: <?php echo array_sum($student['votes']) / count($student['votes']) ?> </li>
  </ul>

<?php } ?>

</body>
</html>