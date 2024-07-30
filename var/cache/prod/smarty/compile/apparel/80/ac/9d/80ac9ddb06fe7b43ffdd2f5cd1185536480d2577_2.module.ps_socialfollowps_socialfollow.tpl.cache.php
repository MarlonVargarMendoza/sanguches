<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:09
  from 'module:ps_socialfollowps_socialfollow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b19ce0801_46919803',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollowps_socialfollow.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b19ce0801_46919803 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '88874627266a83b19cd3b19_44472417';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201264114666a83b19cd5794_36168789', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_201264114666a83b19cd5794_36168789 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_201264114666a83b19cd5794_36168789',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="footer-socials col-lg-3 col-md-3 col-sm-12">
        <div class="content-block">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
                    <li>
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank">
                            <i class="fa fa-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></i>
                        </a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    </div>
<?php
}
}
/* {/block 'block_social'} */
}
