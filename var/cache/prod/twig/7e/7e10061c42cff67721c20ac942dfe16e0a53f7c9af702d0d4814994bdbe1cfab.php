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

/* dashboard/entrar.html.twig */
class __TwigTemplate_30f79911f8d1af73991a529417b29a567cc3eca66b059d23b10534a6397e14ff extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/entrar.html.twig", 1);
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
        echo "  <div class=\"bg-white pt-5 pb-5\">
    <body class=\"text-center\">
        <form class=\"form-signin fondo-gris-suave borde-redondeado\">
        ";
        // line 10
        echo "        <h1 class=\"h3 mb-3 font-weight-bold\">Acceder Al Sistema</h1>
        <label for=\"inputEmail\" class=\"sr-only\">Email address</label>
        <input type=\"email\" id=\"inputEmail\" class=\"form-control\" placeholder=\"Usuario\" required autofocus>
        <br>
        <label for=\"inputPassword\" class=\"sr-only\">Password</label>
        <input type=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Contraseña\" required>
        <br>
        <div class=\"checkbox mb-3\">
            <label>
            <input type=\"checkbox\" value=\"remember-me\"> Recordarme
            </label>
        </div>
        <button class=\"btn verde-suave text-dark font-weight-bold btn-block\" type=\"submit\">Sign in</button>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "dashboard/entrar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/entrar.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\entrar.html.twig");
    }
}
