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

/* dashboard/index.html.twig */
class __TwigTemplate_afb7c5018a4dda4cc5f71c2a8a44fcf5bd124aea4a58c7d47c903bf5648a4117 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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
                <h5>Datos Nuevo Taller:</h5>
                ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "
                <br>
                ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 20, $this->source); })()), "titulo", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => ""], "label" => "Título:"]);
        // line 25
        echo "
                <br>
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 27, $this->source); })()), "titulo", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 32
        echo "
                <br>
                <div class=\"margin-labe\">
                    Fecha:
                </div>
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 37, $this->source); })()), "dia", [], "any", false, false, false, 37), 'widget');
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 38, $this->source); })()), "mes", [], "any", false, false, false, 38), 'widget');
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 39, $this->source); })()), "ano", [], "any", false, false, false, 39), 'widget');
        echo "
                a las: 
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 41, $this->source); })()), "hora", [], "any", false, false, false, 41), 'widget');
        echo "
                :
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 43, $this->source); })()), "minuto", [], "any", false, false, false, 43), 'widget');
        echo "
                <br>
                <br>
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 46, $this->source); })()), "descripcion", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => ""], "label" => "Descripción:"]);
        // line 51
        echo "
                <br>
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 53, $this->source); })()), "descripcion", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control alto-textarea"]]);
        // line 58
        echo "
                
                <br>
                <div class=\"text-right\">
                    <input type=\"submit\" value=\"Crear Nuevo Taller\" class=\"btn verde-suave text-dark font-weight-bold\">  
                </div>
                ";
        // line 64
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 64, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 64,  157 => 58,  155 => 53,  151 => 51,  149 => 46,  143 => 43,  138 => 41,  133 => 39,  129 => 38,  125 => 37,  118 => 32,  116 => 27,  112 => 25,  110 => 20,  106 => 19,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                <h5>Datos Nuevo Taller:</h5>
                {{ test }}
                <br>
                {{ form_start(nuevo_taller) }}
                {{ form_label(nuevo_taller.titulo, 'Título:', {
                    'label_attr': {
                        'class' : ''
                        }
                    }) 
                }}
                <br>
                {{ form_widget(nuevo_taller.titulo, {
                    'attr' : {
                        'class': 'form-control'
                        }
                    }) 
                }}
                <br>
                <div class=\"margin-labe\">
                    Fecha:
                </div>
                {{ form_widget(nuevo_taller.dia) }}
                {{ form_widget(nuevo_taller.mes) }}
                {{ form_widget(nuevo_taller.ano) }}
                a las: 
                {{ form_widget(nuevo_taller.hora) }}
                :
                {{ form_widget(nuevo_taller.minuto) }}
                <br>
                <br>
                {{ form_label(nuevo_taller.descripcion, 'Descripción:', {
                    'label_attr' : {
                        'class' : ''
                        }
                    }) 
                }}
                <br>
                {{ form_widget(nuevo_taller.descripcion, {
                    'attr' : {
                        'class' : 'form-control alto-textarea'
                        }
                    })
                }}
                
                <br>
                <div class=\"text-right\">
                    <input type=\"submit\" value=\"Crear Nuevo Taller\" class=\"btn verde-suave text-dark font-weight-bold\">  
                </div>
                {{ form_end(nuevo_taller) }}
            </div>
        </div>
    </div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\index.html.twig");
    }
}
