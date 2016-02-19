<?php

session_start();

require_once ('smarty_config.php');
require_once ('Users.php');
require_once('Categories.php');
require_once('Goods.php');
date_default_timezone_set('UTC');


$smarty = new MySmarty();
$message = '';
$allusers = Users ::findAll1();
$allcategories = Categories::findAll2();
$allgoods = Goods::findAll3();
$good = new Goods();
//tесли у нас в гет установлен ид, то выполняется файнд ид, содержащий в гет ид если нет, то просто рендеринг формы
if (isset($_GET['id'])) {
    $good->findbyId($_GET['id']);
}
// print_r($good);
//объект, в отличие от значения переменной в смарти передается не аасайном, а ассайнбайреф
//дескрипшн и гуд - имена полей формы
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['edit'] == 1) {
        $good->setdescription($_POST['description'])->setname($_POST['good'])->updateGoods();
    } elseif ($_POST['edit'] == 2) {
        $new_good = new Goods();
        $new_good->setdescription($_POST['description']);
        $new_good->setname2($_POST['good']);
        $new_good->setcategory_id($_POST['new_category']);
        $new_good->save();
        $message = 'Good was created';
    }
   elseif ($_POST['edit'] == 3){
       ///тут еще надо isset по id, но хз как
       $good->Delete($good->getId());
       $message = 'Good was deleted';
}
}
$smarty->assign('allusers', $allusers);
$smarty->assign('allcategories', $allcategories);
$smarty->assign('allgoods', $allgoods);
$smarty->assign('message', $message);
$smarty->assignByRef('good', $good);
if (isset($_SESSION['auth'])) {
    $smarty->assign('auth', $_SESSION['auth']);}
//rendering
$smarty->display('Redel.tpl');
//<br /><b>Notice</b>:  Undefined property: Goods::$name in <b>C:\Users\XTreme.ws\PhpstormProjects\Catalo\templates_c\ac2f78f27c509cb0f504188dcb52089ebc89ad69_0.file.Redel.tpl.php</b> on line <b>172</b><br />
?>