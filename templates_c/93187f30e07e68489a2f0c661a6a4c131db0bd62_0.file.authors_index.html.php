<?php
/* Smarty version 3.1.29, created on 2016-07-06 10:34:21
  from "D:\xampp\htdocs\STUDY\lesson_2-4\views\authors_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577cc28d5133a3_56963455',
  'file_dependency' => 
  array (
    '93187f30e07e68489a2f0c661a6a4c131db0bd62' => 
    array (
      0 => 'D:\\xampp\\htdocs\\STUDY\\lesson_2-4\\views\\authors_index.html',
      1 => 1467217221,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.html' => 1,
    'file:views/footer.html' => 1,
  ),
),false)) {
function content_577cc28d5133a3_56963455 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main>            
        <h3 class="index_title">Список всех авторов</h3>
        <?php
$_from = $_smarty_tpl->tpl_vars['authors']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_author_0_saved_item = isset($_smarty_tpl->tpl_vars['author']) ? $_smarty_tpl->tpl_vars['author'] : false;
$_smarty_tpl->tpl_vars['author'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['author']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['author']->value) {
$_smarty_tpl->tpl_vars['author']->_loop = true;
$__foreach_author_0_saved_local_item = $_smarty_tpl->tpl_vars['author'];
?>
            <p class="index_items"><a href="index.php?page=Authors&action=read&id=<?php echo $_smarty_tpl->tpl_vars['author']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['author']->value['name'];?>
</a></p>
        <?php
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved_local_item;
}
if ($__foreach_author_0_saved_item) {
$_smarty_tpl->tpl_vars['author'] = $__foreach_author_0_saved_item;
}
?>
        <p class="level_up"><a href="index.php"><на главную></a></p>
    </main>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
