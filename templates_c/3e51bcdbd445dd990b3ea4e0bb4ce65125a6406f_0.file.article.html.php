<?php
/* Smarty version 3.1.29, created on 2016-06-29 18:41:12
  from "D:\xampp\htdocs\STUDY\lesson_2-3\views\article.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5773fa28564e48_36579410',
  'file_dependency' => 
  array (
    '3e51bcdbd445dd990b3ea4e0bb4ce65125a6406f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\STUDY\\lesson_2-3\\views\\article.html',
      1 => 1467218348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.html' => 1,
    'file:views/footer.html' => 1,
  ),
),false)) {
function content_5773fa28564e48_36579410 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>            
    <h2 id="article_title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <article>
        <?php echo $_smarty_tpl->tpl_vars['article']->value;?>

    </article>
    <footer>
        <i>Автор: <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
</i>
    </footer>
</main>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
