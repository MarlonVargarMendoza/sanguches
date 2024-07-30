<?php
<<<<<<< HEAD
/* Smarty version 4.3.1, created on 2024-07-29 20:14:10
=======
/* Smarty version 4.3.1, created on 2024-07-29 18:42:33
>>>>>>> 1030b1a5cf19101fc673f98e6c6ac1410d6cea73
  from 'module:productcommentsviewstemplateshookaveragegradestars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
<<<<<<< HEAD
  'unifunc' => 'content_66a83e62f1b998_53102901',
=======
  'unifunc' => 'content_66a828e98198b5_37688138',
>>>>>>> 1030b1a5cf19101fc673f98e6c6ac1410d6cea73
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03235412c82fe3af55539163b9c3686a7a1ffea4' => 
    array (
      0 => 'module:productcommentsviewstemplateshookaveragegradestars.tpl',
      1 => 1693383296,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
<<<<<<< HEAD
function content_66a83e62f1b998_53102901 (Smarty_Internal_Template $_smarty_tpl) {
=======
function content_66a828e98198b5_37688138 (Smarty_Internal_Template $_smarty_tpl) {
>>>>>>> 1030b1a5cf19101fc673f98e6c6ac1410d6cea73
if ($_smarty_tpl->tpl_vars['nb_comments']->value != 0) {?>
  <div class="comments-note">
    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Grade','d'=>'Modules.Productcomments.Shop'),$_smarty_tpl ) );?>
</span>
    <div class="grade-stars" data-grade="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['grade']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
  </div>
<?php }
}
}
