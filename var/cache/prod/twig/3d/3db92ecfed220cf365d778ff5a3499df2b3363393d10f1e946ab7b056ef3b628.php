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

/* admin/compaign/index.html.twig */
class __TwigTemplate_99f43ffdc569ec0e4d17b58ac3a9d4b4c53c32180fadea4374fb904727b452a6 extends Template
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/compaign/index.html.twig", 1);
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
        <i class=\"bi bi-inbox\"></i>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media compaigns"), "html", null, true);
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
            $this->loadTemplate("partials/export-results.html.twig", "admin/compaign/index.html.twig", 15)->display(twig_array_merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compaigns.export")]));
            // line 16
            echo "      ";
        }
        // line 17
        echo "        <ajax-modal url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compaigns.create");
        echo "\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "</span>
          </button>
        </ajax-modal>
      </div>
    </div>
  </div>

  ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 27), "get", ["sortable"], "method", false, false, false, 27)) {
            // line 28
            echo "    ";
            $this->loadTemplate("layout/form/search/index.html.twig", "admin/compaign/index.html.twig", 28)->display(twig_array_merge($context, ["form" =>             // line 29
($context["search_form"] ?? null), "tableId" => "compaigns"]));
            // line 32
            echo "  ";
        }
        // line 33
        echo "
  <ajax-table id=\"compaigns\" url=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("compaigns.table");
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 34), "get", ["sortable"], "method", false, false, false, 34)) {
            echo "sortable=\"compaigns\"";
        }
        echo ">
    ";
        // line 35
        echo ($context["table"] ?? null);
        echo "
  </ajax-table>

";
    }

    // line 40
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 42), "get", ["sortable"], "method", false, false, false, 42)) {
            // line 43
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
        return "admin/compaign/index.html.twig";
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
        return array (  131 => 43,  129 => 42,  124 => 41,  120 => 40,  112 => 35,  104 => 34,  101 => 33,  98 => 32,  96 => 29,  94 => 28,  92 => 27,  82 => 20,  75 => 17,  72 => 16,  70 => 15,  66 => 14,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/compaign/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\compaign\\index.html.twig");
    }
}
