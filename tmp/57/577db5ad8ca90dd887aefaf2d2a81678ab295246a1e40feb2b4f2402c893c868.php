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

/* /frontend/layout.twig */
class __TwigTemplate_1a82f5f5df49c7da8ee29a6116561a36650c68f04fb8778cc25f4fc96c8f7687 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'carousel' => [$this, 'block_carousel'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout', $context, $blocks);
    }

    public function block_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<!DOCTYPE html>
\t<html lang=\"fr\">

\t\t<head>
\t\t\t";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "\t\t</head>

\t\t<body>
\t\t\t<header>
\t\t\t\t";
        // line 18
        $this->loadTemplate("frontend/header.twig", "/frontend/layout.twig", 18)->display($context);
        // line 19
        echo "\t\t\t\t";
        // line 20
        echo "\t\t\t\t<button onclick=\"topFunction()\" id=\"btnTop\" title=\"goToTop\">
\t\t\t\t\t<p>&#10094;</p>
\t\t\t\t</button>
\t\t\t</header>
\t\t\t";
        // line 24
        $this->loadTemplate("frontend/popupLogin.twig", "/frontend/layout.twig", 24)->display($context);
        // line 25
        echo "\t\t\t<nav>
\t\t\t\t";
        // line 26
        $this->loadTemplate("frontend/nav.twig", "/frontend/layout.twig", 26)->display($context);
        // line 27
        echo "\t\t\t</nav>
\t\t\t";
        // line 29
        echo "\t\t\t";
        $this->displayBlock('carousel', $context, $blocks);
        // line 30
        echo "\t\t\t<main>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "\t\t\t\t</div>
\t\t\t</main>
\t\t\t";
        // line 35
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "\t\t</body>
\t</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "\t\t\t\t";
        $this->loadTemplate("frontend/head.twig", "/frontend/layout.twig", 7)->display($context);
        // line 8
        echo "\t\t\t\t<title>
\t\t\t\t\t";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "\t\t\t\t</title>
\t\t\t";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "\t\t\t\t\t\t";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
\t\t\t\t\t";
    }

    // line 29
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "\t\t\t\t";
        $this->loadTemplate("frontend/footer.twig", "/frontend/layout.twig", 36)->display($context);
        // line 37
        echo "\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
\t\t\t";
    }

    public function getTemplateName()
    {
        return "/frontend/layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  152 => 37,  149 => 36,  145 => 35,  139 => 32,  133 => 29,  126 => 10,  122 => 9,  117 => 12,  115 => 9,  112 => 8,  109 => 7,  105 => 6,  99 => 39,  97 => 35,  93 => 33,  91 => 32,  87 => 30,  84 => 29,  81 => 27,  79 => 26,  76 => 25,  74 => 24,  68 => 20,  66 => 19,  64 => 18,  58 => 14,  56 => 6,  50 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout %}
\t<!DOCTYPE html>
\t<html lang=\"fr\">

\t\t<head>
\t\t\t{% block head %}
\t\t\t\t{% include('frontend/head.twig') %}
\t\t\t\t<title>
\t\t\t\t\t{% block title %}
\t\t\t\t\t\t{{title}}
\t\t\t\t\t{% endblock %}
\t\t\t\t</title>
\t\t\t{% endblock %}
\t\t</head>

\t\t<body>
\t\t\t<header>
\t\t\t\t{% include('frontend/header.twig') %}
\t\t\t\t{# Button To Top #}
\t\t\t\t<button onclick=\"topFunction()\" id=\"btnTop\" title=\"goToTop\">
\t\t\t\t\t<p>&#10094;</p>
\t\t\t\t</button>
\t\t\t</header>
\t\t\t{% include('frontend/popupLogin.twig') %}
\t\t\t<nav>
\t\t\t\t{% include('frontend/nav.twig') %}
\t\t\t</nav>
\t\t\t{# Carousel only homePage #}
\t\t\t{% block carousel %}{% endblock %}
\t\t\t<main>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t{% block content %}{% endblock %}
\t\t\t\t</div>
\t\t\t</main>
\t\t\t{% block footer %}
\t\t\t\t{% include('frontend/footer.twig') %}
\t\t\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>
\t\t\t{% endblock %}
\t\t</body>
\t</html>
{% endblock %}
", "/frontend/layout.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/layout.twig");
    }
}
