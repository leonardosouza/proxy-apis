<?php
header("Access-Control-Allow-Origin: *");
if($_REQUEST["url"]) : 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_REQUEST["url"]);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
endif;
?>
