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
class __TwigTemplate_5d50df848c804dbdb2393cc0ce7a7c1b2f1ab164ac4de5a673da49e6c4313386 extends Template
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
        // line 1
        $this->displayBlock('ajax_upload_widget', $context, $blocks);
    }

    public function block_ajax_upload_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <ajax-upload 
    name=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 3), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\"
    min=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 4), "min", [], "any", false, false, false, 4), "html", null, true);
        echo "\" 
    max=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 5), "max", [], "any", false, false, false, 5), "html", null, true);
        echo "\" 
    path=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 6), "path", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
  >
    <div class=\"row\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 9), "files", [], "any", false, false, false, 9));
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
            if (twig_in_filter(($context["extension"] ?? null), ["jpeg", "jpg", "png", "gif"])) {
                // line 15
                echo "              <img src=\"/uploads/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["file"], "path", [], "any", false, false, false, 15), "html", null, true);
                echo "\" class=\"img-fluid\">
            ";
            } elseif (twig_in_filter(            // line 16
($context["extension"] ?? null), ["doc", "docx"])) {
                // line 17
                echo "              <i class=\"bi bi-file-word\"></i>
            ";
            } elseif (twig_in_filter(            // line 18
($context["extension"] ?? null), ["xls", "xlsx"])) {
                // line 19
                echo "              <i class=\"bi bi-file-excel\"></i>
            ";
            } elseif ((            // line 20
($context["extension"] ?? null) == "pdf")) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
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
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "max", [], "any", false, false, false, 34) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "files", [], "any", false, false, false, 34)) >= twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 34), "max", [], "any", false, false, false, 34)))) {
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
        echo twig_escape_filter($this->env, twig_join_filter(($context["extensions"] ?? null), ",."), "html", null, true);
        echo "\" hidden />
            <i class=\"bi bi-plus\"></i>
            <span class=\"spinner-border\"></span>
          </label>
        </div>
      </div>
    </div>
  </ajax-upload>
";
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
        return array (  143 => 38,  139 => 37,  135 => 35,  131 => 34,  126 => 31,  114 => 27,  110 => 25,  106 => 23,  102 => 21,  100 => 20,  97 => 19,  95 => 18,  92 => 17,  90 => 16,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  70 => 10,  66 => 9,  60 => 6,  56 => 5,  52 => 4,  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/form/type/ajax-upload.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\layout\\form\\type\\ajax-upload.html.twig");
    }
}
