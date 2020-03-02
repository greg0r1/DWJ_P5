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

/* /backend/editPost.twig */
class __TwigTemplate_84b5fcd723bd10f403803f1e4b1763a63dd72d200bb240e27fa1fb8d8355e789 extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/editPost.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container\">
    <div class=\"col-md-8\">
      <h4 class=\"mb-3\">Article n°";
        // line 6
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["post"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null), "html", null, true);
        echo "
        de
        <strong>";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["post"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["author"] ?? null) : null), "html", null, true);
        echo "</strong>
      </h4>
      <form id=\"tinymceForm\" action=\"index.php?action=updatePost&amp;idPost=";
        // line 10
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["post"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["id"] ?? null) : null), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"col-md-12 mb-3\">
          <label for=\"tinymceTitle\">Titre du billet</label>
          <input type=\"text\" class=\"form-control\" name=\"tinymceTitle\" id=\"tinymceTitle\" placeholder=\"\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["post"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["title"] ?? null) : null), "html", null, true);
        echo "\" required=\"required\">
          <div class=\"invalid-feedback\">
            Veuillez saisir un titre pour ce billet.
          </div>
          <textarea id=\"tinymceContent\" name=\"tinymceContent\">
            ";
        // line 18
        echo twig_escape_filter($this->env, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["post"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["content"] ?? null) : null), "html", null, true);
        echo "
          </textarea>

          ";
        // line 22
        echo "          <div class=\"form-group\">
            <div class=\"col-md-7\">
              <h2>Modification de l'image</h2>
              <p>Ajoutez une image à votre article. Une seule image par article:</p>
              <p>Fichier à ajouter:</p>
              <div class=\"custom-file mb-3\">
                <div class=\"col-md-7\">
                  <input type=\"file\" class=\"custom-file-input\" name=\"submitFileToUpload\" id=\"customFile\">
                  <label class=\"custom-file-label\" for=\"customFile\">Choisir une image</label>
                  <img src=\"images/backend/";
        // line 31
        echo twig_escape_filter($this->env, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["figCaption"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["image_post"] ?? null) : null), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["figCaption"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["image_post"] ?? null) : null), "html", null, true);
        echo "\" style=\"width:100%\">
                  <input type=\"hidden\" name=\"image-post\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["figCaption"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["image_post"] ?? null) : null), "html", null, true);
        echo "\">
                  <label for=\"imageCaption\">Modifier la légende de l'image</label>
                  <textarea class=\"form-control\" name=\"imageCaption\" row=\"2\">";
        // line 34
        echo twig_escape_filter($this->env, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["figCaption"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["image_caption"] ?? null) : null), "html", null, true);
        echo "</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary mb-2\">Modifier</button>
        <a href=\"index.php?action=updatePost\" type=\"button\" class=\"btn btn-primary mb-2\">Effacer</a>
        <a class=\"nav-link\" href=\"index.php?action=adminListPosts\">
          Retour
        </a>
      </form>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/backend/editPost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 34,  101 => 32,  95 => 31,  84 => 22,  78 => 18,  70 => 13,  64 => 10,  59 => 8,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}

{% block content %}
  <div class=\"container\">
    <div class=\"col-md-8\">
      <h4 class=\"mb-3\">Article n°{{ post['id'] }}
        de
        <strong>{{ post['author'] }}</strong>
      </h4>
      <form id=\"tinymceForm\" action=\"index.php?action=updatePost&amp;idPost={{ post['id'] }}\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"col-md-12 mb-3\">
          <label for=\"tinymceTitle\">Titre du billet</label>
          <input type=\"text\" class=\"form-control\" name=\"tinymceTitle\" id=\"tinymceTitle\" placeholder=\"\" value=\"{{ post['title'] }}\" required=\"required\">
          <div class=\"invalid-feedback\">
            Veuillez saisir un titre pour ce billet.
          </div>
          <textarea id=\"tinymceContent\" name=\"tinymceContent\">
            {{ post['content'] }}
          </textarea>

          {# Upload file #}
          <div class=\"form-group\">
            <div class=\"col-md-7\">
              <h2>Modification de l'image</h2>
              <p>Ajoutez une image à votre article. Une seule image par article:</p>
              <p>Fichier à ajouter:</p>
              <div class=\"custom-file mb-3\">
                <div class=\"col-md-7\">
                  <input type=\"file\" class=\"custom-file-input\" name=\"submitFileToUpload\" id=\"customFile\">
                  <label class=\"custom-file-label\" for=\"customFile\">Choisir une image</label>
                  <img src=\"images/backend/{{ figCaption['image_post'] }}\" alt=\"{{ figCaption['image_post'] }}\" style=\"width:100%\">
                  <input type=\"hidden\" name=\"image-post\" value=\"{{ figCaption['image_post'] }}\">
                  <label for=\"imageCaption\">Modifier la légende de l'image</label>
                  <textarea class=\"form-control\" name=\"imageCaption\" row=\"2\">{{ figCaption['image_caption'] }}</textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type=\"submit\" class=\"btn btn-primary mb-2\">Modifier</button>
        <a href=\"index.php?action=updatePost\" type=\"button\" class=\"btn btn-primary mb-2\">Effacer</a>
        <a class=\"nav-link\" href=\"index.php?action=adminListPosts\">
          Retour
        </a>
      </form>
    </div>
  </div>
{% endblock %}
", "/backend/editPost.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/editPost.twig");
    }
}
