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

/* disk_solo.html.twig */
class __TwigTemplate_cd2c99344a87883843d1575a94b54176cf65ca57a48dd61e165d8a405d5debb0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disk_solo.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "disk_solo.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "disk_solo.html.twig", 1);
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
    <section class=\"d-flex flex-column flex-md-row\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 8, $this->source); })()), "img", [], "any", false, false, false, 8), "html", null, true);
        echo "\" alt=\"cover\" height=\"200px\" class=\"mx-3\">
        <div class=\"d-flex my-3 mx-auto\">
            <div class=\"mx-3 d-flex flex-column\">
                <span>Nom :</span>
                <span>Artiste :</span>
                <span>Label :</span>
                <span>Date de sortie :</span>
                <span>Style :</span>
                <span>En stock :</span>
                <span>Code barre :</span>
                <span>Enregistré le:</span>
                <span>Par :</span>

            </div>
            <div class=\"mx-3 d-flex flex-column\">
                <span class=\"text-right\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
                <span class=\"text-right\"><a href=\"/artists/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 24, $this->source); })()), "artist", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        echo " \">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 24, $this->source); })()), "artist", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</a></span>
                <span class=\"text-right\"><a href=\"/productions/";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 25, $this->source); })()), "production", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 25, $this->source); })()), "production", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></span>
                <span class=\"text-right\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 26, $this->source); })()), "published", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        echo "</span>
                <span class=\"text-right\"><a href=\"/styles/";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 27, $this->source); })()), "style", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 27, $this->source); })()), "style", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></span>
                <span class=\"text-right\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 28, $this->source); })()), "stock", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
                <span class=\"text-right\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 29, $this->source); })()), "barcode", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
                <span class=\"text-right\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 30, $this->source); })()), "registered", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
        echo "</span>
                <span class=\"text-right\"><a href=\"/user/";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 31, $this->source); })()), "curator", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 31, $this->source); })()), "curator", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "</a></span>

            </div>
        </div>
        ";
        // line 35
        if ((0 === twig_compare((isset($context["mine"]) || array_key_exists("mine", $context) ? $context["mine"] : (function () { throw new RuntimeError('Variable "mine" does not exist.', 35, $this->source); })()), true))) {
            // line 36
            echo "        <div class=\"d-flex flex-column\">
            <a href=\"/disks/set/";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"btn btn-info text-white my-2 ml-3\">Modifier</a>
            <button  class=\"btn btn-danger text-white my-2 ml-3\" onclick=\"deleteDisk(";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
            echo "); setTimeout(function(){ window.location.href='/disks'; }, 50);\">Supprimer</button>   
        </div>
    ";
        }
        // line 41
        echo "        
    </section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "disk_solo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 46,  172 => 41,  166 => 38,  162 => 37,  159 => 36,  157 => 35,  148 => 31,  144 => 30,  140 => 29,  136 => 28,  130 => 27,  126 => 26,  120 => 25,  114 => 24,  110 => 23,  92 => 8,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
 <div>
    <section class=\"d-flex flex-column flex-md-row\">
        <img src=\"{{ disk.img }}\" alt=\"cover\" height=\"200px\" class=\"mx-3\">
        <div class=\"d-flex my-3 mx-auto\">
            <div class=\"mx-3 d-flex flex-column\">
                <span>Nom :</span>
                <span>Artiste :</span>
                <span>Label :</span>
                <span>Date de sortie :</span>
                <span>Style :</span>
                <span>En stock :</span>
                <span>Code barre :</span>
                <span>Enregistré le:</span>
                <span>Par :</span>

            </div>
            <div class=\"mx-3 d-flex flex-column\">
                <span class=\"text-right\">{{ disk.name }}</span>
                <span class=\"text-right\"><a href=\"/artists/{{ disk.artist.id }} \">{{ disk.artist.name }}</a></span>
                <span class=\"text-right\"><a href=\"/productions/{{ disk.production.id }}\">{{ disk.production.name }}</a></span>
                <span class=\"text-right\">{{ disk.published|date('d-m-Y') }}</span>
                <span class=\"text-right\"><a href=\"/styles/{{ disk.style.id }}\">{{ disk.style.name }}</a></span>
                <span class=\"text-right\">{{ disk.stock }}</span>
                <span class=\"text-right\">{{ disk.barcode }}</span>
                <span class=\"text-right\">{{ disk.registered|date('d-m-Y') }}</span>
                <span class=\"text-right\"><a href=\"/user/{{disk.curator.id}}\">{{ disk.curator.username }}</a></span>

            </div>
        </div>
        {% if mine == true %}
        <div class=\"d-flex flex-column\">
            <a href=\"/disks/set/{{ disk.id }}\" class=\"btn btn-info text-white my-2 ml-3\">Modifier</a>
            <button  class=\"btn btn-danger text-white my-2 ml-3\" onclick=\"deleteDisk({{ disk.id }}); setTimeout(function(){ window.location.href='/disks'; }, 50);\">Supprimer</button>   
        </div>
    {% endif %}
        
    </section>
    
{% endblock %}

{% block custom_scripts %}{% endblock %}
", "disk_solo.html.twig", "/var/www/html/disk2/templates/disk_solo.html.twig");
    }
}
