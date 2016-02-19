<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 07.02.2016
 * Time: 18:48
 */
session_start();
require_once ('smarty_config.php');
require_once ('Users.php');
require_once ('Categories.php');
require_once ('Goods.php');
date_default_timezone_set('UTC');

$smarty = new MySmarty();
$message = '';
$allusers = Users ::findAll1();
$allcategories = Categories::findAll2();
$allgoods = Goods::findAll3();
$user = new Users();



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST ["login"]) && (!empty ($_POST['login']))&& isset($_POST ["password"])&& (!empty ($_POST['password']))) {
        $user2 = Users:: findbyLogin($_POST ['login']);
        if (empty($user2)) {
            $new_user = new Users();
            $new_user->setlogin($_POST['login']);
            $new_user->setpassword($_POST['password']);
            $new_user->save();
            $message = 'User Registered';
        } else {
            $message = 'User already exists';
        }
    }
    else {
        $message = 'Fill the registration form';
    }
}

$smarty->assign('allusers', $allusers);
$smarty->assign('allcategories', $allcategories);
$smarty->assign('allgoods', $allgoods);
$smarty->assign('message', $message);
$smarty->assignByRef('user', $user);
$smarty->assignByRef('user2', $user2);
if (isset($_SESSION['auth'])) {
    $smarty->assign('auth', $_SESSION['auth']);}
$smarty->display("reg.tpl");
//header ('Location: index.php');