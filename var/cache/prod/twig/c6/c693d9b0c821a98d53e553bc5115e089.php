<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__d277262e9dd65420629f5a41c6dd8c33 */
class __TwigTemplate_9adcd154b920d9567ac9d65e4628b31c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/sanguches/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/sanguches/img/app_icon.png\" />

<title>Preferencias • sanguches</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPreferences';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer este mensaje';
    var token = '7a4f151ff287ec781b8f7e689ec760ce';
    var currentIndex = 'index.php?controller=AdminPreferences';
    var employee_token = '697fc0425534aeea1da797621339c4ad';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/sanguches/sangucheadmin/index.php/improve/modules/manage?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw';
    var admin_notification_get_link = '/sanguches/sangucheadmin/index.php/common/notifications?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw';
    var admin_notification_push_link = adminNotificationPushLink = '/sanguches/sangucheadmin/index.php/common/notifications/ack?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw';
    var tab_modules_list = '';
    var update_success_m";
        // line 42
        echo "sg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/sanguches/sangucheadmin/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/sanguches/sangucheadmin/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/sangucheadmin/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/sangucheadmin/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sanguches/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/sanguches\\/sangucheadmin\\/\";
var baseDir = \"\\/sanguches\\/\";
var changeFormLanguageUrl = \"\\/sanguches\\/sangucheadmin\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\";
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Peso colombiano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",";
        // line 71
        echo "\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/sanguches/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/sangucheadmin/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/sanguches/sangucheadmin/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/sanguches/sangucheadmin/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/js/vendor/d3.v3.mi";
        // line 89
        echo "n.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/sangucheadmin/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.4\"></script>
<script type=\"text/javascript\" src=\"/sanguches/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/sanguches/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/sanguches\\/sangucheadmin\\/index.php?controller=AdminGamification&token=005c32bef863b73234cde2422ccb3db6\";
            var current_id_tab = 73;
        </script><script type=\"module\" src=\"/sanguches/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'es';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/sanguches/sangucheadmin/index.php/common/notifications?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 119
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminpreferences\"
  data-base-url=\"/sanguches/sangucheadmin/index.php\"  data-token=\"-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/sanguches/sangucheadmin/index.php/modules/pseditionbasic/homepage?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=263b6c5cadba50acb2917a91cbc310b0\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/sanguches/sangucheadmin/index.php/improve/modules/manage?token=5974b8e1466587ac411e34af9dc16952\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/sanguches/sangucheadmin/index.php/sell/catalog/categories/new?token=5974b8e1466587ac411e34af9dc16952\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/sanguches/sangucheadmin/index.php/sell/catalog/products-v2/create?token=5974b8e1466587ac411e34af9dc16952\"
                 data-item=\"Nu";
        // line 154
        echo "evo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=55d54a5993f54c76a9e4e7cec60388b8\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/sanguches/sangucheadmin/index.php/sell/orders?token=5974b8e1466587ac411e34af9dc16952\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"176\"
        data-icon=\"icon-AdminParentPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/preferences/preferences?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"
        data-post-link=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminQuickAccesses&token=1d2c005763340cd9393d80862d24de6a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Configuraci&oacute;n - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminQuickAccesses&token=1d2c005763340cd9393d80862d24de6a\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/sanguches/sangucheadmin/index.php?controller=AdminSearch&amp;token=3d579daa2acc7b19e190b055c8b699fd\"
      role=\"";
        // line 193
        echo "search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder";
        // line 209
        echo "=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=263b6c5cadba50acb2917a91cbc310b0\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sanguches/sangucheadmin/index.php/improve/modules/manage?token=5974b8e1466587ac411e34af9dc16952\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sanguches/sangucheadmin/index.php/sell/catalog/categories/new?token=5974b8e1466587ac411e34af9dc16952\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sanguches/sangucheadmin/index.php/sell/catalog/products-v2/create?token=5974b8e1466587ac411e34af9dc16952\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=Ad";
        // line 246
        echo "minCartRules&amp;addcart_rule&amp;token=55d54a5993f54c76a9e4e7cec60388b8\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sanguches/sangucheadmin/index.php/sell/orders?token=5974b8e1466587ac411e34af9dc16952\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"120\"
      data-icon=\"icon-AdminParentPreferences\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/preferences/preferences?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"
      data-post-link=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminQuickAccesses&token=1d2c005763340cd9393d80862d24de6a\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Configuraci&oacute;n - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminQuickAccesses&token=1d2c005763340cd9393d80862d24de6a\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access ";
        // line 289
        echo "your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/sanguches/sangucheadmin/index.php/configure/shop/maintenance/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modo mantenimiento</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/sanguches/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"><";
        // line 334
        echo "/span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e931a908d166e5da9fc97e6dfd5a2737\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
      ";
        // line 381
        echo "        No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/sanguches/img/pr/default.jpg\" alt=\"Ander\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Ander</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/sanguches/sangucheadmin/index.php/configure/advanced/employees/1/edit?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
   ";
        // line 430
        echo " </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestione tu cuenta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-es&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-es&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/sanguches/sangucheadmin/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=HnCCTCtIzxv4QwkTvutv2Ofg11li3qI_Ps-kW_PrYvg&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-es&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-es&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
     ";
        // line 451
        echo "       
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminLogin&amp;logout=1&amp;token=0fb816f7d465c7a40998f8937f3f0d1d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/sanguches/sangucheadmin/index.php/configure/advanced/employees/toggle-navigation?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/sanguches/sangucheadmin/index.php/modules/pseditionbasic/homepage?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"151\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/sanguches/sangucheadmin/index.php/modules/pseditionbasic/homepage?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-ar";
        // line 494
        echo "row\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminDashboard&amp;token=61ac6d6f49c642f69866acb01f71f850\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Inicio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/sanguches/sangucheadmin/index.php/sell/orders/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                 ";
        // line 534
        echo "                                   <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/orders/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/orders/invoices/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/orders/credit-slips/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
    ";
        // line 564
        echo "                          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/orders/delivery-slips/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCarts&amp;token=e931a908d166e5da9fc97e6dfd5a2737\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/sanguches/sangucheadmin/index.php/sell/catalog/products?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                               ";
        // line 595
        echo "               <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/catalog/products?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/catalog/categories?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/catalog/monitoring/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.ph";
        // line 624
        echo "p?controller=AdminAttributesGroups&amp;token=e4c7f2903b46f90836f46f34294b96b1\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/catalog/brands/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/attachments/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCartRules&amp;token=55d54a5993f54c76a9e4e7cec60388b8\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 655
        echo "            <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/stocks/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/sanguches/sangucheadmin/index.php/sell/customers/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/customers/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
         ";
        // line 686
        echo "                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/addresses/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCustomerThreads&amp;token=bdc023bc3f4ca9f343b79aa3bb307d07\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCustomerThreads&amp;token=bdc023bc3f4ca";
        // line 714
        echo "9f343b79aa3bb307d07\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/sanguches/sangucheadmin/index.php/sell/customer-service/order-messages/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminReturn&amp;token=979965d00034e33e023bc33f4dc72a0e\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/sanguches/sangucheadmin/index.php/modules/metrics/legacy/stats?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material";
        // line 746
        echo "-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/sanguches/sangucheadmin/index.php/modules/metrics/legacy/stats?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/sanguches/sangucheadmin/index.php/modules/metrics?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-subme";
        // line 783
        echo "nu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/sanguches/sangucheadmin/index.php/modules/mbo/modules/catalog/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/sanguches/sangucheadmin/index.php/modules/mbo/modules/catalog/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/modules/manage?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                          ";
        // line 810
        echo "                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=259ca7c205a0d47370dac47da8af92b3\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=259ca7c205a0d47370dac47da8af92b3\" class=\"link\"> Modulos del tema
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/sanguches/sangucheadmin/index.php/modules/mbo";
        // line 839
        echo "/themes/catalog/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/sanguches/sangucheadmin/index.php/modules/improve/design/themes?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Personalización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/design/mail_theme/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/design/cms-pages/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li cla";
        // line 870
        echo "ss=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/design/modules/positions/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminImages&amp;token=84f2de7dc96da2f309abb278b53485cc\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/sanguches/sangucheadmin/index.php/modules/link-widget/list?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCarriers&amp;token=66226dc29513d9abf65ccd88b9305e91\" class=\"link\">
                      <i class=\"material-icons m";
        // line 899
        echo "i-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminCarriers&amp;token=66226dc29513d9abf65ccd88b9305e91\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/shipping/preferences/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminMbeConfiguration&amp;token=40f9127dc";
        // line 928
        echo "d909e00a4866d3c68458987\" class=\"link\"> MBE - Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminMbeShipping&amp;token=7e322be84144900060d6bcb82b566ec3\" class=\"link\"> MBE - Listado de envíos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/sanguches/sangucheadmin/index.php/improve/payment/payment_methods?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                  ";
        // line 960
        echo "            <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/payment/payment_methods?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/payment/preferences?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/sanguches/sangucheadmin/index.php/improve/international/localization/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
     ";
        // line 990
        echo "                                                 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/international/localization/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/international/zones/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/international/taxes/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/sanguches/sangucheadmin/index.php/improve/international/translations/set";
        // line 1018
        echo "tings?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"141\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=13a81037b6a8853a7304467a95ba49ee\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-141\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=13a81037b6a8853a7304467a95ba49ee\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                         ";
        // line 1050
        echo "     <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminPsfacebookModule&amp;token=1cdd5450ad92f0db84676cbdc8faaef1\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/sanguches/sangucheadmin/index.php/modules/pseditionbasic/settings?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Ajustes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopPar";
        // line 1086
        echo "ameters\">
                    <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/preferences/preferences?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/preferences/preferences?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/order-preferences/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                              ";
        // line 1115
        echo "                              
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/product-preferences/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/customer-preferences/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/contacts/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/seo-urls/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Tráfico &amp; SEO
                 ";
        // line 1142
        echo "               </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminSearchConf&amp;token=f63d8f78bf8ba5bb59b9e2a510d362c1\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/system-information/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
   ";
        // line 1174
        echo "                             <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/system-information/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/performance/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/administration/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/emails/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
       ";
        // line 1204
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/import/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/employees/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/sql-requests/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/logs/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Registros/Logs
                                </a>
                   ";
        // line 1232
        echo "           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/webservice-keys/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/feature-flags/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/sanguches/sangucheadmin/index.php/configure/advanced/security/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                        ";
        // line 1260
        echo "      
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/sanguches/sangucheadmin/index.php?controller=AdminKlaviyoPsConfig&amp;token=ff6fa513b98c5117a40df7d531a392d9\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Configuración</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Preferencias          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/sanguches/sangucheadmin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminPreferences%253Fversion%253D8.1.2%2526country%253Des/Ayuda?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"
                   id=\"product_form_open";
        // line 1313
        echo "_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class=\"nav-item\">
                    <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/preferences/preferences?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" id=\"subtab-AdminPreferences\" class=\"nav-link tab active current\" data-submenu=\"73\">
                      Configuración
                      <span class=\"notification";
        // line 1330
        echo "-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/sanguches/sangucheadmin/index.php/configure/shop/maintenance/?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" id=\"subtab-AdminMaintenance\" class=\"nav-link tab \" data-submenu=\"74\">
                      Mantenimiento
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/sanguches/sangucheadmin/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminPreferences%253Fversion%253D8.1.2%2526country%253Des/Ayuda?_to";
        // line 1358
        echo "ken=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1379
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"/sanguches/sangucheadmin/index.php/modules/pseditionbasic/homepage?_token=-YssmrYXnY_qPh_vHJeAlW1aDsKga9-yy8iBZPawcmw\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1413
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 119
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1379
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1413
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__d277262e9dd65420629f5a41c6dd8c33";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1594 => 1413,  1573 => 1379,  1562 => 119,  1553 => 1413,  1513 => 1379,  1490 => 1358,  1460 => 1330,  1441 => 1313,  1386 => 1260,  1356 => 1232,  1326 => 1204,  1294 => 1174,  1260 => 1142,  1231 => 1115,  1200 => 1086,  1162 => 1050,  1128 => 1018,  1098 => 990,  1066 => 960,  1032 => 928,  1001 => 899,  970 => 870,  937 => 839,  906 => 810,  877 => 783,  838 => 746,  804 => 714,  774 => 686,  741 => 655,  708 => 624,  677 => 595,  644 => 564,  612 => 534,  570 => 494,  525 => 451,  502 => 430,  451 => 381,  402 => 334,  355 => 289,  310 => 246,  271 => 209,  253 => 193,  212 => 154,  172 => 119,  140 => 89,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d277262e9dd65420629f5a41c6dd8c33", "");
    }
}
