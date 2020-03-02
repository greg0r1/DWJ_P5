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

/* frontend/header.twig */
class __TwigTemplate_2e0035a3b06dfdb14010a8122b24d45d42e8eb17dfe8b612aa941dc7a9865c4d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<!-- header -->
\t<div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"layouts_logo\">
\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t<h1>Star<span>Movies</span>
\t\t\t\t\t</h1>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sign_in_register\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a onclick=\"document.getElementById('popupLogin').style.display='block'\" style=\"width:auto;cursor:pointer\">Se connecter</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "frontend/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
\t<!-- header -->
\t<div class=\"header\">
\t\t<div class=\"container\">
\t\t\t<div class=\"layouts_logo\">
\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t<h1>Star<span>Movies</span>
\t\t\t\t\t</h1>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"sign_in_register\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a onclick=\"document.getElementById('popupLogin').style.display='block'\" style=\"width:auto;cursor:pointer\">Se connecter</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
{% endblock %}
", "frontend/header.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/header.twig");
    }
}
