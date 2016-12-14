<?php
/* Smarty version 3.1.29, created on 2016-07-06 12:07:02
  from "D:\xampp\htdocs\STUDY\lesson_2-4\views\homepage.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_577cd8462c2222_87185919',
  'file_dependency' => 
  array (
    'f097620f746c92cd61cc636fad72915f7c8e9124' => 
    array (
      0 => 'D:\\xampp\\htdocs\\STUDY\\lesson_2-4\\views\\homepage.html',
      1 => 1467199741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:views/header.html' => 1,
    'file:views/footer.html' => 1,
  ),
),false)) {
function content_577cd8462c2222_87185919 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <main>            
        <h2 id="h2_homepage">Добро пожаловать в литературный блог "Секреты писателя"!</h2>
        <p id="p_homepage">Здесь Вы сможете окунуться в мир литературы, узнать различные художественные приёмы и 
            "рассмотреть" процесс создания произведений изнутри.
        </p>
    </main>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:views/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
