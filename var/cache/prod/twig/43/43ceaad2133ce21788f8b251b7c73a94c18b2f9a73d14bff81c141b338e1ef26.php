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

/* emails/register.html.twig */
class __TwigTemplate_e3218d6a3a4cd87b6d24fe094e66aedb26c80c3bb349b76dd39d900ae14364c6 extends Template
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
        $this->parent = $this->loadTemplate("layout/email.html.twig", "emails/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Invitation de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<container>
        <row>
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
   <p>Vous avez été invité à visiter ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>


<p>Avant d'être autorisé sur le site, vous devrez renseigner vos informations (Société, Nom, CIN, email, téléphone) en cliquant sur le lien ci-dessous : </p>

<row>
  <columns class=\"register\">
    <spacer size=\"16\"></spacer>
    <center>
    <button class=\"btn-primary\" target=\"_blank\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_visiteur", ["token" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "token", [], "any", false, false, false, 25)])), "html", null, true);
        echo "\">Accepter l'invitation</button>
    </center>
  </columns>
</row>  

<p>Assurez-vous d'avoir remplir le formulaire d'enregistrement afin de confirmer votre visite .</p>

</row>

<row>
  <columns>
     <p><strong>Invité par: </strong> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "user", [], "any", false, false, false, 36), "html", null, true);
        echo "</p>
     <p><strong>Adresse: </strong> ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 37), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 37), "adress", [], "any", false, false, false, 37), "html", null, true);
        echo "</p>
     <p><strong>Date de la visite: </strong> ";
        // line 38
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dateVisite", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
        echo "</p>
     <p><strong>Heure de la visite: </strong> ";
        // line 39
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dateVisite", [], "any", false, false, false, 39), "H:i"), "html", null, true);
        echo "</p>
  </columns>
</row> 

</container>

";
    }

    // line 47
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Site web: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 47), "website", [], "any", false, false, false, 47), "html", null, true);
        echo " - Email: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 47), "email", [], "any", false, false, false, 47), "html", null, true);
        echo " - Téléphone: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "societe", [], "any", false, false, false, 47), "telephone", [], "any", false, false, false, 47), "html", null, true);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/register.html.twig";
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
        return array (  129 => 47,  118 => 39,  114 => 38,  108 => 37,  104 => 36,  90 => 25,  78 => 16,  67 => 10,  61 => 6,  57 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/register.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\emails\\register.html.twig");
    }
}
