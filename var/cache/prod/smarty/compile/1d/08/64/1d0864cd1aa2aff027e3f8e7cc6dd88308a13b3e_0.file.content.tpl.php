<?php
/* Smarty version 3.1.39, created on 2021-11-03 23:26:55
  from '/var/www/html/prestashop/admin796jlimxg/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61830caf8149a4_30030025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d0864cd1aa2aff027e3f8e7cc6dd88308a13b3e' => 
    array (
      0 => '/var/www/html/prestashop/admin796jlimxg/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61830caf8149a4_30030025 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
