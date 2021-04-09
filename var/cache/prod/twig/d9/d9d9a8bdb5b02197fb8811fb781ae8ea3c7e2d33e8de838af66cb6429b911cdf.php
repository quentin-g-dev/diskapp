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
class __TwigTemplate_af3075021d3dbff8320e3dcf2b1fe80193f1dca6791c58b2e9a23649dee27dae extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "static/privacy.html.twig", 1);
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
        echo "    Le présent service web utilise des cookies fonctionnels indispensables à son exécution, afin de sécuriser votre session. Aucune information personnelle n'est collectée par ce biais.<br>
    
    <h2 class=\"my-3 h4\">Informations personnelles collectées</h2>
    <p>
        Toutes les données collectées par ce service en ligne sont traitées en interne.<br>
        Lors de votre inscription au présent puis lors de son utilisation, les informations suivantes sont collectées :<br>
        <ul>
            <li>nom d'utilisateur</li>
            <li>adresse e-mail</li>
            <li>mot de passe</li>
            <li>date de dernière connexion</li>
        </ul>
        Ces informations, collectées en conformité avec <a href=\"/conditions\" class=\"font-weight-bold\">les conditions d'utilisation</a> du présent service, sont utilisées pour filtrer l'accès aux comptes personnels des utilisateurs.<br>
        Le nom d'utilisateur et le mot de passe peuvent être modifiés par l'utilisateur depuis son espace personnel. Il peut également y trouver un bouton de suppression du compte.
        Il n'est pas de choisir un nom d'utilisateur permettant d'identifier l'utilisateur en tant que personne physique ou morale.<br>
        La date de dernière connexion est enregistrée afin de limiter la capacité des utilisateurs à ajouter des éléments dans la base de données.<br>
        Pour faire valoir vos droits d'opposition, d'interrogation, d'accès et de rectification, ou pour toute question relative à la collecte et à l'utilisation des données personnelles par le présent service, merci d'envoyer un e-mail à : quentin@quentin-g.com<br>
        Tout utilisateur de ce service en ligne est en droit d'introduire une réclamation auprès de la <a target=\"blank\" href=\"https://www.cnil.fr/\">Cnil</a>.
    </p>
";
    }

    // line 27
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  81 => 27,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "static/privacy.html.twig", "/var/www/html/disk2/templates/static/privacy.html.twig");
    }
}
