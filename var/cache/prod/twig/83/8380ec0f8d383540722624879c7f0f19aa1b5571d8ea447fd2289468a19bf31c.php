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

/* layout/table/render.html.twig */
class __TwigTemplate_b7d1ccc429562dd07ca51d6257747f6eb398c2ce92f95ecb99d7c87afdfb3354 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<ajax-table id=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\" url=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" params='";
        echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 1), "query", [], "any", false, false, false, 1), "all", [], "any", false, false, false, 1)));
        echo "'>
  ";
        // line 2
        echo ($context["table"] ?? null);
        echo "
</div>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/render.html.twig";
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
        return array (  46 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/render.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\render.html.twig");
    }
}
