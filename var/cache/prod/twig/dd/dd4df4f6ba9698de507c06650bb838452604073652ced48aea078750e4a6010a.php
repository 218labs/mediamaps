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

/* partials/sidebar.html.twig */
class __TwigTemplate_3aae624849dce3c4305206b2fdf14ce62314f2c0c3608c5304ecfb67147a0ddf extends Template
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
        echo "<div class=\"offcanvas offcanvas-start w-100\" tabindex=\"-1\" id=\"sidebar-offcanvas\" aria-labelledby=\"sidebar-offcanvas-label\">
\t<div class=\"offcanvas-header\">
\t\t<h5 class=\"offcanvas-title fw-bold\" id=\"sidebar-offcanvas-label\">";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Applications"), "html", null, true);
        echo "</h5>
\t\t<button type=\"button\" class=\"btn-close text-reset rounded-0 shadow-none border-0\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t</div>
\t<div class=\"offcanvas-body\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"row\">
\t\t\t\t<h4 class=\"mb-3\">";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("RASD"), "html", null, true);
        echo "</h4>
            </div>
\t\t</div>
\t</div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
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
        return array (  50 => 9,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\sidebar.html.twig");
    }
}
