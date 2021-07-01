<?php
require_once __DIR__.'/vendor/autoload.php';
  
session_start();
  
$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->setRedirectUri("https://localhost/Fanny-google/Fanny-google/index.php");
$client->setScopes(array(
    "https://www.googleapis.com/auth/userinfo.email",
    "https://www.googleapis.com/auth/userinfo.profile",
    "https://www.googleapis.com/auth/plus.me"
));
?>