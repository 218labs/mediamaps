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

/* admin/link_capture/screenLinks.html.twig */
class __TwigTemplate_cba2ad09b5a1c51fa41423363f036f384131c0a6b71e13926fbf8c62903b2bad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/link_capture/screenLinks.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div class=\"container mt-5\">
    <div class=\"col-md-8 offset-md-2\">
        <div >
            ";
        // line 8
        if ((($context["countLinks"] ?? null) == 0)) {
            // line 9
            echo "                <div class=\"alert alert-secondary\" role=\"alert\">
                    <h5>All Links has screens</h5>
                </div>
            ";
        } else {
            // line 13
            echo "                <div class=\"alert alert-warning\" role=\"alert\">
                    <h5>There are ";
            // line 14
            echo twig_escape_filter($this->env, ($context["countLinks"] ?? null), "html", null, true);
            echo " links that do not have a screen.</h5>
                </div>
            ";
        }
        // line 17
        echo "            ";
        if (($context["countLinkUpdate"] ?? null)) {
            // line 18
            echo "                <div class=\"alert alert-success\" role=\"alert\">
                    <h5>";
            // line 19
            echo twig_escape_filter($this->env, ($context["countLinkUpdate"] ?? null), "html", null, true);
            echo " links have been updated out of ";
            echo twig_escape_filter($this->env, ($context["countLinks"] ?? null), "html", null, true);
            echo ".</h5>
                </div>
            ";
        }
        // line 22
        echo "        </div>
        <div class=\"mt-5\">
            ";
        // line 24
        if (($context["countLinks"] ?? null)) {
            // line 25
            echo "                 <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link_DoCapture");
            echo "\" class=\"btn btn-primary\" role=\"button\" data-bs-toggle=\"button\">Get Screens</a>
            ";
        }
        // line 27
        echo "        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/link_capture/screenLinks.html.twig";
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
        return array (  99 => 27,  93 => 25,  91 => 24,  87 => 22,  79 => 19,  76 => 18,  73 => 17,  67 => 14,  64 => 13,  58 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/link_capture/screenLinks.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link_capture\\screenLinks.html.twig");
    }
}
