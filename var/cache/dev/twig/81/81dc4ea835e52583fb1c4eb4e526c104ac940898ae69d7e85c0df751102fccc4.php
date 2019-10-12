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
            ";
        // line 8
        echo twig_include($this->env, $context, "dashboard/menuDashboarb.html.twig");
        echo "
            <div class=\"col-9 pr-4\">
                <h5>Datos Nuevo Taller:</h5>
                ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new RuntimeError('Variable "test" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "
                <br>
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 14, $this->source); })()), "titulo", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => ""], "label" => "Título:"]);
        // line 19
        echo "
                <br>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 21, $this->source); })()), "titulo", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 26
        echo "
                <br>
                <div class=\"margin-labe\">
                    Fecha:
                </div>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 31, $this->source); })()), "dia", [], "any", false, false, false, 31), 'widget');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 32, $this->source); })()), "mes", [], "any", false, false, false, 32), 'widget');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 33, $this->source); })()), "ano", [], "any", false, false, false, 33), 'widget');
        echo "
                a las: 
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 35, $this->source); })()), "hora", [], "any", false, false, false, 35), 'widget');
        echo "
                :
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 37, $this->source); })()), "minuto", [], "any", false, false, false, 37), 'widget');
        echo "
                <br>
                <br>
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 40, $this->source); })()), "descripcion", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => ""], "label" => "Descripción:"]);
        // line 45
        echo "
                <br>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 47, $this->source); })()), "descripcion", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control alto-textarea"]]);
        // line 52
        echo "
                
                <br>
                <div class=\"text-right\">
                    <input type=\"submit\" value=\"Crear Nuevo Taller\" class=\"btn verde-suave text-dark font-weight-bold\">  
                </div>
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["nuevo_taller"]) || array_key_exists("nuevo_taller", $context) ? $context["nuevo_taller"] : (function () { throw new RuntimeError('Variable "nuevo_taller" does not exist.', 58, $this->source); })()), 'form_end');
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
        return array (  162 => 58,  154 => 52,  152 => 47,  148 => 45,  146 => 40,  140 => 37,  135 => 35,  130 => 33,  126 => 32,  122 => 31,  115 => 26,  113 => 21,  109 => 19,  107 => 14,  103 => 13,  98 => 11,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
