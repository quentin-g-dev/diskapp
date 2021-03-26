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

/* import.html.twig */
class __TwigTemplate_0ef7a1cd7e97081ca2a3881a342232ad5fb24e1e50da465a3f85a77668980650 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Diskapp - Import</title>
</head>

<body>
    <header>
        <h1>Diskapp</h1>
    </header>
    <aside>
        <nav>
            <a href=\"/\">Accueil</a>
            <a href=\"/disks\">Disques</a>
            <a href=\"/artists\">Artistes</a>
            <a href=\"/productions\">Productions</a>
            <a href=\"\" class=\"btn btn-success\">Ajouter un disque</a>
            <a href=\"\" class=\"btn btn-info\">Gérer les données annexes</a>
        </nav>
    </aside>
        <div>
            <section>
                <p>Ce module accepte les fichiers .csv</p>
                <p>Choisissez le type de données à importer pour en savoir plus.</p>
                <form>
                    <label for=\"import\">Données à importer :</production>
                    <select name=\"import\">
                        <option value=\"disks\">Disques</option>
                        <option value=\"artists\">Artistes</option>
                        <option value=\"labels\">Productions</option>
                    </select>
                    <p>****Message en fonction du type de données***</p>
                    <input type=\"file\" accept=\"multiform/data\">
                    <input type=\"submit\" value=\"OK\">
               </form>
            <section>
                
            </section>
        </div>
    </main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "import.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "import.html.twig", "/var/www/html/diskapp/templates/import.html.twig");
    }
}
