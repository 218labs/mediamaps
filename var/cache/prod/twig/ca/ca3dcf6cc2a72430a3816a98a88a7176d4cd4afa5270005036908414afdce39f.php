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

/* admin/geographical_systems/index.html.twig */
class __TwigTemplate_2ba9cccba74c27b6471420009a032a120edb1a24c24a1e7f424f2a6a15e38dda extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/geographical_systems/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  <div class=\"row mb-4\">
    <div class=\"col-lg-10 col-9\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-building\"></i>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Geographical systems"), "html", null, true);
        echo "
      </h1>
    </div>
    <div class=\"col-lg-2 col-3\">
      <div class=\"float-end\">
        <ajax-modal url=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("geographical_systems.create");
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
        $this->loadTemplate("layout/form/search/index.html.twig", "admin/geographical_systems/index.html.twig", 24)->display(twig_array_merge($context, ["form" =>         // line 25
($context["search_form"] ?? null), "tableId" => "geographical_systems"]));
        // line 28
        echo "
  <ajax-table id=\"geographical_systems\" url=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("geographical_systems.table");
        echo "\">
    ";
        // line 30
        echo ($context["table"] ?? null);
        echo "
  </ajax-table>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/geographical_systems/index.html.twig";
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
        return array (  91 => 30,  87 => 29,  84 => 28,  82 => 25,  81 => 24,  71 => 17,  65 => 14,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/geographical_systems/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\geographical_systems\\index.html.twig");
    }
}
