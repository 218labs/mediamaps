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

/* emails/signup.html.twig */
class __TwigTemplate_014f1b2d1922160a68afa203bdc0e7cdb4f83e3ec5ce5340934a2df764046daa extends Template
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
        // line 1
        ob_start(function () { return ''; });
        // line 2
        echo "<container>
        <row class=\"header container body-border float-center\">
            <columns>
                <spacer size=\"16\"></spacer>
                <h1 class=\"text-center\"><img src=\"http://visiteurs.madaef.ma/assets/img/logo.png\" alt=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "societe", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></h1>
            </columns>
         </row>   
   <row>
   <p>Bonjour, </p>
   <p>Vous avez été invité à visiter ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "societe", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>


<p>Avant d'être autorisé sur le site, vous devrez renseigner vos informations (Nom, CIN, email, téléphone) en cliquant sur le lien \"Accepter l'invitation\".</p>

<p>Assurez-vous d'avoir remplir le formulaire d'enregistrement afin de recevoir .</p>

<p>Après avoir remplir le formulaire vous recevez un email de confirmation </p>

</row>

<row>
  <columns>
     <p><strong>Invité par: </strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "user", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
     <p><strong>Adresse: </strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "societe", [], "any", false, false, false, 25), "adress", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
     <p><strong>Date: </strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "dateVisite", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</p>
     <p><strong>Heure: </strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "dateVisite", [], "any", false, false, false, 27), "H:i"), "html", null, true);
        echo "</p>
  </columns>
</row> 


<row>
            <columns>
                <center>
                    <button href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register_visiteur", ["token" => twig_get_attribute($this->env, $this->source, ($context["visite"] ?? null), "token", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Accepter l'invitation</button>
                </center>
            </columns>
        </row>   

</container>

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css(Twig\Extra\Inky\twig_inky($___internal_parse_0_), twig_source($this->env, "@assets/css/email.css"));
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "emails/signup.html.twig";
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
        return array (  103 => 1,  92 => 35,  81 => 27,  77 => 26,  73 => 25,  69 => 24,  53 => 11,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/signup.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\emails\\signup.html.twig");
    }
}
