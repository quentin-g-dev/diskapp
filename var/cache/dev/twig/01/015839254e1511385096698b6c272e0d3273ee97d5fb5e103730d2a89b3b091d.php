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

/* diskapp.html.twig */
class __TwigTemplate_31230094ff43091a1fe27ad0984e3934ee03f0aa35f67fc9ecdde7782df2e56a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'custom_styles' => [$this, 'block_custom_styles'],
            'main' => [$this, 'block_main'],
            'custom_scripts' => [$this, 'block_custom_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diskapp.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "diskapp.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"/assets/css/global.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    ";
        // line 11
        $this->displayBlock('custom_styles', $context, $blocks);
        // line 12
        echo "
</head>

<body class=\"d-flex\">
    

    <div class=\"w-25 d-flex flex-column m-0\">
        <a href=\"/\" class=\"h1 p-3 mb-3 d-flex justify-content-center align-items-center bg-mediumBlueGrey text-lightGrey\">DISKAPP</a>
        <aside class=\"bg-mediumBlueGrey m-0 p-3 d-flex flex-column justify-content-between\">
            <nav class=\"mt-2 d-flex flex-column align-items-center h-100\">
                <a class=\"mb-4 text-lightGrey\" href=\"/\">Accueil</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/disks\">Disques</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/artists\">Artistes</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/productions\">Labels</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/styles\">Genres</a>
                <a href=\"/disks/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un disque</a>
                <a href=\"/artists/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un artiste</a>
                <a href=\"/productions/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un label</a>
                <a href=\"/styles/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un genre</a>
                ";
        // line 32
        echo "            </nav>
            <a href=\"/conditions\" class=\"text-lightGrey mb-5 mx-auto\"><small>Conditions d'utilisation</small></a>
        </aside>
    </div>
    <div class=\"d-flex flex-column w-100\">
        <header class=\"w-100 d-flex\">
            <div class=\"m-0 p-0 w-100 \">
                <div class=\"d-flex justify-content-between\">
                    
                    <h1 class=\"text-mediumBlueGrey p-3 pl-4 m-0 \">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</h1>
                    ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 43
            echo "                        <div class=\"d-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/user/";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">Mon compte</a>
                            <a class=\"btn btn-light align-self-end my-auto mr-5\" href=\"/logout\">Déconnexion</a>
                        </div>  
                    ";
        } else {
            // line 48
            echo "                        <div class=\"d-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/login\">Connexion</a>
                            <a class=\"btn btn-success align-self-end my-auto mr-5\" href=\"/register\">Inscription</a>
                        </div>                  
                    ";
        }
        // line 53
        echo "                </div>
                <div class=\"p-2 h1bar bg-mediumBlueGrey\"></div>
            </div>
        </header>


        <main class=\"p-4 w-100\">
            ";
        // line 60
        $this->displayBlock('main', $context, $blocks);
        // line 61
        echo "        </main>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/main.js\"></script>
    ";
        // line 68
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 69
        echo "</body>
</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Diskapp";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
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

    // line 60
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 68
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
        return "diskapp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 68,  192 => 60,  174 => 11,  155 => 8,  141 => 69,  139 => 68,  130 => 61,  128 => 60,  119 => 53,  112 => 48,  105 => 44,  102 => 43,  100 => 42,  96 => 41,  85 => 32,  64 => 12,  62 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}Diskapp{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"/assets/css/global.css\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    {% block custom_styles %}{% endblock %}

</head>

<body class=\"d-flex\">
    

    <div class=\"w-25 d-flex flex-column m-0\">
        <a href=\"/\" class=\"h1 p-3 mb-3 d-flex justify-content-center align-items-center bg-mediumBlueGrey text-lightGrey\">DISKAPP</a>
        <aside class=\"bg-mediumBlueGrey m-0 p-3 d-flex flex-column justify-content-between\">
            <nav class=\"mt-2 d-flex flex-column align-items-center h-100\">
                <a class=\"mb-4 text-lightGrey\" href=\"/\">Accueil</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/disks\">Disques</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/artists\">Artistes</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/productions\">Labels</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/styles\">Genres</a>
                <a href=\"/disks/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un disque</a>
                <a href=\"/artists/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un artiste</a>
                <a href=\"/productions/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un label</a>
                <a href=\"/styles/add\" class=\"btn font-weight-bold mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un genre</a>
                {# <a href=\"/import\" class=\"btn font-weight-bold mb-4 border bg-darkBlueGrey border-light text-lightGrey\">Import massif</a> #}
            </nav>
            <a href=\"/conditions\" class=\"text-lightGrey mb-5 mx-auto\"><small>Conditions d'utilisation</small></a>
        </aside>
    </div>
    <div class=\"d-flex flex-column w-100\">
        <header class=\"w-100 d-flex\">
            <div class=\"m-0 p-0 w-100 \">
                <div class=\"d-flex justify-content-between\">
                    
                    <h1 class=\"text-mediumBlueGrey p-3 pl-4 m-0 \">{{ h1 }}</h1>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <div class=\"d-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/user/{{ app.user.id }}\">Mon compte</a>
                            <a class=\"btn btn-light align-self-end my-auto mr-5\" href=\"/logout\">Déconnexion</a>
                        </div>  
                    {% else %}
                        <div class=\"d-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/login\">Connexion</a>
                            <a class=\"btn btn-success align-self-end my-auto mr-5\" href=\"/register\">Inscription</a>
                        </div>                  
                    {% endif %}
                </div>
                <div class=\"p-2 h1bar bg-mediumBlueGrey\"></div>
            </div>
        </header>


        <main class=\"p-4 w-100\">
            {% block main %}{% endblock %}
        </main>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/main.js\"></script>
    {% block custom_scripts %}{% endblock %}
</body>
</html>


", "diskapp.html.twig", "/var/www/html/diskapp_1.0/templates/diskapp.html.twig");
    }
}
