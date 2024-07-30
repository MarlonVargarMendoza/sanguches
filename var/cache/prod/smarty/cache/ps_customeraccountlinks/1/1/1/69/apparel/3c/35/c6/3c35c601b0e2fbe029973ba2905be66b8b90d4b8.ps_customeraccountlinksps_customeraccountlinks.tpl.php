<?php
/* Smarty version 4.3.1, created on 2024-07-29 20:00:10
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a83b1a8aa8c0_93737120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1722299258,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_66a83b1a8aa8c0_93737120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
    <div class="column-title hidden-sm-down">
        <span>
            Su cuenta
        </span>
    </div>
    <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
        <span>Su cuenta</span>
        <span class="float-xs-right icon">
            <span class="navbar-toggler collapse-icons">
                <i class="fa fa-angle-down add" aria-hidden="true"></i>
                <i class="fa fa-angle-up remove" aria-hidden="true"></i>
            </span>
        </span>
    </div>
    <ul class="footer-column-content collapse footer-links" id="footer_account_list">
                    <li>
                <a href="http://localhost/sanguches/es/datos-personales" title="Información personal" rel="nofollow">
                    Información personal
                </a>
            </li>
                    <li>
                <a href="http://localhost/sanguches/es/historial-compra" title="Pedidos" rel="nofollow">
                    Pedidos
                </a>
            </li>
                    <li>
                <a href="http://localhost/sanguches/es/facturas-abono" title="Facturas por abono" rel="nofollow">
                    Facturas por abono
                </a>
            </li>
                    <li>
                <a href="http://localhost/sanguches/es/direcciones" title="Direcciones" rel="nofollow">
                    Direcciones
                </a>
            </li>
                <li>
  <a href="//localhost/sanguches/es/module/ps_emailalerts/account" title="Mis alertas">
    Mis alertas
  </a>
</li>

    </ul>
</div><?php }
}
