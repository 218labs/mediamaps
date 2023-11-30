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

/* emails/password-reset.html.twig */
class __TwigTemplate_3ac9c2eedd0856fa3846a9041c2322c41a3753f7ed13504a7a2d286e2648883e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/password-reset.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/password-reset.html.twig"));

        $this->parent = $this->loadTemplate("layout/email.html.twig", "emails/password-reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Réinitialiser le mot de passe";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<container>  
  <row>
    <p>Bonjour,</p>
    <p>Une réinitialisation du mot de passe a été demandée pour le compte suivant: <b>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["user_email"]) || array_key_exists("user_email", $context) ? $context["user_email"] : (function () { throw new RuntimeError('Variable "user_email" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</b></p>
    <p>S'il s'agit d'une erreur, ignorez simplement cet e-mail et rien ne se passera.</p>
    <p>Pour réinitialiser votre mot de passe, visitez le lien suivant:<br><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["reset_link"]) || array_key_exists("reset_link", $context) ? $context["reset_link"] : (function () { throw new RuntimeError('Variable "reset_link" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\"><b>";
        echo twig_escape_filter($this->env, (isset($context["reset_link"]) || array_key_exists("reset_link", $context) ? $context["reset_link"] : (function () { throw new RuntimeError('Variable "reset_link" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</b></a></p>
    <p>Cordialement</p>
  </row>
</container>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 18
        echo "<row>
<columns small=\"12\" large=\"12\">
<center>
  <small style=\"color:#FFF\">Place carrée, Mahaj Ryad, Immeuble Business 5, 4ème étage Hay Riad – Rabat</small>
</center>
<center>
  <small><a href=\"http://www.madaef.ma\">www.madaef.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"mailto:contact@madaef.ma\">contact@madaef.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"tel:0530574100\">0530574100</a></small> 
</center>
</columns>
</row>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/password-reset.html.twig";
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
        return array (  126 => 18,  116 => 17,  99 => 11,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/email.html.twig' %}

{% block title %}Réinitialiser le mot de passe{% endblock %}

{% block body %}
<container>  
  <row>
    <p>Bonjour,</p>
    <p>Une réinitialisation du mot de passe a été demandée pour le compte suivant: <b>{{ user_email }}</b></p>
    <p>S'il s'agit d'une erreur, ignorez simplement cet e-mail et rien ne se passera.</p>
    <p>Pour réinitialiser votre mot de passe, visitez le lien suivant:<br><a href=\"{{ reset_link }}\"><b>{{ reset_link }}</b></a></p>
    <p>Cordialement</p>
  </row>
</container>
{% endblock %}

{% block footer %}
<row>
<columns small=\"12\" large=\"12\">
<center>
  <small style=\"color:#FFF\">Place carrée, Mahaj Ryad, Immeuble Business 5, 4ème étage Hay Riad – Rabat</small>
</center>
<center>
  <small><a href=\"http://www.madaef.ma\">www.madaef.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"mailto:contact@madaef.ma\">contact@madaef.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"tel:0530574100\">0530574100</a></small> 
</center>
</columns>
</row>
{% endblock %}", "emails/password-reset.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\emails\\password-reset.html.twig");
    }
}
