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

/* admin/link/form.html.twig */
class __TwigTemplate_badfe0c60320c54758ecaabe56f8a9e65c497681c22d12923b21099493cbc39d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/link/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  <h1 class=\"page-name\">
    <i class=\"bi bi-megaphone\"></i>
    ";
        // line 7
        if ( !twig_length_filter($this->env, ($context["entity"] ?? null))) {
            // line 8
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add link"), "html", null, true);
            echo "
    ";
        } else {
            // line 10
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit link"), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "  </h1>

<style>
  .port-title {
    background-color: #6c757d !important;
  }
  fieldset .col-form-label {
    margin-bottom: 8px;
  }
  .card-entry fieldset {
    margin-bottom: 0px !important;
  }
  .delete-entry {
    right: 15px;
  }
  .entries {
    counter-reset: compagne_counter;
  }
  .compagne-counter:before {
    counter-increment: compagne_counter;
    content: counter(compagne_counter);
    position: absolute;
    top: 5px;
    right: 45px;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--color-primary);
  }
</style>
 <ajax-form>
 ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    
<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "compaign", [], "any", false, false, false, 46), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
   ";
        // line 49
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 49)) {
            echo " ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "user", [], "any", false, false, false, 49), 'row');
            echo " ";
        }
        // line 50
        echo "  </div>
</div>
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 52), 'row');
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link", [], "any", false, false, false, 53), 'row');
        echo "
    

<div class=\"row\">
  <div class=\"col-sm-6\">
  ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 58), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "published_on", [], "any", false, false, false, 61), 'row');
        echo "
  </div>
</div>

<div class=\"row\">
  <div class=\"col-sm-6\">
   ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "geographical_scope", [], "any", false, false, false, 67), 'row');
        echo "
   ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "orientation", [], "any", false, false, false, 68), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file_name", [], "any", false, false, false, 71), 'row');
        echo "
  </div>
</div>


<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "
    </button>

";
        // line 86
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</ajax-form>

";
    }

    // line 91
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 92
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
   
 
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link");
        echo "'
    }, 1000)
  })
  </script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/link/form.html.twig";
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
        return array (  210 => 100,  198 => 92,  194 => 91,  186 => 86,  180 => 83,  173 => 79,  162 => 71,  156 => 68,  152 => 67,  143 => 61,  137 => 58,  129 => 53,  125 => 52,  121 => 50,  115 => 49,  109 => 46,  102 => 42,  70 => 12,  64 => 10,  58 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/link/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link\\form.html.twig");
    }
}
