<?php
$dirs = glob("*", GLOB_ONLYDIR);
if (($key = array_search("vendor", $dirs)) !== false) {
  unset($dirs[$key]);
}
?>
<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🎲 Random Image by Ambratolm</title>
  <link rel="stylesheet" href="./pico.min.css">
</head>
<style>
</style>
<body>
  <div class="hero">
    <nav class="container-fluid">
      <ul>
        <li>
          <a href="./" class="contrast" onclick="event.preventDefault()">
            <img src="./logo.png" alt="logo"> <strong>Ambratolm</strong>
          </a>
        </li>
      </ul>
      <ul>
        <li>
          <a  href="https://www.ambratolm.cf/p/links.html"
              target="_blank"
              class="contrast"
          >
            ✉ Contact
          </a>
        </li>
      </ul>
    </nav>
    <header class="container">
      <hgroup>
        <h4>🎲 Random Image</h4>
        <h5>
          Pick a random image made by
          <a href="" target="_blank" class="contrast">🎨 Ambratolm</a>
        </h5>
      </hgroup>
      <article>
        <header>
          📂 Endpoints
        </header>
        <aside>
          <nav>
            <ul>
              <?php foreach ($dirs as $dir): ?>
                <li>
                  <a href="./<?= $dir ?>" target="_blank" class="contrast">
                    📁 <?= $dir ?>
                  </a>
                  <ul>
                    <li>
                      <a href="./<?= $dir ?>?json" target="_blank" class="contrast">
                        🔍 <?= $dir ?>?json
                      </a>
                    </li>
                  </ul>
                </li>
              <?php endforeach; ?>
            </ul>
          </nav>
        </aside>
        <footer></footer>
      </article>
    </header>
  </div>
  <footer class="container">
    &copy; <?= date("Y"); ?>
    <a href="https://github.com/Ambratolm" target="_blank" class="contrast">
      Ambratolm
    </a>
  </footer>
</body>
<script>

</script>
</html>
