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

/* __string_template__fc3c391fc134d3b1404646f95ed963d9 */
class __TwigTemplate_533471a576cc2a0484c3d10b55c135fc extends Template
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
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_intermedio/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_intermedio/img/app_icon.png\" />

<title>Settings • sanduches</title>

  <script type=\"text/javascript\">
    var help_class_name = 'CONFIGURE';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'CO';
    var _PS_VERSION_ = '8.1.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '14107cbba6cce2f4c7088f17f5cb2f90';
    var currentIndex = 'index.php?controller=CONFIGURE';
    var employee_token = 'd8cf658bd8e0c78b4b241a5a2d0488bf';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE';
    var admin_notification_get_link = '/prestashop_intermedio/adminMarlon/index.php/common/notifications?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_intermedio/adminMarlon/index.php/common/notifications/ack?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE';
    var tab_modules_list = '';
 ";
        // line 42
        echo "   var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
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
        echo "V2SlBFVEJxR2tIMlwvK05vSEJ2T1owYW9YelNKTUtMVW02UWxPUXh0ODhnOGxMTlwvWmNmOFxyXG53Y1JleGxnb0xSQWhFdmFHVUkwOVwvUHpjeER0MFhnSUV1K2tMNUZyUnZaOU1Gd1lHRHV6M051XC9ydGNISTJLdm1cclxuSGxJbDVGd1FZZ2w1bDlGT1hGWlhLbEdIbTk5eEIyVXpMd3R4cFA0OCtBK0FRZENGTjN2bEFnTUJBQUU9XHJcbi0tLS0tRU5EIFJTQSBQVUJMSUMgS0VZLS0tLS0iLCJlbXBsb3llZUlkIjoiMSIsInVzZXIiOnsiZW1haWwiOm51bGwsImVtYWlsSXNWYWxpZGF0ZWQiOmZhbHNlLCJ1dWlkIjpudWxsfSwidXJsIjoiaHR0cDpcL1wvMTI3LjAuMC4xXC9wcmVzdGFzaG9wX2ludGVybWVkaW9cL2FkbWluTWFybG9uXC9pbmRleC5waHA\\/Y29udHJvbGxlcj1BZG1pbk1vZHVsZXMmY29uZmlndXJlPXBzX2VkaXRpb25fYmFzaWMmc2V0U2hvcENvbnRleHQ9cy0xJnRva2VuPWIxZTgwYTBmYWVkYzUxMzUwZmE4YWVlN2I5MDk5ZDJiIiwiaXNMaW5rZWRWNCI6ZmFsc2UsInVubGlua2VkQXV0byI6ZmFsc2UsIm11bHRpc2hvcCI6ZmFsc2UsIm1vZHVsZU5hbWUiOiJwc19lZGl0aW9uX2Jhc2ljIiwicHNWZXJzaW9uIjoiOC4xLjIifV0=\",\"ssoResendVerificationEmail\":\"https:\\/\\/auth.prestashop.com\\/account\\/send-verification-email\",\"manageAccountLink\":\"https:\\/\\/auth.prestashop.com\\/login?lang=en\",\"isOnboardedV4\":false,\"shops\":[{\"id\":\"1\",\"name\":\"Default\",\"shops\":[{\"id\":\"1\",\"name\":\"sanduches\",\"domain\":\"127.0.0.1\",\"domainSsl\":\"127.0.0.1\",\"physicalUri\":\"\\/prestashop_intermedio\\/\",\"virtualUri\":\"\",\"frontUrl\":\"https:\\/\\/127.0.0.1\\/prestashop_intermedio\\/\",\"uuid\":null,\"publicKey\":\"-----BEGIN RSA PUBLIC KEY-----\\r\\nMIGJAoGBAK185vJPETBqGkH2\\/+NoHBvOZ0aoXzSJMKLUm6QlOQxt88g8lLN\\/Zcf8\\r\\nwcRexlgoLRAhEvaGUI09\\/PzcxDt0XgIEu+kL5FrRvZ9MFwYGDuz3Nu\\/rtcHI2Kvm\\r\\nHlIl5FwQYgl5l9FOXFZXKlGHm99xB2UzLwtxpP48+A+AQdCFN3vlAgMBAAE=\\r\\n-----END RSA PUBLIC KEY-----\",\"employeeId\":null,\"user\":{\"email\":null,\"emailIsValidated\":false,\"uuid\":null},\"url\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php?controller=AdminModules&configure=ps_edition_basic&setShopContext=s-1&token=b1e80a0faedc51350fa8aee7b9099d2b\",\"isLinkedV4\":false,\"unlinkedAuto\":false,\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.2\",\"moduleVersion\":\"7.0.3\"}],\"multishop\":false,\"moduleName\":\"ps_edition_basic\",\"psVersion\":\"8.1.2\"}],\"adminAjaxLink\":\"http:\\/\\/1";
        echo "27.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php?controller=AdminAjaxPsAccounts&ajax=1&token=17440c62d5983e17fc183b4619388e94\",\"accountsUiUrl\":\"https:\\/\\/accounts.distribution.prestashop.net\",\"dependencies\":{\"ps_eventbus\":{\"isInstalled\":true,\"installLink\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php\\/improve\\/modules\\/manage\\/action\\/install\\/ps_eventbus?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\",\"isEnabled\":true,\"enableLink\":\"http:\\/\\/127.0.0.1\\/prestashop_intermedio\\/adminMarlon\\/index.php\\/improve\\/modules\\/manage\\/action\\/enable\\/ps_eventbus?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"}}};
var currency = {\"iso_code\":\"COP\",\"sign\":\"\$\",\"name\":\"Colombian Peso\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"COP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_intermedio/adminMarlon/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_interm";
        // line 82
        echo "edio/js/jquery/plugins/jquery.chosen.js\"></script>
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
            var current_id_tab = 70;
        </script><script type=\"module\" src=\"/prestashop_intermedio/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadg";
        // line 103
        echo "neorc45cjqxpbf6o4';
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
  class=\"lang-en configure\"
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
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=25712812e03dbe85f71af5a2695ccb54\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/categories/new?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products-v2/create?token=08de5f1311347ddfd7ad67ce47f4e4db\"
     ";
        // line 155
        echo "            data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1f3bf451ec51b3df561299cbebb49e01\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/orders?token=08de5f1311347ddfd7ad67ce47f4e4db\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"134\"
        data-icon=\"\"
        data-method=\"add\"
        data-url=\"index.php/modules/pseditionbasic/settings?-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"
        data-post-link=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Configure - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
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
      action=\"/prestashop_intermedio/adminMarlon/index.php?controller=AdminSearch&amp;token=0b8c63787a9e450c497e5af369cb5463\"
      role=\"search\">
  <input type=\"";
        // line 195
        echo "hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts";
        // line 210
        echo "</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=25712812e03dbe85f71af5a2695ccb54\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/categories/new?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products-v2/create?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1f3bf451ec51b3df561299cbebb49e01\"
   ";
        // line 248
        echo "          data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php/sell/orders?token=08de5f1311347ddfd7ad67ce47f4e4db\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"59\"
      data-icon=\"\"
      data-method=\"add\"
      data-url=\"index.php/modules/pseditionbasic/settings?-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\"
      data-post-link=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Configure - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminQuickAccesses&token=698d84baf398dc80b06483e81e288c0a\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
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
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go";
        // line 293
        echo " to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
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
            <span>Maintenance mode</span>
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
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-lin";
        // line 340
        echo "k \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
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
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=35a67e651d2b95763f4a21dc093e769c\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
         ";
        // line 387
        echo "               </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
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
        <span class=\"employee_profile\">Welcome back Ander</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/employees/1/edit?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=127.0.0.1&utm_medium=back-office&u";
        // line 436
        echo "tm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop_intermedio/admin/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=tMjDyLTBW8brkXhPD-zfDSUEu7uYm23hcK36yBtIvvw&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminLogin&amp;logout=1&amp;token";
        // line 453
        echo "=8d70ce851613a3130f798dfb5b4fae5c\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
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
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"151\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"152\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
";
        // line 498
        echo "                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminDashboard&amp;token=0be16f2a5292c31a367979fe465f7ed6\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                              ";
        // line 536
        echo "      keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/invoices/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/credit-slips/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                            ";
        // line 567
        echo "  <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/orders/delivery-slips/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarts&amp;token=35a67e651d2b95763f4a21dc093e769c\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                               ";
        // line 597
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/products?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/categories?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/monitoring/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminAttributesGroups&amp;token=68f45352ff0f87";
        // line 625
        echo "00778889a816563d29\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/catalog/brands/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/attachments/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCartRules&amp;token=1f3bf451ec51b3df561299cbebb49e01\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-levelt";
        // line 656
        echo "wo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/stocks/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/customers/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/customers/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
           ";
        // line 687
        echo "                   
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/addresses/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCustomerThreads&amp;token=4a546076ef3adb71afb146a85db4bc87\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCustomerThreads&";
        // line 715
        echo "amp;token=4a546076ef3adb71afb146a85db4bc87\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/sell/customer-service/order-messages/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminReturn&amp;token=8b86a96ab4d14f03743946fee6487ef5\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/metrics/legacy/stats?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                        ";
        // line 747
        echo "            <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/metrics/legacy/stats?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/metrics?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"";
        // line 784
        echo "link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/mbo/modules/catalog/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/modules/manage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Module Manager
                                </a>
                              </li>

                   ";
        // line 811
        echo "                                                                                                                 </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4bbcc0782ca2b6b865f1e3d0a4999712\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=4bbcc0782ca2b6b865f1e3d0a4999712\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"164\" id=\"subtab-AdminPsMboTheme\">
                ";
        // line 840
        echo "                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/mbo/themes/catalog/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/improve/design/themes?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/design/mail_theme/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/design/cms-pages/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                       ";
        // line 869
        echo "       
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/design/modules/positions/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminImages&amp;token=59053cb19f9b2e15d1e1ad408dbc0021\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/link-widget/list?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php";
        // line 899
        echo "?controller=AdminCarriers&amp;token=50d32f99d2a76a0b27cef686f5184553\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminCarriers&amp;token=50d32f99d2a76a0b27cef686f5184553\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/shipping/preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
 ";
        // line 929
        echo "                               <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminMbeConfiguration&amp;token=51a737fe76ba83f3afe0f817d18d0664\" class=\"link\"> MBE - Configuration
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
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">";
        // line 957
        echo "
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/payment/payment_methods?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/payment/preferences?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/localization/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                        ";
        // line 988
        echo "                                    </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/localization/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/zones/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/taxes/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
               ";
        // line 1018
        echo "               <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/improve/international/translations/settings?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"141\" id=\"subtab-Marketing\">
                    <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=433774b2a6788a915d3e06c60a844d0c\" class=\"link\">
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
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=433774b2a6788a915d3e06c60a844d0c\" class=\"link\"> Google
                                </a>
   ";
        // line 1046
        echo "                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminPsfacebookModule&amp;token=56cabe2672a60500d1e305ac0e127ab9\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"153\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/settings?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                           ";
        // line 1083
        echo "   
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/preferences/preferences?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/order-preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Order Settings
                                </a>";
        // line 1111
        echo "
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/product-preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/customer-preferences/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/contacts/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
            ";
        // line 1142
        echo "                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/shop/seo-urls/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://127.0.0.1/prestashop_intermedio/adminMarlon/index.php?controller=AdminSearchConf&amp;token=cd3e7767b175b5b0042c1ab64c1c73d9\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/system-information/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                    ";
        // line 1171
        echo "                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/system-information/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/performance/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/administration/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/emails/?_token=qJmR-";
        // line 1199
        echo "_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/import/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/employees/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/sql-requests/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" dat";
        // line 1230
        echo "a-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/logs/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/webservice-keys/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/feature-flags/?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop_intermedio/adminMarlon/index.php/configure/advanced/security/?_token=qJmR-_st8IKtCB";
        // line 1255
        echo "xBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"link\"> Security
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
              <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/settings?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" aria-current=\"page\">Configure</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Settings          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                         ";
        // line 1311
        echo "     <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"https://help.prestashop-project.org/en/doc/CONFIGURE?version=8.1.2&amp;country=en\"
                   id=\"product_form_open_help\"
                >
                  Help
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
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"https://help.prestashop-project.org/en/doc/CONFIGURE?version=8.1.2&amp;country=en\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


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
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/prestashop_intermedio/adminMarlon/index.php/modules/pseditionbasic/homepage?_token=qJmR-_st8IKtCBxBICyCx1gxxq-hdTcggGTnw0_NcZE\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
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
        return "__string_template__fc3c391fc134d3b1404646f95ed963d9";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1578 => 1396,  1557 => 1362,  1546 => 120,  1537 => 1396,  1497 => 1362,  1444 => 1311,  1386 => 1255,  1359 => 1230,  1326 => 1199,  1296 => 1171,  1265 => 1142,  1232 => 1111,  1202 => 1083,  1163 => 1046,  1133 => 1018,  1101 => 988,  1068 => 957,  1038 => 929,  1006 => 899,  974 => 869,  943 => 840,  912 => 811,  883 => 784,  844 => 747,  810 => 715,  780 => 687,  747 => 656,  714 => 625,  684 => 597,  652 => 567,  619 => 536,  579 => 498,  532 => 453,  513 => 436,  462 => 387,  413 => 340,  364 => 293,  317 => 248,  277 => 210,  260 => 195,  218 => 155,  178 => 120,  159 => 103,  136 => 82,  121 => 70,  118 => 69,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__fc3c391fc134d3b1404646f95ed963d9", "");
    }
}
