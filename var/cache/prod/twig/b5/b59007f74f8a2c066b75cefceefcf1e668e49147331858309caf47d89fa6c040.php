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

/* emails/confirmation.html.twig */
class __TwigTemplate_f2b8b390e3c4ce6ad8706b5e775d9ce7352cf046cfa86347959d345cbe83bd0e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/email.html.twig", "emails/confirmation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Confirmation de RDV";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<container>
        <row class=\"float-center\">
            <columns>
                <center>
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 10), "image", [], "any", false, false, false, 10))), "html", null, true);
        echo "\" width=\"216\" height=\"135\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 10), "html", null, true);
        echo "\"/>
                </center>
            </columns>
         </row>   
   <row class=\"body\">
   <p>Bonjour, </p>
   <p>Votre RDV à ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 16), "html", null, true);
        echo " est confirmé !</p>
   <p>RDV organisé par : <b>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "user", [], "any", false, false, false, 17), "html", null, true);
        echo "</b></p> 
   <p>Le <b>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dateVisite", [], "any", false, false, false, 18), "d/m/Y"), "html", null, true);
        echo "</b> à <b>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dateVisite", [], "any", false, false, false, 18), "H:i"), "html", null, true);
        echo "</b></p>
   <p><a href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 19), "position", [], "any", false, false, false, 19), "html", null, true);
        echo "\">Cliquez ici pour nous géolocaliser </a></p>

   <p><center><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "qr", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" alt=\"qrcode\"></center></p>
   <p><br><br>Ce QR code vous sera demandé à votre arrivée.</p>

</row>
  
</container>
";
    }

    // line 29
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "<row>
<columns small=\"12\" large=\"12\">
<center>
  <small style=\"color:#FFF\">Place carrée, Mahaj Ryad, Immeuble Business 5, 4ème étage Hay Riad – Rabat</small>
</center>
<center>
  <small><a href=\"http://";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 36), "website", [], "any", false, false, false, 36), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 36), "website", [], "any", false, false, false, 36), "html", null, true);
        echo "</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"mailto:";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 38), "email", [], "any", false, false, false, 38), "html", null, true);
        echo "</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"tel:";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 40), "telephone", [], "any", false, false, false, 40), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 40), "telephone", [], "any", false, false, false, 40), "html", null, true);
        echo "</a></small> 
</center>
</columns>
</row>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/confirmation.html.twig";
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
        return array (  132 => 40,  125 => 38,  118 => 36,  110 => 30,  106 => 29,  95 => 21,  90 => 19,  84 => 18,  80 => 17,  76 => 16,  65 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/confirmation.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\emails\\confirmation.html.twig");
    }
}
