<?php
/* Smarty version 3.1.39, created on 2021-11-11 19:38:13
  from '/var/www/html/admin6/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_618d63156e2d67_84733376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2fa72a04f82c16d9fee55d90aa2a2730eb436e' => 
    array (
      0 => '/var/www/html/admin6/themes/new-theme/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_618d63156e2d67_84733376 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
