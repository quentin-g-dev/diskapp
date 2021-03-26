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
    <h2 class=\"ml-3\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
    <h3 class=\"ml-3\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "artist", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h3>
    <section class=\"d-flex\">
        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "img", [], "any", false, false, false, 10), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        echo "</span>
            <span class=\"text-right\"><a href=\"/artists/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "artist", [], "any", false, false, false, 24), "id", [], "any", false, false, false, 24), "html", null, true);
        echo " \">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "artist", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</a></span>
            <span class=\"text-right\"><a href=\"/productions/";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "production", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "production", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</a></span>
            <span class=\"text-right\">";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "published", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true);
        echo "</span>
            <span class=\"text-right\"><a href=\"/styles/";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "style", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "style", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</a></span>
            <span class=\"text-right\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "stock", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
            <span class=\"text-right\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "barcode", [], "any", false, false, false, 29), "html", null, true);
        echo "</span>
            <span class=\"text-right\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["disk"] ?? null), "registered", [], "any", false, false, false, 30), "d-m-Y"), "html", null, true);
        echo "</span>

        </div>
        
    </section>
    
";
    }

    // line 38
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
        return array (  131 => 38,  120 => 30,  116 => 29,  112 => 28,  106 => 27,  102 => 26,  96 => 25,  90 => 24,  86 => 23,  70 => 10,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "disk_solo.html.twig", "/var/www/html/diskapp/templates/disk_solo.html.twig");
    }
}
