<?php
/* Smarty version 3.1.29, created on 2016-02-17 16:40:13
  from "C:\Users\XTreme.ws\PhpstormProjects\Catalo\templates\Redel.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56c4a26d053c63_51411626',
  'file_dependency' => 
  array (
    'ac2f78f27c509cb0f504188dcb52089ebc89ad69' => 
    array (
      0 => 'C:\\Users\\XTreme.ws\\PhpstormProjects\\Catalo\\templates\\Redel.tpl',
      1 => 1455726724,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56c4a26d053c63_51411626 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/bootstrap-theme.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 SRC="static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <title></title>
</head>
<body bgcolor="blue">
<!-- рабочая область -->
<div class="container-fluid" style="background: #B1A1CE">
    <!-- row - строка хедр здесь -->
    <div class="row">
        <!-- col md 12 - колонки-12шт в себе -->
        <div class="col-md-12" style="background: darkslateblue">
            <div class="col-md-9" style= text-decoration-color: aria-busy="font: Helvetica">
                <h1><p class="text-info">Here Will be a header </p><small>    blah blah</small> </h1>
            </div>
            <div class="col-md-3" >
                <?php if (!isset($_smarty_tpl->tpl_vars['auth']->value)) {?>
                    <p class="bg-info">
                    <form method="post" action="auth.php">
                        <input type="text" name='login' value="Имя"><br>
                        <input type="password" name='password' value="пароль">
                        <input type="submit" value="send">
                    </form>
                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    <a href="reg.php">Пройти регистрацию</a>
                    </p>
                    <?php }?>
                </form>
                <?php if (isset($_smarty_tpl->tpl_vars['auth']->value)) {?>
                    <?php if ($_smarty_tpl->tpl_vars['auth']->value == 1) {?>
                    <p class="bg-info">
                    <form role="form" method="post" action="logout.php">
                        <div class="form-group">
                        <button type="submit" class="btn btn-info">Выйти</button>
                            <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    </form>
                    </p>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- row - строка девая колонка 3 -->

    <div class="row">
        <div class="col-md-3" style="background: #B1A1CE"> <p><h3>Выберите породу котика</h3></p>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Выберите породу котика
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#">
                            <?php
$_from = $_smarty_tpl->tpl_vars['allcategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_0_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$__foreach_category_0_saved_key = isset($_smarty_tpl->tpl_vars['key1']) ? $_smarty_tpl->tpl_vars['key1'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_0_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                                
                                
                                
                                <a href="goodsincat.php?id=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                                    <span class="active"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
<br></span>
                                    
                                    
                                    
                                </a>
                            <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_local_item;
}
if ($__foreach_category_0_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_0_saved_item;
}
if ($__foreach_category_0_saved_key) {
$_smarty_tpl->tpl_vars['key1'] = $__foreach_category_0_saved_key;
}
?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6" style="background: #B1A1CE"> <p><h3>Выберите котика</h3></p>

            <p style="color: green"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
            <!-- create category -->
            
                
                    
                
                
                    
                        
                    
                        
                    
                
            

            <!-- rename category -->
            <div>
                <p><br>
                    <strong>Создание товара</strong>
                </p>
                <form method="post" action="Redel.php?id=<?php echo $_smarty_tpl->tpl_vars['good']->value->id;?>
">
                    <p>Введите название породы<br>
                        <select name="new_category">
                            <?php
$_from = $_smarty_tpl->tpl_vars['allcategories']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_category_1_saved_item = isset($_smarty_tpl->tpl_vars['category']) ? $_smarty_tpl->tpl_vars['category'] : false;
$__foreach_category_1_saved_key = isset($_smarty_tpl->tpl_vars['key1']) ? $_smarty_tpl->tpl_vars['key1'] : false;
$_smarty_tpl->tpl_vars['category'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key1'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['category']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key1']->value => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
$__foreach_category_1_saved_local_item = $_smarty_tpl->tpl_vars['category'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_1_saved_local_item;
}
if ($__foreach_category_1_saved_item) {
$_smarty_tpl->tpl_vars['category'] = $__foreach_category_1_saved_item;
}
if ($__foreach_category_1_saved_key) {
$_smarty_tpl->tpl_vars['key1'] = $__foreach_category_1_saved_key;
}
?>
                        </select>
                    </p>
                    <p>Введите имя котика<br>

                        <input type="text" name="good" size="50" value="<?php if (isset($_smarty_tpl->tpl_vars['good']->value)) {
echo $_smarty_tpl->tpl_vars['good']->value->name;
}?>"><br>
                    </p>
                    <p>Введите описание котика<br>
                        <textarea name="description" cols="50" rows="5" value="<?php if (isset($_smarty_tpl->tpl_vars['good']->value)) {
echo $_smarty_tpl->tpl_vars['good']->value->description;
}?>"><?php if (isset($_smarty_tpl->tpl_vars['good']->value)) {
echo $_smarty_tpl->tpl_vars['good']->value->description;
}?></textarea>
                    </p>
                    <p>
                        <label>Edit</label>
                        <input type="radio" name="edit" checked value="1">
                        <label>New</label>
                        <input type="radio" name="edit" value="2">
                        <label>Delete</label>
                        <input type="radio" name="edit" value="3">

                        <input type="submit" value="OK">
                    </p>
                </form>
            </div>

        </div>
        <div class="col-md-3" style="background: #B1A1CE">
            <blockquote class="blockquote-reverse">
                <p>Cat and training - are not so incompatible concepts. In just a few days, well-behaved cat can anyone. </p>
                <footer>Graham Cooper</footer>
            </blockquote>
            <center> <img src="static/images/zavulon.jpg" class="img-circle"  alt="Responsive image"></center><br>
            <center> <p class="text-muted"><h3><strong>Zavulon fon Gugenzollern</strong><h3></p></center><br>
        </div>
    </div>

    <div class="row">
        <!-- col md 12 - колонки-12шт в себе футер -->
        <div class="col-md-12" style="background: darkslateblue">
            <div class="col-md-9">

                таблица</div>
            <div class="col-md-3">
                <address class="text-info">
                    <strong>Dnevnoi Dozor, Inc.</strong><br>
                    Highway to Hell<br>
                    Moscow,  666 <br>
                    <abbr title="Phone">Tel:</abbr> (666) 666-6666
                </address>

                <address>
                    <strong>Zavulosha Ilyuskik</strong><br>
                    <a href="mailto:#">Zavochka@gmail.com</a>
                </address></div>
        </div>
    </div>
</div>
</body>
</html><?php }
}
