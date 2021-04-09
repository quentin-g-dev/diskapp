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
class __TwigTemplate_33eacb0e0b6a23012fe0e09c18982d25cf9e958c0eb73ddd38e71c7adca011ff extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "static/conditions.html.twig", 1);
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
    }

    // line 24
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  78 => 24,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "static/conditions.html.twig", "/var/www/html/disk2/templates/static/conditions.html.twig");
    }
}
