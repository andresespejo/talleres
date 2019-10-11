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

/* dashboard/editarTalleres.html.twig */
class __TwigTemplate_9699c89460bd3101de64512fc63d5e4bfc965878122bca15716d09bc0c90701e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/editarTalleres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/editarTalleres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/editarTalleres.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container bg-white\">
        <div class=\"row pt-3 pb-3\">
            <div class=\"col-3\">
                <div class=\"align-items-center mb-3\">
                    <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2 pb-1\">Añadir Taller</a>
                </div>
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/editar.png\" class=\"pr-2 pb-1\">Editar Talleres</a>
                
            </div>
            <div class=\"col-9 pr-4\">
                <h5>Editar Talleres:</h5>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["talleres"]) || array_key_exists("talleres", $context) ? $context["talleres"] : (function () { throw new RuntimeError('Variable "talleres" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taller"]) {
            echo "   

                    <div class=\"container bg-white pt-2 pb-2 mb-4 border\">
                        <div class=\"titulo-taller text-dark\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "titulo", [], "any", false, false, false, 20), "html", null, true);
            echo "</div> 
                        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                            <img src=\"/images/icons/calendario.png\" >
                            <small class=\"text-muted pl-2\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "fecha", [], "any", false, false, false, 23), "d-m-Y H:i"), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"text-dark pt-3\">
                            <p>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "descripcion", [], "any", false, false, false, 26), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end sin-pad-left text-dark\">
                            
                            <a href=\"\" class=\"sin-underline\"><img src=\"/images/icons/edita_azul.png\" class=\"pr-2\"><small class=\"text-info\"><b>Editar</b></small></a>
                            <a href=\"\" class=\"sin-underline\"><img src=\"/images/icons/eliminar.png\" class=\"pr-2 pl-3\"><small class=\"rojo-alerta\"><b>Eliminar</b></small></a>
                            
                        </div>
                    </div>
                    

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/editarTalleres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 38,  121 => 26,  115 => 23,  109 => 20,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
    <div class=\"container bg-white\">
        <div class=\"row pt-3 pb-3\">
            <div class=\"col-3\">
                <div class=\"align-items-center mb-3\">
                    <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2 pb-1\">Añadir Taller</a>
                </div>
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/editar.png\" class=\"pr-2 pb-1\">Editar Talleres</a>
                
            </div>
            <div class=\"col-9 pr-4\">
                <h5>Editar Talleres:</h5>
                {% for taller in talleres %}   

                    <div class=\"container bg-white pt-2 pb-2 mb-4 border\">
                        <div class=\"titulo-taller text-dark\">{{ taller.titulo }}</div> 
                        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                            <img src=\"/images/icons/calendario.png\" >
                            <small class=\"text-muted pl-2\">{{ taller.fecha|date('d-m-Y H:i') }}</small>
                        </div>
                        <div class=\"text-dark pt-3\">
                            <p>{{ taller.descripcion }}</p>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end sin-pad-left text-dark\">
                            
                            <a href=\"\" class=\"sin-underline\"><img src=\"/images/icons/edita_azul.png\" class=\"pr-2\"><small class=\"text-info\"><b>Editar</b></small></a>
                            <a href=\"\" class=\"sin-underline\"><img src=\"/images/icons/eliminar.png\" class=\"pr-2 pl-3\"><small class=\"rojo-alerta\"><b>Eliminar</b></small></a>
                            
                        </div>
                    </div>
                    

                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}
", "dashboard/editarTalleres.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\editarTalleres.html.twig");
    }
}
