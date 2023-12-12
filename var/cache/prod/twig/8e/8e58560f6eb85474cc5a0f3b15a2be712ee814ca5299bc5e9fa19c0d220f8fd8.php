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

/* @HWIOAuth/layout.html.twig */
class __TwigTemplate_cf745a191b360fc3b7a72f4352eba4841531415d47dca0e35e4e6a9d00d7e14e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'hwi_oauth_content' => [$this, 'block_hwi_oauth_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@HWIOAuth/layout.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  60 => 9,  56 => 8,  49 => 10,  47 => 8,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@HWIOAuth/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\hwi\\oauth-bundle\\Resources\\views\\layout.html.twig");
    }
}
