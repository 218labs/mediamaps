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

/* @HWIOAuth/Connect/connect_confirm.html.twig */
class __TwigTemplate_e68bb95c9b033d32de157b0388fe490ff8a6867c58cbf842f7fa73b68251fde0 extends Template
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
        $this->parent = $this->loadTemplate("@HWIOAuth/layout.html.twig", "@HWIOAuth/Connect/connect_confirm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("header.connecting", [], "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
    <div class=\"row\">
        <div class=\"span6\">
            <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.confirm.text", ["%service%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["service"] ?? null), [], "HWIOAuthBundle"), "%name%" => twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "realName", [], "any", false, false, false, 7)], "HWIOAuthBundle"), "html", null, true);
        echo "</p>
            <p>
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_connect_service", ["service" => ($context["service"] ?? null), "key" => ($context["key"] ?? null)]), "attr" => ["class" => "fos_user_registration_register"]]);
        echo "
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                    <div>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.confirm.submit", [], "HWIOAuthBundle"), "html", null, true);
        echo "</button>
                        <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("hwi_oauth_connect");
        echo "\" class=\"btn\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("connect.confirm.cancel", [], "HWIOAuthBundle"), "html", null, true);
        echo "</a>
                    </div>
                ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
            </p>
        </div>
        <div class=\"span6\">
            ";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "profilePicture", [], "any", true, true, false, 19) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "profilePicture", [], "any", false, false, false, 19)))) {
            // line 20
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["userInformation"] ?? null), "profilePicture", [], "any", false, false, false, 20), "html", null, true);
            echo "\" />
            ";
        }
        // line 22
        echo "        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@HWIOAuth/Connect/connect_confirm.html.twig";
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
        return array (  97 => 22,  91 => 20,  89 => 19,  82 => 15,  75 => 13,  71 => 12,  66 => 10,  62 => 9,  57 => 7,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@HWIOAuth/Connect/connect_confirm.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\vendor\\hwi\\oauth-bundle\\Resources\\views\\Connect\\connect_confirm.html.twig");
    }
}
