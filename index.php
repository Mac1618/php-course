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
        'releaseYear' => 1995,
        'url' => 'http.sample.com'
      ]
    ];

    // functions in php
    function filterByAuthor ($books, $author) {
      $filteredBooks = [];

      foreach($books as $book){
        if ($book['author'] === $author) {
          $filteredBooks[] = $book;
        }

        return $filteredBooks;
      }
    }

    // Lambda Functions: converting to functions to be generic
    $filter = function($items, $func) {
      $filterItems = [];

      foreach($items as $item) {
        if($func($item)){
          $filterItems[] = $item;
        }
      }

      return $filterItems;
    };

    // moving the logic here to easily manipulate
    $lambdaFilterBooks = $filter($books, function ($books) {
      // logic: equals to 2000 and ABOVE
      return $books['releaseYear'] <= 2000;
    });

    // php built-in function for ARRAY
    $lambdaPhpBuiltIn = array_filter($books, function ($books) {
      // logic: equals to 2000 and BELOW
      return $books['releaseYear'] >= 2000;
    });
  ?>

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