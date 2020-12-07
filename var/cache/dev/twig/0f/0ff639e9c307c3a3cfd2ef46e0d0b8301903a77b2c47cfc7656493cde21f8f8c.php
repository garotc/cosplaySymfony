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

/* admin/userAccount.html.twig */
class __TwigTemplate_fbc7cf89ffe63461740a6922c0b07cdcf107668a1eecf9021a1701a9e2a1c976 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/userAccount.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/userAccount.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/userAccount.html.twig", 1);
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
<section class='row p-auto'>
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "
    <div class=\"col-sm-12 col-md-3 affUser m-1 p-2\">
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Pseudo : ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "pseudo", [], "any", false, false, false, 12), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Email : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-6\">Nom : ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
            <div class=\"col-sm-12 col-md-6\">Prénom : ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 19), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Téléphone : ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "telephone", [], "any", false, false, false, 22), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Compte créé le : ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "createdAt", [], "any", false, false, false, 25), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Compte édité pour la dernière fois le : ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "updatedAt", [], "any", false, false, false, 28), "d/m/Y", "Europe/Paris"), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">A créé un groupe : 
            ";
            // line 32
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["user"], "createGroup", [], "any", false, false, false, 32), 1))) {
                // line 33
                echo "                Oui
            ";
            } else {
                // line 35
                echo "                Non
            ";
            }
            // line 36
            echo "</div>
        </div>
        <div class=\"row mb-3\">
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"btn btn-warning col-4 m-auto\">Editer</a>

            ";
            // line 42
            echo "            <form method=\"POST\" class='col-4 m-auto btn' action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            echo "\"
            onSubmit =\"return confirm('Confirmer la suppression ?')\" style=\"display:inline-block\" >
                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUP" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 45))), "html", null, true);
            echo "\">
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
            </form>
        </div>
    </div>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/userAccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 52,  169 => 45,  162 => 42,  157 => 39,  152 => 36,  148 => 35,  144 => 33,  142 => 32,  135 => 28,  129 => 25,  123 => 22,  117 => 19,  113 => 18,  107 => 15,  101 => 12,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<section class='row p-auto'>
{% for user in users %}

    <div class=\"col-sm-12 col-md-3 affUser m-1 p-2\">
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Pseudo : {{ user.pseudo }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Email : {{ user.email }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-6\">Nom : {{ user.nom }}</div>
            <div class=\"col-sm-12 col-md-6\">Prénom : {{ user.prenom }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Téléphone : {{ user.telephone }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Compte créé le : {{ user.createdAt | date('d/m/Y',\"Europe/Paris\")}}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Compte édité pour la dernière fois le : {{ user.updatedAt | date('d/m/Y',\"Europe/Paris\")}}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">A créé un groupe : 
            {% if user.createGroup == 1 %}
                Oui
            {% else %}
                Non
            {% endif %}</div>
        </div>
        <div class=\"row mb-3\">
            <a href=\"{{path('admin_user_edit',{'id':user.id})}}\" class=\"btn btn-warning col-4 m-auto\">Editer</a>

            {# Bouton delete #}
            <form method=\"POST\" class='col-4 m-auto btn' action=\"{{path('admin_user_delete',{'id':user.id})}}\"
            onSubmit =\"return confirm('Confirmer la suppression ?')\" style=\"display:inline-block\" >
                <input type=\"hidden\" name=\"_method\" value=\"SUP\">
                <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUP' ~ user.id)}}\">
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
            </form>
        </div>
    </div>

{% endfor %}
</section>

{% endblock %}", "admin/userAccount.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\admin\\userAccount.html.twig");
    }
}
