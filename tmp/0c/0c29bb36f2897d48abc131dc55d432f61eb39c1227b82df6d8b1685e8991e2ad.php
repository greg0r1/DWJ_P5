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

/* /backend/createPost.twig */
class __TwigTemplate_fd5872bb9cdb126769fa396b6412efc3ca8f016def52d07aaccb29ba2072217e extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/createPost.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "  <div class=\"container\">
    <div class=\"col-md-8\">
      <form id=\"tinymceForm\" action=\"index.php?action=addPost\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"col-md-12 mb-3\">
          <label for=\"tinymceTitle\">Titre du billet</label>
          <input type=\"text\" class=\"form-control\" name=\"tinymceTitle\" id=\"tinymceTitle\" placeholder=\"\" value=\"\" required=\"required\">
          <div class=\"invalid-feedback\">
            Veuillez saisir un titre pour ce billet.
          </div>
          <label for=\"tinymceContent\">Contenu du billet</label>
          <textarea id=\"tinymceContent\" name=\"tinymceContent\"></textarea>

          ";
        // line 16
        echo "          <div class=\"form-group\">
            <div class=\"col-md-7\">
              <h2>Ajout d'une image</h2>
              <p>Ajoutez une image à votre article. Une seule image par article:</p>
              <p>Fichier à ajouter:</p>
              <div class=\"custom-file mb-3\">
                <div class=\"col-md-7\">
                  <input type=\"file\" class=\"custom-file-input\" name=\"submitFileToUpload\" id=\"customFile\">
                  <label class=\"custom-file-label\" for=\"customFile\">Choisir une image</label>
                  <label for=\"imageCaption\">Légende</label>
                  <textarea class=\"form-control\" name=\"imageCaption\" row=\"2\"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-12 mb-3\">
            <button type=\"submit\" class=\"btn btn-primary mb-2\">Envoyer</button>
            <button type=\"reset\" class=\"btn btn-primary mb-2\">Effacer</button>
          </div>
        </div>
      </form>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "/backend/createPost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}
{% block content %}
  <div class=\"container\">
    <div class=\"col-md-8\">
      <form id=\"tinymceForm\" action=\"index.php?action=addPost\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"col-md-12 mb-3\">
          <label for=\"tinymceTitle\">Titre du billet</label>
          <input type=\"text\" class=\"form-control\" name=\"tinymceTitle\" id=\"tinymceTitle\" placeholder=\"\" value=\"\" required=\"required\">
          <div class=\"invalid-feedback\">
            Veuillez saisir un titre pour ce billet.
          </div>
          <label for=\"tinymceContent\">Contenu du billet</label>
          <textarea id=\"tinymceContent\" name=\"tinymceContent\"></textarea>

          {# Upload file #}
          <div class=\"form-group\">
            <div class=\"col-md-7\">
              <h2>Ajout d'une image</h2>
              <p>Ajoutez une image à votre article. Une seule image par article:</p>
              <p>Fichier à ajouter:</p>
              <div class=\"custom-file mb-3\">
                <div class=\"col-md-7\">
                  <input type=\"file\" class=\"custom-file-input\" name=\"submitFileToUpload\" id=\"customFile\">
                  <label class=\"custom-file-label\" for=\"customFile\">Choisir une image</label>
                  <label for=\"imageCaption\">Légende</label>
                  <textarea class=\"form-control\" name=\"imageCaption\" row=\"2\"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-md-12 mb-3\">
            <button type=\"submit\" class=\"btn btn-primary mb-2\">Envoyer</button>
            <button type=\"reset\" class=\"btn btn-primary mb-2\">Effacer</button>
          </div>
        </div>
      </form>
    </div>
  </div>

{% endblock %}
", "/backend/createPost.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/createPost.twig");
    }
}
