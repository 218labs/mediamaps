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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_6f40154ff4b80ed008e0230c3405ec405c048710d33760d05a3ab1156be09006 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        echo "\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>
<body>

  <div class=\"container pt-5\">
    <div class=\"row pt-5\">
      <div class=\"col-sm-6 offset-sm-3\">
        <div class=\"status-code\">";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "</div>
        <div class=\"status-text\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "</div>
        ";
        // line 25
        if (((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 25, $this->source); })()) == 404)) {
            // line 26
            echo "          <div class=\"exception-message\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désolé, nous n'avons pas pu trouver cette page"), "html", null, true);
            echo "</div>
        ";
        } elseif ((        // line 27
(isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 27, $this->source); })()) == 403)) {
            // line 28
            echo "          <div class=\"exception-message\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vous n'êtes pas autorisé à accéder à cette page"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 30
            echo "          <div class=\"exception-message\">Un erreur est survenu <span style=\"display:none; isibility:hidden\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 30, $this->source); })()), "message", [], "any", false, false, false, 30)), "html", null, true);
            echo "</span></div>
        ";
        }
        // line 32
        echo "      </div>
    </div>
    <div class=\"row mt-4\">
      <div class=\"col-sm-2 offset-sm-4\">
        <a href=\"#\" class=\"btn btn-outline-secondary rounded-0 shadow-none d-block\" onclick=\"history.go(-1);\">
          <i class=\"bi bi-arrow-left\"></i>
          ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"col-sm-2 pl-0 pl-xs-15\">
        <a href=\"mailto:contact@218labs.ma\" class=\"btn btn-outline-primary rounded-0 shadow-none d-block\">
          <i class=\"bi bi-envelope\"></i>
          ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contactez-nous"), "html", null, true);
        echo "
        </a>
      </div>
    </row>
\t</div> 

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MADAEF - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 6, $this->source); })())), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 8
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    <style>
      body { background: #f1f4f9; font-family: arial; }
      .status-code { font-size: 12rem; line-height: 12rem; text-align: center; color: #777; }
      .status-text { font-size: 2rem; color: #777; text-align: center; text-transform: uppercase; }
      .exception-message { font-size: 1rem; color: #777; text-align: center; }
      .copyright { width: 100%; text-align: center; color: #777; font-size: 12px; }
\t  </style>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
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
        return array (  164 => 8,  154 => 7,  134 => 6,  115 => 44,  106 => 38,  98 => 32,  92 => 30,  86 => 28,  84 => 27,  79 => 26,  77 => 25,  73 => 24,  69 => 23,  61 => 17,  59 => 7,  55 => 6,  48 => 2,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.getLocale() }}\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>{% block title %}MADAEF - {{ status_text|trans }}{% endblock %}</title>
  {% block head %}
    {{ encore_entry_link_tags('app') }}
    <style>
      body { background: #f1f4f9; font-family: arial; }
      .status-code { font-size: 12rem; line-height: 12rem; text-align: center; color: #777; }
      .status-text { font-size: 2rem; color: #777; text-align: center; text-transform: uppercase; }
      .exception-message { font-size: 1rem; color: #777; text-align: center; }
      .copyright { width: 100%; text-align: center; color: #777; font-size: 12px; }
\t  </style>
  {% endblock %}
</head>
<body>

  <div class=\"container pt-5\">
    <div class=\"row pt-5\">
      <div class=\"col-sm-6 offset-sm-3\">
        <div class=\"status-code\">{{ status_code }}</div>
        <div class=\"status-text\">{{ status_text|trans }}</div>
        {% if status_code == 404 %}
          <div class=\"exception-message\">{{ \"Désolé, nous n'avons pas pu trouver cette page\"|trans }}</div>
        {% elseif status_code == 403 %}
          <div class=\"exception-message\">{{ \"Vous n'êtes pas autorisé à accéder à cette page\"|trans }}</div>
        {% else %}
          <div class=\"exception-message\">Un erreur est survenu <span style=\"display:none; isibility:hidden\">{{ exception.message|trans }}</span></div>
        {% endif %}
      </div>
    </div>
    <div class=\"row mt-4\">
      <div class=\"col-sm-2 offset-sm-4\">
        <a href=\"#\" class=\"btn btn-outline-secondary rounded-0 shadow-none d-block\" onclick=\"history.go(-1);\">
          <i class=\"bi bi-arrow-left\"></i>
          {{ \"Retour\"|trans }}
        </a>
      </div>
      <div class=\"col-sm-2 pl-0 pl-xs-15\">
        <a href=\"mailto:contact@218labs.ma\" class=\"btn btn-outline-primary rounded-0 shadow-none d-block\">
          <i class=\"bi bi-envelope\"></i>
          {{ \"Contactez-nous\"|trans }}
        </a>
      </div>
    </row>
\t</div> 

</body>
</html>
", "@Twig/Exception/error.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\bundles\\TwigBundle\\Exception\\error.html.twig");
    }
}
