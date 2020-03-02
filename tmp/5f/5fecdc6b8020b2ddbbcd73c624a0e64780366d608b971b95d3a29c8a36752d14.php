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

/* /frontend/home.twig */
class __TwigTemplate_f94fdcfe3f4931162b93a7f32df2b68108bb6d3a05239ccca911f8032e46489c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'carousel' => [$this, 'block_carousel'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
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
        $this->parent = $this->loadTemplate("/frontend/layout.twig", "/frontend/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "\t";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
\t<script src=\"../public/js/api/homePage.js\"></script>
\t<!-- Add icon library -->
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
";
    }

    // line 10
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "\t<!-- Carousel -->
\t<div id=\"carousel\">
\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t<div class=\"bd-placeholder-img\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"bd-placeholder-img\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"bd-placeholder-img\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>
\t</div>
\t<!--end Carousel -->
";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "
\t<section id=\"popularMovies-Card\">
\t\t<h4 class=\"home-sections-h4\">
\t\t\t<a href=\"index.php?action=popularMovies\">Films populaires</a>
\t\t</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card-deck\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"releasedMovies-Card\">
\t\t<h4 class=\"home-sections-h4\">
\t\t\t<a href=\"index.php?action=releasedMovies\">Films sortis en salle</a>
\t\t</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card-deck\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"topRatedMovies-Card\">
\t\t<h4 class=\"home-sections-h4\">
\t\t\t<a href=\"index.php?action=topRatedMovies\">Films les mieux notés</a>
\t\t</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card-deck\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

";
    }

    // line 98
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "\t";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t<!-- Latest compiled and minified CSS -->
\t<link
\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
<!-- Latest compiled and minified JavaScript -->
";
    }

    public function getTemplateName()
    {
        return "/frontend/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 99,  161 => 98,  123 => 62,  119 => 61,  67 => 11,  63 => 10,  53 => 3,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/frontend/layout.twig' %}
{% block head %}
\t{{ parent()}}
\t<script src=\"../public/js/api/homePage.js\"></script>
\t<!-- Add icon library -->
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
{% endblock %}


{% block carousel %}
\t<!-- Carousel -->
\t<div id=\"carousel\">
\t\t<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
\t\t\t<ol class=\"carousel-indicators\">
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
\t\t\t\t<li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
\t\t\t</ol>
\t\t\t<div class=\"carousel-inner\">
\t\t\t\t<div class=\"carousel-item active\">
\t\t\t\t\t<div class=\"bd-placeholder-img\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"bd-placeholder-img\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"carousel-item\">
\t\t\t\t\t<div class=\"bd-placeholder-img\"></div>
\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"carousel-caption text-left\">
\t\t\t\t\t\t\t<h1></h1>
\t\t\t\t\t\t\t<p></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Previous</span>
\t\t\t</a>
\t\t\t<a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t<span class=\"sr-only\">Next</span>
\t\t\t</a>
\t\t</div>
\t</div>
\t<!--end Carousel -->
{% endblock %}

{% block content %}

\t<section id=\"popularMovies-Card\">
\t\t<h4 class=\"home-sections-h4\">
\t\t\t<a href=\"index.php?action=popularMovies\">Films populaires</a>
\t\t</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card-deck\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"releasedMovies-Card\">
\t\t<h4 class=\"home-sections-h4\">
\t\t\t<a href=\"index.php?action=releasedMovies\">Films sortis en salle</a>
\t\t</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card-deck\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<section id=\"topRatedMovies-Card\">
\t\t<h4 class=\"home-sections-h4\">
\t\t\t<a href=\"index.php?action=topRatedMovies\">Films les mieux notés</a>
\t\t</h4>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"card-deck\"></div>
\t\t\t</div>
\t\t</div>
\t</section>

{% endblock %}

{% block footer %}
\t{{ parent() }}
\t<!-- Latest compiled and minified CSS -->
\t<link
\trel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
<!-- Latest compiled and minified JavaScript -->
{% endblock %}
", "/frontend/home.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/home.twig");
    }
}
