<?php
/* Smarty version 4.3.1, created on 2024-07-29 19:59:20
  from 'C:\xampp\htdocs\sanguches\sangucheadmin\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83ae8b9e225_10117850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50048ee7cdf1aa08246c7d4c8fbdee8279acbfc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\sangucheadmin\\themes\\new-theme\\template\\content.tpl',
      1 => 1721035703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83ae8b9e225_10117850 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
