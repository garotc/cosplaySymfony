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

/* home/user/inscriptionsolo.html.twig */
class __TwigTemplate_e0dc6a36018ac5704ddc3c6229ce798dd31a38cfdaf363bdfa8bcc37974967d6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/user/inscriptionsolo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/user/inscriptionsolo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/user/inscriptionsolo.html.twig", 1);
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

        echo "Inscription Solo";
        
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
";
        // line 7
        if ((isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "
<div class='row'>
<div class=\"col-sm-12 col-md-6 useraccount m-auto p-3\">
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Nom du personnage : ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 12, $this->source); })()), "NomPersoSolo", [], "any", false, false, false, 12), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Univers du personnage : ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 15, $this->source); })()), "UniverSolo", [], "any", false, false, false, 15), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Type de média : ";
            // line 18
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 18, $this->source); })()), "MediaSolo", [], "any", false, false, false, 18), 1))) {
                // line 19
                echo "            Musique
            ";
            } else {
                // line 21
                echo "            Vidéo
            ";
            }
            // line 23
            echo "            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Lancement du média : ";
            // line 26
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 26, $this->source); })()), "envoiMediaSolo", [], "any", false, false, false, 26), 1))) {
                // line 27
                echo "            Avant l'entrée sur scène
            ";
            } else {
                // line 29
                echo "            Après l'entrée sur scène
            ";
            }
            // line 31
            echo "            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Aide pour monter sur scène : ";
            // line 34
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 34, $this->source); })()), "AideSolo", [], "any", false, false, false, 34), 1))) {
                // line 35
                echo "            Oui
            ";
            } else {
                // line 37
                echo "            Non
            ";
            }
            // line 39
            echo "            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Accessoires à déposer sur scène : ";
            // line 42
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 42, $this->source); })()), "AccessoireSolo", [], "any", false, false, false, 42), 1))) {
                // line 43
                echo "            Oui
            ";
            } else {
                // line 45
                echo "            Non
            ";
            }
            // line 47
            echo "            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Déscription des accessoires : ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 50, $this->source); })()), "DescriptionAccessoireSolo", [], "any", false, false, false, 50), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Autres informations : ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 53, $this->source); })()), "InfosSolo", [], "any", false, false, false, 53), "html", null, true);
            echo "</div>
        </div>
        <div class=\"row mb-3\">
            <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\" class=\"btn btn-warning col-4 m-auto\">Editer</a>

            <form method=\"POST\" class='col-4 m-auto btn' action=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"
                onSubmit =\"return confirm('Confirmer la suppression ?')\" style=\"display:inline-block\" >
                    <input type=\"hidden\" name=\"_method\" value=\"SUPUSERSOLO\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("SUPUSERSOLO" . twig_get_attribute($this->env, $this->source, (isset($context["infos"]) || array_key_exists("infos", $context) ? $context["infos"] : (function () { throw new RuntimeError('Variable "infos" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61))), "html", null, true);
            echo "\">
                                                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
            </form>
</div>
";
        } else {
            // line 66
            echo "

<a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_ajout");
            echo "\" class=\"btn btn-warning col-4 m-auto\">M'inscrire au concours</a>

";
        }
        // line 71
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/user/inscriptionsolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 71,  206 => 68,  202 => 66,  194 => 61,  188 => 58,  183 => 56,  177 => 53,  171 => 50,  166 => 47,  162 => 45,  158 => 43,  156 => 42,  151 => 39,  147 => 37,  143 => 35,  141 => 34,  136 => 31,  132 => 29,  128 => 27,  126 => 26,  121 => 23,  117 => 21,  113 => 19,  111 => 18,  105 => 15,  99 => 12,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}

{% block title %}Inscription Solo{% endblock %}

{% block body %}

{% if infos %}

<div class='row'>
<div class=\"col-sm-12 col-md-6 useraccount m-auto p-3\">
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Nom du personnage : {{ infos.NomPersoSolo }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Univers du personnage : {{ infos.UniverSolo }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Type de média : {% if infos.MediaSolo == 1 %}
            Musique
            {% else %}
            Vidéo
            {% endif %}
            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Lancement du média : {% if infos.envoiMediaSolo == 1 %}
            Avant l'entrée sur scène
            {% else %}
            Après l'entrée sur scène
            {% endif %}
            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Aide pour monter sur scène : {% if infos.AideSolo == 1 %}
            Oui
            {% else %}
            Non
            {% endif %}
            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Accessoires à déposer sur scène : {% if infos.AccessoireSolo == 1 %}
            Oui
            {% else %}
            Non
            {% endif %}
            </div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Déscription des accessoires : {{ infos.DescriptionAccessoireSolo }}</div>
        </div>
        <div class=\"row py-1\">
            <div class=\"col-sm-12 col-md-12\">Autres informations : {{ infos.InfosSolo }}</div>
        </div>
        <div class=\"row mb-3\">
            <a href=\"{{path('inscription_solo_edit',{'id':infos.id})}}\" class=\"btn btn-warning col-4 m-auto\">Editer</a>

            <form method=\"POST\" class='col-4 m-auto btn' action=\"{{path('inscription_solo_delete',{'id':infos.id})}}\"
                onSubmit =\"return confirm('Confirmer la suppression ?')\" style=\"display:inline-block\" >
                    <input type=\"hidden\" name=\"_method\" value=\"SUPUSERSOLO\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{csrf_token('SUPUSERSOLO' ~ infos.id)}}\">
                                                <input type=\"submit\" class=\"btn btn-danger\" value=\"Supprimer\">
            </form>
</div>
{% else %}


<a href=\"{{path('inscription_solo_ajout')}}\" class=\"btn btn-warning col-4 m-auto\">M'inscrire au concours</a>

{% endif %}
</div>
{% endblock %}", "home/user/inscriptionsolo.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\home\\user\\inscriptionsolo.html.twig");
    }
}
