<?php

  // Filename: start with bigletter if only uses "Class"

  class Database {
    public $connection;

    // automatically run when creating instance
    public function __construct($dbConfig) {

      // php method for query params: modified the separator 
      $dsn = 'mysql:' . http_build_query($dbConfig, '', ';');

      // connection to database
      // $dsn = "mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4;";

      // PDO instance
      $this->connection = new PDO($dsn, 'root','',[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    }

    // execute a query 
    public function query($query, $params = []) {
      // prepared query statement
      $statement = $this->connection->prepare($query);
      $statement->execute($params);

      // request the query statement
      return $statement;
    }
  } 