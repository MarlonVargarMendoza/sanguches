<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:57:27
  from 'C:\xampp\htdocs\prestashop_intermedio\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a82c67701ff7_46919165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3afd2d2de7a0164573334d300d472d0f1852ad12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_intermedio\\themes\\classic\\templates\\page.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a82c67701ff7_46919165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_201954254666a82c676fc1d1_58689863', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_186052083966a82c676fcdd3_95953907 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_97055824466a82c676fc774_68788179 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186052083966a82c676fcdd3_95953907', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_132099892366a82c676ffe13_48225670 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_69574272866a82c677004d2_98647012 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_81151963566a82c676ff947_26329860 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132099892366a82c676ffe13_48225670', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69574272866a82c677004d2_98647012', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_3523756666a82c67701369_62851854 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_56049646366a82c67700f08_57265260 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3523756666a82c67701369_62851854', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_201954254666a82c676fc1d1_58689863 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_201954254666a82c676fc1d1_58689863',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_97055824466a82c676fc774_68788179',
  ),
  'page_title' => 
  array (
    0 => 'Block_186052083966a82c676fcdd3_95953907',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_81151963566a82c676ff947_26329860',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_132099892366a82c676ffe13_48225670',
  ),
  'page_content' => 
  array (
    0 => 'Block_69574272866a82c677004d2_98647012',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_56049646366a82c67700f08_57265260',
  ),
  'page_footer' => 
  array (
    0 => 'Block_3523756666a82c67701369_62851854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97055824466a82c676fc774_68788179', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_81151963566a82c676ff947_26329860', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56049646366a82c67700f08_57265260', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
