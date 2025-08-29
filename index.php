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

  // php built-in function for ARRAY
  $lambdaFilterBooks = array_filter($books, function ($books) {
    // logic: equals to 2000 and BELOW
    return $books['releaseYear'] >= 2000;
  });

  // include / require: Load the main view template for the index php logic
    // require = mandatory include (fatal error if missing).
    // include = optional include (warning if missing, script continues).
  require "index.view.php";

// closing php tag can be removed if all codes are just
?>