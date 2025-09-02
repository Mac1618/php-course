<?php

  // support query params
  $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
  // dd(parse_url($_SERVER['REQUEST_URI']));

  // routes
  $routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/contact' => 'controllers/contact.php'
  ];

  // redirects
  function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
      abordStatusCode();
    }
  }

  // status codes
  function abordStatusCode($status = 404) {
    http_response_code($status);

    require "views/{$status}.php";

    die();
  }

  // calling redirects function
  routeToController($uri, $routes);