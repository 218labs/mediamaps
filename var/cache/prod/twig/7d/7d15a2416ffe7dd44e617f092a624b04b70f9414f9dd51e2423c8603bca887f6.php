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

/* front/security/password-new.html.twig */
class __TwigTemplate_01614f62d54689f0bc21088b04fc414e0a5887bb49954f6d33f9c4abfe998e87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/password-new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
  <section class=\"h-100\">
    <div class=\"container h-100\">
      <div class=\"row justify-content-sm-center h-100\">
        <div class=\"col-sm-6\">
          <div class=\"text-center my-5\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" height=\"80\">
          </div>
          <div class=\"card shadow-lg\">
            <div class=\"card-body p-5\">
              <h1 class=\"fs-4 card-title fw-bold mb-4\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réinitialiser le mot de passe"), "html", null, true);
        echo "
              </h1>
              ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                <div class=\"bd-callout bd-callout-danger\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "              <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("password_new"), "html", null, true);
        echo "\">
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password\">
                    ";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Nouveau mot de passe"), "html", null, true);
        echo "
                  </label>
                  <input 
                    type=\"password\" 
                    name=\"password\" 
                    autocomplete=\"off\"
                    class=\"form-control\"
                    id=\"new_password\"
                    required 
                  />
                </div>
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password_confirm\">
                    ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Répétez le nouveau mot de passe"), "html", null, true);
        echo "
                  </label>
                  <input 
                    type=\"password\" 
                    name=\"confirm\" 
                    autocomplete=\"off\"
                    class=\"form-control\"
                    id=\"new_password_confirm\"
                    required 
                  />
                </div>
                <div class=\"d-grid d-block\">
                  <button type=\"submit\" class=\"btn btn-primary\">
                    ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Réinitialiser"), "html", null, true);
        echo "
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class=\"text-center mt-5 mb-5 text-muted\">
            ";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%copy% %year% MADAEF", ["%copy%" => "&copy;", "%year%" => twig_date_format_filter($this->env, "now", "Y")]);
        // line 60
        echo "
          </div>
        </div>
      </div>
    </div>
  </section>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/security/password-new.html.twig";
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
        return array (  137 => 60,  135 => 57,  125 => 50,  109 => 37,  93 => 24,  87 => 21,  84 => 20,  75 => 18,  71 => 17,  66 => 15,  58 => 10,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "front/security/password-new.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\front\\security\\password-new.html.twig");
    }
}
