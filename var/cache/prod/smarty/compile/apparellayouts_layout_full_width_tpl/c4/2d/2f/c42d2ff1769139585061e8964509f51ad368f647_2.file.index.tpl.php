<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:04
  from 'C:\xampp\htdocs\sanguches\themes\apparel\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b142c4601_73764607',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c42d2ff1769139585061e8964509f51ad368f647' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\themes\\apparel\\templates\\index.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b142c4601_73764607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114556485666a83b142c1415_27451100', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_142530822366a83b142c1ad3_49043348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_135577601766a83b142c2a45_24680501 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_97326091866a83b142c2527_75992152 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135577601766a83b142c2a45_24680501', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_114556485666a83b142c1415_27451100 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_114556485666a83b142c1415_27451100',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_142530822366a83b142c1ad3_49043348',
  ),
  'page_content' => 
  array (
    0 => 'Block_97326091866a83b142c2527_75992152',
  ),
  'hook_home' => 
  array (
    0 => 'Block_135577601766a83b142c2a45_24680501',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142530822366a83b142c1ad3_49043348', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97326091866a83b142c2527_75992152', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
