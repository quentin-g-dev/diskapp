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

/* user/myself.html.twig */
class __TwigTemplate_a9c46bb9ef7595b6d2286cb3c778ebf15d4bba0feadd485ef28fa4e2240816a1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/myself.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/myself.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "user/myself.html.twig", 1);
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
        echo "<div class=\" m-0 w-100\">
    <div class=\" d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-between align-items-md-baseline\">
        <div class=\"mr-md-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light w-100 w-md-auto\">
                <h2 class=\"h6\">Nom d'utilisateur</h2>
                <button class=\"mx-3 btn btn-light px-1 py-0\" onclick=\"setMyUsername()\">
                    <small>Modifier</small>
                </button>
            </span>
            <span id=\"my_username\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
        echo "</span>
        </div>
        <hr class=\"w-100 d-md-none m-0\">

        <div class=\"mr-md-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">E-mail</h2>
                <button class=\"disabled mx-3 btn btn-light px-1 py-0\">
                    <small>Modifier</small>
                </button>
            </span>
            <span>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        echo "</span>
        </div> 
        <hr class=\"w-100 d-md-none m-0\">

        <div class=\"mr-md-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">Mot de passe</h2>
                <a class=\"mx-3 btn btn-light px-1 py-0\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">
                    <small>Modifier</small>
                </a>
            </span>
            <span>***********</span>
        </div>
        <hr class=\"w-100 d-md-none m-0\">

        <div class=\"mr-md-5 p-3 text-center\">
            <button class=\"btn btn-light\" onclick=\"if(confirm('Vous êtes sur le point de supprimer votre compte : cette action est irréversible. Confirmer ?')){window.location.href='";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "'};\">Supprimer mon compte</a>
        </div>

    </div>
    <div class=\"md-row\">
        <div class=\"mr-md-5 p-3 col-md-10 text-center\">
            <h2 class=\"p-1 bg-mediumBlueGrey text-light mt-3\">Contributions</h2>
             <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Disques</h3>
                    <span class=\"list-group\">
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disks"]) || array_key_exists("disks", $context) ? $context["disks"] : (function () { throw new RuntimeError('Variable "disks" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 54
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/disks/";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 55), "html", null, true);
            echo "\">
                                    <span class=\"font-weight-bold\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "</span>
                                    - ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 57), "name", [], "any", false, false, false, 57), "html", null, true);
            echo " 
                                </a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    </span>
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Artistes</h3>
                    <span class=\"list-group\">
                        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 67
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/artists/";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 68), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                    </span>        
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Genres</h3>
                    <span class=\"list-group\">
                        ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 77
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/styles/";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 78), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 78), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                    </span>                
                </div>
                <div class=\"mr-md-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Labels</h3>
                    <span class=\"list-group\">
                        ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productions"]) || array_key_exists("productions", $context) ? $context["productions"] : (function () { throw new RuntimeError('Variable "productions" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["production"]) {
            // line 87
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/productions/";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['production'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
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

    // line 101
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        // line 102
        echo "    <script src=\"/assets/js/myself.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/myself.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 102,  267 => 101,  249 => 91,  238 => 88,  235 => 87,  231 => 86,  224 => 81,  213 => 78,  210 => 77,  206 => 76,  199 => 71,  188 => 68,  185 => 67,  181 => 66,  174 => 61,  164 => 57,  160 => 56,  156 => 55,  153 => 54,  149 => 53,  135 => 42,  123 => 33,  113 => 26,  99 => 15,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
<div class=\" m-0 w-100\">
    <div class=\" d-flex flex-column flex-md-row justify-content-center align-items-center justify-content-md-between align-items-md-baseline\">
        <div class=\"mr-md-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light w-100 w-md-auto\">
                <h2 class=\"h6\">Nom d'utilisateur</h2>
                <button class=\"mx-3 btn btn-light px-1 py-0\" onclick=\"setMyUsername()\">
                    <small>Modifier</small>
                </button>
            </span>
            <span id=\"my_username\">{{ user.username }}</span>
        </div>
        <hr class=\"w-100 d-md-none m-0\">

        <div class=\"mr-md-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">E-mail</h2>
                <button class=\"disabled mx-3 btn btn-light px-1 py-0\">
                    <small>Modifier</small>
                </button>
            </span>
            <span>{{ user.email }}</span>
        </div> 
        <hr class=\"w-100 d-md-none m-0\">

        <div class=\"mr-md-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">Mot de passe</h2>
                <a class=\"mx-3 btn btn-light px-1 py-0\" href=\"{{ path('app_forgot_password_request') }}\">
                    <small>Modifier</small>
                </a>
            </span>
            <span>***********</span>
        </div>
        <hr class=\"w-100 d-md-none m-0\">

        <div class=\"mr-md-5 p-3 text-center\">
            <button class=\"btn btn-light\" onclick=\"if(confirm('Vous êtes sur le point de supprimer votre compte : cette action est irréversible. Confirmer ?')){window.location.href='{{ path('delete_user', {id: user.id}) }}'};\">Supprimer mon compte</a>
        </div>

    </div>
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
    <script src=\"/assets/js/myself.js\"></script>
{% endblock %}", "user/myself.html.twig", "/var/www/html/disk2/templates/user/myself.html.twig");
    }
}
