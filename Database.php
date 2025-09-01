<?php

  // Filename: start with bigletter if only uses "Class"

  class Database {
    public $connection;

    // automatically run when creating instance
    public function __construct() {
      // connection to database
      $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4;";

      // PDO instance
      $this->connection = new PDO($dsn);
    }

    // execute a query 
    public function query($query) {
      // prepared query statement
      $statement = $this->connection->prepare($query);
      $statement->execute();

      // request the query statement
      return $statement;
    }
  }