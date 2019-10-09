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
class __TwigTemplate_c7a654e9a7833745dea68b0ee5ff3ce9621464cbdfac13a1d04fc5c928528e4d extends \Twig\Template
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
        echo "    <h1>Centro De Control</h1>
    <div class=\"container bg-white\">
        <div class=\"row mt-2 pt-3 pb-3\">
            <div class=\"col-3\">
                <div class=\"align-items-center\">
                    <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2 pb-1\">Añadir Taller</a>
                </div>                  
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icon/edit.svg\" alt=\"\">Editar Talleres</a>
                
            </div>
            <div class=\"col-9\">
                <h4>Datos Nuevo Taller:</h4>
                <br>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 19, $this->source); })()), "titulo", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "foo"], "label" => "Título:"]);
        // line 24
        echo "
                <br>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 26, $this->source); })()), "titulo", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 31
        echo "
                <br>
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 33, $this->source); })()), "fecha", [], "any", false, false, false, 33), 'label', ["label" => "Fecha:"]);
        echo "
                <br>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 35, $this->source); })()), "fecha", [], "any", false, false, false, 35), 'widget');
        echo "
                <br>
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 37, $this->source); })()), "descripcion", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "foo"], "label" => "Descripción:"]);
        // line 42
        echo "
                <br>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 44, $this->source); })()), "descripcion", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control alto-textarea"]]);
        // line 49
        echo "
                <br>
                <div class=\"text-right\">
                    <input type=\"submit\" value=\"Crear Nuevo Taller\" / class=\"btn verde-suave text-dark\">  
                </div>
                  
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
        return array (  133 => 49,  131 => 44,  127 => 42,  125 => 37,  120 => 35,  115 => 33,  111 => 31,  109 => 26,  105 => 24,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard{% endblock %}

{% block body %}
    <h1>Centro De Control</h1>
    <div class=\"container bg-white\">
        <div class=\"row mt-2 pt-3 pb-3\">
            <div class=\"col-3\">
                <div class=\"align-items-center\">
                    <a href=\"\" class=\"text-dark\"><img src=\"/images/icons/mas_info.png\" class=\"pr-2 pb-1\">Añadir Taller</a>
                </div>                  
                <a href=\"\" class=\"text-dark\"><img src=\"/images/icon/edit.svg\" alt=\"\">Editar Talleres</a>
                
            </div>
            <div class=\"col-9\">
                <h4>Datos Nuevo Taller:</h4>
                <br>
                {{ form_label(nuevo_taller.titulo, 'Título:', {
                    'label_attr': {
                        'class' : 'foo'
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
                {{ form_label(nuevo_taller.fecha, 'Fecha:')}}
                <br>
                {{ form_widget(nuevo_taller.fecha) }}
                <br>
                {{ form_label(nuevo_taller.descripcion, 'Descripción:', {
                    'label_attr' : {
                        'class' : 'foo'
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
                    <input type=\"submit\" value=\"Crear Nuevo Taller\" / class=\"btn verde-suave text-dark\">  
                </div>
                  
            </div>
        </div>
    </div>
{% endblock %}
", "dashboard/index.html.twig", "/var/www/html/talleres/templates/dashboard/index.html.twig");
    }
}
