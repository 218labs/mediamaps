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

/* layout/table/body.html.twig */
class __TwigTemplate_545ed3984a0ab33c73fea3bb56f56a16ae6dd73e265303959dfc0b2f0712bd10 extends Template
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
        echo "<tbody>
  ";
        // line 2
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "rows", [], "any", false, false, false, 2))) {
            // line 3
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "rows", [], "any", false, false, false, 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 4
                echo "    <tr class=\"mb-0\" data-pkv=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "pkv", [], "any", false, false, false, 4), "html", null, true);
                echo "\">
      ";
                // line 5
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "bulk_actions", [], "any", false, false, false, 5))) {
                    // line 6
                    echo "        <td class=\"col-check-all\">
          <input
            type=\"checkbox\" 
            value=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "pkv", [], "any", false, false, false, 9), "html", null, true);
                    echo "\"
            class=\"cb-item form-check-input cursor-pointer\"
          />
        </td> 
      ";
                }
                // line 14
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "columns", [], "any", false, false, false, 14));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 15
                    echo "        <td data-label=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"td_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 15), "html", null, true);
                    echo "\">";
                    echo (($__internal_compile_0 = $context["row"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["column"], "name", [], "any", false, false, false, 15)] ?? null) : null);
                    echo "</td>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 17
                echo "      ";
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "actions", [], "any", false, false, false, 17))) {
                    // line 18
                    echo "        <td align=\"center\" class=\"actions\" data-label=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions"), "html", null, true);
                    echo "\">
          ";
                    // line 19
                    $this->loadTemplate("layout/table/actions.html.twig", "layout/table/body.html.twig", 19)->display($context);
                    // line 20
                    echo "        </td>
      ";
                }
                // line 22
                echo "    </tr>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  ";
        } else {
            // line 25
            echo "  <tr>
    <td colspan=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "columns", [], "any", false, false, false, 26)), "html", null, true);
            echo "\" align=\"center\" class=\"empty\">
      ";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Aucun résultat n'a été trouvé"), "html", null, true);
            echo "
    </td>
  </tr>
  ";
        }
        // line 31
        echo "</tbody>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/table/body.html.twig";
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
        return array (  144 => 31,  137 => 27,  133 => 26,  130 => 25,  127 => 24,  112 => 22,  108 => 20,  106 => 19,  101 => 18,  98 => 17,  85 => 15,  80 => 14,  72 => 9,  67 => 6,  65 => 5,  60 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/table/body.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\table\\body.html.twig");
    }
}
