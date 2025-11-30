<?php

$previousInput = file_get_contents('input.txt');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/main.css">
  <script src="/assets/js/main.js" defer></script>
  <title>Document</title>
</head>
<body>

<main class="main cont">
  <form action="save.php" method="POST">
    <textarea name="textarea" class="textarea"><?= $previousInput ?></textarea>
    <button class="btn btn-save" type="submit">Save</button>
  </form>
</main>
  
</body>
</html>