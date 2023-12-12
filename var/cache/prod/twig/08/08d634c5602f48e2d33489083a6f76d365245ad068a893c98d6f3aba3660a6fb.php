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

/* admin/link/list_links.html.twig */
class __TwigTemplate_cdd432a2fbdc1bd0d5c1a2ebea63f8134e31d5b6b96e2be4b86baf609a167d2d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/link/list_links.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "List of Links";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1>List of Links</h1>

    <ul>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 10
            echo "            <li class=\"row\">
                <strong class=\"col-md-6\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "getTitle", [], "method", false, false, false, 11), "html", null, true);
            echo "</strong> <strong class=\"col-md-4\">- ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "getLink", [], "method", false, false, false, 11), 0, 30), "html", null, true);
            echo "...</strong>
                ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["link"], "getFileName", [], "method", false, false, false, 12)) {
                // line 13
                echo "                    <strong class=\"col-md-2\">
                        <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "getFullAttachmentPath", [], "method", false, false, false, 14), "html", null, true);
                echo "\" target=\"_blank\">Download Attachment</a>
                    </strong>
                ";
            } else {
                // line 17
                echo "                    <strong class=\"col-md-2\">
                        No Attachment
                    </strong>
                ";
            }
            // line 21
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "    </ul>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/link/list_links.html.twig";
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
        return array (  100 => 23,  93 => 21,  87 => 17,  81 => 14,  78 => 13,  76 => 12,  70 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/link/list_links.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\link\\list_links.html.twig");
    }
}
