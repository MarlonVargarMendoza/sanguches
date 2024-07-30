<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:16:53
  from 'C:\xampp\htdocs\sanguches\sangucheadmin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83f05021a58_12479224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cebab7e14151d2ff8af5bc85757e2d3829a6e9fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\sangucheadmin\\themes\\default\\template\\content.tpl',
      1 => 1721035703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83f05021a58_12479224 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
