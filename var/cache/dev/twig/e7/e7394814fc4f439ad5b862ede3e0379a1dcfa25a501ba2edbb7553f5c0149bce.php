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

/* artist_solo.html.twig */
class __TwigTemplate_7bf74536bb99a5ce3f08ada541e478db23e7339bb2ddcc76add87e5e19c8c84c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist_solo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artist_solo.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "artist_solo.html.twig", 1);
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
    <h2 class=\"ml-3\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
    <a href=\"/artists/set/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"btn btn-info text-white ml-3\">Modifier</a>
    <button  class=\"btn btn-danger text-white ml-3\" onclick=\"deleteArtist(";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["artist"]) || array_key_exists("artist", $context) ? $context["artist"] : (function () { throw new RuntimeError('Variable "artist" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "); setTimeout(function(){ window.location.href='/artists'; }, 50);\">Supprimer</button>   
    <br>
    <h3 class=\"ml-3\">Disques :</h3>
    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Style</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
            </tr>
        </thead>
        <tbody>
    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disks"]) || array_key_exists("disks", $context) ? $context["disks"] : (function () { throw new RuntimeError('Variable "disks" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 26
            echo "            <tr>
                <td class=\"align-middle text-center\"><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "img", [], "any", false, false, false, 27), "html", null, true);
            echo "\" alt=\"Cover\" height=\"75px\"></td>
                <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</a></td>
                <td class=\"align-middle text-center\"><a href=\"/productions/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></td>
                <td class=\"align-middle text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "published", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"align-middle text-center\"><a href=\"/styles/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></td>
                <td class=\"align-middle text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "stock", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td class=\"align-middle text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "barcode", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, (isset($context["script"]) || array_key_exists("script", $context) ? $context["script"] : (function () { throw new RuntimeError('Variable "script" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "artist_solo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 41,  164 => 36,  155 => 33,  151 => 32,  145 => 31,  141 => 30,  135 => 29,  129 => 28,  125 => 27,  122 => 26,  118 => 25,  99 => 9,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
 <div>
    <h2 class=\"ml-3\">{{ artist.name }}</h2>
    <a href=\"/artists/set/{{ artist.id }}\" class=\"btn btn-info text-white ml-3\">Modifier</a>
    <button  class=\"btn btn-danger text-white ml-3\" onclick=\"deleteArtist({{ artist.id }}); setTimeout(function(){ window.location.href='/artists'; }, 50);\">Supprimer</button>   
    <br>
    <h3 class=\"ml-3\">Disques :</h3>
    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Style</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
            </tr>
        </thead>
        <tbody>
    {% for disk in disks %}
            <tr>
                <td class=\"align-middle text-center\"><img src=\"{{ disk.img }}\" alt=\"Cover\" height=\"75px\"></td>
                <td class=\"align-middle text-center\"><a href=\"/disks/{{ disk.id }}\">{{ disk.name }}</a></td>
                <td class=\"align-middle text-center\"><a href=\"/productions/{{ disk.production.id }}\">{{ disk.production.name }}</a></td>
                <td class=\"align-middle text-center\">{{ disk.published|date(\"d-m-Y\") }}</td>
                <td class=\"align-middle text-center\"><a href=\"/styles/{{ disk.style.id }}\">{{ disk.style.name }}</a></td>
                <td class=\"align-middle text-center\">{{ disk.stock }}</td>
                <td class=\"align-middle text-center\">{{ disk.barcode }}</td>
            </tr>
    {% endfor %}
        </tbody>
    </table>

{% endblock %}
    
{% block custom_scripts %}<script src=\"{{ script }}\"></script>{% endblock %}
", "artist_solo.html.twig", "/var/www/html/diskapp/templates/artist_solo.html.twig");
    }
}
