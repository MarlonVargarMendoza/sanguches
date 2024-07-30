<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:14:36
  from 'C:\xampp\htdocs\sanguches\themes\apparel\templates\checkout\_partials\cart-voucher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83e7c7c21e4_98049972',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be9a09ae213ded69da6b129a5f05b8d410b63627' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\templates\\checkout\\_partials\\cart-voucher.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83e7c7c21e4_98049972 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['allowed']) {?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86402199966a83e7c7aa128_63597863', 'cart_voucher');
?>

<?php }
}
/* {block 'cart_voucher_list'} */
class Block_101890610266a83e7c7acdd9_44954731 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="promo-name card-block">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['vouchers']['added'], 'voucher');
$_smarty_tpl->tpl_vars['voucher']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['voucher']->value) {
$_smarty_tpl->tpl_vars['voucher']->do_else = false;
?>
                <li class="cart-summary-line">
                  <span class="label"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['delete_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-voucher"><i class="material-icons">&#xE872;</i></a>
                  <div class="float-xs-right">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['voucher']->value['reduction_formatted'], ENT_QUOTES, 'UTF-8');?>

                  </div>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
          <?php
}
}
/* {/block 'cart_voucher_list'} */
/* {block 'cart_voucher_form'} */
class Block_116382146866a83e7c7b7d85_06480624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="add-voucher" method="post">
              <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
              <input type="hidden" name="addDiscount" value="1">
              <input class="promo-input" type="text" name="discount_name" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Promo code','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
">
              <button type="submit" class="btn btn-primary"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button>
            </form>
          <?php
}
}
/* {/block 'cart_voucher_form'} */
/* {block 'cart_voucher_notifications'} */
class Block_168667496466a83e7c7baee0_06115669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="alert alert-danger js-error" role="alert">
              <i class="material-icons">&#xE001;</i><span class="ml-1 js-error-text"></span>
            </div>
          <?php
}
}
/* {/block 'cart_voucher_notifications'} */
/* {block 'cart_voucher'} */
class Block_86402199966a83e7c7aa128_63597863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_voucher' => 
  array (
    0 => 'Block_86402199966a83e7c7aa128_63597863',
  ),
  'cart_voucher_list' => 
  array (
    0 => 'Block_101890610266a83e7c7acdd9_44954731',
  ),
  'cart_voucher_form' => 
  array (
    0 => 'Block_116382146866a83e7c7b7d85_06480624',
  ),
  'cart_voucher_notifications' => 
  array (
    0 => 'Block_168667496466a83e7c7baee0_06115669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\sanguches\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

    <div class="block-promo">
      <div class="cart-voucher">
        <?php if ($_smarty_tpl->tpl_vars['cart']->value['vouchers']['added']) {?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101890610266a83e7c7acdd9_44954731', 'cart_voucher_list', $this->tplIndex);
?>

        <?php }?>

        <p>
          <a class="collapse-button promo-code-button" data-toggle="collapse" href="#promo-code" aria-expanded="false" aria-controls="promo-code">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a promo code?','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>

          </a>
        </p>

        <div class="promo-code collapse<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?> in<?php }?>" id="promo-code">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116382146866a83e7c7b7d85_06480624', 'cart_voucher_form', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168667496466a83e7c7baee0_06115669', 'cart_voucher_notifications', $this->tplIndex);
?>

        </div>

        <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['cart']->value['discounts']) > 0) {?>
          <p class="block-promo promo-highlighted">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Take advantage of our exclusive offers:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </p>
          <ul class="js-discount card-block promo-discounts">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value['discounts'], 'discount');
$_smarty_tpl->tpl_vars['discount']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['discount']->value) {
$_smarty_tpl->tpl_vars['discount']->do_else = false;
?>
            <li class="cart-summary-line">
              <span class="label"><span class="code"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discount']->value['code'], ENT_QUOTES, 'UTF-8');?>
</span> - <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['discount']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        <?php }?>
      </div>
    </div>
  <?php
}
}
/* {/block 'cart_voucher'} */
}
