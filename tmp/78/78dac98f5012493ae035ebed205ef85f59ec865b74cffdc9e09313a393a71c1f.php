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

/* /backend/updatedPost.twig */
class __TwigTemplate_a21276ad3d214717e8ba148e2225e561e557214bdf04ee3c45e8c4fcc3919138 extends Template
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
        $this->parent = $this->loadTemplate("/backend/layout.twig", "/backend/updatedPost.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div class=\"container\">
    <h3 style=\"text-align:center\">Le billet
      <strong>";
        // line 6
        echo twig_escape_filter($this->env, ($context["idPost"] ?? null), "html", null, true);
        echo "</strong>
      a bien été modifié.</h3>
    <a class=\"nav-link\" style=\"text-align:center\" href=\"index.php?action=adminListPosts\">
      Retour à la liste des billets
    </a>
  </div>
";
    }

    public function getTemplateName()
    {
        return "/backend/updatedPost.twig";
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
    <h3 style=\"text-align:center\">Le billet
      <strong>{{ idPost }}</strong>
      a bien été modifié.</h3>
    <a class=\"nav-link\" style=\"text-align:center\" href=\"index.php?action=adminListPosts\">
      Retour à la liste des billets
    </a>
  </div>
{% endblock %}
", "/backend/updatedPost.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/updatedPost.twig");
    }
}
