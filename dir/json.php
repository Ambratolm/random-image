<?php
function image_json($image_path) {
  $image_data = new stdClass();
  $image_data->name = basename($image_path);
  $image_data->title = substr(
    $image_data->name, 0, strpos($image_data->name, "_")
  );
  if ($image_data->title === null || trim($image_data->title) === "") {
    $image_data->title = $image_data->name;
  }
  $image_data->url = realpath($image_path);
  return json_encode($image_data);
}
?>