<?php
/* Smarty version 4.3.1, created on 2024-07-29 18:57:28
  from 'C:\xampp\htdocs\prestashop_intermedio\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a82c6832b828_64191018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bad43c47fc48f29945932e18d9f05820ee57c2e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_intermedio\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678742294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a82c6832b828_64191018 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\prestashop_intermedio\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\ba\\d4\\3c\\bad43c47fc48f29945932e18d9f05820ee57c2e2_2.file.helpers.tpl.php',
    'uid' => 'bad43c47fc48f29945932e18d9f05820ee57c2e2',
    'call_name' => 'smarty_template_function_renderLogo_29466826266a82c683235f4_26355667',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_29466826266a82c683235f4_26355667 */
if (!function_exists('smarty_template_function_renderLogo_29466826266a82c683235f4_26355667')) {
function smarty_template_function_renderLogo_29466826266a82c683235f4_26355667(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_29466826266a82c683235f4_26355667 */
}
