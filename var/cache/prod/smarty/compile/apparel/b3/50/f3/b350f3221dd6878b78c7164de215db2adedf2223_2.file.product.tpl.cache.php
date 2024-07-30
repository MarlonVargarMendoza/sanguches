<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:02
  from 'C:\xampp\htdocs\sanguches\themes\apparel\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b12d6ba23_54626089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b350f3221dd6878b78c7164de215db2adedf2223' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/customize/add-to-cart-btn.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_66a83b12d6ba23_54626089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '189514660266a83b12d5a4a0_38161524';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165148294766a83b12d5d759_14484250', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_189644878066a83b12d5e8f8_16422829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                        <div class="product-image-block">
                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                                <img
                                    src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                                    data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    >
                            </a>
                        </div>
                    <?php } else { ?>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                            <img
                                src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                >
                        </a>
                    <?php }?>
                <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_168361783966a83b12d64ed2_90455472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <ul class="product-flags">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
                            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_130407389066a83b12d66114_32885876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <div class="quick-view-btn">
                                <a class="btn btn-primary quick-view" href="#" data-link-action="quickview">
                                    <span>
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </span>
                                </a>
                            </div>
                        <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_name'} */
class Block_145110787866a83b12d66780_63871503 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
                        <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
                        <?php } else { ?>
                        <h2 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h2>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_variants'} */
class Block_186649906866a83b12d67e91_47566853 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
                    <?php }?>
                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_price_and_shipping'} */
class Block_137909514566a83b12d68952_22333891 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                        <div class="product-price-and-shipping">
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


                                <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                                <span class="regular-price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


                            <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
                            <span itemprop="price" class="price"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_reviews'} */
class Block_146053396866a83b12d6b279_98497140 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
class Block_165148294766a83b12d5d759_14484250 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_165148294766a83b12d5d759_14484250',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_189644878066a83b12d5e8f8_16422829',
  ),
  'product_flags' => 
  array (
    0 => 'Block_168361783966a83b12d64ed2_90455472',
  ),
  'quick_view' => 
  array (
    0 => 'Block_130407389066a83b12d66114_32885876',
  ),
  'product_name' => 
  array (
    0 => 'Block_145110787866a83b12d66780_63871503',
  ),
  'product_variants' => 
  array (
    0 => 'Block_186649906866a83b12d67e91_47566853',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_137909514566a83b12d68952_22333891',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_146053396866a83b12d6b279_98497140',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-item">
        <article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
            <div class="thumbnail-container">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189644878066a83b12d5e8f8_16422829', 'product_thumbnail', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168361783966a83b12d64ed2_90455472', 'product_flags', $this->tplIndex);
?>


                <div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?>">
                    <div class="product-action">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130407389066a83b12d66114_32885876', 'quick_view', $this->tplIndex);
?>

                        <div class="cart-action-btn">
                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/customize/add-to-cart-btn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, false);
?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="product-description">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145110787866a83b12d66780_63871503', 'product_name', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186649906866a83b12d67e91_47566853', 'product_variants', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137909514566a83b12d68952_22333891', 'product_price_and_shipping', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146053396866a83b12d6b279_98497140', 'product_reviews', $this->tplIndex);
?>

            </div>   
        </article>
    </div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
