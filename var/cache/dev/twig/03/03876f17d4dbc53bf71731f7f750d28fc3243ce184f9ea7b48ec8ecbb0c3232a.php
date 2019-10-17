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

/* contacto.html.twig */
class __TwigTemplate_eb175cb4e540770a084ea13bae06555f14ec5e3eed95f0e3923702a5668fb944 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contacto.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contacto.html.twig", 1);
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

        echo "Contacta Con Nosotras";
        
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
        echo "<div class=\"bg-white pt-5 pb-5 text-center\">
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario_contacto"]) || array_key_exists("formulario_contacto", $context) ? $context["formulario_contacto"] : (function () { throw new RuntimeError('Variable "formulario_contacto" does not exist.', 7, $this->source); })()), 'form_start', ["attr" => ["class" => "fondo-gris-suave borde-redondeado text-center inline p-4"]]);
        echo "
    <h1 class=\"h3 mb-3 font-weight-bold\">Contacta Con Nosotras</h1>
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario_contacto"]) || array_key_exists("formulario_contacto", $context) ? $context["formulario_contacto"] : (function () { throw new RuntimeError('Variable "formulario_contacto" does not exist.', 9, $this->source); })()), "email", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Tu Email"]]);
        // line 15
        echo "
    <br>
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario_contacto"]) || array_key_exists("formulario_contacto", $context) ? $context["formulario_contacto"] : (function () { throw new RuntimeError('Variable "formulario_contacto" does not exist.', 17, $this->source); })()), "comentario", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Tu Consulta", "rows" => 10]]);
        // line 24
        echo "
    <br>
    <input type=\"submit\" value=\"Enviar\" class=\"btn verde-suave text-dark font-weight-bold btn-block\"/>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario_contacto"]) || array_key_exists("formulario_contacto", $context) ? $context["formulario_contacto"] : (function () { throw new RuntimeError('Variable "formulario_contacto" does not exist.', 27, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  104 => 24,  102 => 17,  98 => 15,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contacta Con Nosotras{% endblock %}

{% block body %}
<div class=\"bg-white pt-5 pb-5 text-center\">
    {{ form_start(formulario_contacto, {'attr': {'class': 'fondo-gris-suave borde-redondeado text-center inline p-4'} }) }}
    <h1 class=\"h3 mb-3 font-weight-bold\">Contacta Con Nosotras</h1>
    {{ form_widget(formulario_contacto.email, {
        'attr' : {
            'class' : 'form-control',
            'placeholder' : 'Tu Email'
        }
        })
    }}
    <br>
    {{ form_widget(formulario_contacto.comentario, {
        'attr' : {
            'class' : 'form-control',
            'placeholder' : 'Tu Consulta',
            'rows' : 10
        }
        })
    }}
    <br>
    <input type=\"submit\" value=\"Enviar\" class=\"btn verde-suave text-dark font-weight-bold btn-block\"/>
    {{ form_end(formulario_contacto) }}
</div>
{% endblock %}", "contacto.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\contacto.html.twig");
    }
}
