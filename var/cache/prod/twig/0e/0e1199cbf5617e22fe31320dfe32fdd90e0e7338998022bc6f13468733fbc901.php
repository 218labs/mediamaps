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

/* layout/form.html.twig */
class __TwigTemplate_6208470fcab14eb07c85bc4bc836ac5c1c3c7b0757dbdedddceab17a8d48d1b3 extends Template
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
\t";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t<div class=\"modal-header\">
\t\t<h5 class=\"modal-title\">";
        // line 4
        echo twig_escape_filter($this->env, (($context["title"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Form"))), "html", null, true);
        echo "</h5>
\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "\"></button>
\t</div>
\t<div class=\"modal-body\">
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t</div>
\t<div class=\"modal-footer justify-content-between\">
\t\t<button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" data-bs-dismiss=\"modal\"><i class=\"bi bi-x-lg\"></i> ";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
        echo "</button>
\t\t<button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none\"><i class=\"bi bi-check2-square\"></i>
\t";
        // line 13
        echo twig_escape_filter($this->env, (($context["submit_label"]) ?? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"))), "html", null, true);
        echo "</button>
\t</div>
\t";
        // line 15
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
        return "layout/form.html.twig";
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
        return array (  71 => 15,  66 => 13,  61 => 11,  55 => 8,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\form.html.twig");
    }
}
