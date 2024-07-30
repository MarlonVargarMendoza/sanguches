<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:08
  from 'module:ps_imagesliderviewstemplateshookslider.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b18215195_31551036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:ps_imagesliderviewstemplateshookslider.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b18215195_31551036 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '40283001466a83b1820c0c8_87709645';
if ($_smarty_tpl->tpl_vars['homeslider']->value['slides']) {?>
    <div id="carousel" data-ride="carousel" class="carousel slide home-image-slider" data-interval="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-wrap="<?php echo htmlspecialchars((string) (string)$_smarty_tpl->tpl_vars['homeslider']->value['wrap'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['homeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="image-slider">
            <ul class="carousel-inner" role="listbox">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['homeslider']->value['slides'], 'slide', false, NULL, 'homeslider', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['slide']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['index'];
?>
                    <li class="carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?>active<?php }?>" role="option" aria-hidden="<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_homeslider']->value['first'] : null)) {?>false<?php } else { ?>true<?php }?>">
                        <div class="slider-image" style="background: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
) center center no-repeat; background-size: cover;">
                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
                                <figure>
                                    <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slide']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
">
                                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['title'] || $_smarty_tpl->tpl_vars['slide']->value['description']) {?>
                                        <figcaption class="caption">
                                            <h2 class="display-1 text-uppercase"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2>
                                            <div class="caption-description">
                                                <?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

                                            </div>
                                        </figcaption>
                                    <?php }?>
                                </figure>
                            </a>
                        </div>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div class="direction" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carousel buttons','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="icon-prev hidden-xs" aria-hidden="true">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>

                    </span>
                    <span class="sr-only"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
                </a>
            </div>
        </div>
    </div>
<?php }
}
}
