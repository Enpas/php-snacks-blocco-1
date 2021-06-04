<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>

  <?php

    $posts = [
      '10/01/2021' => [
        'title' => 'Lorem',
        'author' => 'Voluptatibus',
        'text' => 'atque ducimus officiis deserunt'
      ],
      '10/02/2021' => [
        'title' => 'Ipsum', 
        'author' => 'Voluptatibus',
        'text' => 'vitae quo consectetur'
      ],
      '15/04/2020' => [
        'title' => 'Dolor',
        'author' => 'Voluptatibus',
        'text' => 'beatae fuga laborum'
      ],
      '19/10/2020' => [
        'title' => 'Sit',
        'author' => 'Voluptatibus',
        'text' => 'consectetur adipisicing elit'
      ],
    ];

    foreach ($posts as $post => $value) {
      echo "<ul>
              <li>" . $post . 
                "<ul>
                  <li>Titolo: " . $value['title'] . "</li>
                  <li>Autore: " . $value['author'] . "</li>
                  <li>Testo: " . $value['text'] . "</li>
                 </ul>
              </li>
            </ul>";
    }
    
  ?>

</body>
</html>