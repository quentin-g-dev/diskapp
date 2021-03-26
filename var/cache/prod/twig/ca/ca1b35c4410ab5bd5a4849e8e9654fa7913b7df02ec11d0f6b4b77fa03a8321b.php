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

/* home.html.twig */
class __TwigTemplate_e7052075c9ce2ba547fd50deb577411d91a9d64f8b8967c28b97cf1fc1e21f65 extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "home.html.twig", 1);
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
        echo "    <div>
        <section class=\"d-flex\">
            <div class=\"p-2\">
                <h2 class=\"ml-1\">Registre</h2>
                <table class=\"table table-striped table-hover mt-4 table-responsive w-100\" id=\"sumUpTable\">
                    <tbody>
                        <tr>
                            <td colspan =\"2\" class=\"align-middle\">
                                <a href=\"/disks\">";
        // line 14
        echo twig_escape_filter($this->env, ($context["total_disks"] ?? null), "html", null, true);
        echo " disques</a> - <a href=\"/artists/\">";
        echo twig_escape_filter($this->env, ($context["total_artists"] ?? null), "html", null, true);
        echo " artistes</a> - <a href=\"/productions/\">";
        echo twig_escape_filter($this->env, ($context["total_productions"] ?? null), "html", null, true);
        echo " labels</a> - <a href=\"/styles/\">";
        echo twig_escape_filter($this->env, ($context["total_styles"] ?? null), "html", null, true);
        echo " genres</a>
                            </td>                                
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Artiste le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/styles/";
        // line 20
        echo twig_escape_filter($this->env, ($context["most_referenced_artist_id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["most_referenced_artist_name"] ?? null), "html", null, true);
        echo "</a> ( ";
        echo twig_escape_filter($this->env, ($context["most_referenced_artist_total"] ?? null), "html", null, true);
        echo " références)
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Label le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/productions/";
        // line 26
        echo twig_escape_filter($this->env, ($context["most_referenced_production_id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["most_referenced_production_name"] ?? null), "html", null, true);
        echo "</a> ( ";
        echo twig_escape_filter($this->env, ($context["most_referenced_production_total"] ?? null), "html", null, true);
        echo " références)
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Genre le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/styles/";
        // line 32
        echo twig_escape_filter($this->env, ($context["most_referenced_style_id"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["most_referenced_style_name"] ?? null), "html", null, true);
        echo "</a> ( ";
        echo twig_escape_filter($this->env, ($context["most_referenced_style_total"] ?? null), "html", null, true);
        echo " références)
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"p-2\">
                <h2 class=\"ml-1\">Stock</h2>
                <table class=\"table table-striped table-hover mt-4 w-100\">
                    <tbody>
                        <tr>
                            <td class=\"align-middle\">Total</td>
                            <td class=\"align-middle\">
                                ";
        // line 45
        echo twig_escape_filter($this->env, ($context["stock"] ?? null), "html", null, true);
        echo " disques en stock
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\">";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["out_stock"] ?? null)), "html", null, true);
        echo " disques en rupture de stock</td>
                            <td class=\"align-middle\">
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["out_stock"] ?? null));
        foreach ($context['_seq'] as $context["diskId"] => $context["diskName"]) {
            // line 52
            echo "                                    <a href=\"/disks/";
            echo twig_escape_filter($this->env, $context["diskId"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["diskName"], "html", null, true);
            echo "</a> |&nbsp;
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['diskId'], $context['diskName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
      
    </div>
";
    }

    // line 64
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 64,  156 => 54,  145 => 52,  141 => 51,  136 => 49,  129 => 45,  109 => 32,  96 => 26,  83 => 20,  68 => 14,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/var/www/html/diskapp/templates/home.html.twig");
    }
}
