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

/* /backend/deletedPost.twig */
class __TwigTemplate_718a5c74bda7293a5ee7e3c4756af67fa1e050eebabc4aecd527f6cf34587910 extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/deletedPost.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container\">
    <h3>Le billet
      <strong>";
        // line 6
        echo twig_escape_filter($this->env, ($context["idPost"] ?? null), "html", null, true);
        echo "</strong>
      a bien été supprimé.</h3>
    <a class=\"nav-link\" href=\"index.php?action=adminListPosts\">
      Retour à la liste des billets
    </a>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/backend/deletedPost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}

{% block content %}
  <div class=\"container\">
    <h3>Le billet
      <strong>{{ idPost }}</strong>
      a bien été supprimé.</h3>
    <a class=\"nav-link\" href=\"index.php?action=adminListPosts\">
      Retour à la liste des billets
    </a>
  </div>
{% endblock %}
", "/backend/deletedPost.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/deletedPost.twig");
    }
}
