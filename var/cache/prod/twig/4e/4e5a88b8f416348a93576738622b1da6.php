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

/* __string_template__186318394026cba4c941dd78161b2f43 */
class __TwigTemplate_2a20a01422ac165be7797fa6b1198c2b extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/mitienda/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/mitienda/img/app_icon.png\" />

<title>Pedidos • mitienda</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es-es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'PY';
    var _PS_VERSION_ = '8.1.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '8b7de67724f4afd983033d8da12fe3bb';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = '8fe7d86ad54ccec9b0862845f05b9f23';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/mitienda/admin123456/index.php/improve/modules/manage?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew';
    var admin_notification_get_link = '/mitienda/admin123456/index.php/common/notifications?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew';
    var admin_notification_push_link = adminNotificationPushLink = '/mitienda/admin123456/index.php/common/notifications/ack?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew';
    var tab_modules_list = '';
    var update_success_msg = '";
        // line 42
        echo "Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/mitienda/admin123456/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/mitienda/admin123456/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/admin123456/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/psgdpr/views/css/overrideAddress.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/admin123456/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/klaviyopsautomation/dist/css/klaviyops-admin-global.0dd51c02.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/ps_checkout/views/css/adminOrderView.css?version=3.4.0\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/mitienda/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/mitienda\\/admin123456\\/\";
var baseDir = \"\\/mitienda\\/\";
v";
        // line 72
        echo "ar changeFormLanguageUrl = \"\\/mitienda\\/admin123456\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\";
var currency = {\"iso_code\":\"PYG\",\"sign\":\"\\u20b2\",\"name\":\"Guaran\\u00ed paraguayo\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PYG\",\"currencySymbol\":\"\\u20b2\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psgdprNoAddresses = \"Datos del cliente borrados por el m\\u00f3dulo oficial RGPD.\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_edition_basic/views/js/hideMinifiedChecklist.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/admin123456/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/js/admin.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/mitienda/admin123456/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/";
        // line 89
        echo "mitienda/js/tools.js?v=8.1.1\"></script>
<script type=\"text/javascript\" src=\"/mitienda/admin123456/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/psgdpr/views/js/overrideAddress.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/admin123456/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_checkout/views/js/adminOrderView.js?version=3.4.0\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_mbo/views/js/recommended-modules.js?v=4.5.2\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/mitienda/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/mitienda\\/admin123456\\/index.php?controller=AdminGamification&token=d03f31502fd54a7c289a928842aeeec4\";
            var current_id_tab = 4;
        </script>    <script>
        window.userLocale  = 'es';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initiali";
        // line 113
        echo "ze({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/mitienda/admin123456/index.php/common/notifications?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 126
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminorders\"
  data-base-url=\"/mitienda/admin123456/index.php\"  data-token=\"_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/mitienda/admin123456/index.php/modules/pseditionbasic/homepage?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"></a>
      <span id=\"shop_version\">8.1.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c285d403b4a13e45e072657dd71f13c0\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/mitienda/admin123456/index.php/improve/modules/manage?token=20c3b7910e398b7a974cc60c01eeab99\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/mitienda/admin123456/index.php/sell/catalog/categories/new?token=20c3b7910e398b7a974cc60c01eeab99\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/mitienda/admin123456/index.php/sell/catalog/products-v2/create?token=20c3b7910e398b7a974cc60c01eeab99\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
 ";
        // line 163
        echo "         <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c3f8ab8cf6f99f53fd3c4db5ef7ec2cf\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link  active\"
         href=\"http://localhost/mitienda/admin123456/index.php/sell/orders?token=20c3b7910e398b7a974cc60c01eeab99\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-remove-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-method=\"remove\"
        data-quicklink-id=\"1\"
        data-rand=\"188\"
        data-icon=\"icon-AdminParentOrders\"
        data-url=\"index.php/sell/orders\"
        data-post-link=\"http://localhost/mitienda/admin123456/index.php?controller=AdminQuickAccesses&token=b7bbaf9b9cb3e8067ca3095e49794a13\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Pedidos - Lista\"
      >
        <i class=\"material-icons\">remove_circle_outline</i>
        Eliminar del Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminQuickAccesses&token=b7bbaf9b9cb3e8067ca3095e49794a13\">
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
      action=\"/mitienda/admin123456/index.php?controller=AdminSearch&amp;token=b703aea96aee3340ec8a3c5c9f078c79\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-ty";
        // line 202
        echo "pe\" />
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
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carr";
        // line 217
        echo "itos</a>
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
       href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=c285d403b4a13e45e072657dd71f13c0\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/mitienda/admin123456/index.php/improve/modules/manage?token=20c3b7910e398b7a974cc60c01eeab99\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/mitienda/admin123456/index.php/sell/catalog/categories/new?token=20c3b7910e398b7a974cc60c01eeab99\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/mitienda/admin123456/index.php/sell/catalog/products-v2/create?token=20c3b7910e398b7a974cc60c01eeab99\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c3f8ab8cf6f99f53fd3c4db5ef7ec2cf\"
             data-item=\"Nuevo cup�";
        // line 255
        echo "�n de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link active\"
       href=\"http://localhost/mitienda/admin123456/index.php/sell/orders?token=20c3b7910e398b7a974cc60c01eeab99\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-remove-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-method=\"remove\"
      data-quicklink-id=\"1\"
      data-rand=\"178\"
      data-icon=\"icon-AdminParentOrders\"
      data-url=\"index.php/sell/orders\"
      data-post-link=\"http://localhost/mitienda/admin123456/index.php?controller=AdminQuickAccesses&token=b7bbaf9b9cb3e8067ca3095e49794a13\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Pedidos - Lista\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      Eliminar del Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminQuickAccesses&token=b7bbaf9b9cb3e8067ca3095e49794a13\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/mitienda/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total";
        // line 302
        echo "\" class=\"count hide\">0</span>
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
              ¿Has revisado tus <strong><a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=916f21b54e7cff6527b129734cc7641b\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
            ";
        // line 354
        echo "                        <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
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
      <div clas";
        // line 404
        echo "s=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/mitienda/img/pr/default.jpg\" alt=\"Manuel\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Manuel</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/mitienda/admin123456/index.php/configure/advanced/employees/1/edit?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Gestione tu cuenta PrestaShop
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/cursos?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Formación
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/es/expertos?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Encuentra un experto
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/mitienda/admin12345/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=OyUm2waYOiwjLTYoywijGaiKXqgAySQD74Y-u7oQsS8&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopene";
        // line 426
        echo "r noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> PrestaShop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-es&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Centro de ayuda
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminLogin&amp;logout=1&amp;token=2afc8ae90e49446b133555881fa96e3b\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/mitienda/admin123456/index.php/configure/advanced/employees/toggle-navigation?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/mitienda/admin123456/index.php/modules/pseditionbasic/homepage?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.1</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"144\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
      ";
        // line 470
        echo "            <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/mitienda/admin123456/index.php/modules/pseditionbasic/homepage?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminDashboard&amp;token=4675e4ce3402960ba6730faa4275f3f9\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Inicio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  ";
        // line 507
        echo "
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/mitienda/admin123456/index.php/sell/orders/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/mitienda/admin123456/index.php/sell/orders/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/mitienda/admin123456/index.php/sell/orders/invoices/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Facturas
                                </a>
                              </li>

                                      ";
        // line 537
        echo "                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/mitienda/admin123456/index.php/sell/orders/credit-slips/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/mitienda/admin123456/index.php/sell/orders/delivery-slips/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCarts&amp;token=916f21b54e7cff6527b129734cc7641b\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/mitienda/admin123456/index.php/sell";
        // line 568
        echo "/catalog/products?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/mitienda/admin123456/index.php/sell/catalog/products?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/mitienda/admin123456/index.php/sell/catalog/categories?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/mitienda/admin123456/index";
        // line 598
        echo ".php/sell/catalog/monitoring/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminAttributesGroups&amp;token=b49646770a38dfde295853d11ab66f85\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/mitienda/admin123456/index.php/sell/catalog/brands/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/mitienda/admin123456/index.php/sell/attachments/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
           ";
        // line 629
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCartRules&amp;token=c3f8ab8cf6f99f53fd3c4db5ef7ec2cf\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/mitienda/admin123456/index.php/sell/stocks/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/mitienda/admin123456/index.php/sell/customers/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                        ";
        // line 659
        echo "              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/mitienda/admin123456/index.php/sell/customers/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/mitienda/admin123456/index.php/sell/addresses/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCustomerThreads&amp;token=c28d69105ff65dd38de4583ae630c161\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                 ";
        // line 690
        echo "                           </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCustomerThreads&amp;token=c28d69105ff65dd38de4583ae630c161\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/mitienda/admin123456/index.php/sell/customer-service/order-messages/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminReturn&amp;token=0a0d9db8019e75688e2d12b7b5c51a6f\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                 ";
        // line 720
        echo "     
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/mitienda/admin123456/index.php/modules/metrics/legacy/stats?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/mitienda/admin123456/index.php/modules/metrics/legacy/stats?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/mitienda/admin123456/index.php/modules/metrics?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
           ";
        // line 750
        echo "                             </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/mitienda/admin123456/index.php/modules/mbo/modules/catalog/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/mitienda/admin123456/index.php/modules/mbo/modules/catalog/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                        ";
        // line 785
        echo "      
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/mitienda/admin123456/index.php/improve/modules/manage?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/mitienda/admin123456/index.php/improve/design/themes/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/mitienda/admin123456/index.php/improve/design/themes/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Tema y logo";
        // line 813
        echo "tipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/mitienda/admin123456/index.php/modules/mbo/themes/catalog/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/mitienda/admin123456/index.php/improve/design/mail_theme/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/mitienda/admin123456/index.php/improve/design/cms-pages/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a hre";
        // line 845
        echo "f=\"/mitienda/admin123456/index.php/improve/design/modules/positions/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminImages&amp;token=dd1c1ec3575526492ec63a1cc205f479\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/mitienda/admin123456/index.php/modules/link-widget/list?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCarriers&amp;token=74a1eff0709aeb43f9b5d7111ff9eff6\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      <";
        // line 876
        echo "/span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminCarriers&amp;token=74a1eff0709aeb43f9b5d7111ff9eff6\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/mitienda/admin123456/index.php/improve/shipping/preferences/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminMbeConfiguration&amp;token=c17468f41c2564b67977dfba5ac1ec4f\" class=\"link\"> MBE - Configuración
                                </a>
                              </li";
        // line 904
        echo ">

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminMbeShipping&amp;token=10f8f2dc73b858d378d87ee2d15d1636\" class=\"link\"> MBE - Listado de envíos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/mitienda/admin123456/index.php/improve/payment/payment_methods?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/mitienda/admi";
        // line 935
        echo "n123456/index.php/improve/payment/payment_methods?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/mitienda/admin123456/index.php/improve/payment/preferences?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/mitienda/admin123456/index.php/improve/international/localization/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
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
        // line 967
        echo "                          <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/mitienda/admin123456/index.php/improve/international/localization/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/mitienda/admin123456/index.php/improve/international/zones/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/mitienda/admin123456/index.php/improve/international/taxes/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/mitienda/admin123456/index.php/improve/international/translations/settings?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Traducciones
                                </a>
                              </li>
";
        // line 995
        echo "
                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"135\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=721a27c051893ab26a2d3c110f195677\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-135\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=721a27c051893ab26a2d3c110f195677\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/mitienda/admin123456/";
        // line 1025
        echo "index.php?controller=AdminPsfacebookModule&amp;token=5bd65ea8732e5f88f470a926a555eacb\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"146\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/mitienda/admin123456/index.php/modules/pseditionbasic/settings?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Ajustes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/mitienda/admin123456/index.php/configure/shop/preferences/preferences?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i";
        // line 1062
        echo ">
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/mitienda/admin123456/index.php/configure/shop/preferences/preferences?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/mitienda/admin123456/index.php/configure/shop/order-preferences/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/mitienda/admin123456/index.php/configure/shop/product-preferences/?_token=_rHhgVVCARlIM8";
        // line 1091
        echo "EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/mitienda/admin123456/index.php/configure/shop/customer-preferences/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/mitienda/admin123456/index.php/configure/shop/contacts/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/mitienda/admin123456/index.php/configure/shop/seo-urls/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-";
        // line 1122
        echo "leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminSearchConf&amp;token=1717e51c3ffaae6b203b9459d8c190ab\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/mitienda/admin123456/index.php/configure/advanced/system-information/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\">
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
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/system-information/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Información
                                </a>
                              </li>

                      ";
        // line 1152
        echo "                                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/performance/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/administration/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/emails/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/import/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3t";
        // line 1180
        echo "vVhD9ew\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/employees/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/sql-requests/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/logs/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
           ";
        // line 1212
        echo "                     <a href=\"/mitienda/admin123456/index.php/configure/advanced/webservice-keys/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/feature-flags/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/mitienda/admin123456/index.php/configure/advanced/security/?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"link\"> Seguridad
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/mitienda/admin123456/index.php?controller=AdminKlaviyoPsConfig&amp;token=";
        // line 1239
        echo "659f359f28c32b755f390ebb4402cec5\" class=\"link\">
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
                      <li class=\"breadcrumb-item\">Pedidos</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
      <h1 class=\"title\">
      Pedidos    </h1>
  

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/mitienda/admin123456/index.php/sell/orders/new?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"                  title=\"Añadir nuevo pedido\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Añadir nuevo pedido
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/mitienda/admin123456/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdo";
        // line 1292
        echo "c%252FAdminOrders%253Fversion%253D8.1.1%2526country%253Des/Ayuda?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"
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
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/mitienda/admin123456/index.php/sell/orders/new?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"              title=\"Añadir nuevo pedido\"            >
              Añadir nuevo pedido
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/mitienda/admin123456/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminOrders%253Fversion%253D8.1.1%2526country%253Des/Ayuda?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Aumentar ventas',
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/mitienda/admin123456/index.php/modules/mbo/modules/recommended/?tabClassName=AdminOrders&recommendation_format=modal&_token=_rHhgVVCARlIM8EmRm7S3r9";
        // line 1337
        echo "kq_GG9qxQhg3tvVhD9ew',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1358
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
  <a href=\"/mitienda/admin123456/index.php/modules/pseditionbasic/homepage?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Conectarse a Addons Marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Vincula tu tienda a tu cuenta de Addons para recibir automáticamente actualizaciones importantes de los módulos que hayas adquirido. ¿Aún no tiene una cuenta?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Regístrate ahora</a>
                  </p>
                  <p>
                      Si has creado tu cuenta utilizando Google, sigue el procedimiento de contraseña olvidada de Addons Marketplace para crear tu contraseña : 
             ";
        // line 1401
        echo "         <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">Restablecer contraseña</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/mitienda/admin123456/index.php/modules/mbo/addons/login?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Dirección de correo electrónico</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Contraseña</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Recordar datos
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">¡Vamos!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request \" target=\"_blank\">¿Olvidó su contraseña?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  moda";
        // line 1437
        echo "l-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirmar el cierre de sesión</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    Estás a punto de salir de tu cuenta en Addons. Podrías perderte actualizaciones importantes de los Complementos que has comprado.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancelar\">
          <a class=\"btn btn-primary uppercase\" href=\"/mitienda/admin123456/index.php/modules/mbo/addons/logout?_token=_rHhgVVCARlIM8EmRm7S3r9kq_GG9qxQhg3tvVhD9ew\" id=\"module-modal-addons-logout-ack\">Sí, quiero salir</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1470
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 126
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1358
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

    // line 1470
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
        return "__string_template__186318394026cba4c941dd78161b2f43";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1653 => 1470,  1632 => 1358,  1621 => 126,  1612 => 1470,  1577 => 1437,  1539 => 1401,  1490 => 1358,  1467 => 1337,  1420 => 1292,  1365 => 1239,  1336 => 1212,  1302 => 1180,  1272 => 1152,  1240 => 1122,  1207 => 1091,  1176 => 1062,  1137 => 1025,  1105 => 995,  1075 => 967,  1041 => 935,  1008 => 904,  978 => 876,  945 => 845,  911 => 813,  881 => 785,  844 => 750,  812 => 720,  780 => 690,  747 => 659,  715 => 629,  682 => 598,  650 => 568,  617 => 537,  585 => 507,  546 => 470,  500 => 426,  476 => 404,  424 => 354,  370 => 302,  321 => 255,  281 => 217,  264 => 202,  223 => 163,  181 => 126,  166 => 113,  140 => 89,  121 => 72,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__186318394026cba4c941dd78161b2f43", "");
    }
}
