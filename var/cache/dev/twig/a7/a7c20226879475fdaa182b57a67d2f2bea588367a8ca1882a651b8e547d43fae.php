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

/* static/privacy.html.twig */
class __TwigTemplate_415282b4af7ea6fbb38211dc8294cf61adf653bb4828056d5b18effdec43acce extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/privacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "static/privacy.html.twig"));

        $this->parent = $this->loadTemplate("diskapp.html.twig", "static/privacy.html.twig", 1);
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
        echo "    Le pr??sent service web utilise des cookies fonctionnels indispensables ?? son ex??cution, afin de s??curiser votre session. Aucune information personnelle n'est collect??e par ce biais.<br>
    
    <h2 class=\"my-3 h4\">Informations personnelles collect??es</h2>
    <p>
        Toutes les donn??es collect??es par ce service en ligne sont trait??es en interne.<br>
        Lors de votre inscription au pr??sent puis lors de son utilisation, les informations suivantes sont collect??es :<br>
        <ul>
            <li>nom d'utilisateur</li>
            <li>adresse e-mail</li>
            <li>mot de passe</li>
            <li>date de derni??re connexion</li>
        </ul>
        Ces informations, collect??es en conformit?? avec <a href=\"/conditions\" class=\"font-weight-bold\">les conditions d'utilisation</a> du pr??sent service, sont utilis??es pour filtrer l'acc??s aux comptes personnels des utilisateurs.<br>
        Le nom d'utilisateur et le mot de passe peuvent ??tre modifi??s par l'utilisateur depuis son espace personnel. Il peut ??galement y trouver un bouton de suppression du compte.
        Il n'est pas de choisir un nom d'utilisateur permettant d'identifier l'utilisateur en tant que personne physique ou morale.<br>
        La date de derni??re connexion est enregistr??e afin de limiter la capacit?? des utilisateurs ?? ajouter des ??l??ments dans la base de donn??es.<br>
        Pour faire valoir vos droits d'opposition, d'interrogation, d'acc??s et de rectification, ou pour toute question relative ?? la collecte et ?? l'utilisation des donn??es personnelles par le pr??sent service, merci d'envoyer un e-mail ?? : quentin@quentin-g.com<br>
        Tout utilisateur de ce service en ligne est en droit d'introduire une r??clamation aupr??s de la <a target=\"blank\" href=\"https://www.cnil.fr/\">Cnil</a>.
    </p>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
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
        return "static/privacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"diskapp.html.twig\" %}

{% block custom_styles %}{% endblock %}

{% block main %}
    Le pr??sent service web utilise des cookies fonctionnels indispensables ?? son ex??cution, afin de s??curiser votre session. Aucune information personnelle n'est collect??e par ce biais.<br>
    
    <h2 class=\"my-3 h4\">Informations personnelles collect??es</h2>
    <p>
        Toutes les donn??es collect??es par ce service en ligne sont trait??es en interne.<br>
        Lors de votre inscription au pr??sent puis lors de son utilisation, les informations suivantes sont collect??es :<br>
        <ul>
            <li>nom d'utilisateur</li>
            <li>adresse e-mail</li>
            <li>mot de passe</li>
            <li>date de derni??re connexion</li>
        </ul>
        Ces informations, collect??es en conformit?? avec <a href=\"/conditions\" class=\"font-weight-bold\">les conditions d'utilisation</a> du pr??sent service, sont utilis??es pour filtrer l'acc??s aux comptes personnels des utilisateurs.<br>
        Le nom d'utilisateur et le mot de passe peuvent ??tre modifi??s par l'utilisateur depuis son espace personnel. Il peut ??galement y trouver un bouton de suppression du compte.
        Il n'est pas de choisir un nom d'utilisateur permettant d'identifier l'utilisateur en tant que personne physique ou morale.<br>
        La date de derni??re connexion est enregistr??e afin de limiter la capacit?? des utilisateurs ?? ajouter des ??l??ments dans la base de donn??es.<br>
        Pour faire valoir vos droits d'opposition, d'interrogation, d'acc??s et de rectification, ou pour toute question relative ?? la collecte et ?? l'utilisation des donn??es personnelles par le pr??sent service, merci d'envoyer un e-mail ?? : quentin@quentin-g.com<br>
        Tout utilisateur de ce service en ligne est en droit d'introduire une r??clamation aupr??s de la <a target=\"blank\" href=\"https://www.cnil.fr/\">Cnil</a>.
    </p>
{% endblock %}
    
{% block custom_scripts %}{% endblock %}
", "static/privacy.html.twig", "/var/www/html/disk2/templates/static/privacy.html.twig");
    }
}
