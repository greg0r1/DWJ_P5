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

/* frontend/footer.twig */
class __TwigTemplate_97ceee2fb3cd822996951e10244a4ef67fe580d974cd044c60a0227ded7dc553 extends Template
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
        echo "\t<!-- footer -->
\t<footer>
\t\t<div class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"w3ls_footer_grid\">
\t\t\t\t\t<div class=\"col-lg-auto w3ls_footer_grid_right\">
\t\t\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t\t\t<h2>Star<span>Movies</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 w3ls_footer_grid1_left\">
\t\t\t\t\t<p>&copy; 2020 Star Movies. Un projet étudiant
\t\t\t\t\t\t<a href=\"http://www.openclassrooms.com/\">OpenClassrooms</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 w3ls_footer_grid1_right\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?action=home\">Films</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?action=home\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Nous contacter</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
</footer>
<!-- //footer -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

<script src=\"../public/js/style.js\"></script>

<!-- Optional JavaScript -->
<script>
\tfeather.replace();
\$(document).ready(function () {
\$(\".dropdown\").hover(function () {
\$('.dropdown-menu', this).stop(true, true).slideDown(\"fast\");
\$(this).toggleClass('open');
}, function () {
\$('.dropdown-menu', this).stop(true, true).slideUp(\"fast\");
\$(this).toggleClass('open');
});
\$().UItoTop({easingType: 'easeOutQuart'});
});
</script>";
    }

    public function getTemplateName()
    {
        return "frontend/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block footer %}
\t<!-- footer -->
\t<footer>
\t\t<div class=\"footer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"w3ls_footer_grid\">
\t\t\t\t\t<div class=\"col-lg-auto w3ls_footer_grid_right\">
\t\t\t\t\t\t<a href=\"index.php\">
\t\t\t\t\t\t\t<h2>Star<span>Movies</span>
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 w3ls_footer_grid1_left\">
\t\t\t\t\t<p>&copy; 2020 Star Movies. Un projet étudiant
\t\t\t\t\t\t<a href=\"http://www.openclassrooms.com/\">OpenClassrooms</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-12 w3ls_footer_grid1_right\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?action=home\">Films</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"index.php?action=home\">Blog</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Nous contacter</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>
\t</div>
</footer>
<!-- //footer -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.4.1.slim.min.js\" integrity=\"sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>

<script src=\"../public/js/style.js\"></script>

<!-- Optional JavaScript -->
<script>
\tfeather.replace();
\$(document).ready(function () {
\$(\".dropdown\").hover(function () {
\$('.dropdown-menu', this).stop(true, true).slideDown(\"fast\");
\$(this).toggleClass('open');
}, function () {
\$('.dropdown-menu', this).stop(true, true).slideUp(\"fast\");
\$(this).toggleClass('open');
});
\$().UItoTop({easingType: 'easeOutQuart'});
});
</script>{% endblock %}
", "frontend/footer.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/footer.twig");
    }
}
