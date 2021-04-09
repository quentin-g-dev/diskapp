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
class __TwigTemplate_1f615ee284159f9712e6926b6d3b1cde20d982c2316e9d14395aee7b30b47acb extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "disk_solo.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_custom_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo " <div>
    <section class=\"d-flex\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "img", [], "any", false, false, false, 8), "html", null, true);
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
            <span>Par :</span>

        </div>
        <div class=\"mx-3 d-flex flex-column\">
            <span class=\"text-right\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</span>
            <span class=\"text-right\"><a href=\"/artists/";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "artist", [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
        echo " \">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "artist", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</a></span>
            <span class=\"text-right\"><a href=\"/productions/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "production", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "production", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</a></span>
            <span class=\"text-right\">";
        // line 25
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "published", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true);
        echo "</span>
            <span class=\"text-right\"><a href=\"/styles/";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "style", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "style", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
        echo "</a></span>
            <span class=\"text-right\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "stock", [], "any", false, false, false, 27), "html", null, true);
        echo "</span>
            <span class=\"text-right\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "barcode", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
            <span class=\"text-right\">";
        // line 29
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "registered", [], "any", false, false, false, 29), "d-m-Y"), "html", null, true);
        echo "</span>
            <span class=\"text-right\"><a href=\"/user/";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "curator", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "curator", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
        echo "</a></span>

        </div>
        ";
        // line 33
        if ((0 === twig_compare(($context["mine"] ?? null), true))) {
            // line 34
            echo "        <div class=\"d-flex flex-column\">
            <a href=\"/disks/set/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\" class=\"btn btn-info text-white my-2 ml-3\">Modifier</a>
            <button  class=\"btn btn-danger text-white my-2 ml-3\" onclick=\"deleteDisk(";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "); setTimeout(function(){ window.location.href='/disks'; }, 50);\">Supprimer</button>   
        </div>
    ";
        }
        // line 39
        echo "        
    </section>
    
";
    }

    // line 44
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  147 => 44,  140 => 39,  134 => 36,  130 => 35,  127 => 34,  125 => 33,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  99 => 26,  95 => 25,  89 => 24,  83 => 23,  79 => 22,  62 => 8,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "disk_solo.html.twig", "/var/www/html/disk2/templates/disk_solo.html.twig");
    }
}
