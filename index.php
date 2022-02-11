<?php
  $dirs = array_filter(glob("*"), "is_dir");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🎲 Random Image by Ambratolm</title>
</head>
<style>
  body {
    font-family: "Courier New", sans-serif;
    font-size: 150%;
    background: silver;
  }
  li {
    list-style: none;
  }
</style>
<body>
  <h1>🎲 Random Image</h1>
  <p>
    Pick a random image made by
    <a href="https://ambratolm.cf" target="_blank">Ambratolm</a>.
  </p>
  <ul>
    <?php foreach($dirs as $dir): ?>
      <li>📂 <a href="./<?= $dir ?>" target="_blank"><?= $dir ?></a></li>
    <?php endforeach; ?>
  </ul>

</body>
</html>