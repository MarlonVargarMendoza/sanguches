<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:40:35
  from 'C:\xampp\htdocs\prestashop_intermedio\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a828736d54d3_72849639',
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
function content_66a828736d54d3_72849639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19852494966a828736c93e0_62768395', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_76314770666a828736ca613_43272045 extends Smarty_Internal_Block
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
class Block_203642176266a828736c9c57_64339876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76314770666a828736ca613_43272045', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_179104747066a828736d1fb6_81346913 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_115939928066a828736d2a57_23021981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_189727655566a828736d1799_54261649 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179104747066a828736d1fb6_81346913', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115939928066a828736d2a57_23021981', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_184381592266a828736d4138_70280065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_136366357066a828736d3a59_25605133 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184381592266a828736d4138_70280065', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_19852494966a828736c93e0_62768395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19852494966a828736c93e0_62768395',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_203642176266a828736c9c57_64339876',
  ),
  'page_title' => 
  array (
    0 => 'Block_76314770666a828736ca613_43272045',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_189727655566a828736d1799_54261649',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_179104747066a828736d1fb6_81346913',
  ),
  'page_content' => 
  array (
    0 => 'Block_115939928066a828736d2a57_23021981',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_136366357066a828736d3a59_25605133',
  ),
  'page_footer' => 
  array (
    0 => 'Block_184381592266a828736d4138_70280065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203642176266a828736c9c57_64339876', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189727655566a828736d1799_54261649', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136366357066a828736d3a59_25605133', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
