<?php 

  // dump & die / terminate / stop
  function dd($value) {
    // log and fix the structure
    echo "<pre>";
      var_dump($value);
    echo "</pre>";
  
    // stop the code
    die(); 
  };

  // dd($_SERVER);
  // echo $_SERVER['REQUEST_URI'];    // current page

  function urlIs($value) {
    return $_SERVER['REQUEST_URI'];
  }
