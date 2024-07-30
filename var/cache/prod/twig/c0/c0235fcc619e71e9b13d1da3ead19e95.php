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

/* __string_template__5a0db2d0db11ac237c94cf2834e30fe9 */
class __TwigTemplate_a1beb841aa560535d1a051c502579e3d extends Template
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
<html lang=\"cb\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_intermedio/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_intermedio/img/app_icon.png\" />

<title>Home • sanduches</title>

  <script type=\"text/javascript\">
    var help_class_name = 'HOME';
    var iso_user = 'cb';
    var lang_is_rtl = '0';
    var full_language_code = 'es-co';
    var full_cldr_language_code = 'es-CO';
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
    var token = '9c5067db8915d391ac28409670d19fd2';
    var currentIndex = 'index.php?controller=HOME';
    var employee_token = 'd8cf658bd8e0c78b4b241a5a2d0488bf';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE';
    var admin_notification_get_link = '/prestashop_intermedio/adminMarlon/index.php/common/notifications?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_intermedio/adminMarlon/index.php/common/notifications/ack?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE';
    var tab_modules_list = '';
    ";
        // line 42
        echo "var update_success_msg = 'Actualización exitosa';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/adminMarlon/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.f8a9f5f9.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_intermedio/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_intermedio\\/adminMarlon\\/\";
var baseDir = \"\\/prestashop_intermedio\\/\";
var changeFormLanguageUrl = \"\\/prestashop_intermedio\\/adminMarlon\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hd";
        // line 69
        echo "TcggGTnw0_NcZE\";
var contextPsAccounts = {\"currentContext\":{\"type\":1,\"id\":1},\"psxName\":\"ps_edition_basic\",\"psIs17\":true,\"psAccountsVersion\":\"7.0.3\",\"psAccountsIsInstalled\":true,\"psAccountsInstallLink\":null,\"psAccountsIsEnabled\":true,\"psAccountsEnableLink\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_accounts?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\",\"psAccountsIsUptodate\":true,\"psAccountsUpdateLink\":null,\"user\":{\"uuid\":null,\"email\":null,\"emailIsValidated\":false,\"isSuperAdmin\":true},\"backendUser\":{\"email\":\"andercraker@gmail.com\",\"employeeId\":1,\"isSuperAdmin\":true},\"currentShop\":{\"id\":\"1\",\"name\":\"sanduches\",\"domain\":\"127.0.0.1\",\"domainSsl\":\"127.0.0.1\",\"physicalUri\":\"\\/prestashop_intermedio\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/127.0.0.1\\/prestashop_intermedio\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAK185vJPETBqGkH2\\/+NoHBvOZ0aoXzSJMKLUm6QlOQxt88g8lLN\\/Zcf8\\r\\nwcRexlgoLRAhEvaGUI09\\/PzcxDt0XgIEu+kL5FrRvZ9MFwYGDuz3Nu\\/rtcHI2Kvm\\r\\nHlIl5FwQYgl5l9FOXFZXKlGHm99xB2UzLwtxpP48+A+AQdCFN3vlAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=b1e80a0faedc51350fa8aee7b9099d2b\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.2\"},\"isShopContext\":true,\"superAdminEmail\":\"andercraker@gmail.com\",\"onboardingLink\":\"https:\\/\\/accounts.distribution.prestashop.net?shops=W3siaWQiOiIxIiwibmFtZSI6InNhbmR1Y2hlcyIsImRvbWFpbiI6IjEyNy4wLjAuMSIsImRvbWFpblNzbCI6IjEyNy4wLjAuMSIsInBoeXNpY2FsVXJpIjoiXC9wcmVzdGFzaG9wX2ludGVybWVkaW9cLyIsInZpcnR1YWxVcmkiOiIiLCJmcm9udFVybCI6Imh0dHBzOlwvXC8xMjcuMC4wLjFcL3ByZXN0YXNob3BfaW50ZXJtZWRpb1wvIiwidXVpZCI6bnVsbCwicHVibGljS2V5IjoiLS0tLS1CRUdJTiBSU0EgUFVCTElDIEtFWS0tLS0tXHJcbk1JR0pBb0dCQUsxOD";
        // line 70
        echo "V2SlBFVEJxR2tIMlwvK05vSEJ2T1owYW9YelNKTUtMVW02UWxPUXh0ODhnOGxMTlwvWmNmOFxyXG53Y1JleGxnb0xSQWhFdmFHVUkwOVwvUHpjeER0MFhnSUV1K2tMNUZyUnZaOU1Gd1lHRHV6M051XC9ydGNISTJLdm1cclxuSGxJbDVGd1FZZ2w1bDlGT1hGWlhLbEdIbTk5eEIyVXpMd3R4cFA0OCtBK0FRZENGTjN2bEFnTUJBQUU9XHJcbi0tLS0tRU5EIFJTQSBQVUJMSUMgS0VZLS0tLS0iLCJlbXBsb3llZUlkIjoiMSIsInVzZXIiOnsiZW1haWwiOm51bGwsImVtYWlsSXNWYWxpZGF0ZWQiOmZhbHNlLCJ1dWlkIjpudWxsfSwidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xXC9wcmVzdGFzaG9wX2ludGVybWVkaW9cL2FkbWluTWFybG9uXC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX2VkaXRpb25fYmFzaWMmc2V0U2hvcENvbnRleHQ9cy0xJnRva2VuPWIxZTgwYTBmYWVkYzUxMzUwZmE4YWVlN2I5MDk5ZDJiIiwiaXNMaW5rZWRWNCI6ZmFsc2UsInVubGlua2VkQXV0byI6ZmFsc2UsIm11bHRpc2hvcCI6ZmFsc2UsIm1vZHVsZU5hbWUiOiJwc19lZGl0aW9uX2Jhc2ljIiwicHNWZXJzaW9uIjoiOC4xLjIifV0=\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=cb\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"sanduches\",\"domain\":\"127.0.0.1\",\"domainSsl\":\"127.0.0.1\",\"physicalUri\":\"\\/prestashop_intermedio\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/127.0.0.1\\/prestashop_intermedio\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAK185vJPETBqGkH2\\/+NoHBvOZ0aoXzSJMKLUm6QlOQxt88g8lLN\\/Zcf8\\r\\nwcRexlgoLRAhEvaGUI09\\/PzcxDt0XgIEu+kL5FrRvZ9MFwYGDuz3Nu\\/rtcHI2Kvm\\r\\nHlIl5FwQYgl5l9FOXFZXKlGHm99xB2UzLwtxpP48+A+AQdCFN3vlAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=b1e80a0faedc51350fa8aee7b9099d2b\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.2\",\"moduleVersion\":\"7.0.3\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.2\"}],\"adminAjaxLink\":\"http:\\/\\/1";
        echo "27.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php?controller=AdminAjaxPsAccounts&ajax=1&token=17440c62d5983e17fc183b4619388e94\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"}}};
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Peso colombiano\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4\\u00a0#,##0.00\",\"negativePattern\":\"-\\u00a4\\u00a0#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pres";
        // line 82
        echo "tashop_intermedio/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/js/admin.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/js/tools.js?v=8.1.2\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/adminMarlon/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/ps_mbo/views/js/recommended-modules.js?v=4.11.4\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php?controller=AdminGamification&token=83acd042dd0e339257aaa5247d96270e\";
            var current_id_tab = 151;
        </script><script type=\"module\" src=\"/prestashop_intermedio/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'cb';
        window.userflow_id =";
        // line 103
        echo " 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_intermedio/adminMarlon/index.php/common/notifications?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 120
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-cb home\"
  data-base-url=\"/prestashop_intermedio/adminMarlon/index.php\"  data-token=\"qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"></a>
      <span id=\"shop_version\">8.1.2</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=25712812e03dbe85f71af5a2695ccb54\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/categories/new?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1f3bf451ec51b3df561";
        // line 154
        echo "299cbebb49e01\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products-v2/create?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"Nuevo producto\"
      >Nuevo producto</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/orders?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"59\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/homepage?&-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"
        data-post-link=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Welcome - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\">
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
      action=\"/prestashop_intermedio/adminMarlon/index.php?controller=AdminSearc";
        // line 193
        echo "h&amp;token=0b8c63787a9e450c497e5af369cb5463\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué busca?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Ca";
        // line 210
        echo "rritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
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
  <p class=\"component-search-title\">Acceso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=25712812e03dbe85f71af5a2695ccb54\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/categories/new?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1f3bf451ec51b3df561299cbebb49e01\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cup�";
        // line 245
        echo "�n de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products-v2/create?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"Nuevo producto\"
    >Nuevo producto</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/orders?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"93\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/homepage?&-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"
      data-post-link=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Welcome - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\">
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
          &lt;p ";
        // line 289
        echo "class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/maintenance/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modo de mantenimiento</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://127.0.0.1/prestashop_intermedio/\" target= \"_blank\">
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
              href=";
        // line 332
        echo "\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
              ¿Has revisado tus <strong><a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=35a67e651d2b95763f4a21dc093e769c\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
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
                                  ";
        // line 380
        echo "  <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://127.0.0.1/prestashop_intermedio/img/pr/default.jpg\" alt=\"Ander\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Ander</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced";
        // line 428
        echo "/employees/1/edit?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=127.0.0.1&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-cb&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-cb&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop_intermedio/adminMarlon/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-cb&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-cb&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopen";
        // line 448
        echo "er noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminLogin&amp;logout=1&amp;token=8d70ce851613a3130f798dfb5b4fae5c\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/employees/toggle-navigation?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.2</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"151\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-ic";
        // line 491
        echo "ons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminDashboard&amp;token=0be16f2a5292c31a367979fe465f7ed6\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Tablero
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
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGT";
        // line 530
        echo "nw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/invoices/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/credit-slips/";
        // line 560
        echo "?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Notas Crédito
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/delivery-slips/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Remisiones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarts&amp;token=35a67e651d2b95763f4a21dc093e769c\" class=\"link\"> Carritos de Compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"ma";
        // line 592
        echo "terial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/categories?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/monitoring/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
    ";
        // line 622
        echo "                          
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminAttributesGroups&amp;token=68f45352ff0f8700778889a816563d29\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/brands/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/attachments/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCartRules&amp";
        // line 649
        echo ";token=1f3bf451ec51b3df561299cbebb49e01\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/stocks/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Inventario
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/customers/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=";
        // line 681
        echo "\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/customers/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/addresses/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCustomerThreads&amp;token=4a546076ef3adb71afb146a85db4bc87\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
              ";
        // line 711
        echo "                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCustomerThreads&amp;token=4a546076ef3adb71afb146a85db4bc87\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/customer-service/order-messages/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminReturn&amp;token=8b86a96ab4d14f03743946fee6487ef5\" class=\"link\"> Devoluciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats";
        // line 741
        echo "\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/metrics/legacy/stats?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/metrics/legacy/stats?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/metrics?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
    ";
        // line 772
        echo "                  
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/mbo/modules/catalog/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
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
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/mbo/modules/catalog/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                ";
        // line 805
        echo "            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4bbcc0782ca2b6b865f1e3d0a4999712\" class=\"link\">
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
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4bbcc0782ca2b6b865f1e";
        // line 832
        echo "3d0a4999712\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/mbo/themes/catalog/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/improve/design/themes?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/design/mail_theme/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" da";
        // line 863
        echo "ta-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/design/cms-pages/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/design/modules/positions/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminImages&amp;token=59053cb19f9b2e15d1e1ad408dbc0021\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/link-widget/list?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Link List
                                </a>
                              </li>

                                               ";
        // line 892
        echo "                               </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarriers&amp;token=50d32f99d2a76a0b27cef686f5184553\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarriers&amp;token=50d32f99d2a76a0b27cef686f5184553\" class=\"link\"> Transportadoras
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/shipping/preferences/?_token=qJm";
        // line 921
        echo "R-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminMbeConfiguration&amp;token=51a737fe76ba83f3afe0f817d18d0664\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"131\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminMbeShipping&amp;token=76fb88fea19a4343f514a8ab70356a13\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/payment/payment_methods?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pag";
        // line 951
        echo "o
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/payment/payment_methods?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/payment/preferences?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/localization/?_token=qJmR-";
        // line 981
        echo "_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/localization/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/zones/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
       ";
        // line 1011
        echo "                         <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/taxes/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/translations/settings?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"141\" id=\"subtab-Marketing\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=433774b2a6788a915d3e06c60a844d0c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Mercadeo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-141\" class=\"submenu panel-collapse\">
                                                      
         ";
        // line 1041
        echo "                     
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=433774b2a6788a915d3e06c60a844d0c\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsfacebookModule&amp;token=56cabe2672a60500d1e305ac0e127ab9\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/settings?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
           ";
        // line 1076
        echo "           Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/preferences/preferences?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/preferences/preferences?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
";
        // line 1107
        echo "                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/order-preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/product-preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/customer-preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_intermedio/adminMarlo";
        // line 1134
        echo "n/index.php/configure/shop/contacts/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/seo-urls/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminSearchConf&amp;token=cd3e7767b175b5b0042c1ab64c1c73d9\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/system-information/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Par�";
        // line 1164
        echo "�metros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/system-information/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/performance/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/administration/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Administ";
        // line 1191
        echo "ración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/emails/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/import/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/employees/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                 ";
        // line 1223
        echo "               <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/sql-requests/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/logs/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Registros
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/webservice-keys/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/feature-flags/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Características nuevas y expe";
        // line 1247
        echo "rimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/security/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminKlaviyoPsConfig&amp;token=dbef664efa1a66fe70e3023cf536153e\" class=\"link\">
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
          
                      <li class=\"breadcrumb-item active\">
  ";
        // line 1293
        echo "            <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" aria-current=\"page\">Welcome</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Home          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/cb/doc/HOME?version=8.1.2&amp;country=cb\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
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
               data-url=\"https://help.prestashop-project.org/cb/doc/HOME?version=8.1.2&amp;country=cb\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></d";
        // line 1359
        echo "iv>


  ";
        // line 1362
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
  <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Volver
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1396
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 120
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1362
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

    // line 1396
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
        return "__string_template__5a0db2d0db11ac237c94cf2834e30fe9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1580 => 1396,  1559 => 1362,  1548 => 120,  1539 => 1396,  1499 => 1362,  1494 => 1359,  1426 => 1293,  1378 => 1247,  1352 => 1223,  1318 => 1191,  1289 => 1164,  1257 => 1134,  1228 => 1107,  1195 => 1076,  1158 => 1041,  1126 => 1011,  1094 => 981,  1062 => 951,  1030 => 921,  999 => 892,  968 => 863,  935 => 832,  906 => 805,  871 => 772,  838 => 741,  806 => 711,  774 => 681,  740 => 649,  711 => 622,  679 => 592,  645 => 560,  613 => 530,  572 => 491,  527 => 448,  505 => 428,  455 => 380,  405 => 332,  360 => 289,  314 => 245,  277 => 210,  258 => 193,  217 => 154,  178 => 120,  159 => 103,  136 => 82,  121 => 70,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__5a0db2d0db11ac237c94cf2834e30fe9", "");
    }
}
