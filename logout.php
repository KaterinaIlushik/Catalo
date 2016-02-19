<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 30.01.2016
 * Time: 0:09
 */
session_start();
require_once ('smarty_config.php');
require_once ('Users.php');
date_default_timezone_set('UTC');
$smarty = new MySmarty();
$message = 'User logged out';
session_unset();
session_destroy();
header('Location: index.php');
exit;
?>