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

/* productions.html.twig */
class __TwigTemplate_6073244a75bcd885942da666b8323aa6b2fcc8f4cc5706303ebdcff7601b1912 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'custom_styles' => [$this, 'block_custom_styles'],
            'main' => [$this, 'block_main'],
            'custom_scripts' => [$this, 'block_custom_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "diskapp.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "productions.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "productions.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_custom_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_styles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_styles"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo " <div>
    <small>";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 7, $this->source); })())), "html", null, true);
        echo " labels référencés</small>

    <section>
        <div class=\"p-3 d-flex justify-content-center\">
            <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedProductions();\" id=\"deleteSelected\">Supprimer la sélection</button>
            <a href=\"/productions/add\" class=\"m-2 btn btn-success text-white\">Ajouter un label</a>
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"productionsTable\">
        <thead>
            <tr>
                <th scope=\"col\" class=\"align-bottom\">
                    <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                </th>
                <th class=\"align-middle\" scope=\"col\">Nom</th>
                <th class=\"align-middle\" scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 28, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["production"]) {
            // line 29
            echo "                <tr>
                    <td class=\"align-middle\"><input  type=\"checkbox\" name=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" onclick=\"enableGroupDelete();\"></td>
                    <td class=\"align-middle\"><a href=\"/productions/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">
                        <a href=\"/productions/set/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"btn btn-info text-white\">Modifier</a>
                        <a href=\"\" class=\"btn btn-danger text-white\" onclick=\"if(confirm('Attention : confirmer ?')) {deleteProduction(";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo ")}\">Supprimer</a>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td colspan=\"2\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['production'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        // line 48
        echo "<script src=\"assets/js/productions.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "productions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 48,  171 => 47,  158 => 42,  149 => 38,  140 => 34,  136 => 33,  129 => 31,  123 => 30,  120 => 29,  115 => 28,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
 <div>
    <small>{{ labels|length }} labels référencés</small>

    <section>
        <div class=\"p-3 d-flex justify-content-center\">
            <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedProductions();\" id=\"deleteSelected\">Supprimer la sélection</button>
            <a href=\"/productions/add\" class=\"m-2 btn btn-success text-white\">Ajouter un label</a>
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"productionsTable\">
        <thead>
            <tr>
                <th scope=\"col\" class=\"align-bottom\">
                    <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                </th>
                <th class=\"align-middle\" scope=\"col\">Nom</th>
                <th class=\"align-middle\" scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            {% for production in labels %}
                <tr>
                    <td class=\"align-middle\"><input  type=\"checkbox\" name=\"{{ production.id }}\" id=\"{{ production.id }}\" onclick=\"enableGroupDelete();\"></td>
                    <td class=\"align-middle\"><a href=\"/productions/{{ production.id }}\">{{ production.name }}</a></td>
                    <td class=\"align-middle text-center\">
                        <a href=\"/productions/set/{{ production.id }}\" class=\"btn btn-info text-white\">Modifier</a>
                        <a href=\"\" class=\"btn btn-danger text-white\" onclick=\"if(confirm('Attention : confirmer ?')) {deleteProduction({{ production.id }})}\">Supprimer</a>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"2\"><i>Nothing to show...</i></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}

{% block custom_scripts %}
<script src=\"assets/js/productions.js\"></script>
{% endblock %}", "productions.html.twig", "/var/www/html/diskapp_1.0/templates/productions.html.twig");
    }
}
