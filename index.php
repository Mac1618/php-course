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
  <?php
    // associative arrays - associating a name for the key of an array index 
    $books = [
      [
        'name' => 'Do Androids Dream of Electric Sheep?',
        'author' => 'John Doe',
        'url' => 'https.sample.com'
      ],
      [
        'name' => 'The Langoliers',
        'author' => 'Andy Weir',
        'url' => 'https.sample.com'
      ]
    ];
  ?>

  <!-- with associative arrays -->
  <h1>Recommeded Books:</h1>
  <ol>
    <?php foreach ($books as $book) : ?>
      <li>
        <a href="<?= $book['url'] ?>">
          <?= $book['name'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ol>

</body>
</html>