<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 10.02.2016
 * Time: 19:42
 */
session_start();
require_once ('smarty_config.php');
require_once ('Categories.php');
require_once ('Goods.php');
require_once ('Users.php');
date_default_timezone_set('UTC');

$smarty = new MySmarty();
$message = '';
$categoryarray = '';
$allusers = Users ::findAll1();
$allcategories = Categories::findAll2();
$allgoods = Goods::findAll3();
$goodsincat = Goods:: findbyCategoryid($_GET['id']);

$smarty->assign('goodsincat', $goodsincat);
$smarty->assign('allusers', $allusers);
$smarty->assign('allcategories', $allcategories);
$smarty->assign('allgoods', $allgoods);
$smarty->assign('message', $message);
$smarty->assign('categoryarray',$categoryarray);
if (isset($_SESSION['auth'])) {
    $smarty->assign('auth', $_SESSION['auth']);}
$smarty->display('catgoods.tpl');

