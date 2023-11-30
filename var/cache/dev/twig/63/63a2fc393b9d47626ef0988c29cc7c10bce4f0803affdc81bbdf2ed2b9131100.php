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
class __TwigTemplate_91e73adbf618adc7780b06daaf7afe673ef6269dc524bcca8723e245508f140e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/compaign/details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/compaign/details.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/compaign/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h6 class=\"styled-title mb-2 text-white\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["compaign"]) || array_key_exists("compaign", $context) ? $context["compaign"] : (function () { throw new RuntimeError('Variable "compaign" does not exist.', 5, $this->source); })()), "subject", [], "any", false, false, false, 5), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["medias_count"]) || array_key_exists("medias_count", $context) ? $context["medias_count"] : (function () { throw new RuntimeError('Variable "medias_count" does not exist.', 13, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["links_count"]) || array_key_exists("links_count", $context) ? $context["links_count"] : (function () { throw new RuntimeError('Variable "links_count" does not exist.', 23, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["visitors_count"]) || array_key_exists("visitors_count", $context) ? $context["visitors_count"] : (function () { throw new RuntimeError('Variable "visitors_count" does not exist.', 33, $this->source); })())), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["folowers_count"]) || array_key_exists("folowers_count", $context) ? $context["folowers_count"] : (function () { throw new RuntimeError('Variable "folowers_count" does not exist.', 43, $this->source); })())), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["facebook_count"]) || array_key_exists("facebook_count", $context) ? $context["facebook_count"] : (function () { throw new RuntimeError('Variable "facebook_count" does not exist.', 58, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["twitter_count"]) || array_key_exists("twitter_count", $context) ? $context["twitter_count"] : (function () { throw new RuntimeError('Variable "twitter_count" does not exist.', 68, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["instagram_count"]) || array_key_exists("instagram_count", $context) ? $context["instagram_count"] : (function () { throw new RuntimeError('Variable "instagram_count" does not exist.', 78, $this->source); })())), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["youtube_count"]) || array_key_exists("youtube_count", $context) ? $context["youtube_count"] : (function () { throw new RuntimeError('Variable "youtube_count" does not exist.', 88, $this->source); })())), "html", null, true);
        echo "</span>
        </div>
      </div>
    </div>
    
  </div>
   
 <h6 class=\"styled-title mt-3 text-white\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Countries"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["countries_count"]) || array_key_exists("countries_count", $context) ? $context["countries_count"] : (function () { throw new RuntimeError('Variable "countries_count" does not exist.', 95, $this->source); })()), "html", null, true);
        echo ")</h6> 
 <div class=\"row mt-3\">
    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new RuntimeError('Variable "countries" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["country"]) {
            // line 98
            echo "      <div class=\"col-md-2 mb-3 \">
        <a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, (isset($context["compaign"]) || array_key_exists("compaign", $context) ? $context["compaign"] : (function () { throw new RuntimeError('Variable "compaign" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99), "country_id" => $context["key"]]), "html", null, true);
            echo "\">
        <img src=\"/img/flags/svg/";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], 0, [], "array", false, false, false, 100), "html", null, true);
            echo ".svg\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], 1, [], "array", false, false, false, 100), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], 1, [], "array", false, false, false, 100), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["country"], 1, [], "array", false, false, false, 100), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["languages_count"]) || array_key_exists("languages_count", $context) ? $context["languages_count"] : (function () { throw new RuntimeError('Variable "languages_count" does not exist.', 105, $this->source); })()), "html", null, true);
        echo ")</h6>
  <div class=\"row mt-3\">
      ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 107, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 108
            echo "        <div class=\"col-md-2\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, (isset($context["compaign"]) || array_key_exists("compaign", $context) ? $context["compaign"] : (function () { throw new RuntimeError('Variable "compaign" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108), "language_id" => $context["key"]]), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 114, $this->source); })())), "html", null, true);
        echo ")</h6>
  <div class=\"row mb-3\">    
      ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 116, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 117
            echo "        <div class=\"col-md-2\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, (isset($context["compaign"]) || array_key_exists("compaign", $context) ? $context["compaign"] : (function () { throw new RuntimeError('Variable "compaign" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117), "category_id" => $context["key"]]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], 0, [], "array", false, false, false, 117), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], 1, [], "array", false, false, false, 117), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 122, $this->source); })())), "html", null, true);
        echo ")</h6>
<div class=\"row mb-3\">
  
  ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["medias"]) || array_key_exists("medias", $context) ? $context["medias"] : (function () { throw new RuntimeError('Variable "medias" does not exist.', 125, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["media"]) {
            // line 126
            echo "    <div class=\"col-md-2 d-block justify-content-center align-self-center border\">
      <a href=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("link", ["compaign_id" => twig_get_attribute($this->env, $this->source, (isset($context["compaign"]) || array_key_exists("compaign", $context) ? $context["compaign"] : (function () { throw new RuntimeError('Variable "compaign" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127), "media_id" => $context["key"]]), "html", null, true);
            echo "\">
      ";
            // line 128
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["media"], 0, [], "array", false, false, false, 128))) {
                // line 129
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], 1, [], "array", false, false, false, 129), "html", null, true);
                echo "
      ";
            } else {
                // line 131
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["media"], 0, [], "array", false, false, false, 131)), "html", null, true);
                echo "\" class=\"mx-auto img-fluid\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], 1, [], "array", false, false, false, 131), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 140, $this->source); })())), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new RuntimeError('Variable "links" does not exist.', 151, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 166
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 167
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  447 => 167,  437 => 166,  423 => 160,  414 => 157,  410 => 156,  406 => 155,  402 => 154,  396 => 153,  393 => 152,  389 => 151,  384 => 149,  380 => 148,  376 => 147,  372 => 146,  368 => 145,  358 => 140,  351 => 135,  343 => 133,  335 => 131,  329 => 129,  327 => 128,  323 => 127,  320 => 126,  316 => 125,  308 => 122,  303 => 119,  290 => 117,  286 => 116,  279 => 114,  273 => 110,  262 => 108,  258 => 107,  251 => 105,  246 => 102,  231 => 100,  227 => 99,  224 => 98,  220 => 97,  213 => 95,  203 => 88,  199 => 87,  187 => 78,  183 => 77,  171 => 68,  167 => 67,  155 => 58,  151 => 57,  134 => 43,  130 => 42,  118 => 33,  114 => 32,  102 => 23,  98 => 22,  86 => 13,  82 => 12,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}

<h6 class=\"styled-title mb-2 text-white\">{{ compaign.subject }}</h6>

<div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-megaphone fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Medias\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ medias_count }}</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-link fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Links\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ links_count }}</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-people fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Website visitors\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ visitors_count|number_format }}</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
           <i class=\"bi bi-people fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Followers\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ folowers_count|number_format }}</span>
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
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Facebook\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ facebook_count }}</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-twitter fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Twitter\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ twitter_count }}</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-instagram fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Instagram\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ instagram_count|number_format }}</span>
        </div>
      </div>
    </div>

    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-2 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
           <i class=\"bi bi-youtube fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Youtube\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ youtube_count|number_format }}</span>
        </div>
      </div>
    </div>
    
  </div>
   
 <h6 class=\"styled-title mt-3 text-white\">{{ \"Countries\"|trans }} ({{ countries_count }})</h6> 
 <div class=\"row mt-3\">
    {% for key, country in countries %}
      <div class=\"col-md-2 mb-3 \">
        <a href=\"{{ path('link', {'compaign_id':compaign.id, 'country_id':key}) }}\">
        <img src=\"/img/flags/svg/{{country[0]}}.svg\" alt=\"{{country[1]}}\" title=\"{{country[1]}}\" /> {{country[1]}}</a>
      </div>
    {% endfor %} 
</div>

<h6 class=\"styled-title mt-3 text-white\">{{ \"Languages\"|trans }} ({{ languages_count }})</h6>
  <div class=\"row mt-3\">
      {% for key, language in languages %}
        <div class=\"col-md-2\"> <a href=\"{{ path('link', {'compaign_id':compaign.id, 'language_id':key}) }}\">{{ language  }}</a></div>
      {% endfor %}
  </div>



<h6 class=\"styled-title mt-3 text-white\">{{ \"Categories\"|trans }} ({{categories|length}})</h6>
  <div class=\"row mb-3\">    
      {% for key, category in categories %}
        <div class=\"col-md-2\"> <a href=\"{{ path('link', {'compaign_id':compaign.id, 'category_id':key}) }}\">{{ category[0]  }} ({{ category[1]  }})</a></div>
      {% endfor %}
  </div>


<h6 class=\"styled-title mt-3 text-white\">{{ \"Medias\"|trans }} ({{medias|length}})</h6>
<div class=\"row mb-3\">
  
  {% for key, media in medias %}
    <div class=\"col-md-2 d-block justify-content-center align-self-center border\">
      <a href=\"{{ path('link', {'compaign_id':compaign.id, 'media_id':key}) }}\">
      {% if media[0] is empty %}
        {{ media[1] }}
      {% else %}
        <img src=\"{{ asset(media[0]) }}\" class=\"mx-auto img-fluid\" alt=\"{{ media[1] }}\" height=\"60\" />
      {% endif %}
      </a>
    </div>
  {% endfor %} 
   
</div>


<h6 class=\"styled-title mt-3 text-white\">{{ \"Links\"|trans }} ({{links|length}})</h6>
<div class=\"row mb-3\"> 
  <div class=\"col-md-12\"> 
  <table class=\"table table-hover table-basic mb-3\">
    <tr>
      <th>{{ \"Link\"|trans }}</th>
      <th>{{ \"Media\"|trans }}</th>
      <th>{{ \"Category\"|trans }}</th>
      <th>{{ \"Scope\"|trans }}</th>
      <th>{{ \"Published on\"|trans }}</th>
    </tr>
  {% for link in links %}
    <tr>
      <td><a target=\"_blank\" href=\"{{ link.link }}\">{{ link.title }}</a></td>
      <td>{{ link.media }}</td>
      <td>{{ link.category }}</td>
      <td>{{ link.geographicalScope }}</td>
      <td>{{ link.publishedOn|date(\"d/m/Y\") }}</td>
    </tr>
  {% endfor %}
  </table>
</div>
</div>

{% endblock %}

{% block footer %}
  {{ parent() }}

  
{% endblock %}
", "admin/compaign/details.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\compaign\\details.html.twig");
    }
}
