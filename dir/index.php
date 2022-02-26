<?php
//----------------------------------------------------------------------------
// ● Pick Random Image From Local Directory
//----------------------------------------------------------------------------

// Get All Images in Directory
$dir_path = "./images/";
$images_paths = glob(
  $dir_path . "/*.{jpg,jpeg,jpe,jfif,png,gif,bmp,dib,tif,tiff}", GLOB_BRACE
);
if (empty($images_paths)) exit;

// Get Random Image from Images in Directory
$image_path = $images_paths[array_rand($images_paths)];

// Send Image JSON Data to Browser
if (isset($_GET["json"])) {
  header("Content-Type: application/json; charset=utf-8");
  include "./json.php";
  echo image_json($image_path);
  exit;
}

// Send Image Directly to Browser
header("Content-Type: " . mime_content_type($image_path));
header("Content-Length: " . filesize($image_path));
readfile($image_path);
exit;
?>