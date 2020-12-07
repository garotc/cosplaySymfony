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

/* layouts/partials/_navadmin.html.twig */
class __TwigTemplate_f15c347eb6b6740656aacdb64e6780492aa0de2dcf056cd3cd625c5604cad0fd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_navadmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/partials/_navadmin.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg\">

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fas fa-bars\" style=\"color: white\"></i>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">

      <li class=\"nav-item active\">
              <a class=\"navbar-brand\" href=\"https://www.carologameshow.com/\">
                <img src='";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-cgs.webp"), "html", null, true);
        echo "' alt='logo carolo game show' class='logo-cgs-nav'>
              </a>
      </li>
      <li class=\"nav-item dropdown\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_aff_user");
        echo "\">Gestion des utilisateurs</a>
        </li>
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Inscriptions
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">          
          <a class=\"dropdown-item\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_aff_inscription_solo");
        echo "\">Inscriptions solo</a>
          <a class=\"dropdown-item\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Inscriptions groupe</a>
          <a class=\"dropdown-item\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Groupe créé</a>
          <a class=\"dropdown-item\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\">Ajouter une catégorie</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
      </li>

    </ul>
  


</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "layouts/partials/_navadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  64 => 17,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg\">

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <i class=\"fas fa-bars\" style=\"color: white\"></i>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">

      <li class=\"nav-item active\">
              <a class=\"navbar-brand\" href=\"https://www.carologameshow.com/\">
                <img src='{{ asset('img/logo-cgs.webp') }}' alt='logo carolo game show' class='logo-cgs-nav'>
              </a>
      </li>
      <li class=\"nav-item dropdown\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('admin_aff_user')}}\">Gestion des utilisateurs</a>
        </li>
        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          Inscriptions
        </a>
        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">          
          <a class=\"dropdown-item\" href=\"{{path('admin_aff_inscription_solo')}}\">Inscriptions solo</a>
          <a class=\"dropdown-item\" href=\"{{path('accueil')}}\">Inscriptions groupe</a>
          <a class=\"dropdown-item\" href=\"{{path('accueil')}}\">Groupe créé</a>
          <a class=\"dropdown-item\" href=\"{{path('categorie_index')}}\">Ajouter une catégorie</a>
        </div>
      </li>
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('app_logout')}}\">Déconnexion</a>
      </li>

    </ul>
  


</nav>", "layouts/partials/_navadmin.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\layouts\\partials\\_navadmin.html.twig");
    }
}
