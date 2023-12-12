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

/* admin/reporting/index.html.twig */
class __TwigTemplate_b5eb7546a422955c2cfb95dbf9fbdfc30622fde66ac62420925828789795baa1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reporting/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-clipboard-data\"></i>
        ";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stats"), "html", null, true);
        echo "
      </h1>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-megaphone fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Medias"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["medias_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-paperclip fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Compaigns"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["compaigns_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-link fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Links"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 37
        echo twig_escape_filter($this->env, ($context["links_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-chat-quote fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 49
        echo twig_escape_filter($this->env, ($context["languages_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-globe fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["countries"] ?? null)), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-people fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website visitors"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 67
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["visitors_count"] ?? null)), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <span class=\"fs-4 text-uppercase text-center mb-3\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
        echo "</span>
        <div class=\"row\">
           ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 80
            echo "           <div class=\"col-md-4\">
              <img src=\"/img/flags/svg/";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "countrycode", [], "any", false, false, false, 81), "html", null, true);
            echo ".svg\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "countrycode", [], "any", false, false, false, 81), "html", null, true);
            echo "\" style=\"max-width:20px\">   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], "countryname", [], "any", false, false, false, 81), "html", null, true);
            echo "
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <span class=\"fs-4 text-uppercase text-center mb-3\">";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
        echo "</span>
        <div class=\"row\">
           ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 94
            echo "           <div class=\"col\">
              ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "lang", [], "any", false, false, false, 95), "html", null, true);
            echo "
            </div>
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </div>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
         add folowers count

         merge countries and languages 
         add logos of medias 

      </div>
    </div>
  </div>



";
    }

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 118
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/reporting/index.html.twig";
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
        return array (  245 => 118,  241 => 117,  220 => 98,  211 => 95,  208 => 94,  204 => 93,  199 => 91,  190 => 84,  177 => 81,  174 => 80,  170 => 79,  165 => 77,  152 => 67,  148 => 66,  137 => 58,  133 => 57,  122 => 49,  118 => 48,  104 => 37,  100 => 36,  89 => 28,  85 => 27,  74 => 19,  70 => 18,  57 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/reporting/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\reporting\\index.html.twig");
    }
}
