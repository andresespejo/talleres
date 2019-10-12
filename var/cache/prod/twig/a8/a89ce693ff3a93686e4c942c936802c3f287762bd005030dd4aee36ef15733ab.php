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

/* dashboard/menuDashboarb.html.twig */
class __TwigTemplate_126acf7ea13511c135b8fb43363fa3e7c4ed1735389ec1b0e7b93b8f9b4d4466 extends \Twig\Template
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
        echo "<div class=\"col-3\">
    <div class=\"align-items-center mb-3\">
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2 pb-1\">Añadir Taller</a>
    </div>
    <a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_talleres");
        echo "\" class=\"text-dark\"><img src=\"/images/icons/editar.png\" class=\"pr-2 pb-1\">Editar Talleres</a>
    
</div>";
    }

    public function getTemplateName()
    {
        return "dashboard/menuDashboarb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/menuDashboarb.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\menuDashboarb.html.twig");
    }
}
