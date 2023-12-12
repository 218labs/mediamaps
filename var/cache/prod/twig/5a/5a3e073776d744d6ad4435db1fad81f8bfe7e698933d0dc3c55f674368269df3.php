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

/* emails/password-reset.html.twig */
class __TwigTemplate_a61490f47d804f5fb078c79788a4a38b611604298696e898dd602325b46b7683 extends Template
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
        $this->parent = $this->loadTemplate("layout/email.html.twig", "emails/password-reset.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Réinitialiser le mot de passe";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<container>  
  <row>
    <p>Bonjour,</p>
    <p>Une réinitialisation du mot de passe a été demandée pour le compte suivant: <b>";
        // line 9
        echo twig_escape_filter($this->env, ($context["user_email"] ?? null), "html", null, true);
        echo "</b></p>
    <p>S'il s'agit d'une erreur, ignorez simplement cet e-mail et rien ne se passera.</p>
    <p>Pour réinitialiser votre mot de passe, visitez le lien suivant:<br><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["reset_link"] ?? null), "html", null, true);
        echo "\"><b>";
        echo twig_escape_filter($this->env, ($context["reset_link"] ?? null), "html", null, true);
        echo "</b></a></p>
    <p>Cordialement</p>
  </row>
</container>
";
    }

    // line 17
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<row>
<columns small=\"12\" large=\"12\">
<center>
  <small style=\"color:#FFF\">Place carrée, Mahaj Ryad, Immeuble Business 5, 4ème étage Hay Riad – Rabat</small>
</center>
<center>
  <small><a href=\"http://www.madaef.ma\">www.madaef.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"mailto:contact@madaef.ma\">contact@madaef.ma</a></small> 
  <small style=\"color:#000\"> | </small>
  <small><a href=\"tel:0530574100\">0530574100</a></small> 
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
        return "emails/password-reset.html.twig";
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
        return array (  84 => 18,  80 => 17,  69 => 11,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "emails/password-reset.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\emails\\password-reset.html.twig");
    }
}
