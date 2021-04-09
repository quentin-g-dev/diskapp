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

/* user/user.html.twig */
class __TwigTemplate_5e8818485aa8f894421ea504e59ffa801b8d123ed86d3f66e4214fa524930097 extends Template
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
        $this->parent = $this->loadTemplate("diskapp.html.twig", "user/user.html.twig", 1);
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
        echo "<div class=\"container m-0 w-100\">
    <div class=\"row\">
        <div class=\"mr-5 p-3 col-10 text-center\">
            <h2 class=\"p-1 bg-mediumBlueGrey text-light mt-3\">Contributions</h2>
             <div class=\"d-flex justify-content-between\">
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Disques</h3>
                    <span class=\"list-group\">
                        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["disks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["disk"]) {
            // line 15
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/disks/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                                    <span class=\"font-weight-bold\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["disk"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "</span>
                                    - ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["disk"], "artist", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo " 
                                </a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disk'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </span>
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Artistes</h3>
                    <span class=\"list-group\">
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["artists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 28
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/artists/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["artist"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </span>        
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Genres</h3>
                    <span class=\"list-group\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 38
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/styles/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "id", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["style"], "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </span>                
                </div>
                <div class=\"mr-5 w-100 p-3 text-center\">
                    <h3 class=\"h5 p-1 text-mediumBlueGrey font-weight-bold\">Labels</h3>
                    <span class=\"list-group\">
                        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productions"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["production"]) {
            // line 48
            echo "                            <span class=\"list-group-item\">           
                                <a href=\"/productions/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["production"], "name", [], "any", false, false, false, 49), "html", null, true);
            echo "</a> 
                            </span>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['production'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                    </span>        
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    // line 60
    public function block_custom_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 60,  168 => 52,  157 => 49,  154 => 48,  150 => 47,  143 => 42,  132 => 39,  129 => 38,  125 => 37,  118 => 32,  107 => 29,  104 => 28,  100 => 27,  93 => 22,  83 => 18,  79 => 17,  75 => 16,  72 => 15,  68 => 14,  58 => 6,  54 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/user.html.twig", "/var/www/html/disk2/templates/user/user.html.twig");
    }
}
