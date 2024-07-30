<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:39:18
  from 'C:\xampp\htdocs\prestashop_intermedio\adminMarlon\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a8282657c048_27904352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4841032ca2354b4947a3f759377aec86c3cf98e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_intermedio\\adminMarlon\\themes\\new-theme\\template\\content.tpl',
      1 => 1721035703,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a8282657c048_27904352 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
