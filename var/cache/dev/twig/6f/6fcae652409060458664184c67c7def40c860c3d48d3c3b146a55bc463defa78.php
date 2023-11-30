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

/* admin/setting/form.html.twig */
class __TwigTemplate_272442326371a2d82d035a0deaf60177d4842b35ed4b20d39367aebb66171de6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/form.html.twig"));

        // line 1
        $context["field_type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), "field_type", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "value", [], "any", false, false, false, 1);
        // line 2
        echo "
<style>
\t[data-field-type]:not([data-field-type=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\"]) {
\t\tdisplay: none;
\t}
</style>

<ajax-form>
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fermer"), "html", null, true);
        echo "\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'widget');
        echo "
\t\t<!-- field types -->
\t\t<label class=\"mb-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valeur"), "html", null, true);
        echo "</label>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["label"]) {
            // line 20
            echo "\t\t\t<div class=\"mb-3\" data-field-type=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\">
\t\t\t\t";
            // line 21
            if (twig_in_filter($context["name"], ["choice", "checkbox", "radio"])) {
                // line 22
                echo "\t\t\t\t\t<div class=\"items\">
\t\t\t\t\t\t";
                // line 23
                if (((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 23, $this->source); })()) == $context["name"])) {
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["field_options"]) || array_key_exists("field_options", $context) ? $context["field_options"] : (function () { throw new RuntimeError('Variable "field_options" does not exist.', 24, $this->source); })()));
                    foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                        // line 25
                        echo "\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"value[";
                        // line 26
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "][";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "]\" class=\"form-control\" value=\"";
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\" data-key=\"";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input-group-text bg-danger text-white deleteLine\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 32
                    echo "\t\t\t\t\t\t";
                }
                // line 33
                echo "\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm addLine\">
\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ajouter un élément"), "html", null, true);
                echo "
\t\t\t\t\t</button>
\t\t\t\t";
            } elseif (twig_in_filter(            // line 38
$context["name"], ["textarea", "json"])) {
                // line 39
                echo "\t\t\t\t\t<textarea name=\"value[";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "]\" class=\"form-control\">";
                ((((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 39, $this->source); })()) == $context["name"])) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "value", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "html", null, true))) : (print ("")));
                echo "</textarea>
\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t<input type=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" name=\"value[";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "]\" value=\"";
                ((((isset($context["field_type"]) || array_key_exists("field_type", $context) ? $context["field_type"] : (function () { throw new RuntimeError('Variable "field_type" does not exist.', 41, $this->source); })()) == $context["name"])) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "value", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "html", null, true))) : (print ("")));
                echo "\" class=\"form-control\"/>
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\">";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fermer"), "html", null, true);
        echo "</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\">";
        // line 48
        echo twig_escape_filter($this->env, (($context["submit_label"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enregistrer"))), "html", null, true);
        echo "</button>
\t</div>
\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
</ajax-form>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/setting/form.html.twig";
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
        return array (  177 => 50,  172 => 48,  168 => 47,  164 => 45,  157 => 43,  147 => 41,  139 => 39,  137 => 38,  132 => 36,  127 => 33,  124 => 32,  106 => 26,  103 => 25,  98 => 24,  96 => 23,  93 => 22,  91 => 21,  86 => 20,  82 => 19,  78 => 18,  73 => 16,  67 => 13,  63 => 12,  58 => 10,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set field_type = form.field_type.vars.value %}

<style>
\t[data-field-type]:not([data-field-type=\"{{ field_type }}\"]) {
\t\tdisplay: none;
\t}
</style>

<ajax-form>
\t{{ form_start(form) }}
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">{{ title }}</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"{{ \"Fermer\"|trans }}\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t{{ form_widget(form) }}
\t\t<!-- field types -->
\t\t<label class=\"mb-2\">{{ \"Valeur\"|trans }}</label>
\t\t{% for name,label in types %}
\t\t\t<div class=\"mb-3\" data-field-type=\"{{ name }}\">
\t\t\t\t{% if name in ['choice', 'checkbox', 'radio'] %}
\t\t\t\t\t<div class=\"items\">
\t\t\t\t\t\t{% if field_type == name %}
\t\t\t\t\t\t\t{% for key, value in field_options %}
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"value[{{ name }}][{{ key }}]\" class=\"form-control\" value=\"{{ value }}\" data-key=\"{{ key }}\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"input-group-text bg-danger text-white deleteLine\">
\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-dash\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm addLine\">
\t\t\t\t\t\t<i class=\"bi bi-plus\"></i>
\t\t\t\t\t\t{{ \"Ajouter un élément\"|trans }}
\t\t\t\t\t</button>
\t\t\t\t{% elseif name in ['textarea', 'json'] %}
\t\t\t\t\t<textarea name=\"value[{{ name }}]\" class=\"form-control\">{{ field_type == name ? form.value.vars.value : '' }}</textarea>
\t\t\t\t{% else %}
\t\t\t\t\t<input type=\"{{ name }}\" name=\"value[{{ name }}]\" value=\"{{ field_type == name ? form.value.vars.value : '' }}\" class=\"form-control\"/>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\">{{ \"Fermer\"|trans }}</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\">{{ submit_label ?? \"Enregistrer\"|trans }}</button>
\t</div>
\t{{ form_end(form) }}
</ajax-form>
", "admin/setting/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\setting\\form.html.twig");
    }
}
