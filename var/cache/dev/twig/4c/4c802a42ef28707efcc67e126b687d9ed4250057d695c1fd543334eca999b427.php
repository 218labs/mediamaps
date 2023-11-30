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

/* @Httplug/http_message.html.twig */
class __TwigTemplate_65a06ae2a3d26f231062dc7734acc0eee4f6bc9aec36786e693151f429775cdf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/http_message.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Httplug/http_message.html.twig"));

        // line 1
        $context["hasReachedBody"] = false;
        // line 2
        $context["content"] = "";
        // line 3
        $context["data"] = twig_slice($this->env, twig_split_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()), "
"), 1);
        // line 4
        $context["xdebugTokenLink"] = twig_last($this->env, twig_split_filter($this->env, twig_first($this->env, twig_array_filter($this->env, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return twig_in_filter("x-debug-token-link:", twig_lower_filter($this->env, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 4, $this->source); })()))); })), ": "));
        // line 5
        $context["noContent"] = ((((isset($context["capturedBodyLength"]) || array_key_exists("capturedBodyLength", $context) ? $context["capturedBodyLength"] : (function () { throw new RuntimeError('Variable "capturedBodyLength" does not exist.', 5, $this->source); })()) === 0)) ? ("(captured_body_length is set to 0, no body captured)") : ("(This message has no captured body)"));
        // line 6
        echo "<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\" colspan=\"2\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 9, $this->source); })()), "html", null, true);
        if ((isset($context["xdebugTokenLink"]) || array_key_exists("xdebugTokenLink", $context) ? $context["xdebugTokenLink"] : (function () { throw new RuntimeError('Variable "xdebugTokenLink" does not exist.', 9, $this->source); })())) {
            echo " <span style=\"float:right\"><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["xdebugTokenLink"]) || array_key_exists("xdebugTokenLink", $context) ? $context["xdebugTokenLink"] : (function () { throw new RuntimeError('Variable "xdebugTokenLink" does not exist.', 9, $this->source); })()), "html", null, true);
            echo "\">Profile link</a></span>";
        }
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 14
            echo "        ";
            if (twig_test_empty($context["row"])) {
                // line 15
                echo "            ";
                $context["hasReachedBody"] = true;
                // line 16
                echo "        ";
            } elseif ((isset($context["hasReachedBody"]) || array_key_exists("hasReachedBody", $context) ? $context["hasReachedBody"] : (function () { throw new RuntimeError('Variable "hasReachedBody" does not exist.', 16, $this->source); })())) {
                // line 17
                echo "            ";
                $context["content"] = ((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 17, $this->source); })()) . $context["row"]);
                // line 18
                echo "        ";
            } else {
                // line 19
                echo "            ";
                $context["row"] = twig_split_filter($this->env, $context["row"], ":");
                // line 20
                echo "            ";
                $context["value"] = twig_trim_filter(twig_join_filter(twig_slice($this->env, $context["row"], 1), ":"));
                // line 21
                echo "            <tr>
                <th>";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], 0, [], "array", false, false, false, 22), "html", null, true);
                echo "</th>
                <td>
                    ";
                // line 24
                if (twig_matches("#^https?://#", (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 24, $this->source); })()))) {
                    // line 25
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 25, $this->source); })()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 27
                    echo "                        ";
                    echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()), "html", null, true);
                    echo "
                    ";
                }
                // line 29
                echo "                </td>
            </tr>
        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
</table>

<div class='httplug-http-body httplug-hidden'>";
        // line 36
        (((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 36, $this->source); })())) ? (print ($this->extensions['Http\HttplugBundle\Collector\Twig\HttpMessageMarkupExtension']->markupBody((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 36, $this->source); })())))) : (print (twig_escape_filter($this->env, (isset($context["noContent"]) || array_key_exists("noContent", $context) ? $context["noContent"] : (function () { throw new RuntimeError('Variable "noContent" does not exist.', 36, $this->source); })()), "html", null, true))));
        echo "</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Httplug/http_message.html.twig";
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
        return array (  136 => 36,  131 => 33,  125 => 32,  120 => 29,  114 => 27,  106 => 25,  104 => 24,  99 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  75 => 14,  71 => 13,  59 => 9,  54 => 6,  52 => 5,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set hasReachedBody = false %}
{% set content = '' %}
{% set data = data|split(\"\\n\")|slice(1) %}
{% set xdebugTokenLink = data|filter(v => 'x-debug-token-link:' in v|lower)|first|split(': ')|last %}
{% set noContent = capturedBodyLength is same as(0) ? '(captured_body_length is set to 0, no body captured)' : '(This message has no captured body)' %}
<table>
    <thead>
    <tr>
        <th scope=\"col\" class=\"key\" colspan=\"2\">{{ header }}{% if xdebugTokenLink %} <span style=\"float:right\"><a href=\"{{ xdebugTokenLink }}\">Profile link</a></span>{% endif %}</th>
    </tr>
    </thead>
    <tbody>
    {% for row in data %}
        {% if row is empty %}
            {% set hasReachedBody = true %}
        {% elseif hasReachedBody %}
            {% set content = content ~ row %}
        {% else %}
            {% set row = row|split(':') %}
            {% set value = row|slice(1)|join(':')|trim %}
            <tr>
                <th>{{ row[0] }}</th>
                <td>
                    {% if value matches '#^https?://#' %}
                        <a href=\"{{ value }}\">{{ value }}</a>
                    {% else %}
                        {{ value }}
                    {% endif %}
                </td>
            </tr>
        {% endif %}
    {% endfor %}
    </tbody>
</table>

<div class='httplug-http-body httplug-hidden'>{{ content ? content|httplug_markup_body : noContent }}</div>
", "@Httplug/http_message.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\php-http\\httplug-bundle\\src\\Resources\\views\\http_message.html.twig");
    }
}
