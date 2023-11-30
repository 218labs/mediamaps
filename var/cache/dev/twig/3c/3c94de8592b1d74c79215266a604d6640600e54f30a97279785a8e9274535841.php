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

/* layout/table/actions.html.twig */
class __TwigTemplate_4898268f08e1e9f5390d0786430612b648a826c55107460da950456e3c672580 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/actions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/actions.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">
  <button 
    type=\"button\" 
    class=\"btn btn-light btn-sm rounded-0 shadow-none dropdown-toggle\" 
    data-bs-toggle=\"dropdown\" 
    aria-expanded=\"false\"
  >
    <i class=\"bi bi-list\"></i>
  </button>
  <ul class=\"dropdown-menu\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 11, $this->source); })()), "actions", [], "any", false, false, false, 11));
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
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 12
            echo "      <li class=\"action-";
            (((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 12) == "divider")) ? (print ("divider")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "name", [], "any", false, false, false, 12), "html", null, true))));
            echo "\">
        ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 13) == "divider")) {
                // line 14
                echo "          ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 14, $this->source); })()), "actions", [], "any", false, false, false, 14)) > twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 14))) {
                    // line 15
                    echo "            <hr class=\"dropdown-divider m-0 my-1\">
          ";
                }
                // line 17
                echo "        ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 17) == "link")) {
                // line 18
                echo "          <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "path", [], "any", false, false, false, 18), "html", null, true);
                echo "\" class=\"dropdown-item\" ";
                echo $this->extensions['App\Twig\AttributesExtension']->renderAttributes(twig_get_attribute($this->env, $this->source, $context["action"], "attrs", [], "any", false, false, false, 18));
                echo ">
            <i class=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 19), "html", null, true);
                echo "\"></i>
            ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 20), "html", null, true);
                echo "
          </a>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 22
$context["action"], "type", [], "any", false, false, false, 22) == "modal")) {
                // line 23
                echo "          <ajax-modal 
            url=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "path", [], "any", false, false, false, 24), "html", null, true);
                echo "\"
            ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["action"], "confirm", [], "any", false, false, false, 25)) {
                    echo "confirm=\"1\"";
                }
                // line 26
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "modal_message", [], "any", false, false, false, 26)) {
                    echo "message=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["action"], "modal_message", [], "any", false, false, false, 26)), "html", null, true);
                    echo "\"";
                }
                // line 27
                echo "            ";
                echo $this->extensions['App\Twig\AttributesExtension']->renderAttributes(twig_get_attribute($this->env, $this->source, $context["action"], "attrs", [], "any", false, false, false, 27));
                echo "
          >
            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
              <i class=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 30), "html", null, true);
                echo "\"></i>
              ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 31), "html", null, true);
                echo "
            </a>
          </ajax-modal>
        ";
            }
            // line 35
            echo "      </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/actions.html.twig";
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
        return array (  158 => 37,  143 => 35,  136 => 31,  132 => 30,  125 => 27,  118 => 26,  114 => 25,  110 => 24,  107 => 23,  105 => 22,  100 => 20,  96 => 19,  89 => 18,  86 => 17,  82 => 15,  79 => 14,  77 => 13,  72 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"btn-group\">
  <button 
    type=\"button\" 
    class=\"btn btn-light btn-sm rounded-0 shadow-none dropdown-toggle\" 
    data-bs-toggle=\"dropdown\" 
    aria-expanded=\"false\"
  >
    <i class=\"bi bi-list\"></i>
  </button>
  <ul class=\"dropdown-menu\">
    {% for action in row.actions %}
      <li class=\"action-{{ action.type == 'divider' ? 'divider' : action.name }}\">
        {% if action.type == 'divider' %}
          {% if row.actions|length > loop.index %}
            <hr class=\"dropdown-divider m-0 my-1\">
          {% endif %}
        {% elseif action.type == 'link' %}
          <a href=\"{{ action.path }}\" class=\"dropdown-item\" {{ chm_attributes(action.attrs)|raw }}>
            <i class=\"{{ action.icon }}\"></i>
            {{ action.label }}
          </a>
        {% elseif action.type == 'modal' %}
          <ajax-modal 
            url=\"{{ action.path }}\"
            {% if action.confirm %}confirm=\"1\"{% endif %}
            {% if action.modal_message %}message=\"{{ action.modal_message|trans }}\"{% endif %}
            {{ chm_attributes(action.attrs)|raw }}
          >
            <a class=\"dropdown-item\" href=\"javascript:void(0)\">
              <i class=\"{{ action.icon }}\"></i>
              {{ action.label }}
            </a>
          </ajax-modal>
        {% endif %}
      </li>
    {% endfor %}
  </ul>
</div>
", "layout/table/actions.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\actions.html.twig");
    }
}
