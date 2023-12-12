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

/* @HWIOAuth/Connect/registration.html.twig */
class __TwigTemplate_3200d336b86b448172891b01e18a8c19159a54ab96c15f4ef2aeea1d2f0200a3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'hwi_oauth_content' => [$this, 'block_hwi_oauth_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@HWIOAuth/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@HWIOAuth/layout.html.twig", "@HWIOAuth/Connect/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.register", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "realName", [], "any", false, false, false, 4)], "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_connect_registration", ["key" => ($context["key"] ?? null)]), "attr" => ["class" => "hwi_oauth_registration_register"]]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                <div>
                    <button type=\"submit\" class=\"btn btn-primary\">";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.registration.submit", [], "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                    <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.registration.cancel", [], "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                </div>
            ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
        </div>
        <div class=\"span6\">
            ";
        // line 16
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "profilePicture", [], "any", false, false, false, 16))) {
            // line 17
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "profilePicture", [], "any", false, false, false, 17), "html", null, true);
            echo "\" />
            ";
        }
        // line 19
        echo "        </div>
    </div>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/registration.html.twig";
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
        return array (  91 => 19,  85 => 17,  83 => 16,  77 => 13,  70 => 11,  66 => 10,  61 => 8,  57 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@HWIOAuth/Connect/registration.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\hwi\\oauth-bundle\\Resources\\views\\Connect\\registration.html.twig");
    }
}
