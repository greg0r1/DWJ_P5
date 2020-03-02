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

/* backend/head.twig */
class __TwigTemplate_ad59c9f5a969e861251439fdbf2fc1bb24030f8dafc5cf1a59d2ee0dca97c70b extends Template
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

  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.12.0/css/all.css\" integrity=\"sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"../public/css/sb-admin-2.css\">
  <link rel=\"stylesheet\" href=\"../public/css/style_admin.css\">
  <link rel=\"stylesheet\" href=\"../public/css/grid.css\">
  <link rel=\"stylesheet\" href=\"../public/css/form-validation.css\">
  <link rel=\"stylesheet\" href=\"../public/css/listCRUD.css\">
  <link rel=\"stylesheet\" href=\"../public/css/font-awesome.min.css\">

  <!-- Favicons -->
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic\" rel=\"stylesheet\">
  <meta name=\"theme-color\" content=\"#563d7c\">
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"../public/js/tinymce/tinymce.min.js\"></script>
  <script src=\"../public/js/all.min.js\"></script>
  <script src=\"../public/js/jquery.min.js\"></script>

  <script>
    tinymce.init({
      selector: '#tinymceContent',
      themes: 'modern',
      height: 200,
      elementpath: false,
      menubar: 'insert format table tools help',
      skin: 'lightgray'
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "backend/head.twig";
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

  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://pro.fontawesome.com/releases/v5.12.0/css/all.css\" integrity=\"sha384-ekOryaXPbeCpWQNxMwSWVvQ0+1VrStoPJq54shlYhR8HzQgig1v5fas6YgOqLoKz\" crossorigin=\"anonymous\">
  <link rel=\"stylesheet\" href=\"../public/css/sb-admin-2.css\">
  <link rel=\"stylesheet\" href=\"../public/css/style_admin.css\">
  <link rel=\"stylesheet\" href=\"../public/css/grid.css\">
  <link rel=\"stylesheet\" href=\"../public/css/form-validation.css\">
  <link rel=\"stylesheet\" href=\"../public/css/listCRUD.css\">
  <link rel=\"stylesheet\" href=\"../public/css/font-awesome.min.css\">

  <!-- Favicons -->
  <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic\" rel=\"stylesheet\">
  <meta name=\"theme-color\" content=\"#563d7c\">
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"../public/js/tinymce/tinymce.min.js\"></script>
  <script src=\"../public/js/all.min.js\"></script>
  <script src=\"../public/js/jquery.min.js\"></script>

  <script>
    tinymce.init({
      selector: '#tinymceContent',
      themes: 'modern',
      height: 200,
      elementpath: false,
      menubar: 'insert format table tools help',
      skin: 'lightgray'
    });
  </script>
{% endblock %}
", "backend/head.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/head.twig");
    }
}
