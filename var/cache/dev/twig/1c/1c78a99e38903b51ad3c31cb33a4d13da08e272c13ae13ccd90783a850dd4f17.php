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
class __TwigTemplate_fe4a3058aafb50200cc7f972778ad3f47ef4081a64d2e1369bed5b5edf55bf05 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/password-new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/security/password-new.html.twig"));

        $this->parent = $this->loadTemplate("layout/auth.html.twig", "front/security/password-new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  155 => 60,  153 => 57,  143 => 50,  127 => 37,  111 => 24,  105 => 21,  102 => 20,  93 => 18,  89 => 17,  84 => 15,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout/auth.html.twig' %}

{% block body %}

  <section class=\"h-100\">
    <div class=\"container h-100\">
      <div class=\"row justify-content-sm-center h-100\">
        <div class=\"col-sm-6\">
          <div class=\"text-center my-5\">
            <img src=\"{{ asset('assets/img/logo.png') }}\" height=\"80\">
          </div>
          <div class=\"card shadow-lg\">
            <div class=\"card-body p-5\">
              <h1 class=\"fs-4 card-title fw-bold mb-4\">
                {{ \"Réinitialiser le mot de passe\"|trans }}
              </h1>
              {% for message in app.flashes('error') %}
                <div class=\"bd-callout bd-callout-danger\">{{ message }}</div>
              {% endfor %}
              <form action=\"\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('password_new') }}\">
                <div class=\"mb-3\">
                  <label class=\"mb-2 text-muted\" for=\"new_password\">
                    {{ \"Nouveau mot de passe\"|trans }}
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
                    {{ \"Répétez le nouveau mot de passe\"|trans }}
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
                    {{ \"Réinitialiser\"|trans }}
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class=\"text-center mt-5 mb-5 text-muted\">
            {{ \"%copy% %year% MADAEF\"|trans({
              '%copy%':'&copy;',
              '%year%': \"now\"|date('Y')
            })|raw }}
          </div>
        </div>
      </div>
    </div>
  </section>

{% endblock %}", "front/security/password-new.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\front\\security\\password-new.html.twig");
    }
}
