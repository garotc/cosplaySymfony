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

/* registration/register.html.twig */
class __TwigTemplate_f1249f0916265e81f6d68f6d5c15c4e26346bd4804021af261201f905ef55661 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["flashError"]) {
            // line 7
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flashError"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashError'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
<div class=\"form col-sm-12 col-md-6\">
    <div class=\"row text-center p-sm-2\">  
        <h2 class=\"col-sm-12 col-md-6 mx-auto\">Formulaire d'inscription</h2>
    </div>

    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), "pseudo", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Pseudo", "type" => "text", "class" => "form-control"]]);
        // line 19
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'row', ["attr" => ["placeholder" => "Nom", "type" => "text", "class" => "form-control"]]);
        // line 25
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'row', ["attr" => ["placeholder" => "Prénom", "class" => "form-control"]]);
        // line 31
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "telephone", [], "any", false, false, false, 36), 'row', ["attr" => ["placeholder" => "numéro de téléphone", "type" => "tel", "class" => "form-control"]]);
        // line 37
        echo "
        </div>
    </div> 
    <div class=\"row\">      
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'row', ["attr" => ["placeholder" => "votre-email@email.fr", "type" => "email", "class" => "form-control"]]);
        // line 43
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "plainPassword", [], "any", false, false, false, 48), 'row', ["attr" => ["placeholder" => "●●●●●●●●", "type" => "password", "class" => "form-control"]]);
        // line 49
        echo "
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">

            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "agreeTerms", [], "any", false, false, false, 55), 'widget');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "agreeTerms", [], "any", false, false, false, 56), 'label');
        echo "

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-2 mx-auto mt-5\">
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "Enregistrer", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "btn btn-primary"]]);
        // line 63
        echo "
        </div>        
    </div>
</div>
    ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 67,  186 => 63,  184 => 62,  175 => 56,  171 => 55,  163 => 49,  161 => 48,  154 => 43,  152 => 42,  145 => 37,  143 => 36,  136 => 31,  134 => 30,  127 => 25,  125 => 24,  118 => 19,  116 => 18,  105 => 10,  102 => 9,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {% for flashError in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flashError }}</div>
    {% endfor %}

{{ form_start(registrationForm) }}
<div class=\"form col-sm-12 col-md-6\">
    <div class=\"row text-center p-sm-2\">  
        <h2 class=\"col-sm-12 col-md-6 mx-auto\">Formulaire d'inscription</h2>
    </div>

    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            {{ form_row(registrationForm.pseudo,{\"attr\":{ placeholder:'Pseudo',type:'text', class:'form-control'}})
            }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            {{ form_row(registrationForm.nom,{\"attr\":{ placeholder:'Nom', type:'text', class:'form-control'}})
            }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            {{ form_row(registrationForm.prenom,{\"attr\":{ placeholder:'Prénom', class:'form-control'}})
            }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            {{ form_row(registrationForm.telephone,{\"attr\":{ placeholder:'numéro de téléphone',type : 'tel', class:'form-control'}})
            }}
        </div>
    </div> 
    <div class=\"row\">      
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            {{ form_row(registrationForm.email,{\"attr\":{placeholder:'votre-email@email.fr',type:'email', class:'form-control'}})
            }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">
            {{ form_row(registrationForm.plainPassword,{\"attr\":{placeholder:'●●●●●●●●',type:'password',class:'form-control'}})
            }}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"form-group col-sm-12 col-md-6 m-auto\">

            {{ form_widget(registrationForm.agreeTerms) }}
            {{ form_label(registrationForm.agreeTerms) }}

        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-2 mx-auto mt-5\">
        {{ form_row(registrationForm.Enregistrer,{\"attr\":{class:'btn btn-primary'}})
        }}
        </div>        
    </div>
</div>
    {{ form_end(registrationForm) }}

{% endblock %}
", "registration/register.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\registration\\register.html.twig");
    }
}
