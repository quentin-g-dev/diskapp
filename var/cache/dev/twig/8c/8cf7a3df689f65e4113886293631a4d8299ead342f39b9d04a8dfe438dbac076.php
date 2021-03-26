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
    <h2 class=\"ml-3\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
    <h3 class=\"ml-3\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 8, $this->source); })()), "artist", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
    <section class=\"d-flex\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["disk"]) || array_key_exists("disk", $context) ? $context["disk"] : (function () { throw new RuntimeError('Variable "disk" does not exist.', 10, $this->source); })()), "img", [], "any", false, false, false, 10), "html", null, true);
        echo "\" alt=\"cover\" height=\"200px\" class=\"mx-3\">
        <div class=\"mx-3 d-flex flex-column\">
            <span>Nom :</span>
            <span>Artiste :</span>
            <span>Label :</span>
            <span>Date de sortie :</span>
            <span>Style :</span>
            <span>En stock :</span>
            <span>Code barre :</span>
            <span>Enregistré le:</span>

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

        </div>
        
    </section>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
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
        return array (  167 => 38,  150 => 30,  146 => 29,  142 => 28,  136 => 27,  132 => 26,  126 => 25,  120 => 24,  116 => 23,  100 => 10,  95 => 8,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
 <div>
    <h2 class=\"ml-3\">{{ disk.name }}</h2>
    <h3 class=\"ml-3\">{{ disk.artist.name }}</h3>
    <section class=\"d-flex\">
        <img src=\"{{ disk.img }}\" alt=\"cover\" height=\"200px\" class=\"mx-3\">
        <div class=\"mx-3 d-flex flex-column\">
            <span>Nom :</span>
            <span>Artiste :</span>
            <span>Label :</span>
            <span>Date de sortie :</span>
            <span>Style :</span>
            <span>En stock :</span>
            <span>Code barre :</span>
            <span>Enregistré le:</span>

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

        </div>
        
    </section>
    
{% endblock %}

{% block custom_scripts %}{% endblock %}
", "disk_solo.html.twig", "/var/www/html/diskapp/templates/disk_solo.html.twig");
    }
}
