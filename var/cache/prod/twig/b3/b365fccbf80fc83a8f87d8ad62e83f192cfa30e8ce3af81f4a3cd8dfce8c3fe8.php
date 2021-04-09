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
class __TwigTemplate_d092fed989fa0fbdfed604c759dc588aecc5fecbb058b171366b5d70b906451f extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "user/myself.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 15), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 24), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_user", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 36)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["disks"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["artists"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["productions"] ?? null));
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
    }

    // line 94
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "    <script src=\"/assets/js/myself.js\"></script>
";
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
        return array (  228 => 95,  224 => 94,  212 => 84,  201 => 81,  198 => 80,  194 => 79,  187 => 74,  176 => 71,  173 => 70,  169 => 69,  162 => 64,  151 => 61,  148 => 60,  144 => 59,  137 => 54,  127 => 50,  123 => 49,  119 => 48,  116 => 47,  112 => 46,  99 => 36,  89 => 29,  81 => 24,  69 => 15,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/myself.html.twig", "/var/www/html/disk2/templates/user/myself.html.twig");
    }
}
