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

/* layout/table/index.html.twig */
class __TwigTemplate_d397667301fedfb88460b0cb845a60210da2ae876a83572bf5dd0cadd3794e92 extends Template
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
        echo "<div class=\"card rounded-0 border-bottom-0\">
\t<table class=\"table table-hover mb-0\">
\t\t";
        // line 3
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "rows", [], "any", false, false, false, 3))) {
            // line 4
            echo "\t\t\t";
            $this->loadTemplate("layout/table/head.html.twig", "layout/table/index.html.twig", 4)->display($context);
            // line 5
            echo "\t\t";
        }
        // line 6
        echo "\t\t";
        $this->loadTemplate("layout/table/body.html.twig", "layout/table/index.html.twig", 6)->display($context);
        // line 7
        echo "\t</table>
</div>
";
        // line 9
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "rows", [], "any", false, false, false, 9))) {
            // line 10
            echo "\t";
            $this->loadTemplate("layout/table/bottom.html.twig", "layout/table/index.html.twig", 10)->display($context);
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/index.html.twig";
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
        return array (  58 => 10,  56 => 9,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\index.html.twig");
    }
}
