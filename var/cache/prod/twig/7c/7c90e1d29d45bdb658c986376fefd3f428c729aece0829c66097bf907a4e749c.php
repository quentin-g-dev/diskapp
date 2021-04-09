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

/* registration/confirmation_email.html.twig */
class __TwigTemplate_a2df43b712a3b90a4220e0c3d0ed1c64dd61c67e6b052f3c0d236921fa943a98 extends Template
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
        echo "<h1>Bonjour,</h1>

<p>
    Une demande d'inscription a été faite sur <a target=\"blank\" href=\"https://www.diskapp.quentin-g.com\">https://www.diskapp.quentin-g.com</a>
    Merci de confirmer votre adresse email en cliquant sur le lien suivant :<br>
    <a href=\"";
        // line 6
        echo ($context["signedUrl"] ?? null);
        echo "\">Confirmer mon Email</a>.
    Ce lien a un délai d'expiration de ";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["expiresAtMessageKey"] ?? null), ($context["expiresAtMessageData"] ?? null), "VerifyEmailBundle"), "html", null, true);
        echo ".
</p>

<p>
    Bie cordialement,
    <a href=\"https://www.quentin-g.com\" target=\"blank\">Quentin G</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "registration/confirmation_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "registration/confirmation_email.html.twig", "/var/www/html/disk2/templates/registration/confirmation_email.html.twig");
    }
}
