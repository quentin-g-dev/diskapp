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

/* style_solo.html.twig */
class __TwigTemplate_4c55b08ae6173b7d418ebc0f69ae6fd1ed9a0bdea3b69eedb71b0f7564a648b2 extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "style_solo.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["style"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
    <small class=\"ml-3 mb-5\">
    Ajouté par
        <a href=\"/user/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["style"] ?? null), "curator", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["style"] ?? null), "curator", [], "any", false, false, false, 10), "username", [], "any", false, false, false, 10), "html", null, true);
        echo "</a>
    </small>
    ";
        // line 12
        if ((0 === twig_compare(($context["mine"] ?? null), true))) {
            // line 13
            echo "        <a href=\"/styles/set/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["style"] ?? null), "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"btn btn-info text-white ml-3\">Modifier</a>
        <button  class=\"btn btn-danger text-white ml-3\" onclick=\"deleteStyle(";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["style"] ?? null), "id", [], "any", false, false, false, 14), "html", null, true);
            echo "); setTimeout(function(){ window.location.href='/styles'; }, 50);\">Supprimer</button>   
    ";
        }
        // line 16
        echo "    <br>
    <h3 class=\"ml-3\">Disques :</h3>
    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Artiste</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
            </tr>
        </thead>
        <tbody>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["disks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 32
            echo "            <tr>
                <td class=\"align-middle text-center\"><img src=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "img", [], "any", false, false, false, 33), "html", null, true);
            echo "\" alt=\"Cover\" height=\"75px\"></td>
                <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</a></td>
                <td class=\"align-middle text-center\"><a href=\"/artists/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</a></td>
                <td class=\"align-middle text-center\"><a href=\"/productions/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</a></td>
                <td class=\"align-middle text-center\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "published", [], "any", false, false, false, 37), "d-m-Y"), "html", null, true);
            echo "</td>
                <td class=\"align-middle text-center\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "stock", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td class=\"align-middle text-center\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "barcode", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
";
    }

    // line 46
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "<script src=\"";
        echo twig_escape_filter($this->env, ($context["script"] ?? null), "html", null, true);
        echo "\"></script>";
    }

    public function getTemplateName()
    {
        return "style_solo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 46,  149 => 42,  140 => 39,  136 => 38,  132 => 37,  126 => 36,  120 => 35,  114 => 34,  110 => 33,  107 => 32,  103 => 31,  86 => 16,  81 => 14,  76 => 13,  74 => 12,  67 => 10,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "style_solo.html.twig", "/var/www/html/disk2/templates/style_solo.html.twig");
    }
}
