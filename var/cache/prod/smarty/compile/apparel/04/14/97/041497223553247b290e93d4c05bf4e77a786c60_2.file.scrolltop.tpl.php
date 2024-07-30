<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:10
  from 'C:\xampp\htdocs\sanguches\modules\ht_scrolltop\views\templates\hook\scrolltop.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b1ac3f3b0_82804594',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '041497223553247b290e93d4c05bf4e77a786c60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\modules\\ht_scrolltop\\views\\templates\\hook\\scrolltop.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b1ac3f3b0_82804594 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="scrollTop" href="#" title="Scroll To Top">
    <span>
        <?php if ((isset($_smarty_tpl->tpl_vars['scroll_text_icon']->value)) && $_smarty_tpl->tpl_vars['scroll_text_icon']->value == 'scroll_icon') {?>
            <i class="fa <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_icon_value']->value, ENT_QUOTES, 'UTF-8');?>
" aria-hidden="true"></i>
        <?php } else { ?>
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_text_value']->value, ENT_QUOTES, 'UTF-8');?>

        <?php }?>
    </span>
</a>
<style>
    .scrollTop {
        bottom: 60px;
        cursor: pointer;
        display: none;
        font-size: 11px;
        font-weight: 600;
        min-height: 45px;
        line-height: 45px;
        padding: 0;
        position: fixed;
        text-align: center;
        text-transform: uppercase;
        width: 45px;
        z-index: 1;
        color: #000000;
        border: 1px solid #e1e1e1;
        background: #ffffff;
        text-decoration: none;
        outline: none;
    }
    .scrollTop:visited, .scrollTop:focus, .scrollTop:active {
        color: #000000;
        border: 1px solid #e1e1e1;
        background: #ffffff;
        text-decoration: none;
        outline: none;
    }
    .scrollTop:hover {
        color: #ffffff;
        border: 1px solid #000000;
        background: #000000;
        text-decoration: none;
        outline: none;
    }
    @media(max-width: 767px) {
        .scrollTop {
            bottom: 30px;
        }
    }
    <?php if ((isset($_smarty_tpl->tpl_vars['scroll_position']->value)) && $_smarty_tpl->tpl_vars['scroll_position']->value == 'scroll_right') {?>
        .scrollTop {
            right: 25px;
        }
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['scroll_position']->value)) && $_smarty_tpl->tpl_vars['scroll_position']->value == 'scroll_left') {?>
        .scrollTop {
            left: 25px;
        }
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['scroll_shape']->value)) && $_smarty_tpl->tpl_vars['scroll_shape']->value == 'scroll_round') {?>
        .scrollTop {
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
        }
    <?php }?>
    .scrollTop {
        <?php if ($_smarty_tpl->tpl_vars['scroll_text_size']->value != '') {?>
            font-size: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_text_size']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_back_color']->value != '') {?>
            background: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_back_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_border_color']->value != '') {?>
            border-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_border_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_text_color']->value != '') {?>
            color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_text_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .scrollTop:visited, .scrollTop:focus, .scrollTop:active{
        <?php if ($_smarty_tpl->tpl_vars['scroll_back_color']->value != '') {?>
            background: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_back_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_border_color']->value != '') {?>
            border-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_border_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_text_color']->value != '') {?>
            color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_text_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }
    .scrollTop:hover {
        <?php if ($_smarty_tpl->tpl_vars['scroll_back_hover_color']->value != '') {?>
            background: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_back_hover_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_border_hover_color']->value != '') {?>
            border-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_border_hover_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_text_hover_color']->value != '') {?>
            color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_text_hover_color']->value, ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
    }

</style>
<?php }
}
