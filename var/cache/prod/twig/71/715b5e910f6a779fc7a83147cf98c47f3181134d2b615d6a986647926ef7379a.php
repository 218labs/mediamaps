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

/* layout/auth.html.twig */
class __TwigTemplate_7abdf468bd55a05be2716a3e97d71c0cbff8a0fed0fb70b5b324ffd2d6201f38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        echo "\">
<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
  ";
        // line 6
        $this->loadTemplate("partials/service-worker-meta.html.twig", "layout/auth.html.twig", 6)->display($context);
        // line 7
        echo "  <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body class=\"auth-layout\">
  ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "
  ";
        // line 15
        $this->displayBlock('footer', $context, $blocks);
        // line 20
        echo "</body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "RASD";
    }

    // line 8
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
  ";
    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 15
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
    ";
        // line 17
        $this->loadTemplate("partials/webpush.html.twig", "layout/auth.html.twig", 17)->display($context);
        // line 18
        echo "    ";
        $this->loadTemplate("partials/service-worker-script.html.twig", "layout/auth.html.twig", 18)->display($context);
        // line 19
        echo "  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/auth.html.twig";
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
        return array (  115 => 19,  112 => 18,  110 => 17,  105 => 16,  101 => 15,  95 => 13,  88 => 9,  84 => 8,  77 => 7,  71 => 20,  69 => 15,  66 => 14,  64 => 13,  60 => 11,  58 => 8,  53 => 7,  51 => 6,  44 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/auth.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\auth.html.twig");
    }
}
