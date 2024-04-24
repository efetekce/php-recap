<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <style>
    body {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <h1>Recommended Books</h1>

  <?php
  // $books = ['Do Androids Sleep', "The Langoliers", "Hail Mary"]

  $books = [
    [
      'name' => 'Do Androids Dream of Electric Sheep',
      'author' => 'Philip K. Dick',
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'http://example.com'
    ]
  ]
  ?>


  <ul>
    <?php foreach ($books as $book) {
      echo "<li>{$book} &deg;</li>";
    }
    ?>

    <?php foreach ($books as $book) : ?>
      <li><?= $book ?></li>
    <?php endforeach; ?>
  </ul>

  <?= $books[2] ?>
</body>

</html>