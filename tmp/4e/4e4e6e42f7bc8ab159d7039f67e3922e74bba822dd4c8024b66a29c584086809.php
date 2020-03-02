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

/* backend/header.twig */
class __TwigTemplate_71e42a5b6e58a9a1955b404bca6179ab6e16d424594fbe70d5801f52504a4ba5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "  <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.php?action=adminCnx\">
      <div class=\"sidebar-brand-text mx-3\">STAR Movie Admin
      </div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item active\">
      <a class=\"nav-link\" href=\"index.php?action=adminCnx\">
        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class=\"sidebar-divider\">

    <div class=\"sidebar-heading\">
      Blog
    </div>

    <!-- Nav Item - Articles Collapse Menu -->
    <li class=\"nav-item\">
      <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
        <i class=\"fas fa-fw fa-folder\"></i>
        <span>Articles</span>
      </a>
      <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">Gestion des articles:</h6>
          <a class=\"collapse-item\" href=\"index.php?action=createPost\">Ecrire un article</a>
          <a class=\"collapse-item\" href=\"index.php?action=adminListPosts\">Tous les articles</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Comments Collapse Menu -->
    <li class=\"nav-item\">
      <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
        <i class=\"fas fa-fw fa-table\"></i>
        <span>Commentaires</span>
      </a>
      <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">Gestion des commentaires:</h6>
          <a class=\"collapse-item\" href=\"index.php?action=reportedCommentsList\">Commentaires signalés</a>
          <a class=\"collapse-item\" href=\"index.php?action=commentsList\">Tous les commentaires</a>
        </div>
      </div>
    </li>

    <hr class=\"sidebar-divider\">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class=\"text-center d-none d-md-inline\">
      <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>
  </ul>

  <!-- Content Wrapper -->
  <div id=\"content-wrapper\" class=\"d-flex flex-column\">

    <!-- Main Content -->
    <div id=\"content\">

      <!-- Topbar -->
      <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

        <!-- Sidebar Toggle (Topbar) -->
        <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
          <i class=\"fa fa-bars\"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class=\"navbar-nav ml-auto\">

          <div class=\"topbar-divider d-none d-sm-block\"></div>

          <!-- Nav Item - User Information -->
          <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">";
        // line 83
        echo twig_escape_filter($this->env, ($context["session"] ?? null), "html", null, true);
        echo "</span>
              <i class=\"material-icons\">
                account_circle
              </i>
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
              <a class=\"dropdown-item\" href=\"\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                Se déconnecter
              </a>
            </div>
          </li>

        </ul>

      </nav>

      <div id=\"homeMess\" class=\"col-sm-10 col-md-9 col-lg-10 offset-lg-2\">
        <h2>Bienvenue dans votre espace d'administration
          <strong>";
        // line 103
        echo twig_escape_filter($this->env, ($context["session"] ?? null), "html", null, true);
        echo "</strong>
        </h2>
        <p>
          Retrouvez tous les services utiles pour l'administration de votre blog.
        </p>
      </div>
      <!-- End of Topbar -->

      <!-- Logout Modal-->
      <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous quittez votre session?</h5>
              <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>
            <div class=\"modal-body\">Sélectionnez «Déconnexion» ci-dessous si vous êtes prêt à terminer votre session en cours.</div>
            <div class=\"modal-footer\">
              <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
              <a class=\"btn btn-primary\" href=\"index.php?action=home&amp;logStatus=logOut\">Déconnecter</a>
            </div>
          </div>
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "backend/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  151 => 103,  128 => 83,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block header %}
  <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.php?action=adminCnx\">
      <div class=\"sidebar-brand-text mx-3\">STAR Movie Admin
      </div>
    </a>

    <hr class=\"sidebar-divider my-0\">

    <li class=\"nav-item active\">
      <a class=\"nav-link\" href=\"index.php?action=adminCnx\">
        <i class=\"fas fa-fw fa-tachometer-alt\"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class=\"sidebar-divider\">

    <div class=\"sidebar-heading\">
      Blog
    </div>

    <!-- Nav Item - Articles Collapse Menu -->
    <li class=\"nav-item\">
      <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapsePages\" aria-expanded=\"true\" aria-controls=\"collapsePages\">
        <i class=\"fas fa-fw fa-folder\"></i>
        <span>Articles</span>
      </a>
      <div id=\"collapsePages\" class=\"collapse\" aria-labelledby=\"headingPages\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">Gestion des articles:</h6>
          <a class=\"collapse-item\" href=\"index.php?action=createPost\">Ecrire un article</a>
          <a class=\"collapse-item\" href=\"index.php?action=adminListPosts\">Tous les articles</a>
        </div>
      </div>
    </li>

    <!-- Nav Item - Comments Collapse Menu -->
    <li class=\"nav-item\">
      <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseUtilities\" aria-expanded=\"true\" aria-controls=\"collapseUtilities\">
        <i class=\"fas fa-fw fa-table\"></i>
        <span>Commentaires</span>
      </a>
      <div id=\"collapseUtilities\" class=\"collapse\" aria-labelledby=\"headingUtilities\" data-parent=\"#accordionSidebar\">
        <div class=\"bg-white py-2 collapse-inner rounded\">
          <h6 class=\"collapse-header\">Gestion des commentaires:</h6>
          <a class=\"collapse-item\" href=\"index.php?action=reportedCommentsList\">Commentaires signalés</a>
          <a class=\"collapse-item\" href=\"index.php?action=commentsList\">Tous les commentaires</a>
        </div>
      </div>
    </li>

    <hr class=\"sidebar-divider\">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class=\"text-center d-none d-md-inline\">
      <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
    </div>
  </ul>

  <!-- Content Wrapper -->
  <div id=\"content-wrapper\" class=\"d-flex flex-column\">

    <!-- Main Content -->
    <div id=\"content\">

      <!-- Topbar -->
      <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

        <!-- Sidebar Toggle (Topbar) -->
        <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
          <i class=\"fa fa-bars\"></i>
        </button>

        <!-- Topbar Navbar -->
        <ul class=\"navbar-nav ml-auto\">

          <div class=\"topbar-divider d-none d-sm-block\"></div>

          <!-- Nav Item - User Information -->
          <li class=\"nav-item dropdown no-arrow\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
              <span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">{{ session}}</span>
              <i class=\"material-icons\">
                account_circle
              </i>
            </a>
            <!-- Dropdown - User Information -->
            <div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
              <a class=\"dropdown-item\" href=\"\" data-toggle=\"modal\" data-target=\"#logoutModal\">
                <i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
                Se déconnecter
              </a>
            </div>
          </li>

        </ul>

      </nav>

      <div id=\"homeMess\" class=\"col-sm-10 col-md-9 col-lg-10 offset-lg-2\">
        <h2>Bienvenue dans votre espace d'administration
          <strong>{{ session }}</strong>
        </h2>
        <p>
          Retrouvez tous les services utiles pour l'administration de votre blog.
        </p>
      </div>
      <!-- End of Topbar -->

      <!-- Logout Modal-->
      <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h5 class=\"modal-title\" id=\"exampleModalLabel\">Voulez-vous quittez votre session?</h5>
              <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">×</span>
              </button>
            </div>
            <div class=\"modal-body\">Sélectionnez «Déconnexion» ci-dessous si vous êtes prêt à terminer votre session en cours.</div>
            <div class=\"modal-footer\">
              <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Annuler</button>
              <a class=\"btn btn-primary\" href=\"index.php?action=home&amp;logStatus=logOut\">Déconnecter</a>
            </div>
          </div>
        </div>
      </div>
    {% endblock %}
", "backend/header.twig", "/Applications/MAMP/htdocs/OpenClassrooms/DWJ_P5/templates/backend/header.twig");
    }
}
