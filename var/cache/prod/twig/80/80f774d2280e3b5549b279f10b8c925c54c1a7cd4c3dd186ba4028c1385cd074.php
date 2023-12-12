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

/* layout/table/head.html.twig */
class __TwigTemplate_88eda420d30a3c47dfea272e8c021e582e6e97cbcb8ced788b16875a4c14d4af extends Template
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
        echo "<thead>
  <tr>
    ";
        // line 3
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "bulk_actions", [], "any", false, false, false, 3))) {
            // line 4
            echo "      <th width=\"29\">
        <input type=\"checkbox\" class=\"cb-check-all form-check-input cursor-pointer\">
      </th> 
    ";
        }
        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "columns", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 9
            echo "      <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 9), "html", null, true);
            echo "</th>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "has_actions", [], "any", false, false, false, 11)) {
            // line 12
            echo "      <th width=\"50\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
            echo "</th>
    ";
        }
        // line 14
        echo "  </tr>
</thead>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/head.html.twig";
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
        return array (  72 => 14,  66 => 12,  63 => 11,  54 => 9,  49 => 8,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/head.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\head.html.twig");
    }
}
