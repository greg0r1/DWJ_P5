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

/* backend/scripts_footer.twig */
class __TwigTemplate_5ba8df5d3fc89e162d5ab7f1b19577d832a4d666a22b4f4913cb23cecc9d5525 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'scripts_footer' => [$this, 'block_scripts_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('scripts_footer', $context, $blocks);
    }

    public function block_scripts_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <!-- Bootstrap core JavaScript-->
  <script src=\"../public/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../public/js/style.js\"></script>
  <script src=\"../public/js/sb-admin-2.min.js\"></script>

  <script>
    function resetField() {
      \$(\"#tinymce>p\").textContent = \"\";
    }

    // Add the name of the file to appear on select file
    \$(\".custom-file-input\").on(\"change\", function () {
      var fileName = \$(this).val().split(\"\\\\\").pop();
      \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
    });
  </script>

";
    }

    public function getTemplateName()
    {
        return "backend/scripts_footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block scripts_footer %}
  <!-- Bootstrap core JavaScript-->
  <script src=\"../public/js/bootstrap.bundle.min.js\"></script>
  <script src=\"../public/js/style.js\"></script>
  <script src=\"../public/js/sb-admin-2.min.js\"></script>

  <script>
    function resetField() {
      \$(\"#tinymce>p\").textContent = \"\";
    }

    // Add the name of the file to appear on select file
    \$(\".custom-file-input\").on(\"change\", function () {
      var fileName = \$(this).val().split(\"\\\\\").pop();
      \$(this).siblings(\".custom-file-label\").addClass(\"selected\").html(fileName);
    });
  </script>

{% endblock %}", "backend/scripts_footer.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/scripts_footer.twig");
    }
}
