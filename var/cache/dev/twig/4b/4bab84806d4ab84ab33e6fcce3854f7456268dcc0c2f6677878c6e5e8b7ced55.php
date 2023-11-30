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

/* @assets/css/email.css */
class __TwigTemplate_ba0df6684d9d805cd65e04b3ddcff69761d2541e0d51d63aecafe3002aa626a5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/css/email.css"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@assets/css/email.css"));

        // line 1
        echo "body {
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
  font-family: \"Raleway\", Helvetica, Arial, sans-serif !important;
}
h2 {
  background-color: #264459;
  color: #ffffff;
  font-weight: normal;
}
hr {
  border: none;
  border-top: 3px solid #264459;
  margin: 20px;
}
.welcome {
  background-color: #264459;
}
.bottom {
  background-color: #efefee;
}
.logo {
  width: 100%;
}
.text-center {
  text-align: center;
}
table.button a {
  background-color: #264459;
}
table.button table td {
  background-color: #264459;
  border: 2px solid #264459;
}
.btn-primary {
  color: #fff;
  background-color: #00447a;
  border-color: #00447a;
}
.btn-primary:hover {
  background-color: #477626;
  border-color: #477626;
  box-shadow: 0 0 0 0.25rem #477626;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@assets/css/email.css";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("body {
  margin: 0;
  padding: 0;
  background-color: #f3f3f3;
  font-family: \"Raleway\", Helvetica, Arial, sans-serif !important;
}
h2 {
  background-color: #264459;
  color: #ffffff;
  font-weight: normal;
}
hr {
  border: none;
  border-top: 3px solid #264459;
  margin: 20px;
}
.welcome {
  background-color: #264459;
}
.bottom {
  background-color: #efefee;
}
.logo {
  width: 100%;
}
.text-center {
  text-align: center;
}
table.button a {
  background-color: #264459;
}
table.button table td {
  background-color: #264459;
  border: 2px solid #264459;
}
.btn-primary {
  color: #fff;
  background-color: #00447a;
  border-color: #00447a;
}
.btn-primary:hover {
  background-color: #477626;
  border-color: #477626;
  box-shadow: 0 0 0 0.25rem #477626;
}
", "@assets/css/email.css", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\public\\assets\\css\\email.css");
    }
}
