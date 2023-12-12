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
class __TwigTemplate_d2e2cc6712567adfc6605bade102fdc298342535e748552459fe1d113669ad2b extends Template
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
        (((array_key_exists("tableId", $context) &&  !(null === ($context["tableId"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["tableId"] ?? null), "html", null, true))) : (print ("")));
        echo "\">
          ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
          ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </search-form>
      </div>
    </div>
  </div>
</div>";
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
        return array (  79 => 20,  74 => 18,  68 => 15,  63 => 13,  59 => 12,  55 => 11,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/form/search/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\form\\search\\index.html.twig");
    }
}
