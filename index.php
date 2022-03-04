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
  <title>Random Image by Ambratolm</title>
  <link rel="stylesheet" href="./pico.min.css">
</head>
<style>
</style>
<body>
  <div class="hero">

    <!-- Navbar -->
    <nav class="container">
      <ul>
        <li>
          <img src="./logo.png" alt="logo">
          <strong>Ambratolm</strong>
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


    <!-- Content -->
    <header class="container">
      <article style="margin: 0">
        <header>
          <hgroup style="margin: 0">
            <h4>🎲 Random Image</h4>
            <h5>
              Pick a random image made by
              <a href="" target="_blank" class="contrast">🎨 Ambratolm</a>
            </h5>
          </hgroup>
        </header>
        <table>
          <thead>
              <tr>
                <th scope="col">📂 Image Endpoints</th>
                <th scope="col">📂 JSON Endpoints</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($dirs as $dir): ?>
              <tr>
                <td>
                  <a href="./<?= $dir ?>" target="_blank" class="contrast">
                    📁 <?= $dir ?>
                  </a>
                </td>
                <td>
                  <a href="./<?= $dir ?>?json" target="_blank" class="contrast">
                    🔍 <?= $dir ?>?json
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <footer>
          &copy; <?= date("Y"); ?>
          <a href="https://github.com/Ambratolm" target="_blank" class="contrast">
            Ambratolm
          </a>
        </footer>
      </article>
    </header>

  </div>
</body>
</html>
