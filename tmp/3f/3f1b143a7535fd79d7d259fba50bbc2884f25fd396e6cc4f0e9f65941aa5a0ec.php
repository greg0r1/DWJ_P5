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

/* frontend/nav.twig */
class __TwigTemplate_bb89a4cee26fc1cb3c2cccb47e40ad544b7d66d99a36670e1811295851a20aa0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('nav', $context, $blocks);
    }

    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<div class=\"movies_nav\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.php\">STAR Movies</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse justify-content-md-center\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php\">Accueil
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?action=listPosts\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tFilms
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?action=popularMovies\">Les plus populaires</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?action=releasedMovies\">Sorties en salle</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?action=topRatedMovies\">Les films les mieux notés</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "frontend/nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block nav %}
\t<div class=\"movies_nav\">
\t\t<div class=\"container\">
\t\t\t<nav class=\"navbar navbar-expand-lg navbar-dark\">
\t\t\t\t<a class=\"navbar-brand\" href=\"index.php\">STAR Movies</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse justify-content-md-center\" id=\"navbarSupportedContent\">
\t\t\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php\">Accueil
\t\t\t\t\t\t\t\t<span class=\"sr-only\">(current)</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link\" href=\"index.php?action=listPosts\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tFilms
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?action=popularMovies\">Les plus populaires</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?action=releasedMovies\">Sorties en salle</a>
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"index.php?action=topRatedMovies\">Les films les mieux notés</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</div>
\t</div>
{% endblock %}
", "frontend/nav.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/nav.twig");
    }
}
