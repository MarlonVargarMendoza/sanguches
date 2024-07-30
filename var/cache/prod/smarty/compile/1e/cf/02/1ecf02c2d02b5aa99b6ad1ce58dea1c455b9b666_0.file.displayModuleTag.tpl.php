<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:50:25
  from 'C:\xampp\htdocs\prestashop_intermedio\modules\psxdesign\views\templates\hook\displayModuleTag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a82ac15bf2b8_57426120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ecf02c2d02b5aa99b6ad1ce58dea1c455b9b666' => 
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
function content_66a82ac15bf2b8_57426120 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="module" src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['src']->value,'htmlall','UTF-8' ));?>
"><?php echo '</script'; ?>
>
<?php }
}
