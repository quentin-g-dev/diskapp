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
    <div class=\" d-flex justify-content-between align-items-baseline\">
        <div class=\"mr-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
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
        <div class=\"mr-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">E-mail</h2>
                <button class=\"disabled mx-3 btn btn-light px-1 py-0\">
                    <small>Modifier</small>
                </button>
            </span>
            <span>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        echo "</span>
        </div> 
        <div class=\"mr-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">Mot de passe</h2>
                <a class=\"mx-3 btn btn-light px-1 py-0\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\">
                    <small>Modifier</small>
                </a>
            </span>
            <span>***********</span>
        </div>
        <div class=\"mr-5 p-3 text-center\">
            <button class=\"btn btn-light\" onclick=\"if(confirm('Vous êtes sur le point de supprimer votre compte : cette action est irréversible. Confirmer ?')){window.location.href='";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "'};\">Supprimer mon compte</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"mr-5 p-3 col-10 text-center\">
            <h2 class=\"p-1 bg-mediumBlueGrey text-light mt-3\">Contributions</h2>
             <div class=\"d-flex justify-content-between\">
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Disques</h3>
                    <span class=\"list-group\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["disks"]) || array_key_exists("disks", $context) ? $context["disks"] : (function () { throw new RuntimeError('Variable "disks" does not exist.', 46, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 47
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/disks/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                                    <span class=\"font-weight-bold\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</span>
                                    - ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            echo " 
                                </a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </span>
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Artistes</h3>
                    <span class=\"list-group\">
                        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 60
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/artists/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 61), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 61), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </span>        
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Genres</h3>
                    <span class=\"list-group\">
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) || array_key_exists("styles", $context) ? $context["styles"] : (function () { throw new RuntimeError('Variable "styles" does not exist.', 69, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 70
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/styles/";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 71), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    </span>                
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Labels</h3>
                    <span class=\"list-group\">
                        ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productions"]) || array_key_exists("productions", $context) ? $context["productions"] : (function () { throw new RuntimeError('Variable "productions" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["production"]) {
            // line 80
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/productions/";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 81), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "name", [], "any", false, false, false, 81), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['production'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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

    // line 94
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_scripts"));

        // line 95
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
        return array (  270 => 95,  260 => 94,  242 => 84,  231 => 81,  228 => 80,  224 => 79,  217 => 74,  206 => 71,  203 => 70,  199 => 69,  192 => 64,  181 => 61,  178 => 60,  174 => 59,  167 => 54,  157 => 50,  153 => 49,  149 => 48,  146 => 47,  142 => 46,  129 => 36,  119 => 29,  111 => 24,  99 => 15,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
<div class=\" m-0 w-100\">
    <div class=\" d-flex justify-content-between align-items-baseline\">
        <div class=\"mr-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">Nom d'utilisateur</h2>
                <button class=\"mx-3 btn btn-light px-1 py-0\" onclick=\"setMyUsername()\">
                    <small>Modifier</small>
                </button>
            </span>
            <span id=\"my_username\">{{ user.username }}</span>
        </div>
        <div class=\"mr-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">E-mail</h2>
                <button class=\"disabled mx-3 btn btn-light px-1 py-0\">
                    <small>Modifier</small>
                </button>
            </span>
            <span>{{ user.email }}</span>
        </div> 
        <div class=\"mr-5 p-3 text-center\">
            <span class=\"d-flex justify-content-center align-items-baseline p-3 mb-2 bg-mediumBlueGrey text-light\">
                <h2 class=\"h6\">Mot de passe</h2>
                <a class=\"mx-3 btn btn-light px-1 py-0\" href=\"{{ path('app_forgot_password_request') }}\">
                    <small>Modifier</small>
                </a>
            </span>
            <span>***********</span>
        </div>
        <div class=\"mr-5 p-3 text-center\">
            <button class=\"btn btn-light\" onclick=\"if(confirm('Vous êtes sur le point de supprimer votre compte : cette action est irréversible. Confirmer ?')){window.location.href='{{ path('delete_user', {id: user.id}) }}'};\">Supprimer mon compte</a>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"mr-5 p-3 col-10 text-center\">
            <h2 class=\"p-1 bg-mediumBlueGrey text-light mt-3\">Contributions</h2>
             <div class=\"d-flex justify-content-between\">
                <div class=\"mr-5 w-100 p-3 text-center\">
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
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Artistes</h3>
                    <span class=\"list-group\">
                        {% for artist in artists %}
                            <span class=\"list-group-item\">           
                                <a href=\"/artists/{{ artist.id }}\">{{ artist.name }}</a> 
                            </span>
                        {% endfor %}
                    </span>        
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Genres</h3>
                    <span class=\"list-group\">
                        {% for style in styles %}
                            <span class=\"list-group-item\">           
                                <a href=\"/styles/{{ style.id }}\">{{ style.name }}</a> 
                            </span>
                        {% endfor %}
                    </span>                
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
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
{% endblock %}", "user/myself.html.twig", "/var/www/html/diskapp_1.0/templates/user/myself.html.twig");
    }
}
