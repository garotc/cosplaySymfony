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

/* rgpd.html.twig */
class __TwigTemplate_adca88331b968b817d17a464fe14ce888423f66a0b2ede5295a96fbc7f91425d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rgpd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rgpd.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rgpd.html.twig", 1);
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
        echo "<div class=\"row\">
    <h1 class='col-12 text-center my-auto p-2'>RGPD</h1>
</div>


    <div class=\"row mt-5 p-5\">
        <p class=\"col-8 m-auto\">En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a>http://www.carologameshow.</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
​

    <h3 class=\"col-8 mx-auto my-3\">Présentation</h3>

        <p class=\"col-8 m-auto\">Propriétaire : CRITICAL HIT – Association loi 1901</p>
        <p class=\"col-8 m-auto\">Siège social : 4 place de la Préfecture - 08000 Charleville-Mézières</p>
        <p class=\"col-8 m-auto\">Numéro de Siren : 814611638
        Responsable de la rédaction : Kévin CROUCHET - carologameshow@gmail.com</p>

    <h3 class=\"col-8 mx-auto my-3\">Hébergeur</h3>

        <p class=\"col-8 m-auto\">Dénomination : Wix.com Inc</p>
        <p class=\"col-8 m-auto\">Siège social : BP 40190, San Francisco, CA 94140, Etats-Unis</p>
        <p class=\"col-8 m-auto\">Téléphone : +1 415-639-9034</p>
​

    <h3 class=\"col-8 mx-auto my-3\">Données personnelles</h3>
​
            <p class=\"col-8 m-auto\">Les informations recueillies à partir du formulaire de contact font l’objet d’un traitement informatique destiné à l'association Critical Hit. Les données récoltées ne sont pas conservées et ne font l'objet que d'un éclaircissement de la personne avec qui nous échangeons dans le cadre du Carolo Game Show. Les destinataires des données sont les dirigeants de l'association Critical Hit. Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée, vous disposez d’un droit d’accès et de rectification aux informations qui vous concernent. Vous pouvez accèder aux informations vous concernant en vous adressant à : asso_critical_hit@yahoo.fr.</p>
   
            <p class=\"col-8 m-auto\">Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.</p>

            <p class=\"col-8 m-auto\">Pour en savoir plus, consultez vos droits sur le site de la CNIL.</p>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "rgpd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<div class=\"row\">
    <h1 class='col-12 text-center my-auto p-2'>RGPD</h1>
</div>


    <div class=\"row mt-5 p-5\">
        <p class=\"col-8 m-auto\">En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site <a>http://www.carologameshow.</a> l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi.</p>
​

    <h3 class=\"col-8 mx-auto my-3\">Présentation</h3>

        <p class=\"col-8 m-auto\">Propriétaire : CRITICAL HIT – Association loi 1901</p>
        <p class=\"col-8 m-auto\">Siège social : 4 place de la Préfecture - 08000 Charleville-Mézières</p>
        <p class=\"col-8 m-auto\">Numéro de Siren : 814611638
        Responsable de la rédaction : Kévin CROUCHET - carologameshow@gmail.com</p>

    <h3 class=\"col-8 mx-auto my-3\">Hébergeur</h3>

        <p class=\"col-8 m-auto\">Dénomination : Wix.com Inc</p>
        <p class=\"col-8 m-auto\">Siège social : BP 40190, San Francisco, CA 94140, Etats-Unis</p>
        <p class=\"col-8 m-auto\">Téléphone : +1 415-639-9034</p>
​

    <h3 class=\"col-8 mx-auto my-3\">Données personnelles</h3>
​
            <p class=\"col-8 m-auto\">Les informations recueillies à partir du formulaire de contact font l’objet d’un traitement informatique destiné à l'association Critical Hit. Les données récoltées ne sont pas conservées et ne font l'objet que d'un éclaircissement de la personne avec qui nous échangeons dans le cadre du Carolo Game Show. Les destinataires des données sont les dirigeants de l'association Critical Hit. Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée, vous disposez d’un droit d’accès et de rectification aux informations qui vous concernent. Vous pouvez accèder aux informations vous concernant en vous adressant à : asso_critical_hit@yahoo.fr.</p>
   
            <p class=\"col-8 m-auto\">Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.</p>

            <p class=\"col-8 m-auto\">Pour en savoir plus, consultez vos droits sur le site de la CNIL.</p>
    </div>
    {% endblock %}", "rgpd.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\rgpd.html.twig");
    }
}
