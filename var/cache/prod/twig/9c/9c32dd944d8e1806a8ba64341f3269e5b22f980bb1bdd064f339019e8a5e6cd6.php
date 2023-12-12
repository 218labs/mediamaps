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

/* partials/sidebar-app.html.twig */
class __TwigTemplate_4346265b598d6e79cc48ce2699497f7c3c81c74eb77a85ff63175f9fdf49a10f extends Template
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
        echo "<div class=\"col-6 col-sm-2 mb-4\">
\t<a href=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" class=\"card text-decoration-none text-muted\" style=\"min-height: 105px;\">
\t\t<div class=\"card-body\">
\t\t\t<span class=\"fs-4\">";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null));
        echo "</span>
\t\t\t<i class=\"bi ";
        // line 5
        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
        echo " position-absolute end-0 top-0 me-2 text-muted fs-2\" style=\"opacity: 0.3;\"></i>
\t\t</div>
\t</a>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/sidebar-app.html.twig";
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
        return array (  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/sidebar-app.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\sidebar-app.html.twig");
    }
}
