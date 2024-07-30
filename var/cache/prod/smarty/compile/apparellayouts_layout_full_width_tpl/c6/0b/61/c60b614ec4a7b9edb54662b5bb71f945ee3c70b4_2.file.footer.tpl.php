<?php
/* Smarty version 4.3.1, created on 2024-07-29 19:29:23
  from 'C:\xampp\htdocs\sanguches\themes\apparel\templates\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a833e31e8f00_36344720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c60b614ec4a7b9edb54662b5bb71f945ee3c70b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\templates\\_partials\\footer.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a833e31e8f00_36344720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div class="footer-before">
    <div class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210000125666a833e31d2c26_55074237', 'hook_footer_before');
?>

    </div>
</div>
<div class="footer-container">
    <div class="container">
        <div class="row">
            <div class="footer-top">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160951914366a833e31d5b30_09343829', 'hook_footer');
?>

            </div>
        </div>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36455691266a833e31d8649_46041105', 'hook_footer_after');
?>

    </div>
</div>
<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom-inner">
            <p class="copyright">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99951235266a833e31ddd83_51853390', 'copyright_link');
?>

            </p>
        </div>
    </div>
</div><?php }
/* {block 'hook_footer_before'} */
class Block_210000125666a833e31d2c26_55074237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_210000125666a833e31d2c26_55074237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_160951914366a833e31d5b30_09343829 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_160951914366a833e31d5b30_09343829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_36455691266a833e31d8649_46041105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_36455691266a833e31d8649_46041105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_footer_after'} */
/* {block 'copyright_link'} */
class Block_99951235266a833e31ddd83_51853390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_99951235266a833e31ddd83_51853390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <a class="_blank" href="http://www.prestashop.com" target="_blank">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'date' ][ 0 ], array( 'Y' )),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

                    </a>
                <?php
}
}
/* {/block 'copyright_link'} */
}
