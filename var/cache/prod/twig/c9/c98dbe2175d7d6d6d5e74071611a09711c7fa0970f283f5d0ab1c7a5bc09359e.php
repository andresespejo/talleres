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

/* base.html.twig */
class __TwigTemplate_72176ff84a3fcbdf20f70818f0730a0e17f2d80bad3ee93b8760e55a762296e5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/mystyle.css"), "html", null, true);
        echo "\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div class=\"container\">
            <nav class=\"navbar navbar-expand-md navbar-light verde-suave\">
                <a href=\"#\" class=\"navbar-brand\">
                    <img src=\"/images/icons/logo.png\" >
                </a>
                <button type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                    <div class=\"navbar-nav\">
                        <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\" class=\"nav-item nav-link text-dark\"><b>Talleres Para El Autoconocimiento</b></a>
                    </div>
                    <div class=\"navbar-nav ml-auto\">
                        <a href=\"#\" class=\"nav-item nav-link active\">Inicio</a>
                        <a href=\"#\" class=\"nav-item nav-link\">Blog</a>
                        <a href=\"#\" class=\"nav-item nav-link\">Sobre Nosotras</a>
                        <a href=\"#\" class=\"nav-item nav-link\">Contacto</a>
                        ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 30
            echo "
                            <a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"nav-item nav-link\" tabindex=\"-1\"><img src=\"/images/icons/configurar.png\" ></a>

                        ";
        } else {
            // line 34
            echo "
                            <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\" class=\"nav-item nav-link\" tabindex=\"-1\"><img src=\"/images/icons/configurar.png\" ></a>
                            

                        ";
        }
        // line 39
        echo "
                        
                    </div>
                </div>
            </nav> 
        
        ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "        <footer class=\"page-footer font-small text-white fondo-gris\">

            <div class=\"footer-copyright text-center py-3\">© 2019 Copyright:
                <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("inicio");
        echo "\"> TalleresParaelAutoconocimiento.com</a>
            </div>

        </footer>
        </div>
        ";
        // line 54
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
        <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Welcome!";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 54
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  151 => 45,  145 => 8,  138 => 7,  129 => 55,  127 => 54,  119 => 49,  114 => 46,  112 => 45,  104 => 39,  97 => 35,  94 => 34,  88 => 31,  85 => 30,  83 => 29,  73 => 22,  58 => 9,  56 => 8,  52 => 7,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\base.html.twig");
    }
}
