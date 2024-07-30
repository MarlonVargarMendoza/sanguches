<?php
/* Smarty version 4.3.1, created on 2024-07-29 19:29:20
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a833e05dc0e7_05427202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a833e05dc0e7_05427202 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_user_info">
    <div class="user-info">
        <span id="header-menu-btn" class="tog-icon-block hidden-sm-down">
            <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
            <i class="fa fa-angle-down" aria-hidden="true"></i>
        </span>
        <span class="hidden-md-up user-info-icon">
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <li class="user-link">
                    <a
                        class="account"
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                        rel="nofollow"
                        >
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </a>
                </li>
            <?php } else { ?>
                <li class="user-link">
                    <a
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                        rel="nofollow"
                        >
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
        </span>
        <ul style="display: none;" id="header-menu-content" class="header-menu-links">
            <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                <li class="user-link">
                    <a
                        class="account"
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                        rel="nofollow"
                        >
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span class="hidden-sm-down"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </a>
                </li>
                <li class="user-link">
                    <a
                        class="logout hidden-sm-down"
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        rel="nofollow"
                        >
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php } else { ?>
                <li class="user-link">
                    <a
                        class="register"
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New account registration','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                        rel="nofollow"
                        >
                        <i class="fa fa-user-plus" aria-hidden="true"></i>
                        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create an Account','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
                <li class="user-link">
                    <a
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
                        rel="nofollow"
                        >
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                        <span class="hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign In','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
                    </a>
                </li>
            <?php }?>
        </ul>
    </div>
</div><?php }
}
