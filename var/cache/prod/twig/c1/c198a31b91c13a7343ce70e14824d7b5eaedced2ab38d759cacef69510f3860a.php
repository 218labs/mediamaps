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
class __TwigTemplate_ab017411bb93b91231ce1de4805d27d1e3a940f49b24e7b29fb31543897ad98c extends Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 1)) {
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
        return array (  47 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/webpush.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\partials\\webpush.html.twig");
    }
}
