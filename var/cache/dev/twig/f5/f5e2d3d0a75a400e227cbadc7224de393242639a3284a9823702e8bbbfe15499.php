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

        if ($this->env->isDebug()) {
            // line 3
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["talleres"]) || array_key_exists("talleres", $context) ? $context["talleres"] : (function () { throw new RuntimeError('Variable "talleres" does not exist.', 3, $this->source); })()));
        }
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "inicio/inicio.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<h1>Próximos Talleres:</h1>

";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["talleres"]) || array_key_exists("talleres", $context) ? $context["talleres"] : (function () { throw new RuntimeError('Variable "talleres" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taller"]) {
            echo "   

    <div class=\"container bg-white pt-2 pb-3 mb-4\">
        <div class=\"titulo-taller text-dark\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "titulo", [], "any", false, false, false, 13), "html", null, true);
            echo "</div> 
        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
            <img src=\"/images/icons/calendario.png\" >
            <small class=\"text-muted pl-2\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "fecha", [], "any", false, false, false, 16), "d-m-Y H:i"), "html", null, true);
            echo "</small>
        </div>
        <div class=\"text-dark pt-3\">
            <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "descripcion", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
            
            <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
            
        </div>
    </div>
    

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

    

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
        return array (  115 => 30,  98 => 19,  92 => 16,  86 => 13,  78 => 10,  73 => 7,  63 => 6,  52 => 1,  49 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% dump talleres %}


{% block body %}

<h1>Próximos Talleres:</h1>

{% for taller in talleres %}   

    <div class=\"container bg-white pt-2 pb-3 mb-4\">
        <div class=\"titulo-taller text-dark\">{{ taller.titulo }}</div> 
        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
            <img src=\"/images/icons/calendario.png\" >
            <small class=\"text-muted pl-2\">{{ taller.fecha|date('d-m-Y H:i') }}</small>
        </div>
        <div class=\"text-dark pt-3\">
            <p>{{ taller.descripcion }}</p>
        </div>
        <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
            
            <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
            
        </div>
    </div>
    

{% endfor %}


    

{% endblock %}", "inicio/inicio.html.twig", "/var/www/html/talleres/templates/inicio/inicio.html.twig");
    }
}
