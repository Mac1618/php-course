<?php

  $heading = "My Notes";

  // database instance
  $db = new Database($dbConfig['database']);

  $id = $_GET['id'];
  $query = "find * from notes where user_id = :id";

  // query
  $notes = $db->query($query, [':id' => $id])->fetchAll();

  require "views/notes.view.php";