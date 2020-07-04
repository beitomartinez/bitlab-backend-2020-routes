<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Mi vista en PHP</title>
</head>
<body>
  <p>ESTO ES UN ARCHIVO PHP</p>

  <?php
    $fruits = ['melón', 'sandía', 'fresa', 'uva'];

    foreach ($fruits as $fruit) {
      echo "$fruit <br>";
    }
  ?>
</body>
</html>