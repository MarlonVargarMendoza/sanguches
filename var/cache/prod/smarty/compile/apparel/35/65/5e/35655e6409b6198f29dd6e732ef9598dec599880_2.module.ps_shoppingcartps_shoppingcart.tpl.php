<?php
/* Smarty version 4.3.1, created on 2024-07-29 19:29:20
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a833e077e858_41446327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a833e077e858_41446327 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_cart">
    <div class="blockcart cart-preview <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
">
        <div class="header">
            <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                <a rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php }?>
                <span class="mycart-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                <span class="cart-text">
                    <span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
                    <span class="cart-qty">
                        <span class="cart-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
 </span>
                        <span class="cart-label">Item(s)</span>
                    </span>
                </span>
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
                </a>
            <?php }?>
        </div>
    </div>
</div>
<?php }
}
