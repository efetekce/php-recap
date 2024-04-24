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
      'releaseYear' => '1968',
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'Project Hail Mary',
      'author' => 'Andy Weir',
      'releaseYear' => '2014',
      'purchaseUrl' => 'http://example.com'
    ],
    [
      'name' => 'The Martian',
      'author' => 'Andy Weir',
      'releaseYear' => '2011',
      'purchaseUrl' => 'http://example.com'
    ],
    //associative arrays(key-value pairs)
  ];



  $filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Andy Weir';
  });

  ?>


  <ul>
    <?php foreach ($filteredBooks as $book) : ?>

      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name']; ?>
          (<?= $book['releaseYear']; ?>)
          by <?= $book['author'] ?>

        </a>
      </li>

    <?php endforeach; ?>
  </ul>


</body>

</html>