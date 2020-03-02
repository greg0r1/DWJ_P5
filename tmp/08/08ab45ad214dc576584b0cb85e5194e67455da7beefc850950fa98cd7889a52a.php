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

/* /backend/home.twig */
class __TwigTemplate_00a7a11756d8b5519ed2ad7e7da7f2e3cdea3a3aa296dc6598c3e5c4377b6c56 extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/home.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        // line 55
        echo "
  <!-- Border Left Utilities -->
  <div class=\"container\">
    <div class=\"col-lg-6\">

      <div class=\"card mb-4 py-3 border-left-primary\">
        <div class=\"card-body\">
          <a href=\"index.php?action=createPost\">
            <i class=\"material-icons\">note_add</i>
            <span>Ecrire un billet</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-success\">
        <div class=\"card-body\">
          <a href=\"index.php?action=adminListPosts\">
            <i class=\"material-icons\">create</i>
            <span>Modifier un billet</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-info\">
        <div class=\"card-body\">
          <a href=\"index.php?action=adminListPosts\">
            <i class=\"material-icons\">delete_sweep</i>
            <span>Supprimer un billet</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-warning\">
        <div class=\"card-body\">
          <a href=\"index.php?action=reportedCommentsList\">
            <i class=\"material-icons\">note_add</i>
            <span>Les commentaires signalés</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-danger\">
        <div class=\"card-body\">
          <a href=\"index.php?action=commentsList\">
            <i class=\"material-icons\">delete_sweep</i>
            <span>Liste des commentaires</span>
          </a>
        </div>
      </div>

    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/backend/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 55,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}

{% block content %}
  {# <div id=\"homeAdmin\" class=\"container\">
    <div class=\"col-md-12\">
      <div id=\"CRUD-billets\">
        <h3>Billets</h3>
        <div class=\"row \">
          <div class=\"col-4 themed-grid-col\">
            <a href=\"index.php?action=createPost\">
              <i class=\"material-icons\">note_add</i>
              <p>Ecrire un billet</p>
            </a>
          </div>
          <div class=\"col-4 themed-grid-col\">
            <a href=\"index.php?action=adminListPosts\">
              <i class=\"material-icons\">create</i>
              <p>Modifier un billet</p>
            </a>
          </div>
          <div class=\"col-4 themed-grid-col\">
            <a href=\"index.php?action=adminListPosts\">
              <i class=\"material-icons\">delete_sweep</i>
              <p>Supprimer un billet</p>
            </a>
          </div>
        </div>
      </div>

      <div id=\"CRUD-commentaires\">
        <h3>Commentaires</h3>
        <div class=\"row \">
          <div class=\"col-4 themed-grid-col\">
            <a href=\"index.php?action=reportedCommentsList\">
              <i class=\"material-icons\">note_add</i>
              <p>Les commentaires signalés</p>
            </a>
          </div>
          <div class=\"col-4 themed-grid-col\">
            <a href=\"index.php?action=commentsList\">
              <i class=\"material-icons\">create</i>
              <p>Modifier un commentaire</p>
            </a>
          </div>
          <div class=\"col-4 themed-grid-col\">
            <a href=\"index.php?action=commentsList\">
              <i class=\"material-icons\">delete_sweep</i>
              <p>Supprimer un commentaire</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> #}

  <!-- Border Left Utilities -->
  <div class=\"container\">
    <div class=\"col-lg-6\">

      <div class=\"card mb-4 py-3 border-left-primary\">
        <div class=\"card-body\">
          <a href=\"index.php?action=createPost\">
            <i class=\"material-icons\">note_add</i>
            <span>Ecrire un billet</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-success\">
        <div class=\"card-body\">
          <a href=\"index.php?action=adminListPosts\">
            <i class=\"material-icons\">create</i>
            <span>Modifier un billet</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-info\">
        <div class=\"card-body\">
          <a href=\"index.php?action=adminListPosts\">
            <i class=\"material-icons\">delete_sweep</i>
            <span>Supprimer un billet</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-warning\">
        <div class=\"card-body\">
          <a href=\"index.php?action=reportedCommentsList\">
            <i class=\"material-icons\">note_add</i>
            <span>Les commentaires signalés</span>
          </a>
        </div>
      </div>

      <div class=\"card mb-4 py-3 border-left-danger\">
        <div class=\"card-body\">
          <a href=\"index.php?action=commentsList\">
            <i class=\"material-icons\">delete_sweep</i>
            <span>Liste des commentaires</span>
          </a>
        </div>
      </div>

    </div>
  </div>
{% endblock %}
", "/backend/home.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/home.twig");
    }
}
