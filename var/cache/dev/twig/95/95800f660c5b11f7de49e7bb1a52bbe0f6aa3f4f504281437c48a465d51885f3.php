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
class __TwigTemplate_65a3a067770c61df5471c7a32e6c5d0d0e99c049559c4a95529cfe11067ec307 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
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
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", ["_route"], "method", false, false, false, 14);
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 120, $this->source); })()) == "mail.history")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 126, $this->source); })()) == "cronjobs")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 132, $this->source); })()) == "settings")) ? (" active") : (""));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142), "getId", [], "method", false, false, false, 142)]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "getFullName", [], "method", false, false, false, 160), "html", null, true);
        echo "\" style=\"width: 53px; height: 50px; display: block; text-align: center; padding: 11px 0px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "getShortName", [], "method", false, false, false, 160), "html", null, true);
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 167, $this->source); })()) == "users")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 175, $this->source); })()) == "interests")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 182, $this->source); })()) == "countries")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 189, $this->source); })()) == "languages")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 195, $this->source); })()) == "categories")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 203, $this->source); })()) == "geographical_systems")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 215, $this->source); })()) == "mail.history")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 224, $this->source); })()) == "cronjobs")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 233, $this->source); })()) == "settings")) ? (" active") : (""));
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "user", [], "any", false, false, false, 245), "getId", [], "method", false, false, false, 245)]), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 252, $this->source); })()), "user", [], "any", false, false, false, 252), "getId", [], "method", false, false, false, 252)]), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "RASD";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 9
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 45, $this->source); })()) == "media")) ? (" active") : (""));
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
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 55, $this->source); })()) == "compaigns")) ? (" active") : (""));
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
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 64, $this->source); })()) == "link")) ? (" active") : (""));
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
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 73, $this->source); })()) == "reporting")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 84, $this->source); })()) == "users")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 90, $this->source); })()) == "countries")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 96, $this->source); })()) == "categories")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 102, $this->source); })()) == "interests")) ? (" active") : (""));
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
            echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 108, $this->source); })()) == "geographical_systems")) ? (" active") : (""));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 277
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 280
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  707 => 284,  704 => 283,  702 => 282,  697 => 281,  687 => 280,  669 => 277,  659 => 114,  652 => 110,  645 => 108,  638 => 104,  631 => 102,  624 => 98,  617 => 96,  610 => 92,  603 => 90,  596 => 86,  589 => 84,  586 => 83,  584 => 82,  575 => 76,  569 => 73,  565 => 72,  557 => 67,  551 => 64,  547 => 63,  539 => 58,  533 => 55,  529 => 54,  525 => 52,  518 => 48,  512 => 45,  508 => 44,  502 => 41,  499 => 40,  489 => 39,  476 => 9,  466 => 8,  447 => 7,  435 => 285,  433 => 280,  429 => 278,  426 => 277,  424 => 276,  420 => 274,  418 => 273,  405 => 263,  400 => 261,  396 => 259,  389 => 255,  382 => 252,  375 => 248,  368 => 245,  366 => 244,  363 => 243,  353 => 236,  347 => 233,  343 => 232,  335 => 227,  329 => 224,  325 => 223,  317 => 218,  311 => 215,  307 => 214,  296 => 206,  290 => 203,  286 => 202,  278 => 197,  271 => 195,  264 => 191,  257 => 189,  249 => 184,  242 => 182,  234 => 177,  227 => 175,  219 => 170,  213 => 167,  209 => 166,  205 => 164,  203 => 163,  195 => 160,  184 => 152,  179 => 150,  171 => 145,  165 => 142,  162 => 141,  152 => 134,  145 => 132,  138 => 128,  131 => 126,  124 => 122,  117 => 120,  111 => 116,  108 => 115,  106 => 39,  84 => 20,  80 => 19,  74 => 15,  72 => 14,  67 => 11,  65 => 8,  60 => 7,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  {% include 'partials/service-worker-meta.html.twig' %}
  <title>{% block title %}RASD{% endblock %}</title>
  {% block head %}
    {{ encore_entry_link_tags('app') }}
  {% endblock %}
</head>
<body class=\"admin-layout\">

  {% set route_name = app.request.get('_route') %}

  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      
      <a class=\"navbar-brand ms-3 me-5\" href=\"{{ path('home') }}\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
       <!--<img src=\"{{ asset('assets/img/logo-no-background.png') }}\" alt=\"RASD\" class=\"d-inline-block align-text-top\" height=\"60\">-->
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
          {% block navbar %}
          
        {% if is_granted('ROLE_ADMIN') %}   
          <li class=\"nav-item\">
            <a
              href=\"{{ path('media') }}\"
              class=\"nav-link{{ route_name == 'media' ? ' active' }}\"
            >
              <i class=\"bi bi-megaphone\"></i>
                {{ \"Medias\"|trans }}
            </a>
          </li>
        {% endif %}
          <li class=\"nav-item\">
            <a
              href=\"{{ path('compaigns') }}\"
              class=\"nav-link{{ route_name == 'compaigns' ? ' active' }}\"
            >
              <i class=\"bi bi-paperclip\"></i>
                {{ \"Compaigns\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a
              href=\"{{ path('link') }}\"
              class=\"nav-link{{ route_name == 'link' ? ' active' }}\"
            >
              <i class=\"bi bi-link\"></i>
                {{ \"Links\"|trans }}
            </a>
          </li> 
          <li class=\"nav-item\">
            <a
              href=\"{{ path('reporting') }}\"
              class=\"nav-link{{ route_name == 'reporting' ? ' active' }}\"
            >
              <i class=\"bi bi-clipboard-data\"></i>
              {{ \"Reporting\"|trans }}
            </a>
          </li>
          <li class=\"d-block d-lg-none\">
            <hr class=\"dropdown-divider\">
          </li>
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('users') }}\" class=\"nav-link{{ route_name == 'users' ? ' active' }}\">
              <i class=\"bi bi-people\"></i>
              {{ \"Users\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('countries') }}\" class=\"nav-link{{ route_name == 'countries' ? ' active' }}\">
              <i class=\"bi bi-globe\"></i>
              {{ \"Countries\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('categories') }}\" class=\"nav-link{{ route_name == 'categories' ? ' active' }}\">
              <i class=\"bi bi-inbox\"></i>
              {{ \"Categories\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('interests') }}\" class=\"nav-link{{ route_name == 'interests' ? ' active' }}\">
              <i class=\"bi bi-bookmarks\"></i>
              {{ \"Interests\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('geographical_systems') }}\" class=\"nav-link{{ route_name == 'geographical_systems' ? ' active' }}\">
              <i class=\"bi bi-building\"></i>
              {{ \"Geographical systems\"|trans }}
            </a>
          </li>
          {% endif %}
          {% endblock %}
          {% if is_granted('ROLE_ADMIN') %}
          <li class=\"d-block d-lg-none\">
            <hr class=\"dropdown-divider\">
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('mail.history') }}\" class=\"nav-link{{ route_name == 'mail.history' ? ' active' }}\">
              <i class=\"bi bi-envelope-open\"></i>
              {{ \"Emails\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('cronjobs') }}\" class=\"nav-link{{ route_name == 'cronjobs' ? ' active' }}\">
              <i class=\"bi bi-lightning\"></i>
              {{ \"Cron Jobs\"|trans }}
            </a>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a href=\"{{ path('settings') }}\" class=\"nav-link{{ route_name == 'settings' ? ' active' }}\">
              <i class=\"bi bi-gear\"></i>
              {{ \"settings\"|trans }}
            </a>
          </li>
          <li class=\"d-block\">
            <hr class=\"dropdown-divider\">
          </li>
          {% endif %}
          <li class=\"nav-item d-block d-lg-none\">
            <ajax-modal url=\"{{ path('user.update', {id: app.user.getId()}) }}\" width=\"600\">
              <a class=\"nav-link\" href=\"#\">
                <i class=\"bi bi-person\"></i>
                {{ \"My account\"|trans }}
              </a>
            </ajax-modal>
          </li>
          <li class=\"nav-item d-block d-lg-none\">
            <a class=\"nav-link\" href=\"{{ path('logout') }}\">
              <i class=\"bi bi-box-arrow-left\"></i>
              {{ \"Logout\"|trans }}
            </a>
          </li>
        </ul>
        <!-- user menu -->
        <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-none d-lg-block\">
          <li class=\"nav-item dropdown dropdown-account\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"user-account\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              <span class=\"bg-secondary text-white rounded-circle fs-5\" data-bs-toggle=\"tooltip\" data-bs-placement=\"left\" title=\"{{ app.user.getFullName() }}\" style=\"width: 53px; height: 50px; display: block; text-align: center; padding: 11px 0px;\">{{ app.user.getShortName() }}</span>
            </a>
            <ul class=\"dropdown-menu dropdown-menu-lg-end\" aria-labelledby=\"user-account\">
              {% if is_granted('ROLE_ADMIN') %}
              <li>
                <a
                  href=\"{{ path('users') }}\"
                  class=\"dropdown-item{{ route_name == 'users' ? ' active' }}\"
                >
                  <i class=\"bi bi-people\"></i>
                  {{ \"Users\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('interests') }}\" class=\"dropdown-item{{ route_name == 'interests' ? ' active' }}\">
                  <i class=\"bi bi-bookmarks\"></i>
                  {{ \"Interests\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('countries') }}\" class=\"dropdown-item{{ route_name == 'countries' ? ' active' }}\">
                  <i class=\"bi bi-globe\"></i>
                  {{ \"Countries\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('languages') }}\" class=\"dropdown-item{{ route_name == 'languages' ? ' active' }}\">
                  <i class=\"bi bi-chat-dots\"></i>
                  {{ \"Languages\"|trans }}
                </a>
              </li>
              <li class=\"nav-item\">
                <a href=\"{{ path('categories') }}\" class=\"dropdown-item{{ route_name == 'categories' ? ' active'}}\">
                  <i class=\"bi bi-inbox\"></i>
                  {{ \"Categories\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('geographical_systems') }}\"
                  class=\"dropdown-item{{ route_name == 'geographical_systems' ? ' active' }}\"
                >
                  <i class=\"bi bi-building\"></i>
                  {{ \"Geo systems\"|trans }}
                </a>
              </li>
              <li class=\"d-block\">
                <hr class=\"dropdown-divider\">
              </li>
              <li>
                <a
                  href=\"{{ path('mail.history') }}\"
                  class=\"dropdown-item{{ route_name == 'mail.history' ? ' active' }}\"
                >
                  <i class=\"bi bi-envelope-open\"></i>
                  {{ \"Emails\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('cronjobs') }}\"
                  class=\"dropdown-item{{ route_name == 'cronjobs' ? ' active' }}\"
                >
                  <i class=\"bi bi-lightning\"></i>
                  {{ \"Cron Jobs\"|trans }}
                </a>
              </li>
              <li>
                <a
                  href=\"{{ path('settings') }}\"
                  class=\"dropdown-item{{ route_name == 'settings' ? ' active' }}\"
                >
                  <i class=\"bi bi-gear\"></i>
                  {{ \"Settings\"|trans }}
                </a>
              </li>
              <li class=\"d-block\">
                <hr class=\"dropdown-divider\">
              </li>
              {% endif %}
              <li>
                {% if is_granted('ROLE_ADMIN') %}
                <ajax-modal url=\"{{ path('user.update', {id: app.user.getId()}) }}\" width=\"600\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bi bi-person\"></i>
                    {{ \"My account\"|trans }}
                  </a>
                </ajax-modal>
                {% else %}
                <ajax-modal url=\"{{ path('user.details', {id: app.user.getId()}) }}\" width=\"600\">
                  <a class=\"dropdown-item\" href=\"#\">
                    <i class=\"bi bi-person\"></i>
                    {{ \"My account\"|trans }}
                  </a>
                </ajax-modal>
                {% endif %}
              </li>
              <li>
                <a class=\"dropdown-item\" href=\"{{ path('logout') }}\">
                  <i class=\"bi bi-box-arrow-left\"></i>
                  {{ \"Logout\"|trans }}
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  {% include 'partials/sidebar.html.twig' %}

  <div class=\"container-fluid my-4 px-4\">
    {% include 'layout/alert.html.twig' %}
    {% block body %}{% endblock %}
  </div>

  {% block footer %}
    {{ encore_entry_script_tags('app') }}
    {% include 'partials/webpush.html.twig' %}
    {% include 'partials/service-worker-script.html.twig' %}
  {% endblock %}
</body>
</html>
", "layout/admin.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\admin.html.twig");
    }
}
