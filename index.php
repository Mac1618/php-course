<?php

  // utilities
  require "functions.php";
  // require "routes.php";


  // Definition of Terms
    // - PDO: PHP Data Object
    // - dsn: Data Source Name
    // - method: function inside class

  // connection to database
  $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4;";

  // PDO instance
  $pdo = new PDO($dsn);

  // prepared query statement
  $statement = $pdo->prepare("select * from posts");
  $statement->execute();

  // request the query statement

  // $posts = $statement->fetchAll();
    // RETURNS: 2 version
      // "key"    - $posts['id']
      // "index"  - $posts[0]

  $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    // RETURNS: fetch associative array instead of index
      // "key"    - $posts['id']

  // display all results
  foreach($posts as $post) {
    echo "<li>{$post['title']}</li>";
  }

  // dd($posts);
