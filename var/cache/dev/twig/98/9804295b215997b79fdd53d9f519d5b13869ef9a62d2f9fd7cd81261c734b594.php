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

/* inscription_solo/index.html.twig */
class __TwigTemplate_96e3b39af77978c72807c50b9bac50798b713aba935ccd3a5f1344f8c48da758 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_solo/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inscription_solo/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inscription_solo/index.html.twig", 1);
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

        echo "InscriptionSolo index";
        
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
        echo "    <h1>InscriptionSolo index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>CreatedAt</th>
                <th>NomPersoSolo</th>
                <th>UniverSolo</th>
                <th>MediaSolo</th>
                <th>EnvoiMediaSolo</th>
                <th>AideSolo</th>
                <th>AccessoireSolo</th>
                <th>DescriptionAccessoireSolo</th>
                <th>InfosSolo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscription_solos"]) || array_key_exists("inscription_solos", $context) ? $context["inscription_solos"] : (function () { throw new RuntimeError('Variable "inscription_solos" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inscription_solo"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "createdAt", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "createdAt", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "nomPersoSolo", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "univerSolo", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo ((twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "mediaSolo", [], "any", false, false, false, 31)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 32
            echo ((twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "envoiMediaSolo", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 33
            echo ((twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "aideSolo", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 34
            echo ((twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "accessoireSolo", [], "any", false, false, false, 34)) ? ("Yes") : ("No"));
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "descriptionAccessoireSolo", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "infosSolo", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_show", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["inscription_solo"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription_solo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_new");
        echo "\">Create new</a>
    <form method=\"post\" action=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inscription_solo_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["inscription_solo"]) || array_key_exists("inscription_solo", $context) ? $context["inscription_solo"] : (function () { throw new RuntimeError('Variable "inscription_solo" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["inscription_solo"]) || array_key_exists("inscription_solo", $context) ? $context["inscription_solo"] : (function () { throw new RuntimeError('Variable "inscription_solo" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53))), "html", null, true);
        echo "\">
    <button class=\"btn\">Delete</button>
</form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inscription_solo/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 53,  189 => 51,  185 => 50,  180 => 47,  171 => 43,  162 => 39,  158 => 38,  153 => 36,  149 => 35,  145 => 34,  141 => 33,  137 => 32,  133 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}InscriptionSolo index{% endblock %}

{% block body %}
    <h1>InscriptionSolo index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>CreatedAt</th>
                <th>NomPersoSolo</th>
                <th>UniverSolo</th>
                <th>MediaSolo</th>
                <th>EnvoiMediaSolo</th>
                <th>AideSolo</th>
                <th>AccessoireSolo</th>
                <th>DescriptionAccessoireSolo</th>
                <th>InfosSolo</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for inscription_solo in inscription_solos %}
            <tr>
                <td>{{ inscription_solo.id }}</td>
                <td>{{ inscription_solo.createdAt ? inscription_solo.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                <td>{{ inscription_solo.nomPersoSolo }}</td>
                <td>{{ inscription_solo.univerSolo }}</td>
                <td>{{ inscription_solo.mediaSolo ? 'Yes' : 'No' }}</td>
                <td>{{ inscription_solo.envoiMediaSolo ? 'Yes' : 'No' }}</td>
                <td>{{ inscription_solo.aideSolo ? 'Yes' : 'No' }}</td>
                <td>{{ inscription_solo.accessoireSolo ? 'Yes' : 'No' }}</td>
                <td>{{ inscription_solo.descriptionAccessoireSolo }}</td>
                <td>{{ inscription_solo.infosSolo }}</td>
                <td>
                    <a href=\"{{ path('inscription_solo_show', {'id': inscription_solo.id}) }}\">show</a>
                    <a href=\"{{ path('inscription_solo_edit', {'id': inscription_solo.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('inscription_solo_new') }}\">Create new</a>
    <form method=\"post\" action=\"{{ path('inscription_solo_delete', {'id': inscription_solo.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ inscription_solo.id) }}\">
    <button class=\"btn\">Delete</button>
</form>

{% endblock %}
", "inscription_solo/index.html.twig", "C:\\wamp64\\www\\test\\cosplayProject\\templates\\inscription_solo\\index.html.twig");
    }
}
