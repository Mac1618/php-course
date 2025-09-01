<?php

  // sample class
  class Person {
    public $name;
    public $age;

    public function breathe() {
      echo $this . ' is breathing';
    }
  };

  // object instance
  $person = new Person();

  // assigning value
  $person->name = 'John Doe';
  $person->age = 25;

  // accessing the person data
  $person->breathe();