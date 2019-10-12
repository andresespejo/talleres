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
class __TwigTemplate_865727d49f406aed37be25b6b4faba45bc496538f02483a081371890d50fbec4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, ($context["test"] ?? null), "html", null, true);
        echo "
                <br>
                ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nuevo_taller"] ?? null), 'form_start');
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "titulo", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => ""], "label" => "Título:"]);
        // line 19
        echo "
                <br>
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "titulo", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control"]]);
        // line 26
        echo "
                <br>
                <div class=\"margin-labe\">
                    Fecha:
                </div>
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "dia", [], "any", false, false, false, 31), 'widget');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "mes", [], "any", false, false, false, 32), 'widget');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "ano", [], "any", false, false, false, 33), 'widget');
        echo "
                a las: 
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "hora", [], "any", false, false, false, 35), 'widget');
        echo "
                :
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "minuto", [], "any", false, false, false, 37), 'widget');
        echo "
                <br>
                <br>
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "descripcion", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => ""], "label" => "Descripción:"]);
        // line 45
        echo "
                <br>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["nuevo_taller"] ?? null), "descripcion", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control alto-textarea"]]);
        // line 52
        echo "
                
                <br>
                <div class=\"text-right\">
                    <input type=\"submit\" value=\"Crear Nuevo Taller\" class=\"btn verde-suave text-dark font-weight-bold\">  
                </div>
                ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["nuevo_taller"] ?? null), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
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
        return array (  132 => 58,  124 => 52,  122 => 47,  118 => 45,  116 => 40,  110 => 37,  105 => 35,  100 => 33,  96 => 32,  92 => 31,  85 => 26,  83 => 21,  79 => 19,  77 => 14,  73 => 13,  68 => 11,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\index.html.twig");
    }
}
