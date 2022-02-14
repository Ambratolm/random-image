<?php
function image_json($image_path) {
  $image = new stdClass();
  $image->name = basename($image_path);
  $image->title = image_title($image->name);
  $image->url = image_url($image_path);
  return json_encode($image);
}

function image_title($image_name) {
  $title = substr($image_name, 0, strpos($image_name, "_"));
  if ($title === null || trim($title) === "") {
    $title = $image_name;
  }
  return $title;
}

function image_url($image_path) {
  $protocol = "https://";
  $host_name = $_SERVER["SERVER_NAME"];
  $parent_dir_path = dirname($_SERVER["PHP_SELF"]);
  $clean_image_path = str_replace("//", "/", ltrim($image_path, "."));
  return $protocol . $host_name . $parent_dir_path . $clean_image_path;
}
?>