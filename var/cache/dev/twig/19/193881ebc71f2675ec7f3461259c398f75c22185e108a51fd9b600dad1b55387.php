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

/* layout/front.html.twig */
class __TwigTemplate_931c782e1f1f34e610ccb8bdc79377edfea986163f3e3bfc91570f6e6fa38852 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/front.html.twig"));

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
        $this->loadTemplate("partials/service-worker-meta.html.twig", "layout/front.html.twig", 6)->display($context);
        // line 7
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "  ";
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11);
        // line 12
        echo "</head>
<body>
  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand ms-3 me-5\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
        <!--<img src=\"";
        // line 17
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
        // line 36
        $this->displayBlock('navbar', $context, $blocks);
        // line 73
        echo "      </ul>

      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-lg-block\">
        <li class=\"nav-item dropdown dropdown-account\">
          ";
        // line 77
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) {
            // line 78
            echo "            <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reporting");
            echo "\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              ";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("My account"), "html", null, true);
            echo "
            </a>
          ";
        } else {
            // line 82
            echo "            <a href=\"#\" class=\"btn btn-success rounded-pill px-3 text-white\">
              ";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Signup"), "html", null, true);
            echo "
            </a>
            <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              ";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
            echo "
            </a>
          ";
        }
        // line 89
        echo "        </li>
      </ul>
    </div>
  </nav>

  ";
        // line 94
        $this->loadTemplate("partials/sidebar.html.twig", "layout/front.html.twig", 94)->display($context);
        // line 95
        echo "
  <div class=\"container my-3\">
    <div class=\"row\">
      <div id=\"main\" class=\"col-sm-12\" style=\"min-height:440px\">
        ";
        // line 99
        $this->loadTemplate("layout/alert.html.twig", "layout/front.html.twig", 99)->display($context);
        // line 100
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "      </div>
    </div>
  </div>

  ";
        // line 105
        $this->displayBlock('footer', $context, $blocks);
        // line 112
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

    // line 36
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navbar"));

        // line 37
        echo "          <li class=\"nav-item\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 38, $this->source); })()) == "home")) ? (" active") : (""));
        echo "\">
              ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 43, $this->source); })()) == "services")) ? (" active") : (""));
        echo "\">
              ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 48, $this->source); })()) == "services")) ? (" active") : (""));
        echo "\">
              ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Services"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pricing");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 53, $this->source); })()) == "pricing")) ? (" active") : (""));
        echo "\">
              ";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Pricing"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("customers");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 58, $this->source); })()) == "customers")) ? (" active") : (""));
        echo "\">
              ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ressources");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 63, $this->source); })()) == "ressources")) ? (" active") : (""));
        echo "\">
              ";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ressources"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"nav-link";
        echo ((((isset($context["route_name"]) || array_key_exists("route_name", $context) ? $context["route_name"] : (function () { throw new RuntimeError('Variable "route_name" does not exist.', 68, $this->source); })()) == "contact")) ? (" active") : (""));
        echo "\">
              ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact us"), "html", null, true);
        echo "
            </a>
          </li>
           ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
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

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 106
        echo "    ";
        $this->loadTemplate("block/footer.html.twig", "layout/front.html.twig", 106)->display($context);
        // line 107
        echo "  
    ";
        // line 108
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 109
        $this->loadTemplate("partials/webpush.html.twig", "layout/front.html.twig", 109)->display($context);
        // line 110
        echo "    ";
        $this->loadTemplate("partials/service-worker-script.html.twig", "layout/front.html.twig", 110)->display($context);
        // line 111
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/front.html.twig";
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
        return array (  377 => 111,  374 => 110,  372 => 109,  368 => 108,  365 => 107,  362 => 106,  352 => 105,  334 => 100,  320 => 69,  314 => 68,  307 => 64,  301 => 63,  294 => 59,  288 => 58,  281 => 54,  275 => 53,  268 => 49,  262 => 48,  255 => 44,  249 => 43,  242 => 39,  236 => 38,  233 => 37,  223 => 36,  210 => 9,  200 => 8,  181 => 7,  169 => 112,  167 => 105,  161 => 101,  158 => 100,  156 => 99,  150 => 95,  148 => 94,  141 => 89,  135 => 86,  131 => 85,  126 => 83,  123 => 82,  117 => 79,  112 => 78,  110 => 77,  104 => 73,  102 => 36,  80 => 17,  76 => 16,  70 => 12,  67 => 11,  65 => 8,  60 => 7,  58 => 6,  51 => 2,  48 => 1,);
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
  {% set route_name = app.request.get('_route') %}
</head>
<body>
  <nav class=\"navbar navbar-expand-lg navbar-light bg-white shadow-sm\" id=\"primary-navbar\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand ms-3 me-5\" href=\"{{  path('home') }}\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">
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
          <li class=\"nav-item\">
            <a href=\"{{ path('home') }}\" class=\"nav-link{{ route_name == 'home' ? ' active' }}\">
              {{ \"Home\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('services') }}\" class=\"nav-link{{ route_name == 'services' ? ' active' }}\">
              {{ \"Features\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('services') }}\" class=\"nav-link{{ route_name == 'services' ? ' active' }}\">
              {{ \"Services\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('pricing') }}\" class=\"nav-link{{ route_name == 'pricing' ? ' active' }}\">
              {{ \"Pricing\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('customers') }}\" class=\"nav-link{{ route_name == 'customers' ? ' active' }}\">
              {{ \"Customers\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('ressources') }}\" class=\"nav-link{{ route_name == 'ressources' ? ' active' }}\">
              {{ \"Ressources\"|trans }}
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"{{ path('contact') }}\" class=\"nav-link{{ route_name == 'contact' ? ' active' }}\">
              {{ \"Contact us\"|trans }}
            </a>
          </li>
           {% endblock %}
      </ul>

      <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0 d-lg-block\">
        <li class=\"nav-item dropdown dropdown-account\">
          {% if app.user %}
            <a href=\"{{ path('reporting') }}\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              {{ \"My account\"|trans }}
            </a>
          {% else %}
            <a href=\"#\" class=\"btn btn-success rounded-pill px-3 text-white\">
              {{ \"Signup\"|trans }}
            </a>
            <a href=\"{{ path('login') }}\" class=\"btn btn-primary rounded-pill px-3 text-white\">
              {{ \"Login\"|trans }}
            </a>
          {% endif %}
        </li>
      </ul>
    </div>
  </nav>

  {% include 'partials/sidebar.html.twig' %}

  <div class=\"container my-3\">
    <div class=\"row\">
      <div id=\"main\" class=\"col-sm-12\" style=\"min-height:440px\">
        {% include 'layout/alert.html.twig' %}
        {% block body %}{% endblock %}
      </div>
    </div>
  </div>

  {% block footer %}
    {% include \"block/footer.html.twig\" %}
  
    {{ encore_entry_script_tags('app') }}
    {% include 'partials/webpush.html.twig' %}
    {% include 'partials/service-worker-script.html.twig' %}
  {% endblock %}
</body>
</html>
", "layout/front.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\front.html.twig");
    }
}
