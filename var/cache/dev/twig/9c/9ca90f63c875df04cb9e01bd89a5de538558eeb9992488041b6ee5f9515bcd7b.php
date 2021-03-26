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

/* disks.html.twig */
class __TwigTemplate_f450657b800199c628b142499bbce838d3196d78072559df82e63dc7eae52aeb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disks.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "disks.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["disks"]) || array_key_exists("disks", $context) ? $context["disks"] : (function () { throw new RuntimeError('Variable "disks" does not exist.', 7, $this->source); })())), "html", null, true);
        echo " disques référencés</small>

    <section>
        <div class=\"p-3 d-flex justify-content-center\">
            <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedDisks();\" id=\"deleteSelected\">Supprimer la sélection</button>
            <a href=\"/disks/add\" class=\"m-2 btn btn-success text-white\">Ajouter un disque</a>
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th scope=\"col\" class=\"align-bottom text-center\">
                    <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                </th>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Artiste(s)</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Style</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
                <th class=\"align-middle text-center\" scope=\"col\">Enregistré le</th>
                <th class=\"align-middle text-center\" scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disks"]) || array_key_exists("disks", $context) ? $context["disks"] : (function () { throw new RuntimeError('Variable "disks" does not exist.', 36, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 37
            echo "                <tr>
                    <td class=\"align-middle text-center\">
                        <input  type=\"checkbox\" name=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" onclick=\"enableGroupDelete();\">
                    </td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "img", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"\" height=\"75px\"></a></td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/artists/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/productions/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "published", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\"><a href=\"/styles/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "stock", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "barcode", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>           
                    <td class=\"align-middle text-center\">";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "registered", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">
                        <a href=\"/disks/set/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" class=\"btn btn-info text-white\">Modifier</a>
                        <a href=\"\" class=\"btn btn-danger text-white\" onclick=\"if(confirm('Suppression imminente : confirmer ?')) {(deleteDisk(";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "));\">Supprimer</a>
                    </td>

                                            

                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                <tr>
                    <td colspan=\"10\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        // line 69
        echo "<script src=\"assets/js/disks.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 69,  224 => 68,  211 => 63,  202 => 59,  190 => 52,  186 => 51,  181 => 49,  177 => 48,  173 => 47,  167 => 46,  163 => 45,  157 => 44,  151 => 43,  145 => 42,  139 => 41,  132 => 39,  128 => 37,  123 => 36,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
 <div>
    <small>{{ disks|length }} disques référencés</small>

    <section>
        <div class=\"p-3 d-flex justify-content-center\">
            <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedDisks();\" id=\"deleteSelected\">Supprimer la sélection</button>
            <a href=\"/disks/add\" class=\"m-2 btn btn-success text-white\">Ajouter un disque</a>
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th scope=\"col\" class=\"align-bottom text-center\">
                    <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                </th>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Artiste(s)</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Style</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
                <th class=\"align-middle text-center\" scope=\"col\">Enregistré le</th>
                <th class=\"align-middle text-center\" scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            {% for disk in disks %}
                <tr>
                    <td class=\"align-middle text-center\">
                        <input  type=\"checkbox\" name=\"{{ disk.id }}\" id=\"{{ disk.id }}\" onclick=\"enableGroupDelete();\">
                    </td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/{{ disk.id }}\"><img src=\"{{ disk.img }}\" alt=\"\" height=\"75px\"></a></td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/{{ disk.id }}\">{{ disk.name }}</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/artists/{{ disk.artist.id }}\">{{ disk.artist.name }}</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/productions/{{ disk.production.id }}\">{{ disk.production.name }}</a></td>
                    <td class=\"align-middle text-center\">{{ disk.published|date('d-m-Y') }}</td>
                    <td class=\"align-middle text-center\"><a href=\"/styles/{{ disk.style.id }}\">{{ disk.style.name }}</a></td>
                    <td class=\"align-middle text-center\">{{ disk.stock }}</td>
                    <td class=\"align-middle text-center\">{{ disk.barcode }}</td>           
                    <td class=\"align-middle text-center\">{{ disk.registered|date('d-m-Y') }}</td>
                    <td class=\"align-middle text-center\">
                        <a href=\"/disks/set/{{ disk.id }}\" class=\"btn btn-info text-white\">Modifier</a>
                        <a href=\"\" class=\"btn btn-danger text-white\" onclick=\"if(confirm('Suppression imminente : confirmer ?')) {(deleteDisk({{ disk.id }}));\">Supprimer</a>
                    </td>

                                            

                </tr>
            {% else %}
                <tr>
                    <td colspan=\"10\"><i>Nothing to show...</i></td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}

{% block custom_scripts %}
<script src=\"assets/js/disks.js\"></script>
{% endblock %}
", "disks.html.twig", "/var/www/html/diskapp/templates/disks.html.twig");
    }
}
