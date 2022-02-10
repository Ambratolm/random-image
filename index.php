<?php
// Get All Posts in Feed
$feed_url = "https://feeds.feedburner.com/ambratolm-cf";
$feed_xml = file_get_contents($feed_url);
$feed = new SimpleXMLElement($feed_xml);
$entries = $feed->entry;

// Get Random Post from Posts in Feed
$entry_index = rand(0, count($entries) - 1);
$entry = $entries[$entry_index];

// Get All Images in Post
$content = new DOMDocument();
$content->loadHTML($entry->content);
$imgs = $content->getElementsByTagName("img");

// Get Random Image from Images in Post
$img_index = rand(0, count($imgs) - 1);
$img = $imgs[$img_index];
$src = $img->getAttribute("src");

// Send Image to Browser
$headers = get_headers($src, true);
header("Content-Type: " . $headers["Content-Type"]);
header("Content-Length: " . $headers["Content-Length"]);
readfile($src);
exit;
?>