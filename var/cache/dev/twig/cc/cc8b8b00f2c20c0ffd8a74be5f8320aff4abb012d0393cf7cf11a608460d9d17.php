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

/* layout/table/body.html.twig */
class __TwigTemplate_4faf0af388c928017f1c74ca2e45cc5c2d2de880df5ffd46c3e6da2036e540f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/body.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/body.html.twig"));

        // line 1
        echo "<tbody>
  ";
        // line 2
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), "rows", [], "any", false, false, false, 2))) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "rows", [], "any", false, false, false, 3));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 4
                echo "    <tr class=\"mb-0\" data-pkv=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "pkv", [], "any", false, false, false, 4), "html", null, true);
                echo "\">
      ";
                // line 5
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 5, $this->source); })()), "bulk_actions", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "        <td class=\"col-check-all\">
          <input
            type=\"checkbox\" 
            value=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "pkv", [], "any", false, false, false, 9), "html", null, true);
                    echo "\"
            class=\"cb-item form-check-input cursor-pointer\"
          />
        </td> 
      ";
                }
                // line 14
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 14, $this->source); })()), "columns", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 15
                    echo "        <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"td_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 15), "html", null, true);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["row"], twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 15), [], "array", false, false, false, 15);
                    echo "</td>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "      ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "actions", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "        <td align=\"center\" class=\"actions\" data-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
                    echo "\">
          ";
                    // line 19
                    $this->loadTemplate("layout/table/actions.html.twig", "layout/table/body.html.twig", 19)->display($context);
                    // line 20
                    echo "        </td>
      ";
                }
                // line 22
                echo "    </tr>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  ";
        } else {
            // line 25
            echo "  <tr>
    <td colspan=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 26, $this->source); })()), "columns", [], "any", false, false, false, 26)), "html", null, true);
            echo "\" align=\"center\" class=\"empty\">
      ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun résultat n'a été trouvé"), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        // line 31
        echo "</tbody>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/body.html.twig";
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
        return array (  150 => 31,  143 => 27,  139 => 26,  136 => 25,  133 => 24,  118 => 22,  114 => 20,  112 => 19,  107 => 18,  104 => 17,  91 => 15,  86 => 14,  78 => 9,  73 => 6,  71 => 5,  66 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tbody>
  {% if data.rows|length %}
    {% for row in data.rows %}
    <tr class=\"mb-0\" data-pkv=\"{{ row.pkv }}\">
      {% if data.bulk_actions|length %}
        <td class=\"col-check-all\">
          <input
            type=\"checkbox\" 
            value=\"{{ row.pkv }}\"
            class=\"cb-item form-check-input cursor-pointer\"
          />
        </td> 
      {% endif %}
      {% for column in data.columns %}
        <td data-label=\"{{ column.label }}\" class=\"td_{{ column.name }}\">{{ row[column.name]|raw }}</td>
      {% endfor %}
      {% if row.actions|length %}
        <td align=\"center\" class=\"actions\" data-label=\"{{ \"Actions\"|trans }}\">
          {% include \"layout/table/actions.html.twig\" %}
        </td>
      {% endif %}
    </tr>
    {% endfor %}
  {% else %}
  <tr>
    <td colspan=\"{{ data.columns|length }}\" align=\"center\" class=\"empty\">
      {{ \"Aucun résultat n'a été trouvé\"|trans }}
    </td>
  </tr>
  {% endif %}
</tbody>
", "layout/table/body.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\body.html.twig");
    }
}
