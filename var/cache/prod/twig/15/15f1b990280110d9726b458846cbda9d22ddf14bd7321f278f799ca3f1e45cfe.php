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

/* layout/admin.html.twig */
class __TwigTemplate_a4fdc74ba058bf71efe4059769a4ad2dd50c3bf7f225eddc349b980ef613fecd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'navbar' => [$this, 'block_navbar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        echo "\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  ";
        // line 6
        $this->loadTemplate("partials/service-worker-meta.html.twig", "layout/admin.html.twig", 6)->display($context);
        // line 7
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body class=\"admin-layout\">

  ";
        // line 14
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14);
        // line 15
        echo "
  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      
      <a class=\"navbar-brand ms-3 me-5\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
       <!--<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-no-background.png"), "html", null, true);
        echo "\" alt=\"RASD\" class=\"d-inline-block align-text-top\" height=\"60\">-->
       MEDIA MAPS
      </a>
      <button 
        type=\"button\" 
        class=\"navbar-toggler\" 
        data-bs-toggle=\"collapse\" 
        data-bs-target=\"#admin-navbar\" 
        aria-controls=\"admin-navbar\" 
        aria-expanded=\"false\" 
        aria-label=\"Toggle navigation\"
      >
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"admin-navbar\">
        <ul class=\"navbar-nav\">
          <li class=\"d-block d-lg-none mt-1\">
            <hr class=\"dropdown-divider\">
          </li>
          ";
        // line 39
        $this->displayBlock('navbar', $context, $blocks);
        // line 115
        echo "          ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 116
            echo "          <li class=\"d-block d-lg-none\">
            <hr class=\"dropdown-divider\">
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 120
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.history");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "mail.history")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-envelope-open\"></i>
              ";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Emails"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 126
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronjobs");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "cronjobs")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-lightning\"></i>
              ";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cron Jobs"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 132
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "settings")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-gear\"></i>
              ";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("settings"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"d-block\">
            <hr class=\"dropdown-divider\">
          </li>
          ";
        }
        // line 141
        echo "          <li class=\"nav-item d-block d-lg-none\">
            <ajax-modal url=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 142), "getId", [], "method", false, false, false, 142)]), "html", null, true);
        echo "\" width=\"600\">
              <a class=\"nav-link\" href=\"#\">
                <i class=\"bi bi-person\"></i>
                ";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
        echo "
              </a>
            </ajax-modal>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link\" href=\"";
        // line 150
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
              <i class=\"bi bi-box-arrow-left\"></i>
              ";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>
        <!-- user menu -->
        <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-none d-lg-block\">
          <li class=\"nav-item dropdown dropdown-account\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"user-account\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"bg-secondary text-white rounded-circle fs-5\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 160), "getFullName", [], "method", false, false, false, 160), "html", null, true);
        echo "\" style=\"width: 53px; height: 50px; display: block; text-align: center; padding: 11px 0px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 160), "getShortName", [], "method", false, false, false, 160), "html", null, true);
        echo "</span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"user-account\">
              ";
        // line 163
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 164
            echo "              <li>
                <a
                  href=\"";
            // line 166
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\"
                  class=\"dropdown-item";
            // line 167
            echo (((($context["route_name"] ?? null) == "users")) ? (" active") : (""));
            echo "\"
                >
                  <i class=\"bi bi-people\"></i>
                  ";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users"), "html", null, true);
            echo "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 175
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interests");
            echo "\" class=\"dropdown-item";
            echo (((($context["route_name"] ?? null) == "interests")) ? (" active") : (""));
            echo "\">
                  <i class=\"bi bi-bookmarks\"></i>
                  ";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Interests"), "html", null, true);
            echo "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 182
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("countries");
            echo "\" class=\"dropdown-item";
            echo (((($context["route_name"] ?? null) == "countries")) ? (" active") : (""));
            echo "\">
                  <i class=\"bi bi-globe\"></i>
                  ";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
            echo "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 189
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("languages");
            echo "\" class=\"dropdown-item";
            echo (((($context["route_name"] ?? null) == "languages")) ? (" active") : (""));
            echo "\">
                  <i class=\"bi bi-chat-dots\"></i>
                  ";
            // line 191
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"";
            // line 195
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
            echo "\" class=\"dropdown-item";
            echo (((($context["route_name"] ?? null) == "categories")) ? (" active") : (""));
            echo "\">
                  <i class=\"bi bi-inbox\"></i>
                  ";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            echo "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 202
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("geographical_systems");
            echo "\"
                  class=\"dropdown-item";
            // line 203
            echo (((($context["route_name"] ?? null) == "geographical_systems")) ? (" active") : (""));
            echo "\"
                >
                  <i class=\"bi bi-building\"></i>
                  ";
            // line 206
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Geo systems"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"d-block\">
                <hr class=\"dropdown-divider\">
              </li>
              <li>
                <a
                  href=\"";
            // line 214
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mail.history");
            echo "\"
                  class=\"dropdown-item";
            // line 215
            echo (((($context["route_name"] ?? null) == "mail.history")) ? (" active") : (""));
            echo "\"
                >
                  <i class=\"bi bi-envelope-open\"></i>
                  ";
            // line 218
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Emails"), "html", null, true);
            echo "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 223
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cronjobs");
            echo "\"
                  class=\"dropdown-item";
            // line 224
            echo (((($context["route_name"] ?? null) == "cronjobs")) ? (" active") : (""));
            echo "\"
                >
                  <i class=\"bi bi-lightning\"></i>
                  ";
            // line 227
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cron Jobs"), "html", null, true);
            echo "
                </a>
              </li>
              <li>
                <a
                  href=\"";
            // line 232
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("settings");
            echo "\"
                  class=\"dropdown-item";
            // line 233
            echo (((($context["route_name"] ?? null) == "settings")) ? (" active") : (""));
            echo "\"
                >
                  <i class=\"bi bi-gear\"></i>
                  ";
            // line 236
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings"), "html", null, true);
            echo "
                </a>
              </li>
              <li class=\"d-block\">
                <hr class=\"dropdown-divider\">
              </li>
              ";
        }
        // line 243
        echo "              <li>
                ";
        // line 244
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 245
            echo "                <ajax-modal url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 245), "getId", [], "method", false, false, false, 245)]), "html", null, true);
            echo "\" width=\"600\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bi bi-person\"></i>
                    ";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
            echo "
                  </a>
                </ajax-modal>
                ";
        } else {
            // line 252
            echo "                <ajax-modal url=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 252), "getId", [], "method", false, false, false, 252)]), "html", null, true);
            echo "\" width=\"600\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bi bi-person\"></i>
                    ";
            // line 255
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
            echo "
                  </a>
                </ajax-modal>
                ";
        }
        // line 259
        echo "              </li>
              <li>
                <a class=\"dropdown-item\" href=\"";
        // line 261
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
                  <i class=\"bi bi-box-arrow-left\"></i>
                  ";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logout"), "html", null, true);
        echo "
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  ";
        // line 273
        $this->loadTemplate("partials/sidebar.html.twig", "layout/admin.html.twig", 273)->display($context);
        // line 274
        echo "
  <div class=\"container-fluid my-4 px-4\">
    ";
        // line 276
        $this->loadTemplate("layout/alert.html.twig", "layout/admin.html.twig", 276)->display($context);
        // line 277
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 278
        echo "  </div>

  ";
        // line 280
        $this->displayBlock('footer', $context, $blocks);
        // line 285
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "RASD";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  ";
    }

    // line 39
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "          
        ";
        // line 41
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "   
          <li class=\"nav-item\">
            <a
              href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media");
            echo "\"
              class=\"nav-link";
            // line 45
            echo (((($context["route_name"] ?? null) == "media")) ? (" active") : (""));
            echo "\"
            >
              <i class=\"bi bi-megaphone\"></i>
                ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Medias"), "html", null, true);
            echo "
            </a>
          </li>
        ";
        }
        // line 52
        echo "          <li class=\"nav-item\">
            <a
              href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compaigns");
        echo "\"
              class=\"nav-link";
        // line 55
        echo (((($context["route_name"] ?? null) == "compaigns")) ? (" active") : (""));
        echo "\"
            >
              <i class=\"bi bi-paperclip\"></i>
                ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compaigns"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link");
        echo "\"
              class=\"nav-link";
        // line 64
        echo (((($context["route_name"] ?? null) == "link")) ? (" active") : (""));
        echo "\"
            >
              <i class=\"bi bi-link\"></i>
                ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Links"), "html", null, true);
        echo "
            </a>
          </li> 
          <li class=\"nav-item\">
            <a
              href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
        echo "\"
              class=\"nav-link";
        // line 73
        echo (((($context["route_name"] ?? null) == "reporting")) ? (" active") : (""));
        echo "\"
            >
              <i class=\"bi bi-clipboard-data\"></i>
              ";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reporting"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"d-block d-lg-none\">
            <hr class=\"dropdown-divider\">
          </li>
          ";
        // line 82
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 83
            echo "          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "users")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-people\"></i>
              ";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Users"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 90
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("countries");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "countries")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-globe\"></i>
              ";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "categories")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-inbox\"></i>
              ";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 102
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interests");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "interests")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-bookmarks\"></i>
              ";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Interests"), "html", null, true);
            echo "
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("geographical_systems");
            echo "\" class=\"nav-link";
            echo (((($context["route_name"] ?? null) == "geographical_systems")) ? (" active") : (""));
            echo "\">
              <i class=\"bi bi-building\"></i>
              ";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Geographical systems"), "html", null, true);
            echo "
            </a>
          </li>
          ";
        }
        // line 114
        echo "          ";
    }

    // line 277
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 280
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 281
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 282
        $this->loadTemplate("partials/webpush.html.twig", "layout/admin.html.twig", 282)->display($context);
        // line 283
        echo "    ";
        $this->loadTemplate("partials/service-worker-script.html.twig", "layout/admin.html.twig", 283)->display($context);
        // line 284
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/admin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  641 => 284,  638 => 283,  636 => 282,  631 => 281,  627 => 280,  621 => 277,  617 => 114,  610 => 110,  603 => 108,  596 => 104,  589 => 102,  582 => 98,  575 => 96,  568 => 92,  561 => 90,  554 => 86,  547 => 84,  544 => 83,  542 => 82,  533 => 76,  527 => 73,  523 => 72,  515 => 67,  509 => 64,  505 => 63,  497 => 58,  491 => 55,  487 => 54,  483 => 52,  476 => 48,  470 => 45,  466 => 44,  460 => 41,  457 => 40,  453 => 39,  446 => 9,  442 => 8,  435 => 7,  429 => 285,  427 => 280,  423 => 278,  420 => 277,  418 => 276,  414 => 274,  412 => 273,  399 => 263,  394 => 261,  390 => 259,  383 => 255,  376 => 252,  369 => 248,  362 => 245,  360 => 244,  357 => 243,  347 => 236,  341 => 233,  337 => 232,  329 => 227,  323 => 224,  319 => 223,  311 => 218,  305 => 215,  301 => 214,  290 => 206,  284 => 203,  280 => 202,  272 => 197,  265 => 195,  258 => 191,  251 => 189,  243 => 184,  236 => 182,  228 => 177,  221 => 175,  213 => 170,  207 => 167,  203 => 166,  199 => 164,  197 => 163,  189 => 160,  178 => 152,  173 => 150,  165 => 145,  159 => 142,  156 => 141,  146 => 134,  139 => 132,  132 => 128,  125 => 126,  118 => 122,  111 => 120,  105 => 116,  102 => 115,  100 => 39,  78 => 20,  74 => 19,  68 => 15,  66 => 14,  61 => 11,  59 => 8,  54 => 7,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/admin.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\admin.html.twig");
    }
}
