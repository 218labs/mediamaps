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
class __TwigTemplate_b57946610aa5deb2cc3f977ae83159a82f827cce73f7811b619adf230e688e2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reporting/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reporting/index.html.twig"));

        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/reporting/index.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["medias_count"]) || array_key_exists("medias_count", $context) ? $context["medias_count"] : (function () { throw new RuntimeError('Variable "medias_count" does not exist.', 19, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["compaigns_count"]) || array_key_exists("compaigns_count", $context) ? $context["compaigns_count"] : (function () { throw new RuntimeError('Variable "compaigns_count" does not exist.', 28, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["links_count"]) || array_key_exists("links_count", $context) ? $context["links_count"] : (function () { throw new RuntimeError('Variable "links_count" does not exist.', 37, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["languages_count"]) || array_key_exists("languages_count", $context) ? $context["languages_count"] : (function () { throw new RuntimeError('Variable "languages_count" does not exist.', 49, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new RuntimeError('Variable "countries" does not exist.', 58, $this->source); })())), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["visitors_count"]) || array_key_exists("visitors_count", $context) ? $context["visitors_count"] : (function () { throw new RuntimeError('Variable "visitors_count" does not exist.', 67, $this->source); })())), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) || array_key_exists("countries", $context) ? $context["countries"] : (function () { throw new RuntimeError('Variable "countries" does not exist.', 79, $this->source); })()));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 93, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 118
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  275 => 118,  265 => 117,  238 => 98,  229 => 95,  226 => 94,  222 => 93,  217 => 91,  208 => 84,  195 => 81,  192 => 80,  188 => 79,  183 => 77,  170 => 67,  166 => 66,  155 => 58,  151 => 57,  140 => 49,  136 => 48,  122 => 37,  118 => 36,  107 => 28,  103 => 27,  92 => 19,  88 => 18,  75 => 8,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/admin.html.twig' %}

{% block body %}
  <div class=\"row\">
    <div class=\"col-sm-12\">
      <h1 class=\"page-name\">
        <i class=\"bi bi-clipboard-data\"></i>
        {{ \"Stats\"|trans }}
      </h1>
    </div>
  </div>

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
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-paperclip fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Compaigns\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ compaigns_count }}</span>
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
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-chat-quote fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Languages\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ languages_count }}</span>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
        <div class=\"card-body d-flex flex-column align-items-center p-3\">
          <i class=\"bi bi-globe fs-1\"></i>
          <span class=\"fs-4 text-uppercase text-center\">{{ \"Countries\"|trans }}</span>
          <span class=\"fw-bold fs-3\">{{ countries|length  }}</span>
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
  </div>

  <div class=\"row mt-3\">
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <span class=\"fs-4 text-uppercase text-center mb-3\">{{ \"Countries\"|trans }}</span>
        <div class=\"row\">
           {% for country in countries %}
           <div class=\"col-md-4\">
              <img src=\"/img/flags/svg/{{country.countrycode}}.svg\" alt=\"{{country.countrycode}}\" style=\"max-width:20px\">   {{country.countryname}}
            </div>
           {% endfor %}
        </div>
        </div>
      </div>
    </div>
    <div class=\"col\">
      <div class=\"card shadow-sm rounded-0 mb-4 mb-sm-2\">
      <div class=\"card-body d-flex flex-column align-items-center p-3\">
        <span class=\"fs-4 text-uppercase text-center mb-3\">{{ \"Languages\"|trans }}</span>
        <div class=\"row\">
           {% for language in languages %}
           <div class=\"col\">
              {{ language.lang }}
            </div>
           {% endfor %}
        </div>
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



{% endblock %}

{% block footer %}
  {{ parent() }}
  <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}
", "admin/reporting/index.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\reporting\\index.html.twig");
    }
}
