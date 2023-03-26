<?php
error_reporting(0);
error_log(1);

$ip = file_get_contents("https://ipapi.co/ip");
$country = file_get_contents("https://ipapi.co/" . $ip . "/country_name");

if ($country != "Argentina") {
header("HTTP/1.0 404 Not Found");
exit();
}
?>
