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

/* layout/table/bulk-actions.html.twig */
class __TwigTemplate_ce52f81b20c475c75eb3283040159f9b4da1a305009aec046c563c6a204ebcf9 extends Template
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
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "bulk_actions", [], "any", false, false, false, 1))) {
            // line 2
            echo "  <div class=\"input-group-text check-all rounded-0 shadow-none\">
    <input type=\"checkbox\" class=\"cb-check-all form-check-input mt-0 cursor-pointer\">
  </div>
  <select class=\"form-control bulk-actions\">
    <option value=\"\">";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions groupées"), "html", null, true);
            echo "</option>
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "bulk_actions", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 8
                echo "      <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "path", [], "any", false, false, false, 8), "html", null, true);
                echo "\" data-name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 8), "html", null, true);
                echo "\">
        ";
                // line 9
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 9), "html", null, true);
                echo "
      </option>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </select>
  <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none bulk-apply\">
    ";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Appliquer"), "html", null, true);
            echo "
  </button>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/bulk-actions.html.twig";
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
        return array (  73 => 14,  69 => 12,  60 => 9,  53 => 8,  49 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/bulk-actions.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\bulk-actions.html.twig");
    }
}
