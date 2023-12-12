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

/* @email/zurb_2/notification/body.html.twig */
class __TwigTemplate_48415f0069d2365b727ccb904cb9667343b43e9ed824851d8de9c24589b318ec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'lead' => [$this, 'block_lead'],
            'content' => [$this, 'block_content'],
            'action' => [$this, 'block_action'],
            'exception' => [$this, 'block_exception'],
            'footer' => [$this, 'block_footer'],
            'footer_content' => [$this, 'block_footer_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "<html>
<head>
<style>
    ";
        // line 5
        $this->displayBlock('style', $context, $blocks);
        // line 9
        echo "</style>
</head>
<body>
<spacer size=\"32\"></spacer>
<wrapper class=\"body\">
    <container class=\"body_";
        // line 14
        echo ((("urgent" == ($context["importance"] ?? null))) ? ("alert") : (((("high" == ($context["importance"] ?? null))) ? ("warning") : ("default"))));
        echo "\">
        <spacer size=\"16\"></spacer>
        <row>
            <columns large=\"12\" small=\"12\">
                ";
        // line 18
        $this->displayBlock('lead', $context, $blocks);
        // line 24
        echo "
                ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "
                ";
        // line 33
        $this->displayBlock('action', $context, $blocks);
        // line 39
        echo "
                ";
        // line 40
        $this->displayBlock('exception', $context, $blocks);
        // line 46
        echo "            </columns>
        </row>

        <wrapper class=\"secondary\">
            <spacer size=\"16\"></spacer>
            ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "        </wrapper>
    </container>
</wrapper>
</body>
</html>
";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css(Twig\Extra\Inky\twig_inky($___internal_parse_3_));
    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "        ";
        echo twig_source($this->env, "@email/zurb_2/main.css");
        echo "
        ";
        // line 7
        echo twig_source($this->env, "@email/zurb_2/notification/local.css");
        echo "
    ";
    }

    // line 18
    public function block_lead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "                    ";
        if ( !(null === ($context["importance"] ?? null))) {
            echo "<small><strong>";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, ($context["importance"] ?? null)), "html", null, true);
            echo "</strong></small>";
        }
        // line 20
        echo "                    <p class=\"lead\">
                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["email"] ?? null), "subject", [], "any", false, false, false, 21), "html", null, true);
        echo "
                    </p>
                ";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "                    ";
        if (($context["markdown"] ?? null)) {
            // line 27
            echo "                        ";
            echo twig_include($this->env, $context, "@email/zurb_2/notification/content_markdown.html.twig");
            echo "
                    ";
        } else {
            // line 29
            echo "                        ";
            echo twig_nl2br(twig_escape_filter($this->env, ((($context["raw"] ?? null)) ? (($context["content"] ?? null)) : (($context["content"] ?? null))), "html", null, true));
            echo "
                    ";
        }
        // line 31
        echo "                ";
    }

    // line 33
    public function block_action($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "                    ";
        if (($context["action_url"] ?? null)) {
            // line 35
            echo "                        <spacer size=\"16\"></spacer>
                        <button href=\"";
            // line 36
            echo twig_escape_filter($this->env, ($context["action_url"] ?? null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["action_text"] ?? null), "html", null, true);
            echo "</button>
                    ";
        }
        // line 38
        echo "                ";
    }

    // line 40
    public function block_exception($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                    ";
        if (($context["exception"] ?? null)) {
            // line 42
            echo "                        <spacer size=\"16\"></spacer>
                        <p><em>Exception stack trace attached.</em></p>
                    ";
        }
        // line 45
        echo "                ";
    }

    // line 51
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "                ";
        if ((array_key_exists("footer_text", $context) &&  !(null === ($context["footer_text"] ?? null)))) {
            // line 53
            echo "                <row>
                    <columns small=\"12\" large=\"6\">
                        ";
            // line 55
            $this->displayBlock('footer_content', $context, $blocks);
            // line 58
            echo "                    </columns>
                </row>
                ";
        }
        // line 61
        echo "            ";
    }

    // line 55
    public function block_footer_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 56
        echo "                            <p><small>";
        echo twig_escape_filter($this->env, ($context["footer_text"] ?? null), "html", null, true);
        echo "</small></p>
                        ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@email/zurb_2/notification/body.html.twig";
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
        return array (  227 => 56,  223 => 55,  219 => 61,  214 => 58,  212 => 55,  208 => 53,  205 => 52,  201 => 51,  197 => 45,  192 => 42,  189 => 41,  185 => 40,  181 => 38,  174 => 36,  171 => 35,  168 => 34,  164 => 33,  160 => 31,  154 => 29,  148 => 27,  145 => 26,  141 => 25,  134 => 21,  131 => 20,  124 => 19,  120 => 18,  114 => 7,  109 => 6,  105 => 5,  101 => 1,  93 => 62,  91 => 51,  84 => 46,  82 => 40,  79 => 39,  77 => 33,  74 => 32,  72 => 25,  69 => 24,  67 => 18,  60 => 14,  53 => 9,  51 => 5,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@email/zurb_2/notification/body.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\symfony\\twig-bridge\\Resources\\views\\Email\\zurb_2\\notification\\body.html.twig");
    }
}
