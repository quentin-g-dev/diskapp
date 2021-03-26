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
class __TwigTemplate_4e77e0f96ef259ff04d6a2601d6fe978c9ba8ac310e595f3ecc6b2f0d2e7b3a2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "home.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["total_disks"]) || array_key_exists("total_disks", $context) ? $context["total_disks"] : (function () { throw new RuntimeError('Variable "total_disks" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " disques</a> - <a href=\"/artists/\">";
        echo twig_escape_filter($this->env, (isset($context["total_artists"]) || array_key_exists("total_artists", $context) ? $context["total_artists"] : (function () { throw new RuntimeError('Variable "total_artists" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " artistes</a> - <a href=\"/productions/\">";
        echo twig_escape_filter($this->env, (isset($context["total_productions"]) || array_key_exists("total_productions", $context) ? $context["total_productions"] : (function () { throw new RuntimeError('Variable "total_productions" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " labels</a> - <a href=\"/styles/\">";
        echo twig_escape_filter($this->env, (isset($context["total_styles"]) || array_key_exists("total_styles", $context) ? $context["total_styles"] : (function () { throw new RuntimeError('Variable "total_styles" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " genres</a>
                            </td>                                
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Artiste le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/styles/";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["most_referenced_artist_id"]) || array_key_exists("most_referenced_artist_id", $context) ? $context["most_referenced_artist_id"] : (function () { throw new RuntimeError('Variable "most_referenced_artist_id" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["most_referenced_artist_name"]) || array_key_exists("most_referenced_artist_name", $context) ? $context["most_referenced_artist_name"] : (function () { throw new RuntimeError('Variable "most_referenced_artist_name" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</a> ( ";
        echo twig_escape_filter($this->env, (isset($context["most_referenced_artist_total"]) || array_key_exists("most_referenced_artist_total", $context) ? $context["most_referenced_artist_total"] : (function () { throw new RuntimeError('Variable "most_referenced_artist_total" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " références)
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Label le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/productions/";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["most_referenced_production_id"]) || array_key_exists("most_referenced_production_id", $context) ? $context["most_referenced_production_id"] : (function () { throw new RuntimeError('Variable "most_referenced_production_id" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["most_referenced_production_name"]) || array_key_exists("most_referenced_production_name", $context) ? $context["most_referenced_production_name"] : (function () { throw new RuntimeError('Variable "most_referenced_production_name" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</a> ( ";
        echo twig_escape_filter($this->env, (isset($context["most_referenced_production_total"]) || array_key_exists("most_referenced_production_total", $context) ? $context["most_referenced_production_total"] : (function () { throw new RuntimeError('Variable "most_referenced_production_total" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " références)
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Genre le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/styles/";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["most_referenced_style_id"]) || array_key_exists("most_referenced_style_id", $context) ? $context["most_referenced_style_id"] : (function () { throw new RuntimeError('Variable "most_referenced_style_id" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["most_referenced_style_name"]) || array_key_exists("most_referenced_style_name", $context) ? $context["most_referenced_style_name"] : (function () { throw new RuntimeError('Variable "most_referenced_style_name" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</a> ( ";
        echo twig_escape_filter($this->env, (isset($context["most_referenced_style_total"]) || array_key_exists("most_referenced_style_total", $context) ? $context["most_referenced_style_total"] : (function () { throw new RuntimeError('Variable "most_referenced_style_total" does not exist.', 32, $this->source); })()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["stock"]) || array_key_exists("stock", $context) ? $context["stock"] : (function () { throw new RuntimeError('Variable "stock" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " disques en stock
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\">";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["out_stock"]) || array_key_exists("out_stock", $context) ? $context["out_stock"] : (function () { throw new RuntimeError('Variable "out_stock" does not exist.', 49, $this->source); })())), "html", null, true);
        echo " disques en rupture de stock</td>
                            <td class=\"align-middle\">
                                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["out_stock"]) || array_key_exists("out_stock", $context) ? $context["out_stock"] : (function () { throw new RuntimeError('Variable "out_stock" does not exist.', 51, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
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
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 64,  186 => 54,  175 => 52,  171 => 51,  166 => 49,  159 => 45,  139 => 32,  126 => 26,  113 => 20,  98 => 14,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
    <div>
        <section class=\"d-flex\">
            <div class=\"p-2\">
                <h2 class=\"ml-1\">Registre</h2>
                <table class=\"table table-striped table-hover mt-4 table-responsive w-100\" id=\"sumUpTable\">
                    <tbody>
                        <tr>
                            <td colspan =\"2\" class=\"align-middle\">
                                <a href=\"/disks\">{{ total_disks }} disques</a> - <a href=\"/artists/\">{{ total_artists }} artistes</a> - <a href=\"/productions/\">{{ total_productions }} labels</a> - <a href=\"/styles/\">{{ total_styles }} genres</a>
                            </td>                                
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Artiste le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/styles/{{ most_referenced_artist_id }}\">{{ most_referenced_artist_name }}</a> ( {{ most_referenced_artist_total }} références)
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Label le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/productions/{{ most_referenced_production_id }}\">{{ most_referenced_production_name }}</a> ( {{ most_referenced_production_total }} références)
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\"><u>Genre le plus référencé</u></td>
                            <td class=\"align-middle\">
                                <a href=\"/styles/{{ most_referenced_style_id }}\">{{ most_referenced_style_name }}</a> ( {{ most_referenced_style_total }} références)
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
                                {{ stock }} disques en stock
                            </td>
                        </tr>
                        <tr>
                            <td class=\"align-middle\">{{ out_stock|length }} disques en rupture de stock</td>
                            <td class=\"align-middle\">
                                {% for diskId, diskName in out_stock %}
                                    <a href=\"/disks/{{ diskId }}\">{{ diskName }}</a> |&nbsp;
                                {% endfor %}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
      
    </div>
{% endblock %}

{% block custom_scripts %}{% endblock %}
", "home.html.twig", "/var/www/html/diskapp/templates/home.html.twig");
    }
}
