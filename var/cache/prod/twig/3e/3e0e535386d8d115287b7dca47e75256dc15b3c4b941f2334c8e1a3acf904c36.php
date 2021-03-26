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

<body>
    <header class=\"d-flex\">
        <span class=\"h1 p-3 mb-3 d-flex justify-content-center align-items-center bg-mediumBlueGrey text-white\">DISKAPP</span>
        <div class=\"m-0 p-0\">
            <h1 class=\"text-mediumBlueGrey p-3 pl-4 m-0  d-flex  align-items-center\">";
        // line 19
        echo twig_escape_filter($this->env, ($context["h1"] ?? null), "html", null, true);
        echo "</h1>
            <div class=\"p-2 h1bar bg-mediumBlueGrey\"></div>
        </div>
    </header>

    <div class=\"d-flex m-0\">
        <aside class=\"bg-mediumBlueGrey m-0 p-3\">
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
        // line 37
        echo "            </nav>
        </aside>

        <main class=\"p-4\">
            ";
        // line 41
        $this->displayBlock('main', $context, $blocks);
        // line 42
        echo "        </main>
    </div>
    
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\" integrity=\"sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\" integrity=\"sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6\" crossorigin=\"anonymous\"></script>
    <script src=\"/assets/js/main.js\"></script>
    ";
        // line 49
        $this->displayBlock('custom_scripts', $context, $blocks);
        // line 50
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

    // line 41
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
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
        return array (  133 => 49,  127 => 41,  121 => 11,  114 => 8,  106 => 50,  104 => 49,  95 => 42,  93 => 41,  87 => 37,  67 => 19,  58 => 12,  56 => 11,  50 => 8,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "diskapp.html.twig", "/var/www/html/diskapp/templates/diskapp.html.twig");
    }
}
