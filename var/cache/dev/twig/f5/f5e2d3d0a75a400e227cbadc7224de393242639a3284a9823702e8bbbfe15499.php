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

/* inicio/inicio.html.twig */
class __TwigTemplate_4069c90e5dd1a5763d838539704e1264a9ea38a47f9f5f894dfb257bb4133963 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inicio/inicio.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "inicio/inicio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "inicio/inicio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "        <h1>Próximos Talleres:</h1>
        <div class=\"container bg-white pt-2 pb-3\">
            <div class=\"titulo-taller text-dark\">NUESTROS MIEDOS</div> 
            <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                <img src=\"/images/icons/calendario.png\" >
                <small class=\"text-muted pl-2\">18 de Septiembre a las 18:45</small>
            </div>
            <div class=\"text-dark pt-3\"><p>Ni me Explico ni me Entiendo
            Es un taller que de forma amena, descubrirás cuáles son tus miedos, esos que te impiden crecer y ser feliz.
            Te permitirá conocerte, comprenderte y cuidarte mejor. Aprenderás a relacionarte con tus emociones desde un lugar más efectivo y sano. Realizaremos prácticas de relajación que te ayudarán a introducir mayor serenidad en tu vida. Haremos visualizaciones que te aportarán claridad a esas dudas que no te permiten avanzar. Te daremos herramientas para tomar consciencia de tus temores y crear buenos hábitos para que te cuides mental y emocionalmente.
            </p>
            </div>
            <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
                
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
                
            </div>
        </div>
        <div class=\"container bg-white pt-2 pb-3\">
            <div class=\"titulo-taller text-dark\">NUESTROS MIEDOS</div> 
            <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                <img src=\"/images/icons/calendario.png\" >
                <small class=\"text-muted pl-2\">18 de Septiembre a las 18:45</small>
            </div>
            <div class=\"text-dark pt-3\"><p>Ni me Explico ni me Entiendo
            Es un taller que de forma amena, descubrirás cuáles son tus miedos, esos que te impiden crecer y ser feliz.
            Te permitirá conocerte, comprenderte y cuidarte mejor. Aprenderás a relacionarte con tus emociones desde un lugar más efectivo y sano. Realizaremos prácticas de relajación que te ayudarán a introducir mayor serenidad en tu vida. Haremos visualizaciones que te aportarán claridad a esas dudas que no te permiten avanzar. Te daremos herramientas para tomar consciencia de tus temores y crear buenos hábitos para que te cuides mental y emocionalmente.
            </p>
            </div>
            <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
                
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
                
            </div>
        </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "inicio/inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
        <h1>Próximos Talleres:</h1>
        <div class=\"container bg-white pt-2 pb-3\">
            <div class=\"titulo-taller text-dark\">NUESTROS MIEDOS</div> 
            <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                <img src=\"/images/icons/calendario.png\" >
                <small class=\"text-muted pl-2\">18 de Septiembre a las 18:45</small>
            </div>
            <div class=\"text-dark pt-3\"><p>Ni me Explico ni me Entiendo
            Es un taller que de forma amena, descubrirás cuáles son tus miedos, esos que te impiden crecer y ser feliz.
            Te permitirá conocerte, comprenderte y cuidarte mejor. Aprenderás a relacionarte con tus emociones desde un lugar más efectivo y sano. Realizaremos prácticas de relajación que te ayudarán a introducir mayor serenidad en tu vida. Haremos visualizaciones que te aportarán claridad a esas dudas que no te permiten avanzar. Te daremos herramientas para tomar consciencia de tus temores y crear buenos hábitos para que te cuides mental y emocionalmente.
            </p>
            </div>
            <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
                
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
                
            </div>
        </div>
        <div class=\"container bg-white pt-2 pb-3\">
            <div class=\"titulo-taller text-dark\">NUESTROS MIEDOS</div> 
            <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                <img src=\"/images/icons/calendario.png\" >
                <small class=\"text-muted pl-2\">18 de Septiembre a las 18:45</small>
            </div>
            <div class=\"text-dark pt-3\"><p>Ni me Explico ni me Entiendo
            Es un taller que de forma amena, descubrirás cuáles son tus miedos, esos que te impiden crecer y ser feliz.
            Te permitirá conocerte, comprenderte y cuidarte mejor. Aprenderás a relacionarte con tus emociones desde un lugar más efectivo y sano. Realizaremos prácticas de relajación que te ayudarán a introducir mayor serenidad en tu vida. Haremos visualizaciones que te aportarán claridad a esas dudas que no te permiten avanzar. Te daremos herramientas para tomar consciencia de tus temores y crear buenos hábitos para que te cuides mental y emocionalmente.
            </p>
            </div>
            <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
                
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
                
            </div>
        </div>
    

{% endblock %}", "inicio/inicio.html.twig", "/var/www/html/talleres/templates/inicio/inicio.html.twig");
    }
}
