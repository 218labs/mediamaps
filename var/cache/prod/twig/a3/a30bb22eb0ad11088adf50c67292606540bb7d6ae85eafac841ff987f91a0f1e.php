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

/* layout/form/type/fieldset.html.twig */
class __TwigTemplate_71bb5ef83892c7353203babcde13f5f5c48c8e37d57c2f1cc5bb7a661a427bde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'fieldset_widget' => [$this, 'block_fieldset_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('fieldset_widget', $context, $blocks);
    }

    public function block_fieldset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <div class=\"styled-title\">
    <h3>";
        // line 3
        (((array_key_exists("title", $context) &&  !(null === ($context["title"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true))) : (print ("")));
        echo "</h3>
  </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/form/type/fieldset.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/form/type/fieldset.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\form\\type\\fieldset.html.twig");
    }
}
