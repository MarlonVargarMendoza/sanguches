<?php
/* Smarty version 4.3.1, created on 2024-07-29 19:29:24
  from 'C:\xampp\htdocs\sanguches\modules\ht_googleanalytics\views\templates\hook\ht_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_66a833e4ae7ec0_19143486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a625b4ef775b9701aab512c3964e08397a388e56' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sanguches\\modules\\ht_googleanalytics\\views\\templates\\hook\\ht_googleanalytics.tpl',
      1 => 1722299258,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a833e4ae7ec0_19143486 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['ga_enable']->value)) && $_smarty_tpl->tpl_vars['ga_enable']->value == 'ga_yes') {?>
    <?php echo '<script'; ?>
>
        
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        
            ga('create', '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ga_google_tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'auto');
            ga('send', 'pageview');
    <?php echo '</script'; ?>
>
<?php }
}
}
