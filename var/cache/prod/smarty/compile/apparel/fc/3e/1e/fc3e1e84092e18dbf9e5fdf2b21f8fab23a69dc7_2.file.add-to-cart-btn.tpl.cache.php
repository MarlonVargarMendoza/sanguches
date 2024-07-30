<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:03
  from 'C:\xampp\htdocs\sanguches\themes\apparel\templates\catalog\_partials\customize\add-to-cart-btn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b13a64cc0_63217820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc3e1e84092e18dbf9e5fdf2b21f8fab23a69dc7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\templates\\catalog\\_partials\\customize\\add-to-cart-btn.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b13a64cc0_63217820 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '56833785366a83b13a5ec74_57069317';
?>

<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" class="cart-form-url" method="post">
        <input type="hidden" name="token" class="cart-form-token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" name="id_product">
        <input type="hidden" class="input-group form-control" value="1" name="qty" />
        <button data-button-action="add-to-cart" class="btn btn-primary" <?php if (!$_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>disabled title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>' Out of stock ','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"<?php }?>>
            <span>
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            </span>
        </button>
    </form>
<?php }
}
}
