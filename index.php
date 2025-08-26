<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>

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

  <?php
  $book = "Dark Matter";
  $read = true;

  if ($read) {
    $message = "You have read $book";
  } else {
    $message = "You have NOT read $book";
  }
  ?>
  <h1> <?= $message; ?> </h1>

</body>

</html>