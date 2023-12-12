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
class __TwigTemplate_62695e4306a1baf7de39abe920175e0b833a90edf434f96316dd1a4be9f288eb extends Template
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
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@assets/css/email.css", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\public\\assets\\css\\email.css");
    }
}
