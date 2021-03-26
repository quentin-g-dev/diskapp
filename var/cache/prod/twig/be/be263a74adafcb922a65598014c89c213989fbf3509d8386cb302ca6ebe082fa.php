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

    <section>
        <div class=\"p-3 d-flex justify-content-center\">
            <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedDisks();\" id=\"deleteSelected\">Supprimer la sélection</button>
            <a href=\"/disks/add\" class=\"m-2 btn btn-success text-white\">Ajouter un disque</a>
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"disksTable\">
        <thead>
            <tr>
                <th scope=\"col\" class=\"align-bottom text-center\">
                    <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                </th>
                <th class=\"align-middle text-center\" scope=\"col\">Cover</th>
                <th class=\"align-middle text-center\" scope=\"col\">Nom</th>
                <th class=\"align-middle text-center\" scope=\"col\">Artiste(s)</th>
                <th class=\"align-middle text-center\" scope=\"col\">Label</th>
                <th class=\"align-middle text-center\" scope=\"col\">Sorti le</th>
                <th class=\"align-middle text-center\" scope=\"col\">Style</th>
                <th class=\"align-middle text-center\" scope=\"col\">Stock</th>
                <th class=\"align-middle text-center\" scope=\"col\">Code barre</th>
                <th class=\"align-middle text-center\" scope=\"col\">Enregistré le</th>
                <th class=\"align-middle text-center\" scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["disks"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 37
            echo "                <tr>
                    <td class=\"align-middle text-center\">
                        <input  type=\"checkbox\" name=\"";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\" onclick=\"enableGroupDelete();\">
                    </td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "img", [], "any", false, false, false, 41), "html", null, true);
            echo "\" alt=\"\" height=\"75px\"></a></td>
                    <td class=\"align-middle text-center\"><a href=\"/disks/";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/artists/";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\"><a href=\"/productions/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "production", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "published", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\"><a href=\"/styles/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "style", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "stock", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "barcode", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>           
                    <td class=\"align-middle text-center\">";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "registered", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td class=\"align-middle text-center\">
                        <a href=\"/disks/set/";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\" class=\"btn btn-info text-white\">Modifier</a>
                        <a href=\"\" class=\"btn btn-danger text-white\" onclick=\"if(confirm('Suppression imminente : confirmer ?')) {(deleteDisk(";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 52), "html", null, true);
            echo "));\">Supprimer</a>
                    </td>

                                            

                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                <tr>
                    <td colspan=\"10\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 68
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
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
        return array (  192 => 69,  188 => 68,  181 => 63,  172 => 59,  160 => 52,  156 => 51,  151 => 49,  147 => 48,  143 => 47,  137 => 46,  133 => 45,  127 => 44,  121 => 43,  115 => 42,  109 => 41,  102 => 39,  98 => 37,  93 => 36,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "disks.html.twig", "/var/www/html/diskapp/templates/disks.html.twig");
    }
}
