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

/* production_solo.html.twig */
class __TwigTemplate_10cb91b680f64fe508959bf4395cc8e88abb2a331174f9dd87e6d566a6d5a477 extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "production_solo.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["production"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
    <a href=\"/productions/set/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["production"] ?? null), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "\" class=\"btn btn-info text-white ml-3\">Modifier</a>
    <button  class=\"btn btn-danger text-white ml-3\" onclick=\"deleteProduction(";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["production"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "); setTimeout(function(){ window.location.href='/productions'; }, 50);\">Supprimer</button>   
    <br>    
    <h3 class=\"ml-3\">Disques :</h3>
    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Artiste</th>
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
        $context['_seq'] = twig_ensure_traversable(($context["disks"] ?? null));
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
                <td class=\"align-middle text-center\"><a href=\"/artists/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
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
    }

    // line 40
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["script"] ?? null), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "production_solo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 40,  134 => 36,  125 => 33,  121 => 32,  115 => 31,  111 => 30,  105 => 29,  99 => 28,  95 => 27,  92 => 26,  88 => 25,  69 => 9,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "production_solo.html.twig", "/var/www/html/diskapp/templates/production_solo.html.twig");
    }
}
