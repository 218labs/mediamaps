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

/* front/security/password-reset.html.twig */
class __TwigTemplate_8d25354eaed5e7168514bc5e2c41b582edd44af760c66eb4ad7b8e6216b140d0 extends Template
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
        echo "<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("password_reset"), "html", null, true);
        echo "\">

<div class=\"mb-3\">
  <label class=\"mb-2 text-muted\" for=\"email\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "</label>
  <input type=\"email\" name=\"email\" class=\"form-control\" id=\"email\" required autofocus />
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/security/password-reset.html.twig";
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
        return array (  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/security/password-reset.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\front\\security\\password-reset.html.twig");
    }
}
