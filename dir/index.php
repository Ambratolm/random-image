<?php
//----------------------------------------------------------------------------
// ● Pick Random Image From Local Directory
//----------------------------------------------------------------------------

// Get All Images in Directory
$dir_path = "./images/";
$images_paths = glob($dir_path . "/*.{jpg,png,gif}", GLOB_BRACE);

// Get Random Image from Images in Directory
$image_path = $images_paths[array_rand($images_paths)];

// Send Image JSON Data to Browser
if (isset($_GET["json"])) {
  header("Content-Type: application/json; charset=utf-8");
  include "./json.php";
  echo image_json($image_path);
  exit;
}

// Send Image to Browser
header("Content-Type: " . mime_content_type($image_path));
header("Content-Length: " . filesize($image_path));
readfile($image_path);
exit;
?>