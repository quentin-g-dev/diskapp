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

/* user/empty_counter.html.twig */
class __TwigTemplate_2055bfdecfcbd4421d279d3926e43aa7e2960a967e4f5fd1cb53acc3b6616e90 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "user/empty_counter.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "   <p>
        Les ajouts dans la base de données sont limités à 10 par session, pour chaque utilisateur.br>
        Reconnectez-vous demain pour ajouter de nouveaux éléments !<br>
        <a href=\"/\" class=\"btn btn-light font-weight-bold my-3\">Retour à l'accueil</a>
    </p>
";
    }

    public function getTemplateName()
    {
        return "user/empty_counter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/empty_counter.html.twig", "/var/www/html/disk2/templates/user/empty_counter.html.twig");
    }
}
