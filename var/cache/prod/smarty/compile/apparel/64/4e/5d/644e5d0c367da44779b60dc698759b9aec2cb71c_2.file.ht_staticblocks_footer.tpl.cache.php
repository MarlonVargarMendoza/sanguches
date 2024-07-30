<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:10
  from 'C:\xampp\htdocs\sanguches\modules\ht_staticblocks\views\templates\hook\ht_staticblocks_footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b1a9d2a48_84043436',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644e5d0c367da44779b60dc698759b9aec2cb71c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\modules\\ht_staticblocks\\views\\templates\\hook\\ht_staticblocks_footer.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b1a9d2a48_84043436 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21676061766a83b1a9caff3_73864646';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
