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

/* /backend/listPosts.twig */
class __TwigTemplate_ac90b8598f6d02476ac002fc2239d67c9bc72434e2f5794dac36a0c48f55efdc extends Template
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
        return "/backend/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/listPosts.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container-fluid\">

    <h1 class=\"h3 mb-2 text-gray-800\">Gestionnaire d'articles</h1>
    <p class=\"mb-4\">Ajoutez, suprimez, ou modifiez des articles.</p>

    <div class=\"card shadow mb-4\">
      <div class=\"card-header py-3 d-flex justify-content-between\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Articles</h6>
        <a type=\"button\" href=\"index.php?action=createPost\" class=\"btn btn-warning text-right\">Ajouter un article</a>
      </div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
              <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Contenu du billet</th>
                <th>Image</th>
                <th>Date de création</th>
                <th>Date de modification</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Contenu du billet</th>
                <th>Image</th>
                <th>Date de création</th>
                <th>Date de modification</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              ";
        // line 42
        $context["number0fElements"] = 0;
        // line 43
        echo "
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 45
            echo "                ";
            if (twig_test_empty($context["data"])) {
                // line 46
                echo "                  <p>Il n'y a pas de billet à afficher!</p>
                ";
            } else {
                // line 48
                echo "                  ";
                $context["number0fElements"] = (($context["number0fElements"] ?? null) + 1);
                // line 49
                echo "                  <tr>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["data"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
                echo "</td>
                    <td>";
                // line 51
                echo strip_tags((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["data"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null));
                echo "</td>
                    <td>";
                // line 52
                echo strip_tags((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["data"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["author"] ?? null) : null));
                echo "</td>
                    <td>";
                // line 53
                echo strip_tags((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["data"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["content"] ?? null) : null));
                echo "</td>
                    <td>
                      ";
                // line 55
                if (twig_test_empty((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["data"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["image_post"] ?? null) : null))) {
                    // line 56
                    echo "                        <p>Pas d'image</p>
                      ";
                } else {
                    // line 58
                    echo "                        <img src=\"images/backend/";
                    echo strip_tags((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["data"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["image_post"] ?? null) : null));
                    echo "\" width=\"100px\"/></td>
                    ";
                }
                // line 60
                echo "                    <td>";
                echo strip_tags((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["data"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["formatted_date"] ?? null) : null));
                echo "</td>
                    <td>";
                // line 61
                echo strip_tags((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["data"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["formatted_date_modif"] ?? null) : null));
                echo "</td>
                    <td>
                      <a href=\"index.php?action=editPost&amp;id=";
                // line 63
                echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["data"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["id"] ?? null) : null), "html", null, true);
                echo ">\" class=\"edit\" title=\"Modifier\">
                        <i class=\"material-icons\"></i>
                      </a>
                      <a href=\"index.php?action=deletePost&amp;id=";
                // line 66
                echo twig_escape_filter($this->env, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["data"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"delete\" title=\"Supprimer\" onclick=\"return deleteDialog()\">
                        <i class=\"material-icons\"></i>
                      </a>
                    </td>
                  </tr>
                ";
            }
            // line 72
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </tbody>
          </table>
        </div>
        <div class=\"clearfix\">
          <div class=\"hint-text\">Affichage de
            <b>";
        // line 78
        echo twig_escape_filter($this->env, ($context["number0fElements"] ?? null), "html", null, true);
        echo "</b>
            entrées sur
            <b>";
        // line 80
        echo twig_escape_filter($this->env, ($context["number_total_posts"] ?? null), "html", null, true);
        echo "</b>
          </div>
          <ul class=\"pagination\">
            <li class=\"page-item\">
              ";
        // line 84
        if (1 === twig_compare(($context["page"] ?? null), 1)) {
            // line 85
            echo "                <a href=\"index.php?action=commentsList&amp;page=";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "\" class=\"page-link\">&laquo;</a>
              ";
        }
        // line 87
        echo "            </li>
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["number_of_pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 89
            echo "              <li class=\"page-item\">
                <a href=\"index.php?action=commentsList&amp;page=";
            // line 90
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" class=\"page-link\">";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</a>
              </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            <li class=\"page-item\">
              ";
        // line 94
        if (-1 === twig_compare(($context["page"] ?? null), ($context["number_of_pages"] ?? null))) {
            // line 95
            echo "                <a href=\"index.php?action=commentsList&amp;page=";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "\" class=\"page-link\">&raquo;</a>
              ";
        }
        // line 97
        echo "            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
";
    }

    public function getTemplateName()
    {
        return "/backend/listPosts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 97,  225 => 95,  223 => 94,  220 => 93,  209 => 90,  206 => 89,  202 => 88,  199 => 87,  193 => 85,  191 => 84,  184 => 80,  179 => 78,  172 => 73,  166 => 72,  157 => 66,  151 => 63,  146 => 61,  141 => 60,  135 => 58,  131 => 56,  129 => 55,  124 => 53,  120 => 52,  116 => 51,  112 => 50,  109 => 49,  106 => 48,  102 => 46,  99 => 45,  95 => 44,  92 => 43,  90 => 42,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}

{% block content %}
  <div class=\"container-fluid\">

    <h1 class=\"h3 mb-2 text-gray-800\">Gestionnaire d'articles</h1>
    <p class=\"mb-4\">Ajoutez, suprimez, ou modifiez des articles.</p>

    <div class=\"card shadow mb-4\">
      <div class=\"card-header py-3 d-flex justify-content-between\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Articles</h6>
        <a type=\"button\" href=\"index.php?action=createPost\" class=\"btn btn-warning text-right\">Ajouter un article</a>
      </div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
              <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Contenu du billet</th>
                <th>Image</th>
                <th>Date de création</th>
                <th>Date de modification</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Contenu du billet</th>
                <th>Image</th>
                <th>Date de création</th>
                <th>Date de modification</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              {% set number0fElements = 0 %}

              {% for data in posts %}
                {% if data is empty %}
                  <p>Il n'y a pas de billet à afficher!</p>
                {% else %}
                  {% set number0fElements = number0fElements + 1 %}
                  <tr>
                    <td>{{ data['id'] }}</td>
                    <td>{{ data['title'] | striptags | raw }}</td>
                    <td>{{ data['author'] | striptags | raw }}</td>
                    <td>{{ data['content'] | striptags | raw }}</td>
                    <td>
                      {% if data['image_post'] is empty %}
                        <p>Pas d'image</p>
                      {% else %}
                        <img src=\"images/backend/{{ data['image_post'] | striptags | raw }}\" width=\"100px\"/></td>
                    {% endif %}
                    <td>{{ data['formatted_date'] | striptags | raw }}</td>
                    <td>{{ data['formatted_date_modif'] | striptags | raw  }}</td>
                    <td>
                      <a href=\"index.php?action=editPost&amp;id={{ data['id'] }}>\" class=\"edit\" title=\"Modifier\">
                        <i class=\"material-icons\"></i>
                      </a>
                      <a href=\"index.php?action=deletePost&amp;id={{ data['id'] }}\" class=\"delete\" title=\"Supprimer\" onclick=\"return deleteDialog()\">
                        <i class=\"material-icons\"></i>
                      </a>
                    </td>
                  </tr>
                {% endif %}
              {% endfor %}
            </tbody>
          </table>
        </div>
        <div class=\"clearfix\">
          <div class=\"hint-text\">Affichage de
            <b>{{ number0fElements }}</b>
            entrées sur
            <b>{{ number_total_posts }}</b>
          </div>
          <ul class=\"pagination\">
            <li class=\"page-item\">
              {% if page > 1 %}
                <a href=\"index.php?action=commentsList&amp;page={{ page - 1 }}\" class=\"page-link\">&laquo;</a>
              {% endif %}
            </li>
            {% for key in 1..number_of_pages %}
              <li class=\"page-item\">
                <a href=\"index.php?action=commentsList&amp;page={{ key }}\" class=\"page-link\">{{ key }}</a>
              </li>
            {% endfor %}
            <li class=\"page-item\">
              {% if page < number_of_pages %}
                <a href=\"index.php?action=commentsList&amp;page={{ page + 1 }}\" class=\"page-link\">&raquo;</a>
              {% endif %}
            </li>
          </ul>
        </div>
      </div>
    </div>

  </div>
{% endblock %}
", "/backend/listPosts.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/listPosts.twig");
    }
}
