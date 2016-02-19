<?php
/**
 * Created by PhpStorm.
 * User: XTreme.ws
 * Date: 07.02.2016
 * Time: 18:24
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



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST ["login"]) && (!empty ($_POST['login']))&& isset($_POST ["password"])&& (!empty ($_POST['password']))) {

        $user = Users:: findbyLogin($_POST ['login']);

        if ($user[0]['password'] == $_POST['password']) {

            $_SESSION['auth']=1;

            $message = 'User authorized';
        }
        else{
            $message ='Incorrect password';
        }
    }
    else {
        $message = 'Fill the registration form';
    }
}
/*if (isset($_POST ['login']) && (!empty ($_POST['login']))&&(!empty ($_POST['password']))){

    $user =  Users :: findbyLogin($_POST ['login']);

    if ($user[0]['password'] == $_POST['password']) {

        $_SESSION['auth']=1;

        $message = 'User authorized';
    }
    else{
      $message ='Incorrect password';
    }
}
else {
    $message = 'Please, fill the registration form';
}*/
$smarty->assign('allcategories', $allcategories);
$smarty->assign('allgoods', $allgoods);
$smarty->assign('allusers', $allusers);
$smarty->assignByRef('login', $login);
$smarty->assignByRef('password', $password);
$smarty->assign('message', $message);
if (isset($_SESSION['auth'])) {
    $smarty->assign('auth', $_SESSION['auth']);}
$smarty->display("index.tpl");
////header ('Location: index.php');
