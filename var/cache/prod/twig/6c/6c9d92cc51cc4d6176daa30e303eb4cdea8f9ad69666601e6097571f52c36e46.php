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

/* artists.html.twig */
class __TwigTemplate_c5e5ea2a4867bcaecf9129d7d5e05527dcd8a74b7ad2ae10eda4fe17427d440e extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "artists.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["artists"] ?? null)), "html", null, true);
        echo " artistes référencés</small>

    <section>
        <div class=\"p-3 d-flex justify-content-center\">
            <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedArtists();\" id=\"deleteSelected\">Supprimer la sélection</button>
            <a href=\"/artists/add\" class=\"m-2 btn btn-success text-white\">Ajouter un artiste</a>
        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"artistsTable\">
        <thead>
            <tr>
                <th scope=\"col\" class=\"align-bottom\">
                    <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                </th>
                <th class=\"align-middle\" scope=\"col\">Nom</th>
                <th class=\"align-middle\" scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artists"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 29
            echo "                <tr>
                    <td class=\"align-middle\"><input  type=\"checkbox\" name=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\" onclick=\"enableGroupDelete();\"></td>
                    <td class=\"align-middle\"><a href=\"/artists/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle text-center\">
                        <a href=\"/artists/set/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"btn btn-info text-white\">Modifier</a>
                        <button  class=\"btn btn-danger text-white\" onclick=\"if(confirm('Attention : confirmer ?')) {deleteArtist(";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo ")}\">Supprimer</button>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "                <tr>
                    <td colspan=\"2\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 47
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "<script src=\"assets/js/artists.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "artists.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  135 => 47,  128 => 42,  119 => 38,  110 => 34,  106 => 33,  99 => 31,  93 => 30,  90 => 29,  85 => 28,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "artists.html.twig", "/var/www/html/diskapp/templates/artists.html.twig");
    }
}
