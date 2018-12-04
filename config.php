<?php
/**
 * Created by PhpStorm.
 * User: ma lau
 * Date: 04-Dec-18
 * Time: 10:20 PM
 */
session_start(); // store token from google -> session, xài ở callback

require_once("./vendor/autoload.php");

$googleClient = new Google_Client();
$googleClient->setClientId("Here is your client ID");
$googleClient->setClientSecret("Here is your client secret");
$googleClient->setApplicationName('HaoChung Google Login');
$googleClient->setRedirectUri("https://localhost/php_google_login/callback.php"); // Sau khi xác thực xong chuyển đi đâu & làm gì đó.
$googleClient->addScope("https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile"); // Thông tin muốn lấy từ user