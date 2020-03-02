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

/* frontend/popupLogin.twig */
class __TwigTemplate_b77c231fa8f0086531607bfd532d606246e2a27798fc60d6461c143b15cf5312 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'popupLogin' => [$this, 'block_popupLogin'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('popupLogin', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('footer', $context, $blocks);
    }

    // line 1
    public function block_popupLogin($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "\t<div id=\"popupLogin\" class=\"modal\">
\t\t<form class=\"modal-content animate\" action=\"index.php?action=loginCnx\" method=\"post\">
\t\t\t<div class=\"imgcontainer\">
\t\t\t\t<span onclick=\"document.getElementById('popupLogin').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
\t\t\t\t<i class=\"fa fa-user-circle\"></i>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t\t<label for=\"inputLogin\">
\t\t\t\t\t<b>Utilisateur</b>
\t\t\t\t</label>
\t\t\t\t<input type=\"text\" placeholder=\"Saisissez votre login\" name=\"inputLogin\" required>

\t\t\t\t<label for=\"inputPassword\">
\t\t\t\t\t<b>Mot de passe</b>
\t\t\t\t</label>
\t\t\t\t<input type=\"password\" placeholder=\"Saisissez votre mot de passe\" name=\"inputPassword\" required>

\t\t\t\t<button type=\"submit\">Connexion</button>
\t\t\t</div>

\t\t\t<div class=\"container\" style=\"background-color:#f1f1f1\">
\t\t\t\t<button type=\"button\" onclick=\"document.getElementById('popupLogin').style.display='none'\" class=\"cancelbtn\">Annuler</button>
\t\t\t</div>
\t\t</form>
\t</div>
";
    }

    // line 30
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "\t<script>
\t\t// Get the modal
var modal = document.getElementById('popupLogin');

// When click anywhere outside of the modal, close it
window.onclick = function (event) {
if (event.target == modal) {
modal.style.display = \"none\";
}
}
\t</script>
";
    }

    public function getTemplateName()
    {
        return "frontend/popupLogin.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 31,  82 => 30,  52 => 2,  48 => 1,  44 => 30,  41 => 29,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block popupLogin %}
\t<div id=\"popupLogin\" class=\"modal\">
\t\t<form class=\"modal-content animate\" action=\"index.php?action=loginCnx\" method=\"post\">
\t\t\t<div class=\"imgcontainer\">
\t\t\t\t<span onclick=\"document.getElementById('popupLogin').style.display='none'\" class=\"close\" title=\"Close Modal\">&times;</span>
\t\t\t\t<i class=\"fa fa-user-circle\"></i>
\t\t\t</div>

\t\t\t<div class=\"container\">
\t\t\t\t<label for=\"inputLogin\">
\t\t\t\t\t<b>Utilisateur</b>
\t\t\t\t</label>
\t\t\t\t<input type=\"text\" placeholder=\"Saisissez votre login\" name=\"inputLogin\" required>

\t\t\t\t<label for=\"inputPassword\">
\t\t\t\t\t<b>Mot de passe</b>
\t\t\t\t</label>
\t\t\t\t<input type=\"password\" placeholder=\"Saisissez votre mot de passe\" name=\"inputPassword\" required>

\t\t\t\t<button type=\"submit\">Connexion</button>
\t\t\t</div>

\t\t\t<div class=\"container\" style=\"background-color:#f1f1f1\">
\t\t\t\t<button type=\"button\" onclick=\"document.getElementById('popupLogin').style.display='none'\" class=\"cancelbtn\">Annuler</button>
\t\t\t</div>
\t\t</form>
\t</div>
{% endblock %}

{% block footer %}
\t<script>
\t\t// Get the modal
var modal = document.getElementById('popupLogin');

// When click anywhere outside of the modal, close it
window.onclick = function (event) {
if (event.target == modal) {
modal.style.display = \"none\";
}
}
\t</script>
{% endblock %}
", "frontend/popupLogin.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/frontend/popupLogin.twig");
    }
}
