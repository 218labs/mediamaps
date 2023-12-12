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

/* layout/modal/form.html.twig */
class __TwigTemplate_c78e5b917c09b75ab8cf5dd159f207f5d8982ff4002f48d2298f7746869f4f40 extends Template
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
        echo "<ajax-form>
  ";
        // line 2
        if (array_key_exists("form", $context)) {
            // line 3
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
  ";
        } else {
            // line 5
            echo "    <form action=\"";
            ((array_key_exists("form_action", $context)) ? (print (twig_escape_filter($this->env, ($context["form_action"] ?? null), "html", null, true))) : (print ("")));
            echo "\" method=\"post\">
  ";
        }
        // line 7
        echo "  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, (($context["title"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sans titre"))), "html", null, true);
        echo "</h5>
    <button type=\"button\" class=\"btn-close rounded-0 shadow-none\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "\"></button>
  </div>
  <div class=\"modal-body\">
    ";
        // line 12
        echo ((array_key_exists("body", $context)) ? (($context["body"] ?? null)) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget')));
        echo "
  </div>
  <div class=\"modal-footer justify-content-between\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
  ";
        // line 17
        echo twig_escape_filter($this->env, (($context["submit_label"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"))), "html", null, true);
        echo "</button>
  </div>
  ";
        // line 19
        if (array_key_exists("form", $context)) {
            // line 20
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
  ";
        } else {
            // line 22
            echo "    </form>
  ";
        }
        // line 24
        echo "</ajax-form>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/modal/form.html.twig";
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
        return array (  95 => 24,  91 => 22,  85 => 20,  83 => 19,  78 => 17,  73 => 15,  67 => 12,  61 => 9,  57 => 8,  54 => 7,  48 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/modal/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\modal\\form.html.twig");
    }
}
