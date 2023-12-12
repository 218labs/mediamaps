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

/* front/security/signup.html.twig */
class __TwigTemplate_56734ba8f54f57aafb308b5a3de90298bbd108a74de642e38ac04807f0617982 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout/auth.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/signup.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<style>
\t\tbody {
\t\t\tmargin: 0;
\t\t\theight: 100vh;
\t\t\toverflow-x: hidden;
\t\t\tbackground-size: cover;
\t\t\tbackground-position: center;
\t\t\tbackground: var(--color-primary) url(";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/190325-rental-cars-cs-229p.webp"), "html", null, true);
        echo ") top right no-repeat;
\t\t}
\t\t.login-form {
\t\t\tbackground-color: #fff;
\t\t\tposition: absolute;
\t\t\ttop: 0;
\t\t\tright: 0;
\t\t\theight: 100%;
\t\t\twidth: 100%;
\t\t\tmax-width: 570px;
\t\t}
\t\t.divider p {
\t\t\tcolor: var(--color-secondary);
\t\t}
\t\t.divider:after,
\t\t.divider:before {
\t\t\tcontent: \"\";
\t\t\tflex: 1;
\t\t\theight: 1px;
\t\t\tbackground: var(--color-secondary);
\t\t}
\t</style>
";
    }

    // line 36
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "\t<div class=\"login-form d-flex align-items-center\">
\t\t<div class=\"card border-0 w-100 px-4\">
\t\t\t<div class=\"card-body\">
\t\t\t\t<div class=\"text-center my-5\">
\t\t\t\t\t<img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/autobooking.jpeg"), "html", null, true);
        echo "\" height=\"60\" />
\t\t\t\t</div>
\t\t\t\t";
        // line 43
        if (($context["error"] ?? null)) {
            // line 44
            echo "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 45), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 45)), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 48
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 48));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 49
            echo "\t\t\t\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t\t\t\t\t<ul class=\"list-unstyled m-0 p-0\">
\t\t\t\t\t\t\t<li>";
            // line 51
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"mb-2 text-muted\" for=\"email\">
\t\t\t\t\t\t\t";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email"), "html", null, true);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\" class=\"form-control\" autofocus required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"mb-2 w-100\">
\t\t\t\t\t\t\t<label class=\"text-muted\" for=\"password\">
\t\t\t\t\t\t\t\t";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mot de passe"), "html", null, true);
        echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"password\" name=\"password\" autocomplete=\"off\" class=\"form-control\" required/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-4 text-center\">
\t\t\t\t\t\t<ajax-modal url=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("password.reset");
        echo "\" width=\"400\" class=\"text-muted cursor-pointer mb-4 mb-sm-0 mt-0 mt-sm-2 d-block d-sm-inline-block float-none float-sm-start\">
\t\t\t\t\t\t\t";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réinitialiser le mot de passe"), "html", null, true);
        echo "
\t\t\t\t\t\t</ajax-modal>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary rounded-pill px-5 text-white float-none float-sm-end\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Se connecter"), "html", null, true);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</form>

\t\t\t\t<h3 text-center text-primary>Vos avantages:</h3>
\t\t\t\t <ul class=\"unstyled\">
\t\t\t\t   <li><i class=\"bi bi-check\"></i> Réservations express</li>
\t\t\t\t   <li><i class=\"bi bi-check\"></i> Infos voyages exclusives</li>
\t\t\t\t   <li><i class=\"bi bi-check\"></i> Accès rapide à vos réservations</li>
\t\t\t\t </ul>


\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/security/signup.html.twig";
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
        return array (  177 => 75,  172 => 73,  168 => 72,  159 => 66,  151 => 61,  146 => 59,  140 => 56,  135 => 55,  125 => 51,  121 => 49,  116 => 48,  110 => 45,  107 => 44,  105 => 43,  100 => 41,  94 => 37,  90 => 36,  63 => 12,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/security/signup.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\front\\security\\signup.html.twig");
    }
}