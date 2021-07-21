<?php

$int = 100.2;
echo filter_var($int, FILTER_VALIDATE_INT)."\n";

$ip = "127.0.0.1";
echo filter_var($ip, FILTER_VALIDATE_IP)."\n";

$email = "john.doe@example.com";
echo filter_var($email, FILTER_VALIDATE_EMAIL)."\n";

$str = "<h1>Hello World!</h1>";
echo filter_var($str, FILTER_SANITIZE_STRING)."\n";

$url = "https://www.w3schools.com"."\n";
echo filter_var($url, FILTER_SANITIZE_URL);
?>