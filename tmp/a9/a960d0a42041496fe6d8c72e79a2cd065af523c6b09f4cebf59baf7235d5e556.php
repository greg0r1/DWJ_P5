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

/* /backend/layout.twig */
class __TwigTemplate_d08fcf9766037463a899319d1d9dff07d024a47785420e0fec9638b745a69385 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'layout' => [$this, 'block_layout'],
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('layout', $context, $blocks);
    }

    public function block_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <!DOCTYPE html>
  <html lang=\"fr\">

    <head>
      ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 14
        echo "    </head>

    <body>
      <!-- Page Wrapper -->
      <div id=\"wrapper\">
        ";
        // line 19
        $this->loadTemplate("backend/header.twig", "/backend/layout.twig", 19)->display($context);
        // line 20
        echo "        <main>
          ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "        </main>
      </div>
      ";
        // line 24
        $this->loadTemplate("backend/footer.twig", "/backend/layout.twig", 24)->display($context);
        // line 25
        echo "    </div>
  </div>
  ";
        // line 27
        $this->loadTemplate("backend/scripts_footer.twig", "/backend/layout.twig", 27)->display($context);
        // line 28
        echo "</body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        ";
        $this->loadTemplate("backend/head.twig", "/backend/layout.twig", 7)->display($context);
        // line 8
        echo "        <title>
          ";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        // line 12
        echo "        </title>
      ";
    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "            ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "
          ";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "/backend/layout.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 21,  109 => 10,  105 => 9,  100 => 12,  98 => 9,  95 => 8,  92 => 7,  88 => 6,  82 => 28,  80 => 27,  76 => 25,  74 => 24,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  56 => 14,  54 => 6,  48 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block layout %}
  <!DOCTYPE html>
  <html lang=\"fr\">

    <head>
      {% block head %}
        {% include('backend/head.twig') %}
        <title>
          {% block title %}
            {{title}}
          {% endblock %}
        </title>
      {% endblock %}
    </head>

    <body>
      <!-- Page Wrapper -->
      <div id=\"wrapper\">
        {% include('backend/header.twig') %}
        <main>
          {% block content %}{% endblock %}
        </main>
      </div>
      {% include('backend/footer.twig') %}
    </div>
  </div>
  {% include('backend/scripts_footer.twig') %}
</body>
</html>
{% endblock %}
", "/backend/layout.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/layout.twig");
    }
}
