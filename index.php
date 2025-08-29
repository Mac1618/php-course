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
        'releaseYear' => 2001,
        'url' => 'http.sample.com'
      ],
      [
        'name' => 'Human Nature',
        'author' => 'John Doe',
        'releaseYear' => 2001,
        'url' => 'http.sample.com'
      ],
      [
        'name' => 'The Langoliers',
        'author' => 'Andy Weir',
        'releaseYear' => 2005,
        'url' => 'http.sample.com'
      ]
    ];

    // functions in php
    function filterByAuthor ($books, $author) {
      foreach($books as $book){
        if ($book['author'] === $author) {
          return [$book];
        } else {
          return;
        }
      }
    }

  ?>

  <!-- with associative arrays -->
  <h1>Recommeded Books:</h1>
  <ol>
    <?php foreach (filterByAuthor($books, "John Doe") as $book) : ?>
      <li>
        <a href="<?= $book['url'] ?>">
          <?= $book['name'] ?> - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach ?>
  </ol>

</body>
</html>