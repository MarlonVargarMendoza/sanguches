<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:09
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b19a19b22_71003139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a83b19a19b22_71003139 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="newsletter" class="col-md-9 newsletter-block">
    <div class="newsletter-title col-md-3">
        <span>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Newsletter','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </span>
    </div>
    <div class="block newsletter col-md-9">
        <div class="content">
            <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post" class="form subscribe">
                <div class="field newsletter">
                    <div class="content-inner">
                        <div class="actions">
                            <input class="btn btn-primary float-xs-right hidden-xs-down" name="submitNewsletter"
                                type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                        </div>
                        <input class="btn btn-primary float-xs-right hidden-sm-up" name="submitNewsletter" type="submit"
                            value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                        <div class="input-wrapper">
                            <input name="email" type="email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                                aria-labelledby="block-newsletter-label" required>
                        </div>
                        <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        <input type="hidden" name="action" value="0">
                        <div class="clearfix"></div>
                    </div>
                    <div class="content-inner">
                        <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
                            <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                            <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                            </p>
                        <?php }?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewsletterRegistration'),$_smarty_tpl ) );?>

                        <?php if ((isset($_smarty_tpl->tpl_vars['id_module']->value))) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>

                        <?php }?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><?php }
}
