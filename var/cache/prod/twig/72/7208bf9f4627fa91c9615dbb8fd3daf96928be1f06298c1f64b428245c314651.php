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

/* layout/modal/index.html.twig */
class __TwigTemplate_d429dc77cf4d8866a16e75601b2e5ae5dc18fd3c76e798a6a4b9f15885710ce8 extends Template
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
        if (array_key_exists("title", $context)) {
            // line 2
            echo "  <div class=\"modal-header\">
    <h5 class=\"modal-title text-uppercase\">";
            // line 3
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h5>
    <button 
      type=\"button\" 
      class=\"btn-close\" 
      data-bs-dismiss=\"modal\" 
      aria-label=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close"), "html", null, true);
            echo "\"
    ></button>
  </div>
";
        }
        // line 12
        if (array_key_exists("body", $context)) {
            // line 13
            echo "  <div class=\"modal-body\">
    ";
            // line 14
            echo ($context["body"] ?? null);
            echo "
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/modal/index.html.twig";
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
        return array (  62 => 14,  59 => 13,  57 => 12,  50 => 8,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/modal/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\modal\\index.html.twig");
    }
}
