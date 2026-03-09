<?php

$previousContent = file_get_contents('v.txt');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/css/main.css">
  <script src="/assets/js/main.js" defer></script>
  <title>Views' stops</title>
</head>
<body>

<main class="main cont">
  <form action="save-v.php" method="POST">
    <textarea name="textarea" class="textarea"><?= $previousContent ?></textarea>
    <button class="btn btn-save" type="submit">Save stops</button>
  </form>
</main>
  
</body>
</html>