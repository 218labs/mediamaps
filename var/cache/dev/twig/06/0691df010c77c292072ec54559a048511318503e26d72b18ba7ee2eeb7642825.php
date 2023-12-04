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

/* admin/link_capture/screenLinks.html.twig */
class __TwigTemplate_46a619981170bbfc2690ef9fe176599db0a84c4d1eefaf4631b96d89bac94aba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/link_capture/screenLinks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/link_capture/screenLinks.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/link_capture/screenLinks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container mt-5\">
    <div class=\"col-md-8 offset-md-2\">
        <div >
            ";
        // line 8
        if (((isset($context["countLinks"]) || array_key_exists("countLinks", $context) ? $context["countLinks"] : (function () { throw new RuntimeError('Variable "countLinks" does not exist.', 8, $this->source); })()) == 0)) {
            // line 9
            echo "                <div class=\"alert alert-secondary\" role=\"alert\">
                    <h5>All Links has screens</h5>
                </div>
            ";
        } else {
            // line 13
            echo "                <div class=\"alert alert-warning\" role=\"alert\">
                    <h5>There are ";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["countLinks"]) || array_key_exists("countLinks", $context) ? $context["countLinks"] : (function () { throw new RuntimeError('Variable "countLinks" does not exist.', 14, $this->source); })()), "html", null, true);
            echo " links that do not have a screen.</h5>
                </div>
            ";
        }
        // line 17
        echo "            ";
        if ((isset($context["countLinkUpdate"]) || array_key_exists("countLinkUpdate", $context) ? $context["countLinkUpdate"] : (function () { throw new RuntimeError('Variable "countLinkUpdate" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    <h5>";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["countLinkUpdate"]) || array_key_exists("countLinkUpdate", $context) ? $context["countLinkUpdate"] : (function () { throw new RuntimeError('Variable "countLinkUpdate" does not exist.', 19, $this->source); })()), "html", null, true);
            echo " links have been updated out of ";
            echo twig_escape_filter($this->env, (isset($context["countLinks"]) || array_key_exists("countLinks", $context) ? $context["countLinks"] : (function () { throw new RuntimeError('Variable "countLinks" does not exist.', 19, $this->source); })()), "html", null, true);
            echo ".</h5>
                </div>
            ";
        }
        // line 22
        echo "        </div>
        <div class=\"mt-5\">
            ";
        // line 24
        if ((isset($context["countLinks"]) || array_key_exists("countLinks", $context) ? $context["countLinks"] : (function () { throw new RuntimeError('Variable "countLinks" does not exist.', 24, $this->source); })())) {
            // line 25
            echo "                 <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link_DoCapture");
            echo "\" class=\"btn btn-primary\" role=\"button\" data-bs-toggle=\"button\">Get Screens</a>
            ";
        }
        // line 27
        echo "        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/link_capture/screenLinks.html.twig";
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
        return array (  117 => 27,  111 => 25,  109 => 24,  105 => 22,  97 => 19,  94 => 18,  91 => 17,  85 => 14,  82 => 13,  76 => 9,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<div class=\"container mt-5\">
    <div class=\"col-md-8 offset-md-2\">
        <div >
            {% if countLinks == 0 %}
                <div class=\"alert alert-secondary\" role=\"alert\">
                    <h5>All Links has screens</h5>
                </div>
            {% else %}
                <div class=\"alert alert-warning\" role=\"alert\">
                    <h5>There are {{ countLinks }} links that do not have a screen.</h5>
                </div>
            {% endif %}
            {% if countLinkUpdate %}
                <div class=\"alert alert-success\" role=\"alert\">
                    <h5>{{ countLinkUpdate }} links have been updated out of {{ countLinks }}.</h5>
                </div>
            {% endif %}
        </div>
        <div class=\"mt-5\">
            {% if countLinks %}
                 <a href=\"{{ path('link_DoCapture') }}\" class=\"btn btn-primary\" role=\"button\" data-bs-toggle=\"button\">Get Screens</a>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "admin/link_capture/screenLinks.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link_capture\\screenLinks.html.twig");
    }
}
