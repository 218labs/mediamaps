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

/* admin/compaign/details.html.twig */
class __TwigTemplate_4d66d380fe76983e2007ce42e85859b6a50ad70d9cf71a8fff89335bfb05978d extends Template
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/compaign/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<h6 class=\"styled-title mb-2 text-white\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["compaign"] ?? null), "subject", [], "any", false, false, false, 5), "html", null, true);
        echo "</h6>

<div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-megaphone fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Medias"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["medias_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-link fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Links"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["links_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-people fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Website visitors"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 33
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["visitors_count"] ?? null)), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
           <i class=\"bi bi-people fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Followers"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 43
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["folowers_count"] ?? null)), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    
  </div>

<h6 class=\"styled-title mb-2 text-white\">Followers count per social media</h6>

<div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-facebook fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Facebook"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 58
        echo twig_escape_filter($this->env, ($context["facebook_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-twitter fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Twitter"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 68
        echo twig_escape_filter($this->env, ($context["twitter_count"] ?? null), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-instagram fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Instagram"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 78
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["instagram_count"] ?? null)), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
           <i class=\"bi bi-youtube fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Youtube"), "html", null, true);
        echo "</span>
          <span class=\"fw-bold fs-3\">";
        // line 88
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["youtube_count"] ?? null)), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    
  </div>
   
 <h6 class=\"styled-title mt-3 text-white\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["countries_count"] ?? null), "html", null, true);
        echo ")</h6> 
 <div class=\"row mt-3\">
    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["country"]) {
            // line 98
            echo "      <div class=\"col-md-2 mb-3 \">
        <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, ($context["compaign"] ?? null), "id", [], "any", false, false, false, 99), "country_id" => $context["key"]]), "html", null, true);
            echo "\">
        <img src=\"/img/flags/svg/";
            // line 100
            echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["country"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "html", null, true);
            echo ".svg\" alt=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["country"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[1] ?? null) : null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["country"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[1] ?? null) : null), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["country"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[1] ?? null) : null), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo " 
</div>

<h6 class=\"styled-title mt-3 text-white\">";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Languages"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["languages_count"] ?? null), "html", null, true);
        echo ")</h6>
  <div class=\"row mt-3\">
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 108
            echo "        <div class=\"col-md-2\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, ($context["compaign"] ?? null), "id", [], "any", false, false, false, 108), "language_id" => $context["key"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "</a></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "  </div>



<h6 class=\"styled-title mt-3 text-white\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["categories"] ?? null)), "html", null, true);
        echo ")</h6>
  <div class=\"row mb-3\">    
      ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 117
            echo "        <div class=\"col-md-2\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, ($context["compaign"] ?? null), "id", [], "any", false, false, false, 117), "category_id" => $context["key"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["category"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[0] ?? null) : null), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["category"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[1] ?? null) : null), "html", null, true);
            echo ")</a></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "  </div>


<h6 class=\"styled-title mt-3 text-white\">";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Medias"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["medias"] ?? null)), "html", null, true);
        echo ")</h6>
<div class=\"row mb-3\">
  
  ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["media"]) {
            // line 126
            echo "    <div class=\"col-md-2 d-block justify-content-center align-self-center border\">
      <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, ($context["compaign"] ?? null), "id", [], "any", false, false, false, 127), "media_id" => $context["key"]]), "html", null, true);
            echo "\">
      ";
            // line 128
            if (twig_test_empty((($__internal_compile_6 = $context["media"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[0] ?? null) : null))) {
                // line 129
                echo "        ";
                echo twig_escape_filter($this->env, (($__internal_compile_7 = $context["media"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[1] ?? null) : null), "html", null, true);
                echo "
      ";
            } else {
                // line 131
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((($__internal_compile_8 = $context["media"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[0] ?? null) : null)), "html", null, true);
                echo "\" class=\"mx-auto img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_9 = $context["media"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[1] ?? null) : null), "html", null, true);
                echo "\" height=\"60\" />
      ";
            }
            // line 133
            echo "      </a>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo " 
   
</div>


<h6 class=\"styled-title mt-3 text-white\">";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Links"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["links"] ?? null)), "html", null, true);
        echo ")</h6>
<div class=\"row mb-3\"> 
  <div class=\"col-md-12\"> 
  <table class=\"table table-hover table-basic mb-3\">
    <tr>
      <th>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Link"), "html", null, true);
        echo "</th>
      <th>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media"), "html", null, true);
        echo "</th>
      <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category"), "html", null, true);
        echo "</th>
      <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Scope"), "html", null, true);
        echo "</th>
      <th>";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Published on"), "html", null, true);
        echo "</th>
    </tr>
  ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 152
            echo "    <tr>
      <td><a target=\"_blank\" href=\"";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "link", [], "any", false, false, false, 153), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", [], "any", false, false, false, 153), "html", null, true);
            echo "</a></td>
      <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "media", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
      <td>";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "category", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
      <td>";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "geographicalScope", [], "any", false, false, false, 156), "html", null, true);
            echo "</td>
      <td>";
            // line 157
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "publishedOn", [], "any", false, false, false, 157), "d/m/Y"), "html", null, true);
            echo "</td>
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "  </table>
</div>
</div>

";
    }

    // line 166
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 167
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

  
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/compaign/details.html.twig";
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
        return array (  417 => 167,  413 => 166,  405 => 160,  396 => 157,  392 => 156,  388 => 155,  384 => 154,  378 => 153,  375 => 152,  371 => 151,  366 => 149,  362 => 148,  358 => 147,  354 => 146,  350 => 145,  340 => 140,  333 => 135,  325 => 133,  317 => 131,  311 => 129,  309 => 128,  305 => 127,  302 => 126,  298 => 125,  290 => 122,  285 => 119,  272 => 117,  268 => 116,  261 => 114,  255 => 110,  244 => 108,  240 => 107,  233 => 105,  228 => 102,  213 => 100,  209 => 99,  206 => 98,  202 => 97,  195 => 95,  185 => 88,  181 => 87,  169 => 78,  165 => 77,  153 => 68,  149 => 67,  137 => 58,  133 => 57,  116 => 43,  112 => 42,  100 => 33,  96 => 32,  84 => 23,  80 => 22,  68 => 13,  64 => 12,  54 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/compaign/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\compaign\\details.html.twig");
    }
}
