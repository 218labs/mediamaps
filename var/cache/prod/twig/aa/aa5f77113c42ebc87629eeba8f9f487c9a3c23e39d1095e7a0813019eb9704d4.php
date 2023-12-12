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

/* admin/link/index.html.twig */
class __TwigTemplate_02ff600c15d3658b5a4a9701cbf1affd8dbce03670a776fb4c34f80e087e7507 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/link/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  
  <div class=\"row mb-4\">
    <div class=\"col-lg-9 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-link\"></i>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Links"), "html", null, true);
        echo "
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\">
      ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "   
        ";
            // line 15
            $this->loadTemplate("partials/export-results.html.twig", "admin/link/index.html.twig", 15)->display(twig_array_merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link.export")]));
            // line 16
            echo "      ";
        }
        // line 17
        echo "        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link.create");
        echo "\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "</span>
          </button>
        </a>

      </div>
    </div>
  </div>

  ";
        // line 28
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 28), "get", ["sortable"], "method", false, false, false, 28)) {
            // line 29
            echo "    ";
            $this->loadTemplate("layout/form/search/index.html.twig", "admin/link/index.html.twig", 29)->display(twig_array_merge($context, ["form" =>             // line 30
($context["search_form"] ?? null), "tableId" => "link"]));
            // line 33
            echo "  ";
        }
        // line 34
        echo "
  <ajax-table id=\"link\" url=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link.table");
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "get", ["sortable"], "method", false, false, false, 35)) {
            echo "sortable=\"link\"";
        }
        echo ">
    ";
        // line 36
        echo ($context["table"] ?? null);
        echo "
  </ajax-table>

";
    }

    // line 41
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 43), "get", ["sortable"], "method", false, false, false, 43)) {
            // line 44
            echo "  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>
  ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/link/index.html.twig";
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
        return array (  132 => 44,  130 => 43,  125 => 42,  121 => 41,  113 => 36,  105 => 35,  102 => 34,  99 => 33,  97 => 30,  95 => 29,  93 => 28,  82 => 20,  75 => 17,  72 => 16,  70 => 15,  66 => 14,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/link/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link\\index.html.twig");
    }
}
