<?php
/* Smarty version 3.1.39, created on 2021-10-22 15:18:44
  from '/var/www/html/prestashop/admin533e8t94a/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6172ba34096570_74242734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '841aaf3d0ceff1f368fbbeb3ec751fb8832bd9ea' => 
    array (
      0 => '/var/www/html/prestashop/admin533e8t94a/themes/default/template/content.tpl',
      1 => 1633363913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6172ba34096570_74242734 (Smarty_Internal_Template $_smarty_tpl) {
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
