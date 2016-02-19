<?php
/* Smarty version 3.1.29, created on 2016-02-16 13:32:13
  from "C:\Users\XTreme.ws\PhpstormProjects\Catalo\index.php" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c324dd2bd480_61986069',
  'file_dependency' => 
  array (
    'fa6396fa2303d6fb1f85256600efcaab892a9ab7' => 
    array (
      0 => 'C:\\Users\\XTreme.ws\\PhpstormProjects\\Catalo\\index.php',
      1 => 1455629523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c324dd2bd480_61986069 ($_smarty_tpl) {
echo '<?php

';?>/**
 * Created by PhpStorm.
 * User: Kate
 * Date: 07.02.2016
 * Time: 17:03
 */

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

//rendering
$smarty->display('index.tpl');




<?php echo '?>';
}
}
