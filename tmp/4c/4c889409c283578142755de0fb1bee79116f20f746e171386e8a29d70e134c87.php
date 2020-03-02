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

/* backend/footer.twig */
class __TwigTemplate_6d864de921019d871d567c55fa7729053e097ad05ddc59d3337e7c60454edc08 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
  <!-- Footer -->
  <footer class=\"sticky-footer bg-white\">
    <div class=\"container my-auto\">
      <div class=\"copyright text-center my-auto\">
        <span>&copy; 2020 Star Movies. Un projet étudiant
          <a href=\"http://www.openclassrooms.com/\">OpenClassrooms</a>
        </span>
      </div>
    </div>
  </footer>
";
    }

    public function getTemplateName()
    {
        return "backend/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}

  <!-- Footer -->
  <footer class=\"sticky-footer bg-white\">
    <div class=\"container my-auto\">
      <div class=\"copyright text-center my-auto\">
        <span>&copy; 2020 Star Movies. Un projet étudiant
          <a href=\"http://www.openclassrooms.com/\">OpenClassrooms</a>
        </span>
      </div>
    </div>
  </footer>
{% endblock %}
", "backend/footer.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/footer.twig");
    }
}
