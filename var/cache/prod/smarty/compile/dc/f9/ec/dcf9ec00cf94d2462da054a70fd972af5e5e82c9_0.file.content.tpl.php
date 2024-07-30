<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:50:26
  from 'C:\xampp\htdocs\prestashop_intermedio\adminMarlon\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a82ac21b0964_05218006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dcf9ec00cf94d2462da054a70fd972af5e5e82c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_intermedio\\adminMarlon\\themes\\default\\template\\content.tpl',
      1 => 1721035703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a82ac21b0964_05218006 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
