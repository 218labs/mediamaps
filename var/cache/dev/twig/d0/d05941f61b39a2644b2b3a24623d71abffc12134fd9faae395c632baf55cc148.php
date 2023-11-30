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

/* partials/webpush.html.twig */
class __TwigTemplate_e08b574050a228c1a61eb88f2ed0ab7172cdf8168dbec5493cbe7494336e1fa1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/webpush.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/webpush.html.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1)) {
            // line 2
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/webpush-client.min.js"), "html", null, true);
            echo "\"></script>
<script>
    if (WebPushClientFactory.isSupported()) {
        WebPushClientFactory.create({
            serviceWorkerPath: '";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/webpush-sw.min.js"), "html", null, true);
            echo "',
            serverKey: 'BDMoknezav3-yWOZ4d60vl1rcTCnKwhzVHs0CctZZ4a2IVXehyClDKzHRAzuAYzNBmi3wZMSXctcI8mpIadUk1E',
            subscribeUrl: '/webpush/',
        })
        .then(function(Client) {
            if (!Client.getSubscription()) {
                Client.subscribe()
            }
        });
    }
</script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/webpush.html.twig";
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
        return array (  53 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if app.user %}
<script src=\"{{ asset('assets/js/webpush-client.min.js') }}\"></script>
<script>
    if (WebPushClientFactory.isSupported()) {
        WebPushClientFactory.create({
            serviceWorkerPath: '{{ asset(\"assets/js/webpush-sw.min.js\") }}',
            serverKey: 'BDMoknezav3-yWOZ4d60vl1rcTCnKwhzVHs0CctZZ4a2IVXehyClDKzHRAzuAYzNBmi3wZMSXctcI8mpIadUk1E',
            subscribeUrl: '/webpush/',
        })
        .then(function(Client) {
            if (!Client.getSubscription()) {
                Client.subscribe()
            }
        });
    }
</script>
{% endif %}", "partials/webpush.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\webpush.html.twig");
    }
}
