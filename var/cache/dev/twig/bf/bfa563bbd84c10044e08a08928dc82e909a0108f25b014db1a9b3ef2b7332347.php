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

/* block/footer.html.twig */
class __TwigTemplate_91c0c81efa3f8998a3b1de0a835665c0a3318d6f8212c1250ed5bda31026a5a9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "block/footer.html.twig"));

        // line 1
        echo "<div class=\"footer row bg-primary p-5\">
  <h3 class=\" text-center text-white p-3\">MEDIA MAPS</h3>

  <div class=\"col-12 col-md-12 text-center mb-3\">
\t\t\t\t<ul class=\"list-inline mt-3 mt-md-0 mb-0\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Instagram\" class=\"text-white fs-4 me-2\"><i class=\"bi-instagram\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Facebook\" class=\"text-white fs-4 me-2\"><i class=\"bi-facebook\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Twitter\" class=\"text-white fs-4 me-2\"><i class=\"bi-twitter\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"LinkedIn\" class=\"text-white fs-4\"><i class=\"bi-linkedin\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
  </div>


  <ul class=\"text-center list-inline text-white\">
  
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Data protection"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Terms and conditions"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Legal Notice"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How does it works ?"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Press area"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Affiliate program"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Client Support"), "html", null, true);
        echo "</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" class=\"text-white\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Newsletter"), "html", null, true);
        echo "</a>
    </li>
  </ul>
</div>
<style>
 .footer a{text-decoration:none;}
</style>



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "block/footer.html.twig";
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
        return array (  125 => 46,  117 => 43,  109 => 40,  101 => 37,  93 => 34,  85 => 31,  77 => 28,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"footer row bg-primary p-5\">
  <h3 class=\" text-center text-white p-3\">MEDIA MAPS</h3>

  <div class=\"col-12 col-md-12 text-center mb-3\">
\t\t\t\t<ul class=\"list-inline mt-3 mt-md-0 mb-0\">
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Instagram\" class=\"text-white fs-4 me-2\"><i class=\"bi-instagram\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Facebook\" class=\"text-white fs-4 me-2\"><i class=\"bi-facebook\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"Twitter\" class=\"text-white fs-4 me-2\"><i class=\"bi-twitter\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\" title=\"LinkedIn\" class=\"text-white fs-4\"><i class=\"bi-linkedin\"></i></a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
  </div>


  <ul class=\"text-center list-inline text-white\">
  
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Data protection\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Terms and conditions\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Legal Notice\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"How does it works ?\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Press area\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Affiliate program\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Client Support\"|trans }}</a>
    </li>
    <li class=\"list-inline-item\">
      <a href=\"{{ path('home') }}\" class=\"text-white\">{{ \"Newsletter\"|trans }}</a>
    </li>
  </ul>
</div>
<style>
 .footer a{text-decoration:none;}
</style>



", "block/footer.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\block\\footer.html.twig");
    }
}
