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
class __TwigTemplate_4d826926e34e545748cd7a91faa9a342cec929cf184909dcbf17c8b0d03bab60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/menuDashboarb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/menuDashboarb.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-3\">
    <div class=\"align-items-center mb-3\">
        <a href=\"{{ path('dashboard') }}\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2 pb-1\">Añadir Taller</a>
    </div>
    <a href=\"{{ path('editar_talleres') }}\" class=\"text-dark\"><img src=\"/images/icons/editar.png\" class=\"pr-2 pb-1\">Editar Talleres</a>
    
</div>", "dashboard/menuDashboarb.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\menuDashboarb.html.twig");
    }
}
