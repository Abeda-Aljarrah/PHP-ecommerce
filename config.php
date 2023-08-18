<?php 
require_once('google-api/vendor/autoload.php');
$gClient= new Google_Client();
$gClient-> setClientId("22492113012-fpos6ojjumfdlh5r3rklt9hpfdm569h6.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("Vicode Media Login");
$gClient->setRedirectUri("http://localhost/PHP-ecommerce/cont.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
// login URL
$login_url = $gClient->createAuthUrl();
?>