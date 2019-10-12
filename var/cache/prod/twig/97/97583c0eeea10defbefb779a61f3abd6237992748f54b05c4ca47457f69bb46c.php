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

/* security/login.html.twig */
class __TwigTemplate_1dd45aff30fcc55573711db614acc485883af47673c365e8a8d13f3b4769c2f5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Acceder Al Sistema";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    ";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "        <span class=\"danger\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
    ";
        }
        // line 11
        echo "
    <div class=\"bg-white pt-5 pb-5\">
        <body class=\"text-center\">

        <form class=\"form-signin fondo-gris-suave borde-redondeado\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"POST\">
        
            <h1 class=\"h3 mb-3 font-weight-bold\">Acceder Al Sistema</h1>
            <label for=\"inputEmail\" class=\"sr-only\">Usuario</label>
            <input type=\"text\" name=\"_username\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Escribe tu usuario\">
            <br>
            <label for=\"inputPassword\" class=\"sr-only\">Password</label>
            <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\">
            <br>
            <div class=\"checkbox mb-3\">
                <label>
                <input type=\"checkbox\" value=\"remember-me\" checked> Recordarme
                </label>
            </div>
            <button type=\"submit\" class=\"btn verde-suave text-dark font-weight-bold btn-block\">Entrar</button>

        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 19,  76 => 15,  70 => 11,  64 => 9,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\security\\login.html.twig");
    }
}
