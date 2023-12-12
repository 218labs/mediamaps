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
class __TwigTemplate_286135d30ea0172a5f3f9249c8b84330fc462ee01355959098ec5fc86f492b14 extends Template
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
        $context["field_type"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field_type", [], "any", false, false, false, 1), "vars", [], "any", false, false, false, 1), "value", [], "any", false, false, false, 1);
        // line 2
        echo "
<style>
\t[data-field-type]:not([data-field-type=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["field_type"] ?? null), "html", null, true);
        echo "\"]) {
\t\tdisplay: none;
\t}
</style>

<ajax-form>
\t";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fermer"), "html", null, true);
        echo "\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t\t<!-- field types -->
\t\t<label class=\"mb-2\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Valeur"), "html", null, true);
        echo "</label>
\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
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
                if ((($context["field_type"] ?? null) == $context["name"])) {
                    // line 24
                    echo "\t\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["field_options"] ?? null));
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
                (((($context["field_type"] ?? null) == $context["name"])) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "html", null, true))) : (print ("")));
                echo "</textarea>
\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t<input type=\"";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" name=\"value[";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "]\" value=\"";
                (((($context["field_type"] ?? null) == $context["name"])) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "value", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "value", [], "any", false, false, false, 41), "html", null, true))) : (print ("")));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</ajax-form>
";
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
        return array (  171 => 50,  166 => 48,  162 => 47,  158 => 45,  151 => 43,  141 => 41,  133 => 39,  131 => 38,  126 => 36,  121 => 33,  118 => 32,  100 => 26,  97 => 25,  92 => 24,  90 => 23,  87 => 22,  85 => 21,  80 => 20,  76 => 19,  72 => 18,  67 => 16,  61 => 13,  57 => 12,  52 => 10,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/setting/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\setting\\form.html.twig");
    }
}
