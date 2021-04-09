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
class __TwigTemplate_b97f2f92bb621b331b0143937b25aa6039396f86e4469075894fa3ed999b8b76 extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "disks.html.twig", 1);
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
    <small>";
        // line 7
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["disks"] ?? null)), "html", null, true);
        echo " disques référencés</small>
    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        <section>
            <div class=\"p-3 d-flex justify-content-center\">
                <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedDisks();\" id=\"deleteSelected\">Supprimer la sélection</button>
            </div>
        </section>
    ";
        }
        // line 15
        echo "     ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 16
            echo "        <section>
            <div class=\"d-flex\">
                <a href=\"/disks/add\" class=\"my-2 btn btn-success text-white\">Ajouter un disque</a>
            </div>
        </section>
    ";
        }
        // line 22
        echo "    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 26
            echo "                    <th scope=\"col\" class=\"align-bottom text-center\">
                        <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                    </th>
                ";
        }
        // line 30
        echo "                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Artiste(s)</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Style</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
                <th class=\"align-middle text-center\" scope=\"col\">Enregistré le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Par</th>
                ";
        // line 41
        echo "            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["disks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 46
            echo "                <tr>
                    ";
            // line 47
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 48
                echo "                        <td class=\"align-middle text-center\">
                            <input  type=\"checkbox\" name=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" onclick=\"enableGroupDelete();\">
                        </td>
                    ";
            }
            // line 52
            echo "                    <td class=\"align-middle text-center\"><a href=\"/disks/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "img", [], "any", false, false, false, 52), "html", null, true);
            echo "\" alt=\"\" height=\"75px\"></a></td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/artists/";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/productions/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "published", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\"><a href=\"/styles/";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "stock", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "barcode", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>           
                    <td class=\"align-middle text-center\">";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "registered", [], "any", false, false, false, 60), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\"><a href=\"/user/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "curator", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "curator", [], "any", false, false, false, 61), "username", [], "any", false, false, false, 61), "html", null, true);
            echo "</a></td>
                    ";
            // line 66
            echo "
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "                <tr>
                    <td colspan=\"10\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 78
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 79
        echo "<script src=\"assets/js/disks.js\"></script>
";
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
        return array (  218 => 79,  214 => 78,  207 => 73,  198 => 69,  191 => 66,  185 => 61,  181 => 60,  177 => 59,  173 => 58,  167 => 57,  163 => 56,  157 => 55,  151 => 54,  145 => 53,  138 => 52,  130 => 49,  127 => 48,  125 => 47,  122 => 46,  117 => 45,  111 => 41,  99 => 30,  93 => 26,  91 => 25,  86 => 22,  78 => 16,  75 => 15,  67 => 9,  65 => 8,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "disks.html.twig", "/var/www/html/disk2/templates/disks.html.twig");
    }
}
