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

/* styles.html.twig */
class __TwigTemplate_41f11ec487dac3d68f0588c427b74b25726029940a9dee26b3e047f1da89ddbd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "styles.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "styles.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 7, $this->source); })())), "html", null, true);
        echo " genres référencés</small>

   <section>
        <div class=\"d-flex\">
            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedStyles();\"  id=\"deleteSelected\">Supprimer la sélection</button>
            ";
        }
        // line 14
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "                <a href=\"/styles/add\" class=\"my-2 btn btn-success text-white\">Ajouter un genre</a>
            ";
        }
        // line 17
        echo "        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"stylesTable\">
        <thead>
            <tr>
                ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                    <th scope=\"col\" class=\"align-bottom\">
                        <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                    </th>
                ";
        }
        // line 28
        echo "                <th class=\"align-middle\" scope=\"col\">Nom</th>
                <th class=\"align-middle\" scope=\"col\">Enregistré par</th>
                ";
        // line 31
        echo "            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 35, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 36
            echo "                <tr>
                    ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                        <td class=\"align-middle\"><input  type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" onclick=\"enableGroupDelete();\"></td>
                    ";
            }
            // line 40
            echo "                    <td class=\"align-middle\"><a href=\"/styles/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle\"><a href=\"/user/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["style"], "curator", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["style"], "curator", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></td>
                    ";
            // line 46
            echo "                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "                <tr>
                    <td colspan=\"2\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        // line 58
        echo "<script src=\"assets/js/styles.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "styles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 58,  196 => 57,  183 => 52,  174 => 48,  168 => 46,  162 => 41,  155 => 40,  147 => 38,  145 => 37,  142 => 36,  137 => 35,  131 => 31,  127 => 28,  121 => 24,  119 => 23,  111 => 17,  107 => 15,  104 => 14,  100 => 12,  98 => 11,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
 <div>
    <small>{{ styles|length }} genres référencés</small>

   <section>
        <div class=\"d-flex\">
            {% if is_granted('ROLE_ADMIN') %}
                <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedStyles();\"  id=\"deleteSelected\">Supprimer la sélection</button>
            {% endif %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                <a href=\"/styles/add\" class=\"my-2 btn btn-success text-white\">Ajouter un genre</a>
            {% endif %}
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"stylesTable\">
        <thead>
            <tr>
                {% if is_granted('ROLE_ADMIN') %}
                    <th scope=\"col\" class=\"align-bottom\">
                        <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                    </th>
                {% endif %}
                <th class=\"align-middle\" scope=\"col\">Nom</th>
                <th class=\"align-middle\" scope=\"col\">Enregistré par</th>
                {#<th class=\"align-middle\" scope=\"col\"></th>#}
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            {% for style in styles %}
                <tr>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td class=\"align-middle\"><input  type=\"checkbox\" name=\"{{ style.id }}\" id=\"{{ style.id }}\" onclick=\"enableGroupDelete();\"></td>
                    {% endif %}
                    <td class=\"align-middle\"><a href=\"/styles/{{ style.id }}\">{{ style.name }}</a></td>
                    <td class=\"align-middle\"><a href=\"/user/{{ style.curator.id }}\">{{ style.curator.username }}</a></td>
                    {#<td class=\"align-middle text-center\">
                        <a href=\"/styles/set/{{ style.id }}\" class=\"btn btn-info text-white\">Modifier</a>
                        <a href=\"\" class=\"btn btn-danger text-white\" onclick=\"deleteStyle({{ style.id }});\">Supprimer</a>
                    </td>#}
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
<script src=\"assets/js/styles.js\"></script>
{% endblock %}", "styles.html.twig", "/var/www/html/disk2/templates/styles.html.twig");
    }
}
