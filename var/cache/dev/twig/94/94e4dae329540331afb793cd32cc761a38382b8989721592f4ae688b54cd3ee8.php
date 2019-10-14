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
            ";
        // line 8
        echo twig_include($this->env, $context, "dashboard/menuDashboarb.html.twig");
        echo "
            <div class=\"col-9 pr-4\">
                <h5>Editar Talleres:</h5>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["talleres"]) || array_key_exists("talleres", $context) ? $context["talleres"] : (function () { throw new RuntimeError('Variable "talleres" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taller"]) {
            echo "   
                    <div class=\"container bg-white pt-2 pb-2 mb-4 border\">
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
                        <div class=\"col-12 d-flex justify-content-end sin-pad-left text-dark\">
                            <div class=\"modal fade\" id=\"exampleModal";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">ADVERTANCIA</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        ¿Seguro que quieres eliminar el taller?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eliminar_taller", ["idTaller" => twig_get_attribute($this->env, $this->source,             // line 37
$context["taller"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            // line 39
            echo "\" class=\"btn btn-danger\">Eliminar</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"\" class=\"sin-underline\" data-toggle=\"modal\" data-target=\"#exampleModal";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\"><img src=\"/images/icons/eliminar.png\" class=\"pr-2 pl-3\"><small class=\"rojo-alerta\"><b>Eliminar</b></small></a>
                            
                        </div>
                    </div>
                    

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
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
        return array (  163 => 51,  150 => 44,  143 => 39,  141 => 37,  140 => 36,  123 => 22,  117 => 19,  111 => 16,  105 => 13,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
    <div class=\"container bg-white\">
        <div class=\"row pt-3 pb-3\">
            {{ include('dashboard/menuDashboarb.html.twig')}}
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
                            <div class=\"modal fade\" id=\"exampleModal{{ taller.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5 class=\"modal-title\" id=\"exampleModalLabel\">ADVERTANCIA</h5>
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        ¿Seguro que quieres eliminar el taller?
                                    </div>
                                    <div class=\"modal-footer\">
                                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                                        <a href=\"{{ path('eliminar_taller', {
                                                        'idTaller': taller.id
                                                }) 
                                            }}\" class=\"btn btn-danger\">Eliminar</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <a href=\"\" class=\"sin-underline\" data-toggle=\"modal\" data-target=\"#exampleModal{{ taller.id }}\"><img src=\"/images/icons/eliminar.png\" class=\"pr-2 pl-3\"><small class=\"rojo-alerta\"><b>Eliminar</b></small></a>
                            
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
