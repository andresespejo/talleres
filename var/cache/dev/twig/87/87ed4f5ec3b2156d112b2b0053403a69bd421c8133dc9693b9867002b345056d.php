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
class __TwigTemplate_7d212fcaf443afd7ee93c9a71eee33f30e59fd2aee45ec814515188a7eeb8496 extends \Twig\Template
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

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Talleres Para El Autoconocimiento";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "<div id=\"foto-portada\">
    <img src=\"/images/caras-incial.jpg\" alt=\"\">
</div>
<br>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["talleres"]) || array_key_exists("talleres", $context) ? $context["talleres"] : (function () { throw new RuntimeError('Variable "talleres" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["taller"]) {
            echo "   

    <div class=\"container bg-white pt-2 pb-3 mb-4\">
        <div class=\"titulo-taller text-dark\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "titulo", [], "any", false, false, false, 14), "html", null, true);
            echo "</div> 
        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
            <img src=\"/images/icons/calendario.png\" >
            <small class=\"text-muted pl-2\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "fecha", [], "any", false, false, false, 17), "d-m-Y H:i
            "), "html", null, true);
            // line 18
            echo "</small>
        </div>
        <div class=\"text-dark pt-3\">
            <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "descripcion", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
        </div>
        <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
        <div class=\"modal fade\" id=\"exampleModal";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                <div class=\"modal-header verde-suave\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Solicitar Más Información</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                ";
            // line 33
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario_taller"]) || array_key_exists("formulario_taller", $context) ? $context["formulario_taller"] : (function () { throw new RuntimeError('Variable "formulario_taller" does not exist.', 33, $this->source); })()), 'form_start');
            echo "
                <div class=\"modal-body fondo-gris-suave\">
                    <div>
                        ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "titulo", [], "any", false, false, false, 36), "html", null, true);
            echo ":
                    </div>                    
                    <br>
                    
                    ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario_taller"]) || array_key_exists("formulario_taller", $context) ? $context["formulario_taller"] : (function () { throw new RuntimeError('Variable "formulario_taller" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Tu Email"]]);
            // line 46
            echo "
                    <br>          
                    ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario_taller"]) || array_key_exists("formulario_taller", $context) ? $context["formulario_taller"] : (function () { throw new RuntimeError('Variable "formulario_taller" does not exist.', 48, $this->source); })()), "comentario", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Comentarios", "rows" => 3]]);
            // line 55
            echo "  
                    ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario_taller"]) || array_key_exists("formulario_taller", $context) ? $context["formulario_taller"] : (function () { throw new RuntimeError('Variable "formulario_taller" does not exist.', 56, $this->source); })()), "nombreTaller", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "d-none", "value" => twig_get_attribute($this->env, $this->source,             // line 59
$context["taller"], "titulo", [], "any", false, false, false, 59)]]);
            // line 62
            echo "                
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                    <input type=\"submit\" value=\"Enviar\" class=\"btn verde-suave text-dark font-weight-bold\"/>
                </div>
                ";
            // line 68
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario_taller"]) || array_key_exists("formulario_taller", $context) ? $context["formulario_taller"] : (function () { throw new RuntimeError('Variable "formulario_taller" does not exist.', 68, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        </div>
        <a href=\"\" class=\"sin-underline\" data-toggle=\"modal\" data-target=\"#exampleModal";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
            
        </div>
    </div>
    

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return array (  194 => 79,  181 => 72,  174 => 68,  166 => 62,  164 => 59,  163 => 56,  160 => 55,  158 => 48,  154 => 46,  152 => 40,  145 => 36,  139 => 33,  127 => 24,  121 => 21,  116 => 18,  113 => 17,  107 => 14,  99 => 11,  93 => 7,  83 => 6,  64 => 4,  53 => 1,  50 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% dump talleres %}
{% block title %}Talleres Para El Autoconocimiento{% endblock %}

{% block body %}
<div id=\"foto-portada\">
    <img src=\"/images/caras-incial.jpg\" alt=\"\">
</div>
<br>
{% for taller in talleres %}   

    <div class=\"container bg-white pt-2 pb-3 mb-4\">
        <div class=\"titulo-taller text-dark\">{{ taller.titulo }}</div> 
        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
            <img src=\"/images/icons/calendario.png\" >
            <small class=\"text-muted pl-2\">{{ taller.fecha|date('d-m-Y H:i
            ') }}</small>
        </div>
        <div class=\"text-dark pt-3\">
            <p>{{ taller.descripcion }}</p>
        </div>
        <div class=\"col-12 d-flex justify-content-end  sin-pad-left text-dark\">
        <div class=\"modal fade\" id=\"exampleModal{{ taller.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                <div class=\"modal-header verde-suave\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Solicitar Más Información</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                {{ form_start(formulario_taller) }}
                <div class=\"modal-body fondo-gris-suave\">
                    <div>
                        {{ taller.titulo }}:
                    </div>                    
                    <br>
                    
                    {{ form_widget(formulario_taller.email, {
                        'attr' : {
                            'class': 'form-control',
                            'placeholder' : 'Tu Email'
                            }
                        }) 
                    }}
                    <br>          
                    {{ form_widget(formulario_taller.comentario, {
                        'attr' : {
                            'class': 'form-control',
                            'placeholder' : 'Comentarios',
                            'rows' : 3
                            }
                        }) 
                    }}  
                    {{ form_widget(formulario_taller.nombreTaller, {
                        'attr' : {
                            'class': 'd-none',
                            'value' : taller.titulo
                            }
                        }) 
                    }}                
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Cerrar</button>
                    <input type=\"submit\" value=\"Enviar\" class=\"btn verde-suave text-dark font-weight-bold\"/>
                </div>
                {{ form_end(formulario_taller) }}
                </div>
            </div>
        </div>
        <a href=\"\" class=\"sin-underline\" data-toggle=\"modal\" data-target=\"#exampleModal{{ taller.id }}\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2\"><small class=\"text-dark\"><b>Más Información</b></small></a>
            
        </div>
    </div>
    

{% endfor %}

{% endblock %}", "inicio/inicio.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\inicio\\inicio.html.twig");
    }
}
