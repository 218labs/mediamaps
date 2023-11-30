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

/* front/security/login.html.twig */
class __TwigTemplate_49a70c22893de7f966928ec02a6355ab44d799c5977ab478b1407ddbf541a38a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/login.html.twig"));

        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\theight: 100vh;
\t\t\toverflow-x: hidden;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tbackground: var(--color-primary) url(";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hello.jpg"), "html", null, true);
        echo ") top right no-repeat;
\t\t}
\t\t.login-form {
\t\t\tbackground-color: #fff;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t\tmax-width: 570px;
\t\t}
\t\t.divider p {
\t\t\tcolor: var(--color-secondary);
\t\t}
\t\t.divider:after,
\t\t.divider:before {
\t\t\tcontent: \"\";
\t\t\tflex: 1;
\t\t\theight: 1px;
\t\t\tbackground: var(--color-secondary);
\t\t}
\t</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 37
        echo "\t<div class=\"login-form d-flex align-items-center\">
\t\t<div class=\"card border-0 w-100 px-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"text-center my-5\">
\t\t\t\t\t<a href=\"#\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">MEDIA MAPS</a>
\t\t\t\t</div>
\t\t\t\t";
        // line 43
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })()), "messageData", [], "any", false, false, false, 45)), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "flashes", ["error"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            echo "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul class=\"list-unstyled m-0 p-0\">
\t\t\t\t\t\t\t<li>";
            // line 51
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t 
\t\t\t\t<form action=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"mb-2 text-muted\" for=\"email\">
\t\t\t\t\t\t\t";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" autofocus required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"mb-2 w-100\">
\t\t\t\t\t\t\t<label class=\"text-muted\" for=\"password\">
\t\t\t\t\t\t\t\t";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" autocomplete=\"off\" class=\"form-control\" required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4 text-center\">
\t\t\t\t\t\t<ajax-modal url=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("password.reset");
        echo "\" width=\"400\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block float-none float-sm-start\">
\t\t\t\t\t\t\t";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password reset"), "html", null, true);
        echo "
\t\t\t\t\t\t</ajax-modal>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded-pill px-5 text-white float-none float-sm-end\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Login"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/security/login.html.twig";
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
        return array (  206 => 76,  201 => 74,  197 => 73,  188 => 67,  180 => 62,  175 => 60,  169 => 57,  165 => 56,  162 => 55,  152 => 51,  148 => 49,  143 => 48,  137 => 45,  134 => 44,  132 => 43,  124 => 37,  114 => 36,  81 => 12,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/auth.html.twig' %}

{% block head %}
\t{{ parent() }}
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\theight: 100vh;
\t\t\toverflow-x: hidden;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tbackground: var(--color-primary) url({{ asset('assets/img/hello.jpg') }}) top right no-repeat;
\t\t}
\t\t.login-form {
\t\t\tbackground-color: #fff;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t\tmax-width: 570px;
\t\t}
\t\t.divider p {
\t\t\tcolor: var(--color-secondary);
\t\t}
\t\t.divider:after,
\t\t.divider:before {
\t\t\tcontent: \"\";
\t\t\tflex: 1;
\t\t\theight: 1px;
\t\t\tbackground: var(--color-secondary);
\t\t}
\t</style>
{% endblock %}

{% block body %}
\t<div class=\"login-form d-flex align-items-center\">
\t\t<div class=\"card border-0 w-100 px-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"text-center my-5\">
\t\t\t\t\t<a href=\"#\" style=\"font-size: 1.5; font-weight: 800; color: #0075b9;\">MEDIA MAPS</a>
\t\t\t\t</div>
\t\t\t\t{% if error %}
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t{{ error.messageKey|trans(error.messageData) }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul class=\"list-unstyled m-0 p-0\">
\t\t\t\t\t\t\t<li>{{ message }}</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t 
\t\t\t\t<form action=\"{{ path('login') }}\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"mb-2 text-muted\" for=\"email\">
\t\t\t\t\t\t\t{{ \"Email\"|trans }}
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ email }}\" class=\"form-control\" autofocus required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"mb-2 w-100\">
\t\t\t\t\t\t\t<label class=\"text-muted\" for=\"password\">
\t\t\t\t\t\t\t\t{{ \"Password\"|trans }}
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" autocomplete=\"off\" class=\"form-control\" required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4 text-center\">
\t\t\t\t\t\t<ajax-modal url=\"{{ path('password.reset') }}\" width=\"400\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block float-none float-sm-start\">
\t\t\t\t\t\t\t{{ \"Password reset\"|trans }}
\t\t\t\t\t\t</ajax-modal>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded-pill px-5 text-white float-none float-sm-end\">{{ \"Login\"|trans }}</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div>

\t\t</div>
\t</div>
{% endblock %}
", "front/security/login.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\front\\security\\login.html.twig");
    }
}
