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

/* /backend/addedPost.twig */
class __TwigTemplate_3e56a731275e871238801bc8d536bea41d14448e501ee756ac7d1f672a1fe75d extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/addedPost.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container\">
    <h3>Votre billet a bien été ajouté
      <strong>";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</strong>
      <p>";
        // line 7
        echo twig_escape_filter($this->env, ($context["addImageOk"] ?? null), "html", null, true);
        echo "</p>
    </h3>
    <a class=\"nav-link\" href=\"index.php?action=adminListPosts\">
      Retour à la liste des billets
    </a>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/backend/addedPost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 7,  54 => 6,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '/backend/layout.twig' %}

{% block content %}
  <div class=\"container\">
    <h3>Votre billet a bien été ajouté
      <strong>{{ name }}</strong>
      <p>{{addImageOk}}</p>
    </h3>
    <a class=\"nav-link\" href=\"index.php?action=adminListPosts\">
      Retour à la liste des billets
    </a>
  </div>
{% endblock %}
", "/backend/addedPost.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/addedPost.twig");
    }
}
