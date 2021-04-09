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
        <div class=\"d-flex\">
            ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "                <button class=\"m-2 btn btn-danger text-white disabled\" onclick=\"deleteSelectedArtists();\" id=\"deleteSelected\">Supprimer la sélection</button>
            ";
        }
        // line 14
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "                <a href=\"/artists/add\" class=\"my-2 btn btn-success text-white\">Ajouter un artiste</a>
            ";
        }
        // line 17
        echo "        </div>
    </section>

    <table class=\"table table-striped table-hover  w-100\" id=\"artistsTable\">
        <thead>
            <tr>
                ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                    <th scope=\"col\" class=\"align-bottom\">
                        <input  type=\"checkbox\" name=\"selectAll\" id=\"selectAll\" onclick=\"toggleGroupSelect(this.checked);enableGroupDelete();\">
                    </th>
                ";
        }
        // line 28
        echo "                <th class=\"align-middle\" scope=\"col\">Nom</th>
                <th class=\"align-middle\" scope=\"col\">Ajouté par</th>
                ";
        // line 31
        echo "            </tr>
        </thead>
        <tbody>
            <!--Items-->
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artists"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 36
            echo "                <tr>
                    ";
            // line 37
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 38
                echo "                        <td class=\"align-middle\"><input  type=\"checkbox\" name=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\" onclick=\"enableGroupDelete();\"></td>
                    ";
            }
            // line 40
            echo "                    <td class=\"align-middle\"><a href=\"/artists/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</a></td>
                    <td class=\"align-middle\"><a href=\"/user/";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["artist"], "curator", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["artist"], "curator", [], "any", false, false, false, 41), "username", [], "any", false, false, false, 41), "html", null, true);
            echo "</a></td>

                    ";
            // line 47
            echo "                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "                <tr>
                    <td colspan=\"2\"><i>Nothing to show...</i></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
</div>
";
    }

    // line 58
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 59
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
        return array (  165 => 59,  161 => 58,  154 => 53,  145 => 49,  139 => 47,  132 => 41,  125 => 40,  117 => 38,  115 => 37,  112 => 36,  107 => 35,  101 => 31,  97 => 28,  91 => 24,  89 => 23,  81 => 17,  77 => 15,  74 => 14,  70 => 12,  68 => 11,  61 => 7,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "artists.html.twig", "/var/www/html/disk2/templates/artists.html.twig");
    }
}
