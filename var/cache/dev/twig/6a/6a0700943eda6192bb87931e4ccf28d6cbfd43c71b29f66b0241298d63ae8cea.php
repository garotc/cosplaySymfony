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

/* home/user/compte.html.twig */
class __TwigTemplate_9eac4169ff988eea95c624e8d7660daa3b4159be311b86ee4ee87f77657f256e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/user/compte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/user/compte.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/user/compte.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class='row'>
    <div class=\"col-sm-12 col-md-6 useraccount m-auto p-3\">
        <div class=\"row\">
            <h3 class=\"col-sm-12 col-md-4 m-auto\">Mon compte</h3>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Pseudo : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "pseudo", [], "any", false, false, false, 13), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Email : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "email", [], "any", false, false, false, 16), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Nom : ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-4\">Prénom : ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Téléphone : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "telephone", [], "any", false, false, false, 23), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Compte créé le : ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "createdAt", [], "any", false, false, false, 26), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo "</div>
            <div class=\"col-sm-12 col-md-6\">Compte édité pour la dernière fois le : ";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "updatedAt", [], "any", false, false, false, 27), "d/m/Y", "Europe/Paris"), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row py-3\">
        <a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit");
        echo "\" class=\"btn col-sm-6 col-md-3 m-auto btn-outline-light\">Modifier des informations</a>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/user/compte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  129 => 27,  125 => 26,  119 => 23,  113 => 20,  109 => 19,  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<div class='row'>
    <div class=\"col-sm-12 col-md-6 useraccount m-auto p-3\">
        <div class=\"row\">
            <h3 class=\"col-sm-12 col-md-4 m-auto\">Mon compte</h3>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Pseudo : {{ user.pseudo }}</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Email : {{ user.email }}</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Nom : {{ user.nom }}</div>
            <div class=\"col-sm-12 col-md-4\">Prénom : {{ user.prenom }}</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Téléphone : {{ user.telephone }}</div>
        </div>
        <div class=\"row py-3\">
            <div class=\"col-sm-12 col-md-4\">Compte créé le : {{ user.createdAt | date('d/m/Y',\"Europe/Paris\")}}</div>
            <div class=\"col-sm-12 col-md-6\">Compte édité pour la dernière fois le : {{ user.updatedAt | date('d/m/Y',\"Europe/Paris\")}}</div>
        </div>
        <div class=\"row py-3\">
        <a href=\"{{path('user_edit')}}\" class=\"btn col-sm-6 col-md-3 m-auto btn-outline-light\">Modifier des informations</a>
        </div>
    </div>
</div>
{% endblock %}", "home/user/compte.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\home\\user\\compte.html.twig");
    }
}
