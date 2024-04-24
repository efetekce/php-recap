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
  <h1>PHP Recap</h1>
  <?php
  /*
      $message = 'Hello';

      echo $message . "double quote" . ' ' . 'adding strings together';
      // we use the . to concatonate strings together

      echo "$message Everyone."
      // if we want to use variables within strings we must use double quotation mark.
      */
  ?>

  <?php
  $name = "Schopenhauer";
  $read = true;

  if ($read) {
    $message = "You have read $name";
    // this variable will only be created when read is true.
  } else {
    $message = "You have not read $name";
  }
  ?>

  <h2>
    <?php echo $message; ?>
    <?= $message ?>
    <!-- echo short syntax -->
  </h2>


</body>

</html>