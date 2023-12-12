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

/* layout/email.html.twig */
class __TwigTemplate_d60ee88e785132a64da0d50cb044ff1f68ce601ae63f69afc7b9a3ba5e12e8d4 extends Template
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
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "    <style type=\"text/css\">
        body, html, .body {
            background: #f3f3f3 !important;
        }
        .container.header, .container.footer {
            background: #477626;color: #FFF; padding-top:15px;
        }
        .container.footer a{color: #FFF !important}
        h4{color:#00447a}
        .register a {background-color:#00447a;}
        .register td{border:2px solid #00447a !important; background:none !important}
    </style>
    <container class=\"header\">
        <row>
            <columns>
                <h1 class=\"text-center\" style=\"color: #FFF; padding-top:20px\">";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</h1>
            </columns>
        </row>
    </container>

    <container class=\"body-border\">
        <row>
            <columns>
                <spacer size=\"32\"></spacer>
                ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "            </columns>
        </row>
    </container>

    <container class=\"footer\">
        <row>
            <columns>
                <p class=\"text-center\" style=\"color: #FFF; padding-top:20px\">";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        echo "</p>
            </columns>
        </row>
    </container>

";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css(Twig\Extra\Inky\twig_inky($___internal_parse_1_), twig_source($this->env, "@assets/css/foundation-emails.css"), twig_source($this->env, "@assets/css/foundation.css"));
    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 34
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/email.html.twig";
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
        return array (  107 => 34,  101 => 26,  95 => 17,  91 => 1,  82 => 34,  73 => 27,  71 => 26,  59 => 17,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/email.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\email.html.twig");
    }
}
