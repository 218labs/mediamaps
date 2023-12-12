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

/* @HWIOAuth/Connect/connect_success.html.twig */
class __TwigTemplate_3e5e480de4e04773ff2be73d8c3a4df224e1253db1b0996d23260cd20db30b51 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'hwi_oauth_content' => [$this, 'block_hwi_oauth_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@HWIOAuth/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@HWIOAuth/layout.html.twig", "@HWIOAuth/Connect/connect_success.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.success", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "realName", [], "any", false, false, false, 4)], "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/connect_success.html.twig";
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
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@HWIOAuth/Connect/connect_success.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\hwi\\oauth-bundle\\Resources\\views\\Connect\\connect_success.html.twig");
    }
}
