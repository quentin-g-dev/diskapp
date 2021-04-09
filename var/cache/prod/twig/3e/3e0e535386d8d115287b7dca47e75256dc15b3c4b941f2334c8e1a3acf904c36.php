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
class __TwigTemplate_7fef9fddbcea5a3dd38eb01f56c1d708eb55c51630000b0c02b74e6cfd62c6cc extends Template
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
        // line 30
        echo "            </nav>
            <a href=\"/conditions\" class=\"text-lightGrey mx-auto w-auto\"><small>Conditions d'utilisation</small></a>
            <a href=\"/legal\" class=\"text-lightGrey mx-auto\"><small>Informations légales</small></a>
            <div class=\"mx-auto mt-2 d-flex flex-column justify-content-center\">
                <a class=\"btn btn-transparent border border-light text-lightGrey mb-5 \" href=\"https://www.quentin-g.com\"><small>Application réalisée par <b>Quentin G</b></small></a>
            </div>
        </aside>
    </div>
    <div class=\"d-flex flex-column w-100\">
        <header class=\"w-100 d-flex\">
            <div class=\"m-0 p-0 w-100 \">
                <div class=\"d-flex justify-content-between\">
                    
                    <h1 class=\"text-mediumBlueGrey p-3 pl-4 m-0 \">";
        // line 43
        echo twig_escape_filter($this->env, ($context["h1"] ?? null), "html", null, true);
        echo "</h1>
                    ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "                        <div class=\"d-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/user/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\">Mon compte</a>
                            <a class=\"btn btn-light align-self-end my-auto mr-5\" href=\"/logout\">Déconnexion</a>
                        </div>  
                    ";
        } else {
            // line 50
            echo "                        <div class=\"d-flex\">
                            <a class=\"btn btn-info align-self-end my-auto mr-5\" href=\"/login\">Connexion</a>
                            <a class=\"btn btn-success align-self-end my-auto mr-5\" href=\"/register\">Inscription</a>
                        </div>                  
                    ";
        }
        // line 55
        echo "                </div>
                <div class=\"p-2 h1bar bg-mediumBlueGrey\"></div>
            </div>
        </header>


        <main class=\"p-4 w-100\">
            ";
        // line 62
        $this->displayBlock('main', $context, $blocks);
        // line 63
        echo "        </main>
    </div>

    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/main.js\"></script>
    ";
        // line 70
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 71
        echo "</body>
</html>


";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Diskapp";
    }

    // line 11
    public function block_custom_styles($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 62
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 70
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  164 => 70,  158 => 62,  152 => 11,  145 => 8,  137 => 71,  135 => 70,  126 => 63,  124 => 62,  115 => 55,  108 => 50,  101 => 46,  98 => 45,  96 => 44,  92 => 43,  77 => 30,  58 => 12,  56 => 11,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "diskapp.html.twig", "/var/www/html/disk2/templates/diskapp.html.twig");
    }
}
