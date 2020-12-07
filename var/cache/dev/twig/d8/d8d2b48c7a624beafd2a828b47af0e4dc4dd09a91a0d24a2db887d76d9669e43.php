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

/* home/user/editInscriptionSolo.html.twig */
class __TwigTemplate_1b76d3968557456b71bd106eab2faacec0d0f5ddff46f8e62dcc6ec1c0f843c5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/user/editInscriptionSolo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/user/editInscriptionSolo.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/user/editInscriptionSolo.html.twig", 1);
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
<div class=\"container justify-content-center\">
    <div class=\" col-6 m-auto\">



    <div class=\"form\"> 
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
    <h2 class=\"col-6 m-auto\">Formulaire d'inscription au concours solo</h2>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 16, $this->source); })()), "univerSolo", [], "any", false, false, false, 16), 'row', ["attr" => ["placeholder" => "DBZ, One Piece, ...", "class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 19, $this->source); })()), "categorie", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>

        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 23, $this->source); })()), "nomPersoSolo", [], "any", false, false, false, 23), 'row', ["attr" => ["placeholder" => "Nom du personnage", "class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 26, $this->source); })()), "mediaSolo", [], "any", false, false, false, 26), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 29, $this->source); })()), "envoiMediaSolo", [], "any", false, false, false, 29), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 32, $this->source); })()), "aideSolo", [], "any", false, false, false, 32), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 35, $this->source); })()), "accessoireSolo", [], "any", false, false, false, 35), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 38, $this->source); })()), "descriptionAccessoireSolo", [], "any", false, false, false, 38), 'row', ["attr" => ["placeholder" => "Hache à déposer sur le devant la scène,...", "class" => "form-control"]]);
        echo "
        </div>
        <div class=\"form-group col-6 mx-auto\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 41, $this->source); })()), "infosSolo", [], "any", false, false, false, 41), 'row', ["attr" => ["placeholder" => "Informations supplémentaires...", "class" => "form-control"]]);
        echo "
        </div>

        ";
        // line 45
        echo "        <div class=\"form-group col-6 mx-auto\"> ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 45, $this->source); })()), "Enregistrer", [], "any", false, false, false, 45), 'row', ["attr" => ["label" => "Enregistrer", "class" => "btn btn-warning m-auto"]]);
        echo "</div>


    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulaireSolo"]) || array_key_exists("formulaireSolo", $context) ? $context["formulaireSolo"] : (function () { throw new RuntimeError('Variable "formulaireSolo" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
    </div>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/user/editInscriptionSolo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 48,  158 => 45,  152 => 41,  146 => 38,  140 => 35,  134 => 32,  128 => 29,  122 => 26,  116 => 23,  109 => 19,  103 => 16,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<div class=\"container justify-content-center\">
    <div class=\" col-6 m-auto\">



    <div class=\"form\"> 
    {{ form_start(formulaireSolo) }}
    <h2 class=\"col-6 m-auto\">Formulaire d'inscription au concours solo</h2>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.univerSolo,{\"attr\":{ placeholder:'DBZ, One Piece, ...', class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.categorie,{\"attr\":{class:'form-control'}}) }}
        </div>

        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.nomPersoSolo,{\"attr\":{ placeholder:'Nom du personnage', class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.mediaSolo,{\"attr\":{class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.envoiMediaSolo,{\"attr\":{class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.aideSolo,{\"attr\":{class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.accessoireSolo,{\"attr\":{class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.descriptionAccessoireSolo,{\"attr\":{ placeholder:'Hache à déposer sur le devant la scène,...', class:'form-control'}}) }}
        </div>
        <div class=\"form-group col-6 mx-auto\">
            {{ form_row(formulaireSolo.infosSolo,{\"attr\":{ placeholder:'Informations supplémentaires...', class:'form-control'}}) }}
        </div>

        {# bouton enregistrer #}
        <div class=\"form-group col-6 mx-auto\"> {{ form_row(formulaireSolo.Enregistrer,{\"attr\":{ label:'Enregistrer', class:'btn btn-warning m-auto'}}) }}</div>


    {{ form_end(formulaireSolo) }}
    </div>

    </div>
</div>

{% endblock %}", "home/user/editInscriptionSolo.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\home\\user\\editInscriptionSolo.html.twig");
    }
}
