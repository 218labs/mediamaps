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

/* layout/form/type/ajax-upload.html.twig */
class __TwigTemplate_a271eb1d9cc62bf06a8f5a61b3290c2e7ffb36d1119a058625492d67c36bc6a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ajax_upload_widget' => [$this, 'block_ajax_upload_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/type/ajax-upload.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/form/type/ajax-upload.html.twig"));

        // line 1
        $this->displayBlock('ajax_upload_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_ajax_upload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajax_upload_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ajax_upload_widget"));

        // line 2
        echo "  <ajax-upload 
    name=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    min=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "vars", [], "any", false, false, false, 4), "min", [], "any", false, false, false, 4), "html", null, true);
        echo "\" 
    max=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "vars", [], "any", false, false, false, 5), "max", [], "any", false, false, false, 5), "html", null, true);
        echo "\" 
    path=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "vars", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
  >
    <div class=\"row\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "files", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 10
            echo "      <div class=\"col-sm-3 col-6 ps-1 mb-3 file-item\">
        <div class=\"card\">
          <a href=\"/uploads/attachements/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\" target=\"_blank\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
            ";
            // line 13
            $context["extension"] = twig_lower_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 13), ".")));
            // line 14
            echo "            ";
            if (twig_in_filter((isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 14, $this->source); })()), ["jpeg", "jpg", "png", "gif"])) {
                // line 15
                echo "              <img src=\"/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 15), "html", null, true);
                echo "\" class=\"img-fluid\">
            ";
            } elseif (twig_in_filter(            // line 16
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 16, $this->source); })()), ["doc", "docx"])) {
                // line 17
                echo "              <i class=\"bi bi-file-word\"></i>
            ";
            } elseif (twig_in_filter(            // line 18
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 18, $this->source); })()), ["xls", "xlsx"])) {
                // line 19
                echo "              <i class=\"bi bi-file-excel\"></i>
            ";
            } elseif ((            // line 20
(isset($context["extension"]) || array_key_exists("extension", $context) ? $context["extension"] : (function () { throw new RuntimeError('Variable "extension" does not exist.', 20, $this->source); })()) == "pdf")) {
                // line 21
                echo "              <i class=\"bi bi-file-pdf\"></i>
            ";
            } else {
                // line 23
                echo "              <i class=\"bi bi-file-richtext\"></i>
            ";
            }
            // line 25
            echo "          </a>
          <i class=\"bi bi-x-circle file-delete\"></i>
          <input type=\"hidden\" name=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            echo "[]\" value='";
            echo json_encode($context["file"]);
            echo "' />
        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
      <div 
        class=\"col-sm-3 col-6 ps-1 mb-3 file-add\"
        ";
        // line 34
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "max", [], "any", false, false, false, 34) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "files", [], "any", false, false, false, 34)) >= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "max", [], "any", false, false, false, 34)))) {
            echo "style=\"display:none;\"";
        }
        // line 35
        echo "      >
        <div class=\"card h-100\">
          <label class=\"btn h-100\" title=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sélectionner un fichier"), "html", null, true);
        echo "\">
            <input type=\"file\" accept=\".";
        // line 38
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 38, $this->source); })()), ",."), "html", null, true);
        echo "\" hidden />
            <i class=\"bi bi-plus\"></i>
            <span class=\"spinner-border\"></span>
          </label>
        </div>
      </div>
    </div>
  </ajax-upload>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout/form/type/ajax-upload.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  161 => 38,  157 => 37,  153 => 35,  149 => 34,  144 => 31,  132 => 27,  128 => 25,  124 => 23,  120 => 21,  118 => 20,  115 => 19,  113 => 18,  110 => 17,  108 => 16,  103 => 15,  100 => 14,  98 => 13,  92 => 12,  88 => 10,  84 => 9,  78 => 6,  74 => 5,  70 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block ajax_upload_widget %}
  <ajax-upload 
    name=\"{{ form.vars.name }}\"
    min=\"{{ form.vars.min }}\" 
    max=\"{{ form.vars.max }}\" 
    path=\"{{ form.vars.path }}\"
  >
    <div class=\"row\">
      {% for file in form.vars.files %}
      <div class=\"col-sm-3 col-6 ps-1 mb-3 file-item\">
        <div class=\"card\">
          <a href=\"/uploads/attachements/{{ file.name }}\" target=\"_blank\" title=\"{{ file.name }}\">
            {% set extension = file.path|split('.')|last|lower %}
            {% if extension in ['jpeg', 'jpg', 'png', 'gif'] %}
              <img src=\"/uploads/{{ file.path }}\" class=\"img-fluid\">
            {% elseif extension in ['doc', 'docx'] %}
              <i class=\"bi bi-file-word\"></i>
            {% elseif extension in ['xls', 'xlsx'] %}
              <i class=\"bi bi-file-excel\"></i>
            {% elseif extension == \"pdf\" %}
              <i class=\"bi bi-file-pdf\"></i>
            {% else %}
              <i class=\"bi bi-file-richtext\"></i>
            {% endif %}
          </a>
          <i class=\"bi bi-x-circle file-delete\"></i>
          <input type=\"hidden\" name=\"{{ form.vars.name }}[]\" value='{{ file|json_encode|raw }}' />
        </div>
      </div>
      {% endfor %}

      <div 
        class=\"col-sm-3 col-6 ps-1 mb-3 file-add\"
        {% if form.vars.max > 0 and form.vars.files|length >= form.vars.max %}style=\"display:none;\"{% endif %}
      >
        <div class=\"card h-100\">
          <label class=\"btn h-100\" title=\"{{ \"Sélectionner un fichier\"|trans }}\">
            <input type=\"file\" accept=\".{{ extensions|join(',.') }}\" hidden />
            <i class=\"bi bi-plus\"></i>
            <span class=\"spinner-border\"></span>
          </label>
        </div>
      </div>
    </div>
  </ajax-upload>
{% endblock %}", "layout/form/type/ajax-upload.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\form\\type\\ajax-upload.html.twig");
    }
}
