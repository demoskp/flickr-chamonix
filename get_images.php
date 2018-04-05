<?php

$url = 'https://api.flickr.com/services/feeds/photos_public.gne?tags=chamonix,ski,snow' . '&format=json';
$cSession = curl_init();
curl_setopt($cSession, CURLOPT_URL,$url);
curl_setopt($cSession, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($cSession);
curl_close($cSession);
//echo $response;
// Remove jsonp callback (jsonFlickrFeed) and escaped characters (except ")
$json = preg_replace('/\\\([^"])/', '$1', substr($response, 15, -1));
//echo($json);
$flickr = json_decode($json);
$no_images = sizeof($flickr->items);


?>
