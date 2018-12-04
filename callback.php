<?php
/**
 * Created by PhpStorm.
 * User: ma lau
 * Date: 04-Dec-18
 * Time: 10:06 PM
 */
require_once("./config.php");
// Login thành công bằng tài khoản google sẽ đến trang này (và có param code)
if ( ! isset($_GET['code'])) {
    header("Location: login.php");
    die();
}

$token = $googleClient->fetchAccessTokenWithAuthCode($_GET['code']);
$_SESSION['accessToken'] = $token;

// Lấy thông tin người dùng
$openAuth = new Google_Service_Oauth2($googleClient);
$userData = $openAuth->userinfo_v2_me->get();

//echo "<pre>";
//print_r($userData);
//echo "</pre>";

$_SESSION['email'] = $userData['email'];
$_SESSION['firstName'] = $userData['givenName'];
$_SESSION['lastName'] = $userData['familyName'];
$_SESSION['gender'] = $userData['gender'];

header("Location: secure.php");