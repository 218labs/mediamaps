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

/* layout/modal/form.html.twig */
class __TwigTemplate_2e93b27cd0bb4c7df62a90bfe33acb478ff4beb9de30c58d028b26027f08f075 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/modal/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/modal/form.html.twig"));

        // line 1
        echo "<ajax-form>
  ";
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
            echo "
  ";
        } else {
            // line 5
            echo "    <form action=\"";
            ((array_key_exists("form_action", $context)) ? (print (twig_escape_filter($this->env, (isset($context["form_action"]) || array_key_exists("form_action", $context) ? $context["form_action"] : (function () { throw new RuntimeError('Variable "form_action" does not exist.', 5, $this->source); })()), "html", null, true))) : (print ("")));
            echo "\" method=\"post\">
  ";
        }
        // line 7
        echo "  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, (($context["title"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sans titre"))), "html", null, true);
        echo "</h5>
    <button type=\"button\" class=\"btn-close rounded-0 shadow-none\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "\"></button>
  </div>
  <div class=\"modal-body\">
    ";
        // line 12
        echo ((array_key_exists("body", $context)) ? ((isset($context["body"]) || array_key_exists("body", $context) ? $context["body"] : (function () { throw new RuntimeError('Variable "body" does not exist.', 12, $this->source); })())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'widget')));
        echo "
  </div>
  <div class=\"modal-footer justify-content-between\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
  ";
        // line 17
        echo twig_escape_filter($this->env, (($context["submit_label"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"))), "html", null, true);
        echo "</button>
  </div>
  ";
        // line 19
        if (array_key_exists("form", $context)) {
            // line 20
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
            echo "
  ";
        } else {
            // line 22
            echo "    </form>
  ";
        }
        // line 24
        echo "</ajax-form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/modal/form.html.twig";
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
        return array (  101 => 24,  97 => 22,  91 => 20,  89 => 19,  84 => 17,  79 => 15,  73 => 12,  67 => 9,  63 => 8,  60 => 7,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ajax-form>
  {% if form is defined %}
    {{ form_start(form) }}
  {% else %}
    <form action=\"{{ form_action is defined ? form_action : '' }}\" method=\"post\">
  {% endif %}
  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">{{ title ?? \"Sans titre\"|trans }}</h5>
    <button type=\"button\" class=\"btn-close rounded-0 shadow-none\" data-bs-dismiss=\"modal\" aria-label=\"{{ \"Close\"|trans }}\"></button>
  </div>
  <div class=\"modal-body\">
    {{ body is defined ? body|raw : form_widget(form) }}
  </div>
  <div class=\"modal-footer justify-content-between\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> {{ \"Close\"|trans }}</button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
  {{ submit_label ?? \"Save\"|trans }}</button>
  </div>
  {% if form is defined %}
    {{ form_end(form) }}
  {% else %}
    </form>
  {% endif %}
</ajax-form>
", "layout/modal/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\modal\\form.html.twig");
    }
}
