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

/* frontend/head.twig */
class __TwigTemplate_cfba079af470bbab608c77cb69942ee3fed2b7c2e1960e4d9cdf2fd25694a303 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <!-- Bootstrap CSS v4.4.1 -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <!-- Bootstrap CSS v4.4.1 -->
  <script src=\"../public/js/jquery-3.4.1.min.js\"></script>
  <link rel=\"stylesheet\" href=\"../public/css/style.css\">
  <link rel=\"stylesheet\" href=\"../public/css/carousel.css\">
  <link rel=\"stylesheet\" href=\"../public/css/popupModal.css\">

  <!-- Favicons -->
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Libre+Baskerville&amp;display=swap\" rel=\"stylesheet\">
  <meta name=\"theme-color\" content=\"#563d7c\">
";
    }

    public function getTemplateName()
    {
        return "frontend/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block head %}
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

  <!-- Bootstrap CSS v4.4.1 -->
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <!-- Bootstrap CSS v4.4.1 -->
  <script src=\"../public/js/jquery-3.4.1.min.js\"></script>
  <link rel=\"stylesheet\" href=\"../public/css/style.css\">
  <link rel=\"stylesheet\" href=\"../public/css/carousel.css\">
  <link rel=\"stylesheet\" href=\"../public/css/popupModal.css\">

  <!-- Favicons -->
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Libre+Baskerville&amp;display=swap\" rel=\"stylesheet\">
  <meta name=\"theme-color\" content=\"#563d7c\">
{% endblock %}
", "frontend/head.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/head.twig");
    }
}
