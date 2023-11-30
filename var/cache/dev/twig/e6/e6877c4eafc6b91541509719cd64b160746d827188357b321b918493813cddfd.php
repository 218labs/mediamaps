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
class __TwigTemplate_f91bc124a760558ed0b33c76ac81e72134c0f8e5642b65e84a26307afd466231 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/sidebar.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  56 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"offcanvas offcanvas-start w-100\" tabindex=\"-1\" id=\"sidebar-offcanvas\" aria-labelledby=\"sidebar-offcanvas-label\">
\t<div class=\"offcanvas-header\">
\t\t<h5 class=\"offcanvas-title fw-bold\" id=\"sidebar-offcanvas-label\">{{ \"Applications\"|trans }}</h5>
\t\t<button type=\"button\" class=\"btn-close text-reset rounded-0 shadow-none border-0\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
\t</div>
\t<div class=\"offcanvas-body\">
\t\t<div class=\"container-fluid p-0\">
\t\t\t<div class=\"row\">
\t\t\t\t<h4 class=\"mb-3\">{{ \"RASD\"|trans }}</h4>
            </div>
\t\t</div>
\t</div>
</div>
", "partials/sidebar.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\sidebar.html.twig");
    }
}
