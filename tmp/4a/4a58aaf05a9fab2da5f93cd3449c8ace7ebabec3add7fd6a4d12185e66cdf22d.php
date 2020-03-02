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

/* /frontend/listPosts.twig */
class __TwigTemplate_b65209112cd583992dfba2e659eee412c985788d991a35cff9b5f19eced915e8 extends Template
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
        $this->parent = $this->loadTemplate("/frontend/layout.twig", "/frontend/listPosts.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<section id=\"articles\">
\t\t<div class=\"album py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["post"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 9
            echo "\t\t\t\t\t\t";
            if (twig_test_empty($context["data"])) {
                // line 10
                echo "\t\t\t\t\t\t\t<h1>Il n'y a pas de billet à afficher!</h1>
\t\t\t\t\t\t";
            } else {
                // line 12
                echo "\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card mb-4 shadow-sm\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t";
                // line 15
                if ((null === twig_get_attribute($this->env, $this->source, $context["data"], "image_post", [], "any", false, false, false, 15))) {
                    // line 16
                    echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"bd-placeholder-img card-img-top img-post\"></div>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 18
                    echo "\t\t\t\t\t\t\t\t\t\t\t<figure class=\"figure\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/backend/";
                    // line 19
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "image_post", [], "any", false, false, false, 19), "html", null, true);
                    echo "\" class=\"bd-placeholder-img card-img-top\">
\t\t\t\t\t\t\t\t\t\t\t\t<figcaption class=\"figure-caption\">";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "image_caption", [], "any", false, false, false, 20), "html", null, true);
                    echo "</figcaption>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 23
                echo "\t\t\t\t\t\t\t\t\t\t<h2>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "title", [], "any", false, false, false, 23), "html", null, true);
                echo "</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "creation_date", [], "any", false, false, false, 25), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "formatted_date", [], "any", false, false, false, 25), "html", null, true);
                echo "</time>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>";
                // line 27
                echo strip_tags(twig_get_attribute($this->env, $this->source, $context["data"], "content", [], "any", false, false, false, 27));
                echo "</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"window.location.href = 'index.php?action=post&amp;id=";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "'\" type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"window.location.href = 'index.php?action=post&amp;id=";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "'\" type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Commentaires</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "author", [], "any", false, false, false, 33), "html", null, true);
                echo "</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end Posts -->

\t\t\t<!-- Paging -->
\t\t\t<div id=\"paging\">
\t\t\t\t";
        // line 47
        if (1 === twig_compare(($context["page"] ?? null), ($context["number_of_pages"] ?? null))) {
            // line 48
            echo "\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page=1\"></a>
\t\t\t\t";
        } else {
            // line 50
            echo "\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t";
            // line 53
            if (1 === twig_compare(($context["page"] ?? null), 1)) {
                // line 54
                echo "\t\t\t\t\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page=";
                echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
                echo "\" class=\"page-link\">&laquo;</a>
\t\t\t\t\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["number_of_pages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
                // line 58
                echo "\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page=";
                // line 59
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" class=\"page-link\">";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t\t\t\t\t\t<li class=\" page-item\">
\t\t\t\t\t\t\t\t";
            // line 63
            if (-1 === twig_compare(($context["page"] ?? null), ($context["number_of_pages"] ?? null))) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page=";
                echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
                echo "\" class=\"page-link\">&raquo;</a>
\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t</div>
\t\t\t<!-- end paging -->
\t\t</div>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "/frontend/listPosts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 70,  194 => 66,  188 => 64,  186 => 63,  183 => 62,  172 => 59,  169 => 58,  165 => 57,  162 => 56,  156 => 54,  154 => 53,  149 => 50,  145 => 48,  143 => 47,  134 => 40,  128 => 39,  119 => 33,  114 => 31,  110 => 30,  104 => 27,  97 => 25,  91 => 23,  85 => 20,  81 => 19,  78 => 18,  74 => 16,  72 => 15,  67 => 12,  63 => 10,  60 => 9,  56 => 8,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/frontend/layout.twig' %}

{% block content %}
\t<section id=\"articles\">
\t\t<div class=\"album py-5 bg-light\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t{% for data in post %}
\t\t\t\t\t\t{% if data is empty %}
\t\t\t\t\t\t\t<h1>Il n'y a pas de billet à afficher!</h1>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<div class=\"card mb-4 shadow-sm\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t{% if data.image_post is null %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bd-placeholder-img card-img-top img-post\"></div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<figure class=\"figure\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"images/backend/{{ data.image_post }}\" class=\"bd-placeholder-img card-img-top\">
\t\t\t\t\t\t\t\t\t\t\t\t<figcaption class=\"figure-caption\">{{ data.image_caption}}</figcaption>
\t\t\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<h2>{{ data.title }}</h2>
\t\t\t\t\t\t\t\t\t\t<p class=\"card-text\">
\t\t\t\t\t\t\t\t\t\t\t<time datetime=\"{{ data.creation_date }}\">{{ data.formatted_date }}</time>
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p>{{ data.content | striptags | raw }}</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"window.location.href = 'index.php?action=post&amp;id={{ data.id }}'\" type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Voir</button>
\t\t\t\t\t\t\t\t\t\t\t\t<button onclick=\"window.location.href = 'index.php?action=post&amp;id={{ data.id }}'\" type=\"button\" class=\"btn btn-sm btn-outline-secondary\">Commentaires</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-muted\">{{ data.author }}</small>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!--end Posts -->

\t\t\t<!-- Paging -->
\t\t\t<div id=\"paging\">
\t\t\t\t{% if page > number_of_pages %}
\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page=1\"></a>
\t\t\t\t{% else %}
\t\t\t\t\t<nav aria-label=\"Page navigation\">
\t\t\t\t\t\t<ul class=\"pagination\">
\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t{% if page > 1 %}
\t\t\t\t\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page={{ page - 1 }}\" class=\"page-link\">&laquo;</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% for key in 1..number_of_pages %}
\t\t\t\t\t\t\t\t<li class=\"page-item\">
\t\t\t\t\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page={{ key }}\" class=\"page-link\">{{ key }}</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<li class=\" page-item\">
\t\t\t\t\t\t\t\t{% if page < number_of_pages %}
\t\t\t\t\t\t\t\t\t<a href=\"index.php?action=listPosts&amp;page={{ page + 1 }}\" class=\"page-link\">&raquo;</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</nav>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<!-- end paging -->
\t\t</div>
\t</section>
{% endblock %}
", "/frontend/listPosts.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/listPosts.twig");
    }
}
