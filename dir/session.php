<?php
session_start();
echo "<pre>";
print_r($_COOKIE);
print_r($_SESSION);
print_r($_SERVER);
echo "</pre>";
?>