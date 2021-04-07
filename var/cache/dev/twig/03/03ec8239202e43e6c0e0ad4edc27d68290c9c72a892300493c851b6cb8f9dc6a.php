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

/* static/conditions.html.twig */
class __TwigTemplate_4fdac5ac212df36ebc242d3732f1182f7d86f7add4ac62997c7ce9de95331542 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/conditions.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/conditions.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "static/conditions.html.twig", 1);
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
        echo "<p class=\"\"><em>Mise à jour : 07 avril 2021</em></p>
<p class=\"text-justify\">
    Le présent service en ligne permet à l'utilisateur de consulter librement les contenus publiés, et d'y contribuer sous réserve d'une <a href=\"/register\" target=\"blank\">inscription</a> au service et d'une connexion autorisée.<br>
    Lors de l'inscription de l'utilisateur, son nom d'utilisateur, son mot de passe, son adresse e-mail et la date de son inscription sont collectés. Lors des connexions ultérieures, la date est également collectée. Ces informations sont nécessaires au fonctionnement normal et sécurisé du présent service.<br>
    Depuis son espace personnel, l'utilisateur inscrit peut modifier son nom d'utilisateur ainsi que son mot de passe. Il lui est également possible de supprimer son compte grâce au bouton dédié (toutes les contributions de l'utilisateur seront alors également supprimées).<br>
    Des informations sont disponibles sur la page <a href=\"/privacy\">Collecte et traitement des données</a>.<br>

    <h2 class=\"h4 mt-3\">Limites d'utlisation</h2>
    Le présent service autorise l'ajout d'éléments (disques, artistes, styles, labels) dans la base de données. Il est configuré de façon à ce que les ajouts soient limités à 10 par session et par utilisateur.<br>
    <h2 class=\"h4 mt-3\">Modération</h2>
    Le gestionnaire de ce service se réserve le droit de supprimer sans préavis tout contenu jugé non conforme à l'utilisation du service. Toute action illicite d'un utilisateur expose ce dernier à la mise sous séquestre de son compte et de poursuites devant les juridictions compétentes.<br>
    <h2 class=\"h4 mt-3\">Contact</h2>
    Pour toute communication relative à ce service en ligne, merci de vous adresser par e-mail à : quentin@quentin-g.com

</p>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
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
        return "static/conditions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 24,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
<p class=\"\"><em>Mise à jour : 07 avril 2021</em></p>
<p class=\"text-justify\">
    Le présent service en ligne permet à l'utilisateur de consulter librement les contenus publiés, et d'y contribuer sous réserve d'une <a href=\"/register\" target=\"blank\">inscription</a> au service et d'une connexion autorisée.<br>
    Lors de l'inscription de l'utilisateur, son nom d'utilisateur, son mot de passe, son adresse e-mail et la date de son inscription sont collectés. Lors des connexions ultérieures, la date est également collectée. Ces informations sont nécessaires au fonctionnement normal et sécurisé du présent service.<br>
    Depuis son espace personnel, l'utilisateur inscrit peut modifier son nom d'utilisateur ainsi que son mot de passe. Il lui est également possible de supprimer son compte grâce au bouton dédié (toutes les contributions de l'utilisateur seront alors également supprimées).<br>
    Des informations sont disponibles sur la page <a href=\"/privacy\">Collecte et traitement des données</a>.<br>

    <h2 class=\"h4 mt-3\">Limites d'utlisation</h2>
    Le présent service autorise l'ajout d'éléments (disques, artistes, styles, labels) dans la base de données. Il est configuré de façon à ce que les ajouts soient limités à 10 par session et par utilisateur.<br>
    <h2 class=\"h4 mt-3\">Modération</h2>
    Le gestionnaire de ce service se réserve le droit de supprimer sans préavis tout contenu jugé non conforme à l'utilisation du service. Toute action illicite d'un utilisateur expose ce dernier à la mise sous séquestre de son compte et de poursuites devant les juridictions compétentes.<br>
    <h2 class=\"h4 mt-3\">Contact</h2>
    Pour toute communication relative à ce service en ligne, merci de vous adresser par e-mail à : quentin@quentin-g.com

</p>

{% endblock %}
    
{% block custom_scripts %}{% endblock %}
", "static/conditions.html.twig", "/var/www/html/diskapp_1.0/templates/static/conditions.html.twig");
    }
}
