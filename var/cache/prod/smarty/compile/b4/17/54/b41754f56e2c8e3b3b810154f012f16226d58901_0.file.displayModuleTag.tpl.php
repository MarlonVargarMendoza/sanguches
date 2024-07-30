<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:04:38
  from 'C:\xampp\htdocs\sanguches\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83c264a5707_79877619',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b41754f56e2c8e3b3b810154f012f16226d58901' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1721035703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83c264a5707_79877619 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
