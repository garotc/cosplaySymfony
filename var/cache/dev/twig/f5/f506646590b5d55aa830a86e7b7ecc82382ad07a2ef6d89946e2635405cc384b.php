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

/* reset_password/email.html.twig */
class __TwigTemplate_58c556a5cacbc16d253326e0001fd1825b99182158e57433b8f114821a68e149 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        echo "<h1>Bonjour!</h1>

<p>Tu as oublié ton mot de passe ?<br>
Pour le changer, clique sur le lien ci-dessous, il t'emmènera sur la page pour en créer un nouveau.</p>

<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 6, $this->source); })()), "token", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\" class='btn btn-dark'>Créer un nouveau mot de passe</a>

<p>Attention, ce lien va expirer dans ";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 8, $this->source); })()), "g"), "html", null, true);
        echo " heure.</p>

<p>Si tu rencontres un problème, n'hésites pas à nous contacter.</p>

<p>Bonne journée !</p>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Bonjour!</h1>

<p>Tu as oublié ton mot de passe ?<br>
Pour le changer, clique sur le lien ci-dessous, il t'emmènera sur la page pour en créer un nouveau.</p>

<a href=\"{{ url('app_reset_password', {token: resetToken.token}) }}\" class='btn btn-dark'>Créer un nouveau mot de passe</a>

<p>Attention, ce lien va expirer dans {{ tokenLifetime|date('g') }} heure.</p>

<p>Si tu rencontres un problème, n'hésites pas à nous contacter.</p>

<p>Bonne journée !</p>
", "reset_password/email.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\reset_password\\email.html.twig");
    }
}
