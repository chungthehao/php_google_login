<?php
/**
 * Created by PhpStorm.
 * User: ma lau
 * Date: 04-Dec-18
 * Time: 10:05 PM
 */
require_once("./config.php");

$googleClient->revokeToken();
session_destroy();
header("Location: login.php");