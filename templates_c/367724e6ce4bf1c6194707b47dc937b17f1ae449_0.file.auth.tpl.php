<?php
/* Smarty version 3.1.29, created on 2016-02-15 20:59:29
  from "C:\Users\XTreme.ws\PhpstormProjects\Catalo\templates\auth.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c23c31e4e627_88670075',
  'file_dependency' => 
  array (
    '367724e6ce4bf1c6194707b47dc937b17f1ae449' => 
    array (
      0 => 'C:\\Users\\XTreme.ws\\PhpstormProjects\\Catalo\\templates\\auth.tpl',
      1 => 1455563424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c23c31e4e627_88670075 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/bootstrap-theme.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <title>Auth</title>
</head>
<body>

<form method="post" action="auth.php">
    <input type="text" name='login' value="Имя">
    <input type="password" name='password' value="пароль">
    <input type="submit" value="send">
</form>
<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

<a href="reg.php">Пройти регистрацию</a>

</body>
</html>
<?php }
}
