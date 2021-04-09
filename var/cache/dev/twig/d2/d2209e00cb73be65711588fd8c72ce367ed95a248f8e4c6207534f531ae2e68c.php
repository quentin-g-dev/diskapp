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

/* user/user.html.twig */
class __TwigTemplate_bf6c6581c55d798135d858dbf2c904a3c7ee6b52611df2daa5ab2f7e3251d9ee extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "user/user.html.twig", 1);
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
        echo "<div class=\"container m-0 w-100\">
   <div class=\"md-row\">
        <div class=\"mr-md-5 p-3 col-md-10 text-center\">
            <h2 class=\"p-1 bg-mediumBlueGrey text-light mt-3\">Contributions</h2>
             <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Disques</h3>
                    <span class=\"list-group\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disks"]) || array_key_exists("disks", $context) ? $context["disks"] : (function () { throw new RuntimeError('Variable "disks" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 15
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/disks/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                                    <span class=\"font-weight-bold\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
                                    - ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo " 
                                </a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </span>
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Artistes</h3>
                    <span class=\"list-group\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 28
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/artists/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </span>        
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Genres</h3>
                    <span class=\"list-group\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/styles/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </span>                
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Labels</h3>
                    <span class=\"list-group\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productions"]) || array_key_exists("productions", $context) ? $context["productions"] : (function () { throw new RuntimeError('Variable "productions" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["production"]) {
            // line 48
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/productions/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['production'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </span>        
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
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
        return "user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 60,  198 => 52,  187 => 49,  184 => 48,  180 => 47,  173 => 42,  162 => 39,  159 => 38,  155 => 37,  148 => 32,  137 => 29,  134 => 28,  130 => 27,  123 => 22,  113 => 18,  109 => 17,  105 => 16,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
<div class=\"container m-0 w-100\">
   <div class=\"md-row\">
        <div class=\"mr-md-5 p-3 col-md-10 text-center\">
            <h2 class=\"p-1 bg-mediumBlueGrey text-light mt-3\">Contributions</h2>
             <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Disques</h3>
                    <span class=\"list-group\">
                        {% for disk in disks %}
                            <span class=\"list-group-item\">           
                                <a href=\"/disks/{{ disk.id }}\">
                                    <span class=\"font-weight-bold\">{{ disk.name }}</span>
                                    - {{ disk.artist.name }} 
                                </a> 
                            </span>
                        {% endfor %}
                    </span>
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Artistes</h3>
                    <span class=\"list-group\">
                        {% for artist in artists %}
                            <span class=\"list-group-item\">           
                                <a href=\"/artists/{{ artist.id }}\">{{ artist.name }}</a> 
                            </span>
                        {% endfor %}
                    </span>        
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Genres</h3>
                    <span class=\"list-group\">
                        {% for style in styles %}
                            <span class=\"list-group-item\">           
                                <a href=\"/styles/{{ style.id }}\">{{ style.name }}</a> 
                            </span>
                        {% endfor %}
                    </span>                
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Labels</h3>
                    <span class=\"list-group\">
                        {% for production in productions %}
                            <span class=\"list-group-item\">           
                                <a href=\"/productions/{{ production.id }}\">{{ production.name }}</a> 
                            </span>
                        {% endfor %}
                    </span>        
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block custom_scripts %}
{% endblock %}", "user/user.html.twig", "/var/www/html/disk2/templates/user/user.html.twig");
    }
}
