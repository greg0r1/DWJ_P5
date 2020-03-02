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

/* /frontend/movieView.twig */
class __TwigTemplate_fc0c8adfa2eecb349931976925816c53fe18b52cc4af4aacc48d76ec7a930546 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("/frontend/layout.twig", "/frontend/movieView.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<div class=\"container\">
\t\t<div class=\"row justify-content-md-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card mb-4 shadow-sm\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<img class=\"card-img-top\" src=\"https://image.tmdb.org/t/p/original";
        // line 9
        echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h1>";
        // line 12
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t<p class=\"card-text\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["overview"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<p class=\"p2\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t<p class=\"p2\">";
        // line 18
        echo twig_escape_filter($this->env, ($context["vote_average"] ?? null), "html", null, true);
        echo "/10</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<a type=\"button\" href=\"index.php\" class=\"btn-default\">Retour</a>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "/frontend/movieView.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 18,  74 => 17,  67 => 13,  63 => 12,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/frontend/layout.twig' %}

{% block content %}
\t<div class=\"container\">
\t\t<div class=\"row justify-content-md-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"card mb-4 shadow-sm\">
\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<img class=\"card-img-top\" src=\"https://image.tmdb.org/t/p/original{{ image }}\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h1>{{ title }}</h1>
\t\t\t\t\t\t<p class=\"card-text\">{{ overview }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-footer text-muted\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t<p class=\"p2\">{{ date }}</p>
\t\t\t\t\t\t\t<p class=\"p2\">{{ vote_average }}/10</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"d-flex justify-content-center\">
\t\t\t<a type=\"button\" href=\"index.php\" class=\"btn-default\">Retour</a>
\t\t</div>
\t</div>
{% endblock %}
", "/frontend/movieView.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/movieView.twig");
    }
}
