<?php
/* Smarty version 3.1.29, created on 2016-06-29 18:31:38
  from "D:\xampp\htdocs\STUDY\lesson_2-3\views\articles_index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5773f7ead34150_93233261',
  'file_dependency' => 
  array (
    'a9a06909725f27564609184b0df33c5a42729536' => 
    array (
      0 => 'D:\\xampp\\htdocs\\STUDY\\lesson_2-3\\views\\articles_index.html',
      1 => 1467217897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.html' => 1,
    'file:views/footer.html' => 1,
  ),
),false)) {
function content_5773f7ead34150_93233261 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main>
        <h3 class="index_title">Список всех статей</h3>            
        <?php
$_from = $_smarty_tpl->tpl_vars['articles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_article_0_saved_item = isset($_smarty_tpl->tpl_vars['article']) ? $_smarty_tpl->tpl_vars['article'] : false;
$_smarty_tpl->tpl_vars['article'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['article']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
$__foreach_article_0_saved_local_item = $_smarty_tpl->tpl_vars['article'];
?>
            <p class="index_items"><a href="index.php?page=Articles&action=read&id=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">"<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
" :: Автор: <?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
</a></p>
        <?php
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_local_item;
}
if ($__foreach_article_0_saved_item) {
$_smarty_tpl->tpl_vars['article'] = $__foreach_article_0_saved_item;
}
?>
        <p class="level_up"><a href="index.php">[на главную]</a></p>
    </main>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
