<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>

  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
    <?php 
      $books = [
        "Do Androids Dream of Electric Sheep?",
        "The Langoliers",
        "Hail Mairy",
      ]
    ?>

    <h1>Recommeded Books:</h1>
    
    <!-- simple html element -->
    <ul>
        <?php 
          foreach($books as $book) {
            echo "<li>{$book}'s</li>";
          }

        ?>
    </ul>

    <!-- with complex html elements -->
     <ul>
      <?php foreach($books as $book) : ?>
        <strong>
          <li>
            <?= $book ?>
          </li>
        </strong>
        <hr>
      <?php endforeach; ?>  
     </ul>
</body>

</html>