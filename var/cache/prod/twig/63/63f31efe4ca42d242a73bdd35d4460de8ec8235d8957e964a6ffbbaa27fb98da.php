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

/* admin/category/index.html.twig */
class __TwigTemplate_55f4ccaf783cf36c9b750506065b0ef5d430a5483f605173b12eef530cb69734 extends Template
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/category/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        echo "
      </h1>
    </div>
    <div class=\"col-lg-3 col-3\">
      <div class=\"float-end\">
        <ajax-modal url=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories.create");
        echo "\" class=\"add-new\">
          <button class=\"btn btn-outline-primary rounded-0 shadow-none\">
            <i class=\"bi bi-plus\"></i>
            <span class=\"d-none d-lg-inline-block\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "</span>
          </button>
        </ajax-modal>
      </div>
    </div>
  </div>

  ";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 24), "get", ["sortable"], "method", false, false, false, 24)) {
            // line 25
            echo "    ";
            $this->loadTemplate("layout/form/search/index.html.twig", "admin/category/index.html.twig", 25)->display(twig_array_merge($context, ["form" =>             // line 26
($context["search_form"] ?? null), "tableId" => "categories"]));
            // line 29
            echo "  ";
        }
        // line 30
        echo "
  <ajax-table id=\"categories\" url=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories.table");
        echo "\" ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 31), "get", ["sortable"], "method", false, false, false, 31)) {
            echo "sortable=\"categories\"";
        }
        echo ">
    ";
        // line 32
        echo ($context["table"] ?? null);
        echo "
  </ajax-table>

";
    }

    // line 37
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 39), "get", ["sortable"], "method", false, false, false, 39)) {
            // line 40
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
        return "admin/category/index.html.twig";
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
        return array (  121 => 40,  119 => 39,  114 => 38,  110 => 37,  102 => 32,  94 => 31,  91 => 30,  88 => 29,  86 => 26,  84 => 25,  82 => 24,  72 => 17,  66 => 14,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/category/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\category\\index.html.twig");
    }
}
