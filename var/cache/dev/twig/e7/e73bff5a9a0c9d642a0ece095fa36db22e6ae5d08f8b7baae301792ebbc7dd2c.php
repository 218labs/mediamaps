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
class __TwigTemplate_f7cc102f71cbd577f1a6977549c19cd7a4adcb36ab07840a5bc0f70120b5cc2c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/signup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/signup.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "<container>
        <row class=\"header container body-border float-center\">
            <columns>
                <spacer size=\"16\"></spacer>
                <h1 class=\"text-center\"><img src=\"http://visiteurs.madaef.ma/assets/img/logo.png\" alt=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 6, $this->source); })()), "societe", [], "any", false, false, false, 6), "html", null, true);
        echo "\"></h1>
            </columns>
         </row>   
   <row>
   <p>Bonjour, </p>
   <p>Vous avez été invité à visiter ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 11, $this->source); })()), "societe", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>


<p>Avant d'être autorisé sur le site, vous devrez renseigner vos informations (Nom, CIN, email, téléphone) en cliquant sur le lien \"Accepter l'invitation\".</p>

<p>Assurez-vous d'avoir remplir le formulaire d'enregistrement afin de recevoir .</p>

<p>Après avoir remplir le formulaire vous recevez un email de confirmation </p>

</row>

<row>
  <columns>
     <p><strong>Invité par: </strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
     <p><strong>Adresse: </strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 25, $this->source); })()), "societe", [], "any", false, false, false, 25), "adress", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
     <p><strong>Date: </strong> ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 26, $this->source); })()), "dateVisite", [], "any", false, false, false, 26), "d/m/Y"), "html", null, true);
        echo "</p>
     <p><strong>Heure: </strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 27, $this->source); })()), "dateVisite", [], "any", false, false, false, 27), "H:i"), "html", null, true);
        echo "</p>
  </columns>
</row> 


<row>
            <columns>
                <center>
                    <button href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("register_visiteur", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["visite"]) || array_key_exists("visite", $context) ? $context["visite"] : (function () { throw new RuntimeError('Variable "visite" does not exist.', 35, $this->source); })()), "token", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\">Accepter l'invitation</button>
                </center>
            </columns>
        </row>   

</container>

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo Twig\Extra\CssInliner\twig_inline_css(Twig\Extra\Inky\twig_inky($___internal_parse_0_), twig_source($this->env, "@assets/css/email.css"));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  109 => 1,  98 => 35,  87 => 27,  83 => 26,  79 => 25,  75 => 24,  59 => 11,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply inky_to_html|inline_css(source('@assets/css/email.css')) %}
<container>
        <row class=\"header container body-border float-center\">
            <columns>
                <spacer size=\"16\"></spacer>
                <h1 class=\"text-center\"><img src=\"http://visiteurs.madaef.ma/assets/img/logo.png\" alt=\"{{ visite.societe}}\"></h1>
            </columns>
         </row>   
   <row>
   <p>Bonjour, </p>
   <p>Vous avez été invité à visiter {{ visite.societe }}</p>


<p>Avant d'être autorisé sur le site, vous devrez renseigner vos informations (Nom, CIN, email, téléphone) en cliquant sur le lien \"Accepter l'invitation\".</p>

<p>Assurez-vous d'avoir remplir le formulaire d'enregistrement afin de recevoir .</p>

<p>Après avoir remplir le formulaire vous recevez un email de confirmation </p>

</row>

<row>
  <columns>
     <p><strong>Invité par: </strong> {{ visite.user }}</p>
     <p><strong>Adresse: </strong> {{ visite.societe.adress }}</p>
     <p><strong>Date: </strong> {{ visite.dateVisite|date(\"d/m/Y\") }}</p>
     <p><strong>Heure: </strong> {{ visite.dateVisite|date(\"H:i\") }}</p>
  </columns>
</row> 


<row>
            <columns>
                <center>
                    <button href=\"{{ url('register_visiteur', {'token': visite.token }) }}\">Accepter l'invitation</button>
                </center>
            </columns>
        </row>   

</container>

{% endapply %}", "emails/signup.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\emails\\signup.html.twig");
    }
}
