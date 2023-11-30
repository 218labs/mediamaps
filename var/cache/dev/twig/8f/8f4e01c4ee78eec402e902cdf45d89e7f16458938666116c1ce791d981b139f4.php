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

/* layout/table/bottom.html.twig */
class __TwigTemplate_e4c343b9788316aea2ba2ea8b0447ac709e5ab392ed0f85f3d24eda3ae4bc8fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/bottom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/table/bottom.html.twig"));

        // line 1
        echo "<div class=\"row table-bottom mt-3\">
  <div class=\"col-md-6 mb-3 mb-lg-0\">
    <div class=\"input-group m-0\">
      ";
        // line 4
        $this->loadTemplate("layout/table/bulk-actions.html.twig", "layout/table/bottom.html.twig", 4)->display($context);
        // line 5
        echo "      <select class=\"form-control perpage\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Éléments par page"), "html", null, true);
        echo "\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "perpages", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["perpage"]) {
            // line 7
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $context["perpage"], "html", null, true);
            echo "\" ";
            echo ((($context["perpage"] == twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 7, $this->source); })()), "perpage", [], "any", false, false, false, 7))) ? ("selected") : (""));
            echo ">
            ";
            // line 8
            echo twig_escape_filter($this->env, $context["perpage"], "html", null, true);
            echo "
          </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['perpage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "      </select>
      <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none btn-loading\">
        <span class=\"spinner-border spinner-border-sm\"></span>
      </button>
    </div>
  </div>
  <div class=\"col-md-6\">
    ";
        // line 18
        $this->loadTemplate("layout/table/pagination.html.twig", "layout/table/bottom.html.twig", 18)->display($context);
        // line 19
        echo "  </div>
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
        return "layout/table/bottom.html.twig";
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
        return array (  86 => 19,  84 => 18,  75 => 11,  66 => 8,  59 => 7,  55 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row table-bottom mt-3\">
  <div class=\"col-md-6 mb-3 mb-lg-0\">
    <div class=\"input-group m-0\">
      {% include \"layout/table/bulk-actions.html.twig\" %}
      <select class=\"form-control perpage\" title=\"{{ \"Éléments par page\"|trans }}\">
        {% for perpage in data.perpages %}
          <option value=\"{{ perpage }}\" {{ perpage == data.perpage ? 'selected' : '' }}>
            {{ perpage }}
          </option>
        {% endfor %}
      </select>
      <button type=\"button\" class=\"btn btn-outline-secondary rounded-0 shadow-none btn-loading\">
        <span class=\"spinner-border spinner-border-sm\"></span>
      </button>
    </div>
  </div>
  <div class=\"col-md-6\">
    {% include \"layout/table/pagination.html.twig\" %}
  </div>
</div>
", "layout/table/bottom.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\bottom.html.twig");
    }
}
