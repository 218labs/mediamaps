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

/* @Httplug/stack.html.twig */
class __TwigTemplate_daafbfc53c58d293490de0724a1bee34c4f05befda95fd04bdb81d174504774c extends Template
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
        echo "<div class=\"httplug-stack-header httplug-toggle\" data-toggle=\"#httplug-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 1), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-details\">
    <div>
        ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "failed", [], "any", false, false, false, 3)) {
            // line 4
            echo "            <span class=\"httplug-stack-failed\">✘</span>
        ";
        } else {
            // line 6
            echo "            <span class=\"httplug-stack-success\">✔</span>
        ";
        }
        // line 8
        echo "        <span class=\"label httplug-method httplug-method-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestMethod", [], "any", false, false, false, 8)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestMethod", [], "any", false, false, false, 8), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 10
        ob_start(function () { return ''; });
        // line 11
        echo "        <div class=\"label httplug-stack-header-target\">
            <span class=\"httplug-scheme\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestScheme", [], "any", false, false, false, 12), "html", null, true);
        echo "://</span>
            <span class=\"httplug-host\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestHost", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
            ";
        // line 14
        if (!twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestPort", [], "any", false, false, false, 14), [null, 80, 443])) {
            // line 15
            echo "                <span class=\"httplug-port\">:";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestPort", [], "any", false, false, false, 15), "html", null, true);
            echo "</span>
            ";
        }
        // line 17
        echo "            <span class=\"httplug-target\">";
        echo twig_escape_filter($this->env, ((((is_string($__internal_compile_0 = ((twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestTarget", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestTarget", [], "any", false, false, false, 17), "/")) : ("/"))) && is_string($__internal_compile_1 = "/") && str_starts_with($__internal_compile_0, $__internal_compile_1))) ? ("") : ("/")) . twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "requestTarget", [], "any", false, false, false, 17)), "html", null, true);
        echo "</span>
        </div>
    ";
        $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 10
        echo twig_spaceless($___internal_parse_2_);
        // line 20
        echo "    <div>
        <span class=\"label httplug-duration\">";
        // line 21
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "duration", [], "any", false, false, false, 21)), "html", null, true);
        echo " ms</span>
        ";
        // line 22
        if (((twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 22) >= 400) && (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 22) <= 599))) {
            // line 23
            echo "            <span class=\"label status-error\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 23), "html", null, true);
            echo "</span>
        ";
        } elseif (((twig_get_attribute($this->env, $this->source,         // line 24
($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 24) >= 300) && (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 24) <= 399))) {
            // line 25
            echo "            <span class=\"label status-warning\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 27
            echo "            <span class=\"label status-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "responseCode", [], "any", false, false, false, 27), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        echo "    </div>
</div>
<div id=\"httplug-";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 31), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-details\" class=\"httplug-hidden\">
    <div class=\"httplug-toolbar\">
        <div class=\"httplug-copy-as-curl\">
            <input readonly=\"readonly\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "curlCommand", [], "any", false, false, false, 34), "html", null, true);
        echo "\" />
            <button class=\"btn tooltip-toggle\" aria-label=\"Copy to clipboard\">Copy to clipboard</button>
        </div>
        <button data-toggle=\"#httplug-";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 37), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-stack\" class=\"httplug-toggle btn\" >Toggle plugin stack</button>
        <button data-toggle=\"#httplug-";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 38), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "-details .httplug-http-body\" class=\"httplug-toggle btn\">Toggle body</button>
    </div>
    <div class=\"httplug-messages\">
        <div class=\"httplug-message card\">
            ";
        // line 42
        echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientRequest", [], "any", false, false, false, 42), "capturedBodyLength" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "capturedBodyLength", [], "any", false, false, false, 42), "header" => "Request"], false);
        echo "
        </div>
        <div class=\"httplug-message card\">
            ";
        // line 45
        echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientResponse", [], "any", false, false, false, 45), "capturedBodyLength" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "capturedBodyLength", [], "any", false, false, false, 45), "header" => "Response"], false);
        echo "
        </div>
    </div>
    ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "profiles", [], "any", false, false, false, 48)) {
            // line 49
            echo "        <div id=\"httplug-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "clientSlug", [], "any", false, false, false, 49), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "-stack\" class=\"httplug-hidden card\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["stack"] ?? null), "profiles", [], "any", false, false, false, 50));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["profile"]) {
                // line 51
                echo "                <h3 class=\"httplug-plugin-name\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profile"], "plugin", [], "any", false, false, false, 51), "html", null, true);
                echo "</h3>
                <div class=\"httplug-messages\">
                    <div class=\"httplug-message\">
                        ";
                // line 54
                echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "request", [], "any", false, false, false, 54), "capturedBodyLength" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "capturedBodyLength", [], "any", false, false, false, 54), "header" => "Request"], false);
                echo "
                    </div>
                    <div class=\"httplug-message\">
                        ";
                // line 57
                echo twig_include($this->env, $context, "@Httplug/http_message.html.twig", ["data" => twig_get_attribute($this->env, $this->source, $context["profile"], "response", [], "any", false, false, false, 57), "capturedBodyLength" => twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "capturedBodyLength", [], "any", false, false, false, 57), "header" => "Response"], false);
                echo "
                    </div>
                </div>
                ";
                // line 60
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                    <hr />
                ";
                }
                // line 63
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </div>
    ";
        }
        // line 66
        echo "</div>
";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "childrenStacks", [($context["stack"] ?? null)], "method", false, false, false, 67));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 68
            echo "    <div class=\"httplug-stack\">
        ";
            // line 69
            echo twig_include($this->env, $context, "@Httplug/stack.html.twig", ["collector" =>             // line 70
($context["collector"] ?? null), "client" =>             // line 71
($context["client"] ?? null), "stack" =>             // line 72
$context["child"], "id" => ((            // line 73
($context["id"] ?? null) . "-") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 73))], false);
            // line 74
            echo "
    </div>
";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Httplug/stack.html.twig";
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
        return array (  264 => 74,  262 => 73,  261 => 72,  260 => 71,  259 => 70,  258 => 69,  255 => 68,  238 => 67,  235 => 66,  231 => 64,  217 => 63,  213 => 61,  211 => 60,  205 => 57,  199 => 54,  192 => 51,  175 => 50,  168 => 49,  166 => 48,  160 => 45,  154 => 42,  145 => 38,  139 => 37,  133 => 34,  125 => 31,  121 => 29,  115 => 27,  109 => 25,  107 => 24,  102 => 23,  100 => 22,  96 => 21,  93 => 20,  91 => 10,  84 => 17,  78 => 15,  76 => 14,  72 => 13,  68 => 12,  65 => 11,  63 => 10,  55 => 8,  51 => 6,  47 => 4,  45 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Httplug/stack.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\php-http\\httplug-bundle\\src\\Resources\\views\\stack.html.twig");
    }
}
