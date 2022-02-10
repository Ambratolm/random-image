<?php
header('Content-Type: image/jpg');

$feed_url = "https://feeds.feedburner.com/ambratolm-cf";
$feed_xml = file_get_contents($feed_url);
$feed = new SimpleXMLElement($feed_xml);

$entries = $feed->entry;
$entry_index = rand(0, count($entries) - 1);
$entry = $entries[$entry_index];

$content = new DOMDocument();
$content->loadHTML($entry->content);

$imgs = $content->getElementsByTagName("img");
$img_index = rand(0, count($imgs) - 1);
$img = $imgs[$img_index];
$src = $img->getAttribute("src");

$image = file_get_contents($src);
echo $image;
?>