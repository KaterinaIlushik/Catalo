<?php

/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 07.02.2016
 * Time: 17:03
 */

session_start();
require_once ('smarty_config.php');
require_once ('Categories.php');
require_once ('Goods.php');
require_once ('Users.php');
date_default_timezone_set('UTC');


$smarty = new MySmarty();
//$smarty->assign('name', 'переменная со значением имени пользователя');
$message = '';
$allusers = Users ::findAll1();
$allcategories = Categories::findAll2();
$allgoods = Goods::findAll3();
//print_r($allcategories);
$smarty->assign('allusers', $allusers);
$smarty->assign('allcategories', $allcategories);
$smarty->assign('allgoods', $allgoods);
$smarty->assign('message', $message);
if (isset($_SESSION['auth'])) {
    $smarty->assign('auth', $_SESSION['auth']);
}

//rendering
$smarty->display('index.tpl');




?>