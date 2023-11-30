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

/* layout/form/search/index.html.twig */
class __TwigTemplate_c0d9b523335bc7ec9c6769ea46aab03a75d5a8f955470270ef14f027f636eb9a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/search/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/search/index.html.twig"));

        // line 1
        echo "<div class=\"accordion rounded-0 mb-4\" id=\"search-accordion\">
  <div class=\"accordion-item bg-white rounded-0\">
    <h5 class=\"accordion-header\" id=\"search-heading\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click to show/hide the form"), "html", null, true);
        echo "\">
      <button class=\"accordion-button collapsed rounded-0 shadow-none bg-white text-uppercase text-muted m-0 fs-5\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#search-collapse\" aria-expanded=\"false\" aria-controls=\"search-collapse\">
        <i class=\"bi-search me-1\"></i>
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "
      </button>
    </h5>
    <div id=\"search-collapse\" class=\"accordion-collapse collapse\" aria-labelledby=\"search-heading\" data-bs-parent=\"#search-accordion\">
      <div class=\"accordion-body pt-1\">
        <search-form table=\"";
        // line 11
        (((array_key_exists("tableId", $context) &&  !(null === (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () { throw new RuntimeError('Variable "tableId" does not exist.', 11, $this->source); })())))) ? (print (twig_escape_filter($this->env, (isset($context["tableId"]) || array_key_exists("tableId", $context) ? $context["tableId"] : (function () { throw new RuntimeError('Variable "tableId" does not exist.', 11, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\">
          ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
          ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'widget');
        echo "
          <button type=\"reset\" class=\"btn btn-outline-danger btn-reset rounded-0 shadow-none mt-2\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "
          </button>
          <button class=\"btn btn-outline-primary btn-search float-end rounded-0 shadow-none mt-2\">
            ";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search"), "html", null, true);
        echo "
          </button>
          ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_end');
        echo "
        </search-form>
      </div>
    </div>
  </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/form/search/index.html.twig";
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
        return array (  85 => 20,  80 => 18,  74 => 15,  69 => 13,  65 => 12,  61 => 11,  53 => 6,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion rounded-0 mb-4\" id=\"search-accordion\">
  <div class=\"accordion-item bg-white rounded-0\">
    <h5 class=\"accordion-header\" id=\"search-heading\" title=\"{{ \"Click to show/hide the form\"|trans }}\">
      <button class=\"accordion-button collapsed rounded-0 shadow-none bg-white text-uppercase text-muted m-0 fs-5\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#search-collapse\" aria-expanded=\"false\" aria-controls=\"search-collapse\">
        <i class=\"bi-search me-1\"></i>
        {{ \"Search\"|trans }}
      </button>
    </h5>
    <div id=\"search-collapse\" class=\"accordion-collapse collapse\" aria-labelledby=\"search-heading\" data-bs-parent=\"#search-accordion\">
      <div class=\"accordion-body pt-1\">
        <search-form table=\"{{ tableId ?? '' }}\">
          {{ form_start(form) }}
          {{ form_widget(form) }}
          <button type=\"reset\" class=\"btn btn-outline-danger btn-reset rounded-0 shadow-none mt-2\">
            {{ \"Reset\"|trans }}
          </button>
          <button class=\"btn btn-outline-primary btn-search float-end rounded-0 shadow-none mt-2\">
            {{ \"Search\"|trans }}
          </button>
          {{ form_end(form) }}
        </search-form>
      </div>
    </div>
  </div>
</div>", "layout/form/search/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\form\\search\\index.html.twig");
    }
}
