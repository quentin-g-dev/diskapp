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
class __TwigTemplate_e7bcc43cc6bb8d9ba4e8e1eeff2007380f26fa3b9df06e055e927d5806cae4e0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "import.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "import.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "import.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
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
</html>", "import.html.twig", "/var/www/html/disk2/templates/import.html.twig");
    }
}
