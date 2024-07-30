<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:39:16
  from 'C:\xampp\htdocs\prestashop_intermedio\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a828247aee05_04039408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90274af9be1dd05ea331eb78b804b36c3e4f205' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_intermedio\\modules\\psxdesign\\views\\templates\\hook\\displayModuleTag.tpl',
      1 => 1721035703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a828247aee05_04039408 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
