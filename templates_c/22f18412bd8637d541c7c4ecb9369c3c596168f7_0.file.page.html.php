<?php
/* Smarty version 3.1.29, created on 2016-06-20 19:00:02
  from "D:\xampp\htdocs\STUDY\lesson_2-3\views\page.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57682112180563_82862553',
  'file_dependency' => 
  array (
    '22f18412bd8637d541c7c4ecb9369c3c596168f7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\STUDY\\lesson_2-3\\views\\page.html',
      1 => 1466441998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.html' => 1,
    'file:views/footer.html' => 1,
  ),
),false)) {
function content_57682112180563_82862553 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="wrapper">
            <main>            
                <?php echo $_smarty_tpl->tpl_vars['articles']->value;?>

            </main>
            <footer>
                <span>2016, All Rights Reserved</span>
            </footer>
        </div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
