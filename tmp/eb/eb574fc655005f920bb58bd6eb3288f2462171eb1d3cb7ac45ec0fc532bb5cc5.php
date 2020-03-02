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

/* /backend/reportedCommentsList.twig */
class __TwigTemplate_c0979fcc6cf9ebced6a03d3d86f5d55abfe4803c91c14754d8db600c287e13f9 extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/reportedCommentsList.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        // line 83
        echo "
  <div class=\"container-fluid\">

    <h1 class=\"h3 mb-2 text-gray-800\">Gestionnaire des commentaires</h1>
    <p class=\"mb-4\">Ajoutez, suprimez, ou modifiez des commentaires.</p>

    <div class=\"card shadow mb-4\">
      <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Commentaires</h6>
      </div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
              <tr>
                <th>#</th>
                <th>Identifiant du billet</th>
                <th>Auteur</th>
                <th>Contenu du commentaire</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Identifiant du billet</th>
                <th>Auteur</th>
                <th>Contenu du commentaire</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              ";
        // line 117
        $context["number0fElements"] = 0;
        // line 118
        echo "
              ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 120
            echo "                ";
            if (twig_test_empty($context["data"])) {
                // line 121
                echo "                  <p>Il n'y a pas de billet à afficher!</p>
                ";
            } else {
                // line 123
                echo "                  ";
                $context["number0fElements"] = (($context["number0fElements"] ?? null) + 1);
                // line 124
                echo "                  <tr>
                    <td>";
                // line 125
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["data"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
                echo "</td>
                    <td>
                      <a href=\"index.php?action=editPost&amp;id=";
                // line 127
                echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["data"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["post_id"] ?? null) : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["data"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["post_id"] ?? null) : null), "html", null, true);
                echo "</a>
                    </td>
                    <td>";
                // line 129
                echo strip_tags((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["data"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["author"] ?? null) : null));
                echo "</td>
                    <td>";
                // line 130
                echo strip_tags((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["data"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["comment"] ?? null) : null));
                echo "</td>
                    <td>";
                // line 131
                echo strip_tags((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["data"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["comment_date_format"] ?? null) : null));
                echo "</td>
                    <td>
                      <a href=\"index.php?action=editComment&amp;id=";
                // line 133
                echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["data"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"edit\" title=\"Modifier\">
                        <i class=\"material-icons\"></i>
                      </a>
                      <a href=\"index.php?action=deleteComment&amp;idComment=";
                // line 136
                echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["data"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"delete\" title=\"Supprimer\" onclick=\"return deleteDialog()\">
                        <i class=\"material-icons\"></i>
                      </a>
                    </td>
                  </tr>
                ";
            }
            // line 142
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "            </tbody>
          </table>
        </div>
        <div class=\"clearfix\">
          <div class=\"hint-text\">Affichage de
            <b>";
        // line 148
        echo twig_escape_filter($this->env, ($context["number0fElements"] ?? null), "html", null, true);
        echo "</b>
            entrées sur
            <b>";
        // line 150
        echo twig_escape_filter($this->env, ($context["number_total_comments"] ?? null), "html", null, true);
        echo "</b>
          </div>
          <ul class=\"pagination\">
            <li class=\"page-item\">
              ";
        // line 154
        if (1 === twig_compare(($context["page"] ?? null), 1)) {
            // line 155
            echo "                <a href=\"index.php?action=commentsList&amp;page=";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) - 1), "html", null, true);
            echo "\" class=\"page-link\">&laquo;</a>
              ";
        }
        // line 157
        echo "            </li>
            ";
        // line 158
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, ($context["number_of_pages"] ?? null)));
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 159
            echo "              <li class=\"page-item\">
                <a href=\"index.php?action=commentsList&amp;page=";
            // line 160
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
        // line 163
        echo "            <li class=\"page-item\">
              ";
        // line 164
        if (-1 === twig_compare(($context["page"] ?? null), ($context["number_of_pages"] ?? null))) {
            // line 165
            echo "                <a href=\"index.php?action=commentsList&amp;page=";
            echo twig_escape_filter($this->env, (($context["page"] ?? null) + 1), "html", null, true);
            echo "\" class=\"page-link\">&raquo;</a>
              ";
        }
        // line 167
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
        return "/backend/reportedCommentsList.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 167,  209 => 165,  207 => 164,  204 => 163,  193 => 160,  190 => 159,  186 => 158,  183 => 157,  177 => 155,  175 => 154,  168 => 150,  163 => 148,  156 => 143,  150 => 142,  141 => 136,  135 => 133,  130 => 131,  126 => 130,  122 => 129,  115 => 127,  110 => 125,  107 => 124,  104 => 123,  100 => 121,  97 => 120,  93 => 119,  90 => 118,  88 => 117,  52 => 83,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}

{% block content %}
  {# <div>
    <div class=\"table-wrapper\">
      <div class=\"table-title\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <h2>Comments Manager
            </h2>
          </div>
        </div>
      </div>
      <table id=\"listPostsCRUD\" class=\"table table-striped table-hover\">
        <thead>
          <tr>
            <th>#</th>
            <th>Identifiant du billet</th>
            <th>Auteur</th>
            <th>Contenu du commentaire</th>
            <th>Date</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% set number0fElements = 0 %}

          {% for data in comments %}
            {% if data is empty %}
              <p>Il n'y a pas de billet à afficher!</p>
            {% else %}
              {% set number0fElements = number0fElements + 1 %}
              <tr>
                <td>{{ data['id'] }}</td>
                <td>
                  <a href=\"index.php?action=editPost&amp;id={{ data['post_id'] }}\">{{ data['post_id'] }}</a>
                </td>
                <td>{{ data['author'] | striptags | raw }}</td>
                <td>{{ data['comment'] | striptags | raw }}</td>
                <td>{{ data['comment_date_format'] | striptags | raw  }}</td>
                <td>
                  <a href=\"index.php?action=editComment&amp;id={{ data['id'] }}\" class=\"edit\" title=\"Modifier\">
                    <i class=\"material-icons\"></i>
                  </a>
                  <a href=\"index.php?action=deleteComment&amp;idComment={{ data['id'] }}\" class=\"delete\" title=\"Supprimer\" onclick=\"return deleteDialog()\">
                    <i class=\"material-icons\"></i>
                  </a>
                </td>
              </tr>
            {% endif %}
          {% endfor %}
        </tbody>
      </table>
      <div class=\"clearfix\">
        <div class=\"hint-text\">Affichage de
          <b>{{ number0fElements }}</b>
          entrées sur
          <b>{{ number_total_comments }}</b>
        </div>
        <ul class=\"pagination\">
          <li class=\"page-item\">
            {% if page > 1 %}
              <a href=\"index.php?action=commentsList&amp;page={{ page - 1 }}\" class=\"page-link\">&laquo; Précédent</a>
            {% endif %}
          </li>
          {% for key in 1..number_of_pages %}
            <li class=\"page-item\">
              <a href=\"index.php?action=commentsList&amp;page={{ key }}\" class=\"page-link\">{{ key }}</a>
            </li>
          {% endfor %}
          <li class=\"page-item\">
            {% if page < number_of_pages %}
              <a href=\"index.php?action=commentsList&amp;page={{ page + 1 }}\" class=\"page-link\">Suivant &raquo;</a>
            {% endif %}
          </li>
        </ul>
      </div>
    </div>
    <a class=\"nav-link\" href=\"index.php?action=adminCnx\">
      Retour
    </a>
  </div> #}

  <div class=\"container-fluid\">

    <h1 class=\"h3 mb-2 text-gray-800\">Gestionnaire des commentaires</h1>
    <p class=\"mb-4\">Ajoutez, suprimez, ou modifiez des commentaires.</p>

    <div class=\"card shadow mb-4\">
      <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Commentaires</h6>
      </div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
              <tr>
                <th>#</th>
                <th>Identifiant du billet</th>
                <th>Auteur</th>
                <th>Contenu du commentaire</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>#</th>
                <th>Identifiant du billet</th>
                <th>Auteur</th>
                <th>Contenu du commentaire</th>
                <th>Date</th>
                <th>Actions</th>
              </tr>
            </tfoot>
            <tbody>
              {% set number0fElements = 0 %}

              {% for data in comments %}
                {% if data is empty %}
                  <p>Il n'y a pas de billet à afficher!</p>
                {% else %}
                  {% set number0fElements = number0fElements + 1 %}
                  <tr>
                    <td>{{ data['id'] }}</td>
                    <td>
                      <a href=\"index.php?action=editPost&amp;id={{ data['post_id'] }}\">{{ data['post_id'] }}</a>
                    </td>
                    <td>{{ data['author'] | striptags | raw }}</td>
                    <td>{{ data['comment'] | striptags | raw }}</td>
                    <td>{{ data['comment_date_format'] | striptags | raw  }}</td>
                    <td>
                      <a href=\"index.php?action=editComment&amp;id={{ data['id'] }}\" class=\"edit\" title=\"Modifier\">
                        <i class=\"material-icons\"></i>
                      </a>
                      <a href=\"index.php?action=deleteComment&amp;idComment={{ data['id'] }}\" class=\"delete\" title=\"Supprimer\" onclick=\"return deleteDialog()\">
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
            <b>{{ number_total_comments }}</b>
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
", "/backend/reportedCommentsList.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/reportedCommentsList.twig");
    }
}
