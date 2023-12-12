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

/* admin/media/form.html.twig */
class __TwigTemplate_d66ed0eeb71e00cdac313fcc20108d4acb627eb3a54b363760aaaf2227ca5fea extends Template
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
        $this->parent = $this->loadTemplate("layout/admin.html.twig", "admin/media/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  <h1 class=\"page-name\">
    <i class=\"bi bi-megaphone\"></i>
    ";
        // line 7
        if ( !twig_length_filter($this->env, ($context["entity"] ?? null))) {
            // line 8
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add media"), "html", null, true);
            echo "
    ";
        } else {
            // line 10
            echo "      ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit media"), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "  </h1>

<style>
  .port-title {
    background-color: #6c757d !important;
  }
  fieldset .col-form-label {
    margin-bottom: 8px;
  }
  .card-entry fieldset {
    margin-bottom: 0px !important;
  }
  .delete-entry {
    right: 15px;
  }
  .entries {
    counter-reset: compagne_counter;
  }
  .compagne-counter:before {
    counter-increment: compagne_counter;
    content: counter(compagne_counter);
    position: absolute;
    top: 5px;
    right: 45px;
    font-size: 1.2rem;
    font-weight: 700;
    color: var(--color-primary);
  }
</style>
 <ajax-form>
 ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"styled-title my-3\">
      <h3>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Media informations"), "html", null, true);
        echo "</h3>
    </div>
 
<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "category", [], "any", false, false, false, 49), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 52), 'row');
        echo "
  </div>
</div>
<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 57), 'row');
        echo "
    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", false, false, false, 58), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "logo", [], "any", false, false, false, 61), 'row');
        echo "
  </div>
</div>

<div class=\"row\">
  <div class=\"col-sm-4\">
     ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contact", [], "any", false, false, false, 67), 'row');
        echo "
  </div>
  <div class=\"col-sm-4\">
     ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 70), 'row');
        echo "
  </div>
  <div class=\"col-sm-4\">
     ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "telephone", [], "any", false, false, false, 73), 'row');
        echo "
  </div>
</div>

<div class=\"row\">
  <div class=\"col-sm-4\">
     ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "website", [], "any", false, false, false, 79), 'row');
        echo "
  </div>
  <div class=\"col-sm-4\">
  ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visitorsCount", [], "any", false, false, false, 82), 'row');
        echo "
  </div>
  <div class=\"col-sm-4\">
  ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, false, false, 85), 'row');
        echo "
  </div>
</div>

";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "interests", [], "any", false, false, false, 89), 'row');
        echo "


";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "geographicalSystems", [], "any", false, false, false, 92), 'row');
        echo "

<div class=\"styled-title my-3\">
      <h3>";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Social media accounts"), "html", null, true);
        echo "</h3>
    </div>
 
<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "facebook", [], "any", false, false, false, 100), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "facebook_followers_count", [], "any", false, false, false, 103), 'row');
        echo "
  </div>
</div> 

<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "twitter", [], "any", false, false, false, 109), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "twitter_followers_count", [], "any", false, false, false, 112), 'row');
        echo "
  </div>
</div> 

<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "instagram", [], "any", false, false, false, 118), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "instagram_followers_count", [], "any", false, false, false, 121), 'row');
        echo "
  </div>
</div> 

<div class=\"row\">
  <div class=\"col-sm-6\">
    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "youtube", [], "any", false, false, false, 127), 'row');
        echo "
  </div>
  <div class=\"col-sm-6\">
    ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "youtube_followers_count", [], "any", false, false, false, 130), 'row');
        echo "
  </div>
</div> 
     



<hr class=\"border-2 border-top border-secondary\">
    <button type=\"button\" class=\"btn btn-outline-danger rounded-0 shadow-none\" onclick=\"history.go(-1);\">
      <i class=\"bi bi-x-lg\"></i>
      ";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset"), "html", null, true);
        echo "
    </button>
    <button type=\"submit\" class=\"btn btn-outline-secondary rounded-0 shadow-none  \">
      <i class=\"bi bi-check2-square\"></i>
      ";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save"), "html", null, true);
        echo "
    </button>

";
        // line 147
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</ajax-form>

";
    }

    // line 152
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 153
        echo "  ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script>
  ";
        // line 157
        echo "  <link href=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css\" rel=\"stylesheet\" />
  <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js\"></script>
  <script src=\"https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/i18n/fr.js\"></script>
  <script>
  \$(document).ready(function() {
    \$('.select2').select2();
});
  </script>
  ";
        // line 166
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datetimepicker/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datetimepicker/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js"), "html", null, true);
        echo "\"></script>
  <script>
  document.querySelector(\"ajax-form\").addEventListener(\"ajax.form.success\", function() {
    setTimeout(function() {
      window.location.href = '";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("media");
        echo "'
    }, 1000)
  })
  </script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/media/form.html.twig";
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
        return array (  330 => 172,  323 => 168,  319 => 167,  314 => 166,  304 => 157,  297 => 153,  293 => 152,  285 => 147,  279 => 144,  272 => 140,  259 => 130,  253 => 127,  244 => 121,  238 => 118,  229 => 112,  223 => 109,  214 => 103,  208 => 100,  200 => 95,  194 => 92,  188 => 89,  181 => 85,  175 => 82,  169 => 79,  160 => 73,  154 => 70,  148 => 67,  139 => 61,  133 => 58,  129 => 57,  121 => 52,  115 => 49,  107 => 44,  102 => 42,  70 => 12,  64 => 10,  58 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/media/form.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\media\\form.html.twig");
    }
}
