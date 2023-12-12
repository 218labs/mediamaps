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

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_708d21dd7f41a6dffeaf1b2973cee44dffddfd527af1c45cef64180c0565c837 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "getLocale", [], "method", false, false, false, 2), "html", null, true);
        echo "\">
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 17
        echo "</head>
<body>

  <div class=\"container pt-5\">
    <div class=\"row pt-5\">
      <div class=\"col-sm-6 offset-sm-3\">
        <div class=\"status-code\">";
        // line 23
        echo twig_escape_filter($this->env, ($context["status_code"] ?? null), "html", null, true);
        echo "</div>
        <div class=\"status-text\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["status_text"] ?? null)), "html", null, true);
        echo "</div>
        ";
        // line 25
        if ((($context["status_code"] ?? null) == 404)) {
            // line 26
            echo "          <div class=\"exception-message\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Désolé, nous n'avons pas pu trouver cette page"), "html", null, true);
            echo "</div>
        ";
        } elseif ((        // line 27
($context["status_code"] ?? null) == 403)) {
            // line 28
            echo "          <div class=\"exception-message\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Vous n'êtes pas autorisé à accéder à cette page"), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 30
            echo "          <div class=\"exception-message\">Un erreur est survenu <span style=\"display:none; isibility:hidden\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", [], "any", false, false, false, 30)), "html", null, true);
            echo "</span></div>
        ";
        }
        // line 32
        echo "      </div>
    </div>
    <div class=\"row mt-4\">
      <div class=\"col-sm-2 offset-sm-4\">
        <a href=\"#\" class=\"btn btn-outline-secondary rounded-0 shadow-none d-block\" onclick=\"history.go(-1);\">
          <i class=\"bi bi-arrow-left\"></i>
          ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retour"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"col-sm-2 pl-0 pl-xs-15\">
        <a href=\"mailto:contact@218labs.ma\" class=\"btn btn-outline-primary rounded-0 shadow-none d-block\">
          <i class=\"bi bi-envelope\"></i>
          ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Contactez-nous"), "html", null, true);
        echo "
        </a>
      </div>
    </row>
\t</div> 

</body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "MADAEF - ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["status_text"] ?? null)), "html", null, true);
    }

    // line 7
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
    <style>
      body { background: #f1f4f9; font-family: arial; }
      .status-code { font-size: 12rem; line-height: 12rem; text-align: center; color: #777; }
      .status-text { font-size: 2rem; color: #777; text-align: center; text-transform: uppercase; }
      .exception-message { font-size: 1rem; color: #777; text-align: center; }
      .copyright { width: 100%; text-align: center; color: #777; font-size: 12px; }
\t  </style>
  ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
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
        return array (  134 => 8,  130 => 7,  122 => 6,  109 => 44,  100 => 38,  92 => 32,  86 => 30,  80 => 28,  78 => 27,  73 => 26,  71 => 25,  67 => 24,  63 => 23,  55 => 17,  53 => 7,  49 => 6,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Twig/Exception/error.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\bundles\\TwigBundle\\Exception\\error.html.twig");
    }
}
