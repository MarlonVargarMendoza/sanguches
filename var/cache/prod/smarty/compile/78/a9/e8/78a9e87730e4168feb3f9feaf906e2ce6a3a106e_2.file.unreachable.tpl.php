<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:14:57
  from 'C:\xampp\htdocs\sanguches\themes\apparel\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83e913192f0_89720926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78a9e87730e4168feb3f9feaf906e2ce6a3a106e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83e913192f0_89720926 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72249341366a83e91317e88_09175699', 'step');
?>

<?php }
/* {block 'step'} */
class Block_72249341366a83e91317e88_09175699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_72249341366a83e91317e88_09175699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title h3">
      <span class="step-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
