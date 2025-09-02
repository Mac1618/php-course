<?php

  // utilities
  require "functions.php";
  require "Database.php";
  require "routes.php";

  $dbConfig = require "dbConfig.php";

  // Database instance
  $db = new Database($dbConfig['database']);
  
  $id = $_GET['id'];
  $query = "select * from posts where id = :id";

  // get params id value
    // NOTE be careful here! Don't directly past the parts id here in the query statement. There could be malicious code
    // - SAMPLE: localhost?id=1; drop table users;
  $posts = $db->query($query, [':id' => $id])->fetch();
  dd($posts);