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
class __TwigTemplate_5173dc0701471f1d3f5acca6c877f1287b7750f901ec4ea7bdb0e73e5445cc56 extends Template
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
        $context["route_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11);
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77)) {
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

    // line 36
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "          <li class=\"nav-item\">
            <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"nav-link";
        echo (((($context["route_name"] ?? null) == "home")) ? (" active") : (""));
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
        echo (((($context["route_name"] ?? null) == "services")) ? (" active") : (""));
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
        echo (((($context["route_name"] ?? null) == "services")) ? (" active") : (""));
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
        echo (((($context["route_name"] ?? null) == "pricing")) ? (" active") : (""));
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
        echo (((($context["route_name"] ?? null) == "customers")) ? (" active") : (""));
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
        echo (((($context["route_name"] ?? null) == "ressources")) ? (" active") : (""));
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
        echo (((($context["route_name"] ?? null) == "contact")) ? (" active") : (""));
        echo "\">
              ";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contact us"), "html", null, true);
        echo "
            </a>
          </li>
           ";
    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 105
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  311 => 111,  308 => 110,  306 => 109,  302 => 108,  299 => 107,  296 => 106,  292 => 105,  286 => 100,  278 => 69,  272 => 68,  265 => 64,  259 => 63,  252 => 59,  246 => 58,  239 => 54,  233 => 53,  226 => 49,  220 => 48,  213 => 44,  207 => 43,  200 => 39,  194 => 38,  191 => 37,  187 => 36,  180 => 9,  176 => 8,  169 => 7,  163 => 112,  161 => 105,  155 => 101,  152 => 100,  150 => 99,  144 => 95,  142 => 94,  135 => 89,  129 => 86,  125 => 85,  120 => 83,  117 => 82,  111 => 79,  106 => 78,  104 => 77,  98 => 73,  96 => 36,  74 => 17,  70 => 16,  64 => 12,  61 => 11,  59 => 8,  54 => 7,  52 => 6,  45 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/front.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\front.html.twig");
    }
}
