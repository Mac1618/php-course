<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>

  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <!-- with associative arrays -->
  <h1>Recommeded Books:</h1>
  <ol>
    <?php foreach ($lambdaFilterBooks as $book) : ?>
      <li>
        <a href="<?= $book['url'] ?>">
          <?= $book['name'] ?> - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ol>

</body>
</html>