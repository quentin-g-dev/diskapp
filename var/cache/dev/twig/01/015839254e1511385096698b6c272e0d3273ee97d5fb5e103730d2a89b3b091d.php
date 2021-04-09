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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/assets/css/global.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/mobile.css\">
    ";
        // line 12
        $this->displayBlock('custom_styles', $context, $blocks);
        // line 13
        echo "
</head>

<body class=\"d-md-flex\">
    <!--Mobile Header & Nav-->
    <div class=\"d-flex align-items-center justify-content-between d-md-none p-2 pt-3 bg-mediumBlueGrey\" id=\"mobileHeader\">
        <a href=\"/\" class=\"h4 ml-3 font-weight-bold text-lightGrey\">DISKAPP</a>
        <span class=\"h4 text-lightGrey mr-3\" id=\"navburger\" onclick=\"displayMenu()\">
            <div class=\"burgerMenu bg-lightGrey\"></div><div class=\"burgerMenu bg-lightGrey\"></div><div class=\"burgerMenu bg-lightGrey\"></div>     
        </span>
    </div>
    <h1 class=\"text-lightGrey mr-1 mt-2 font-weight-bold py-0 ml-3 m-0 d-md-none h5\">";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "</h1>
    <hr class=\"w-100 d-md-none m-0\">
    <nav class=\"flex-column bg-mediumBlueGrey text-lightGrey p-3 d-none d-md-none w-100 align-items-center\" id=\"navmenu\">
        ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 28
            echo "            <div class=\"d-flex justify-content-center align-items-center mb-4 mt-2\">
                <a class=\"btn btn-info my-auto mx-2\" href=\"/user/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">Mon compte</a>
                <a class=\"btn btn-light my-auto mx-2\" href=\"/logout\">Déconnexion</a>
            </div>  
        ";
        } else {
            // line 33
            echo "            <div class=\"d-flex justify-content-center align-items-center mb-4 mt-2\">
                <a class=\"btn btn-info my-auto mx-2\" href=\"/login\">Connexion</a>
                <a class=\"btn btn-success my-auto mx-2\" href=\"/register\">Inscription</a>
            </div>                  
        ";
        }
        // line 38
        echo "        <a class=\"mb-4 text-center btn btn-transparent text-lightGrey border border-light w-100\" href=\"/\">Accueil</a>
        <div class=\"d-flex justify-content-center w-100\">
            <div class=\"d-flex flex-column w-50 m-0\">
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/disks\">Disques</a>
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/artists\">Artistes</a>
            </div>
            <div class=\"d-flex flex-column w-50 m-0\">
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/productions\">Labels</a>
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/styles\">Genres</a>
            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100\">
            <div class=\"d-flex flex-column w-50 my-1\">
                <a href=\"/disks/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un disque</a>
                <a href=\"/productions/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un label</a>
            </div>
            <div class=\"d-flex flex-column w-50 my-1\">
                <a href=\"/styles/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un genre</a>
                <a href=\"/artists/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un artiste</a>
            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100 my-2\">
            <a href=\"/conditions\" class=\"text-lightGrey mx-auto w-auto\"><small>Conditions d'utilisation</small></a>
            <a href=\"/legal\" class=\"text-lightGrey mx-auto\"><small>Informations légales</small></a>
        </div>
        <div class=\"mx-auto mt-5 d-flex flex-column justify-content-center\">
            <a class=\"btn btn-transparent border border-light text-lightGrey mb-2 \" href=\"https://www.quentin-g.com\">Application réalisée par Quentin G</a>
        </div>
    </nav>
    
    <!--Desktop Header & Nav-->
    <div class=\"d-none d-md-flex flex-column m-0 w-25\">
        <a href=\"/\" class=\"h1 p-3 mb-3 d-flex justify-content-center align-items-center bg-mediumBlueGrey text-lightGrey\">DISKAPP</a>
        <aside class=\"bg-mediumBlueGrey m-0 p-3 d-none d-md-flex flex-column justify-content-between\">
            <nav class=\"mt-2 d-flex flex-column align-items-center h-100\">
                <a class=\"mb-4 text-lightGrey\" href=\"/\">Accueil</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/disks\">Disques</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/artists\">Artistes</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/productions\">Labels</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/styles\">Genres</a>
                <a href=\"/disks/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un disque</a>
                <a href=\"/artists/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un artiste</a>
                <a href=\"/productions/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un label</a>
                <a href=\"/styles/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un genre</a>
                ";
        // line 83
        echo "            </nav>
            <a href=\"/conditions\" class=\"text-lightGrey mx-auto w-auto\"><small>Conditions d'utilisation</small></a>
            <a href=\"/legal\" class=\"text-lightGrey mx-auto\"><small>Informations légales</small></a>
            <div class=\"mx-auto mt-5 d-flex flex-column justify-content-center\">
                <a class=\"btn btn-transparent border border-light text-lightGrey mb-5 \" href=\"https://www.quentin-g.com\"><small>Application réalisée par <b>Quentin G</b></small></a>
            </div>
        </aside>
    </div>
    <div class=\"d-flex flex-column w-75\">
        <header class=\"w-100 d-none d-md-flex\">
            <div class=\"m-0 p-0 w-100 \">
                <div class=\"w-100 d-flex justify-content-between\">
                    <h1 class=\"text-mediumBlueGrey p-3 pl-4 m-0\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["h1"]) || array_key_exists("h1", $context) ? $context["h1"] : (function () { throw new RuntimeError('Variable "h1" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "</h1>
                    ";
        // line 96
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 97
            echo "                        <div class=\"d-none d-md-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/user/";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "user", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\">Mon compte</a>
                            <a class=\"btn btn-light align-self-end my-auto mr-5\" href=\"/logout\">Déconnexion</a>
                        </div>  
                    ";
        } else {
            // line 102
            echo "                        <div class=\"d-none d-md-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/login\">Connexion</a>
                            <a class=\"btn btn-success align-self-end my-auto mr-5\" href=\"/register\">Inscription</a>
                        </div>                  
                    ";
        }
        // line 107
        echo "                </div>
                <div class=\"p-2 h1bar bg-mediumBlueGrey d-none d-md-block\"></div>
            </div>
        </header>


        <main class=\"p-3 p-md-4 w-100\">
            ";
        // line 114
        $this->displayBlock('main', $context, $blocks);
        // line 115
        echo "        </main>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/main.js\"></script>
    ";
        // line 122
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 123
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

    // line 12
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

    // line 114
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

    // line 122
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
        return array (  277 => 122,  259 => 114,  241 => 12,  222 => 8,  208 => 123,  206 => 122,  197 => 115,  195 => 114,  186 => 107,  179 => 102,  172 => 98,  169 => 97,  167 => 96,  163 => 95,  149 => 83,  103 => 38,  96 => 33,  89 => 29,  86 => 28,  84 => 27,  78 => 24,  65 => 13,  63 => 12,  56 => 8,  47 => 1,);
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
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"/assets/css/global.css\">
    <link rel=\"stylesheet\" href=\"/assets/css/mobile.css\">
    {% block custom_styles %}{% endblock %}

</head>

<body class=\"d-md-flex\">
    <!--Mobile Header & Nav-->
    <div class=\"d-flex align-items-center justify-content-between d-md-none p-2 pt-3 bg-mediumBlueGrey\" id=\"mobileHeader\">
        <a href=\"/\" class=\"h4 ml-3 font-weight-bold text-lightGrey\">DISKAPP</a>
        <span class=\"h4 text-lightGrey mr-3\" id=\"navburger\" onclick=\"displayMenu()\">
            <div class=\"burgerMenu bg-lightGrey\"></div><div class=\"burgerMenu bg-lightGrey\"></div><div class=\"burgerMenu bg-lightGrey\"></div>     
        </span>
    </div>
    <h1 class=\"text-lightGrey mr-1 mt-2 font-weight-bold py-0 ml-3 m-0 d-md-none h5\">{{ h1 }}</h1>
    <hr class=\"w-100 d-md-none m-0\">
    <nav class=\"flex-column bg-mediumBlueGrey text-lightGrey p-3 d-none d-md-none w-100 align-items-center\" id=\"navmenu\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"d-flex justify-content-center align-items-center mb-4 mt-2\">
                <a class=\"btn btn-info my-auto mx-2\" href=\"/user/{{ app.user.id }}\">Mon compte</a>
                <a class=\"btn btn-light my-auto mx-2\" href=\"/logout\">Déconnexion</a>
            </div>  
        {% else %}
            <div class=\"d-flex justify-content-center align-items-center mb-4 mt-2\">
                <a class=\"btn btn-info my-auto mx-2\" href=\"/login\">Connexion</a>
                <a class=\"btn btn-success my-auto mx-2\" href=\"/register\">Inscription</a>
            </div>                  
        {% endif %}
        <a class=\"mb-4 text-center btn btn-transparent text-lightGrey border border-light w-100\" href=\"/\">Accueil</a>
        <div class=\"d-flex justify-content-center w-100\">
            <div class=\"d-flex flex-column w-50 m-0\">
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/disks\">Disques</a>
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/artists\">Artistes</a>
            </div>
            <div class=\"d-flex flex-column w-50 m-0\">
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/productions\">Labels</a>
                <a class=\"mb-4 text-center mx-1 btn btn-transparent text-lightGrey border border-light\" href=\"/styles\">Genres</a>
            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100\">
            <div class=\"d-flex flex-column w-50 my-1\">
                <a href=\"/disks/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un disque</a>
                <a href=\"/productions/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un label</a>
            </div>
            <div class=\"d-flex flex-column w-50 my-1\">
                <a href=\"/styles/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un genre</a>
                <a href=\"/artists/add\" class=\"btn d-flex font-weight-bold mx-auto my-2 mb-4 bg-lightGrey text-mediumBlueGrey\">Ajouter un artiste</a>
            </div>
        </div>
        <div class=\"d-flex justify-content-center w-100 my-2\">
            <a href=\"/conditions\" class=\"text-lightGrey mx-auto w-auto\"><small>Conditions d'utilisation</small></a>
            <a href=\"/legal\" class=\"text-lightGrey mx-auto\"><small>Informations légales</small></a>
        </div>
        <div class=\"mx-auto mt-5 d-flex flex-column justify-content-center\">
            <a class=\"btn btn-transparent border border-light text-lightGrey mb-2 \" href=\"https://www.quentin-g.com\">Application réalisée par Quentin G</a>
        </div>
    </nav>
    
    <!--Desktop Header & Nav-->
    <div class=\"d-none d-md-flex flex-column m-0 w-25\">
        <a href=\"/\" class=\"h1 p-3 mb-3 d-flex justify-content-center align-items-center bg-mediumBlueGrey text-lightGrey\">DISKAPP</a>
        <aside class=\"bg-mediumBlueGrey m-0 p-3 d-none d-md-flex flex-column justify-content-between\">
            <nav class=\"mt-2 d-flex flex-column align-items-center h-100\">
                <a class=\"mb-4 text-lightGrey\" href=\"/\">Accueil</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/disks\">Disques</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/artists\">Artistes</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/productions\">Labels</a>
                <a class=\"mb-4 text-lightGrey\" href=\"/styles\">Genres</a>
                <a href=\"/disks/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un disque</a>
                <a href=\"/artists/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un artiste</a>
                <a href=\"/productions/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un label</a>
                <a href=\"/styles/add\" class=\"btn font-weight-bold mb-4 my-1 bg-lightGrey text-mediumBlueGrey\">Ajouter un genre</a>
                {# <a href=\"/import\" class=\"btn font-weight-bold mb-4 border bg-darkBlueGrey border-light text-lightGrey\">Import massif</a> #}
            </nav>
            <a href=\"/conditions\" class=\"text-lightGrey mx-auto w-auto\"><small>Conditions d'utilisation</small></a>
            <a href=\"/legal\" class=\"text-lightGrey mx-auto\"><small>Informations légales</small></a>
            <div class=\"mx-auto mt-5 d-flex flex-column justify-content-center\">
                <a class=\"btn btn-transparent border border-light text-lightGrey mb-5 \" href=\"https://www.quentin-g.com\"><small>Application réalisée par <b>Quentin G</b></small></a>
            </div>
        </aside>
    </div>
    <div class=\"d-flex flex-column w-75\">
        <header class=\"w-100 d-none d-md-flex\">
            <div class=\"m-0 p-0 w-100 \">
                <div class=\"w-100 d-flex justify-content-between\">
                    <h1 class=\"text-mediumBlueGrey p-3 pl-4 m-0\">{{ h1 }}</h1>
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        <div class=\"d-none d-md-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/user/{{ app.user.id }}\">Mon compte</a>
                            <a class=\"btn btn-light align-self-end my-auto mr-5\" href=\"/logout\">Déconnexion</a>
                        </div>  
                    {% else %}
                        <div class=\"d-none d-md-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/login\">Connexion</a>
                            <a class=\"btn btn-success align-self-end my-auto mr-5\" href=\"/register\">Inscription</a>
                        </div>                  
                    {% endif %}
                </div>
                <div class=\"p-2 h1bar bg-mediumBlueGrey d-none d-md-block\"></div>
            </div>
        </header>


        <main class=\"p-3 p-md-4 w-100\">
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


", "diskapp.html.twig", "/var/www/html/disk2/templates/diskapp.html.twig");
    }
}
