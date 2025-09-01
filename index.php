<?php

  // utilities
  require "functions.php";
  // require "routes.php";
  require "Database.php";


  // Database instance
  $db = new Database();

  // multiple     - db[0][title]
  $posts = $db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC);  
  // dd($db->query("select * from posts")->fetchAll(PDO::FETCH_ASSOC));

  // single       - db[title]
  $post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);
  // dd($db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC));

  // display all db results
  foreach($posts as $post) {
    echo "<li>{$post['title']}</li>";
  }

  echo "<li>{$post['title']}</li>";