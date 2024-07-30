<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:10
  from 'C:\xampp\htdocs\sanguches\themes\apparel\modules\ps_emailalerts\views\templates\hook\my-account-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b1a7516a8_75103686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bacc3b7cdb210d67f18ba57d40c0649f6b4f361c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\modules\\ps_emailalerts\\views\\templates\\hook\\my-account-footer.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b1a7516a8_75103686 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
