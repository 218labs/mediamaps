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

/* admin/media/index.html.twig */
class __TwigTemplate_6b4303954189b9afae480c92ea3becf037234129064e0e984dbfdf315cd67a70 extends Template
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/media/index.html.twig", 1);
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
        <i class=\"bi bi-megaphone\"></i>
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media"), "html", null, true);
        echo "
      </h1>
    </div>
    <div class=\"col-lg-2 col-3\">
      <div class=\"float-end\">
        <a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media.create");
        echo "\" class=\"btn btn-outline-primary rounded-0 shadow-none\">
        <i class=\"bi bi-plus\"></i>
        <span class=\"d-none d-lg-inline-block\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add"), "html", null, true);
        echo "</span>
        </a>
        ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo "   
        ";
            // line 19
            $this->loadTemplate("partials/export-results.html.twig", "admin/media/index.html.twig", 19)->display(twig_array_merge($context, ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media.export")]));
            // line 20
            echo "        ";
        }
        // line 21
        echo "      </div>
    </div>
  </div>

  ";
        // line 25
        $this->loadTemplate("layout/form/search/index.html.twig", "admin/media/index.html.twig", 25)->display(twig_array_merge($context, ["form" =>         // line 26
($context["search_form"] ?? null), "tableId" => "media"]));
        // line 29
        echo "
  <ajax-table id=\"media\" url=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media.table");
        echo "\">
    ";
        // line 31
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
        return "admin/media/index.html.twig";
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
        return array (  100 => 31,  96 => 30,  93 => 29,  91 => 26,  90 => 25,  84 => 21,  81 => 20,  79 => 19,  75 => 18,  70 => 16,  65 => 14,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/media/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\media\\index.html.twig");
    }
}
