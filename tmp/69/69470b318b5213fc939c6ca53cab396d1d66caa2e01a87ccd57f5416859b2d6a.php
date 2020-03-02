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

/* /frontend/releasedMovies.twig */
class __TwigTemplate_6c78367409849bf74517b738e09cbf7bebcc5f2df2e1be269ae6248ff9032bd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/frontend/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/frontend/layout.twig", "/frontend/releasedMovies.twig", 1);
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
\t<script src=\"../public/js/api/releasedMovies.js\"></script>
";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
\t<section>
\t\t<div class=\"jumbotron text-center\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1>Les films sortis en salles</h1>
\t\t\t\t<p class=\"lead\">Les derniers films sortis en salles.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"album py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<a type=\"button\" href=\"index.php\" class=\"btn-default\">Retour</a>
\t\t</div>
\t</section>


";
    }

    public function getTemplateName()
    {
        return "/frontend/releasedMovies.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  59 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/frontend/layout.twig' %}

{% block head %}
\t{{ parent() }}
\t<script src=\"../public/js/api/releasedMovies.js\"></script>
{% endblock %}

{% block content %}

\t<section>
\t\t<div class=\"jumbotron text-center\">
\t\t\t<div class=\"container\">
\t\t\t\t<h1>Les films sortis en salles</h1>
\t\t\t\t<p class=\"lead\">Les derniers films sortis en salles.</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"album py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\"></div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<a type=\"button\" href=\"index.php\" class=\"btn-default\">Retour</a>
\t\t</div>
\t</section>


{% endblock %}
", "/frontend/releasedMovies.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/releasedMovies.twig");
    }
}
