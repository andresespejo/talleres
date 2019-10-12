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
class __TwigTemplate_b05df750df78f7b67fb0da65beb2f73cf4edd1cd4efd3e3b16b68be8619766fa extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/editarTalleres.html.twig", 1);
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
                <h5>Editar Talleres:</h5>
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["talleres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["taller"]) {
            echo "   

                    <div class=\"container bg-white pt-2 pb-2 mb-4 border\">
                        <div class=\"titulo-taller text-dark\">";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "titulo", [], "any", false, false, false, 14), "html", null, true);
            echo "</div> 
                        <div class=\"col-12 d-flex justify-content-start align-items-center sin-pad-left\">
                            <img src=\"/images/icons/calendario.png\" >
                            <small class=\"text-muted pl-2\">";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "fecha", [], "any", false, false, false, 17), "d-m-Y H:i"), "html", null, true);
            echo "</small>
                        </div>
                        <div class=\"text-dark pt-3\">
                            <p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["taller"], "descripcion", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"col-12 d-flex justify-content-end sin-pad-left text-dark\">
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
                            Launch demo modal
                            </button>

                            <!-- Modal -->
                            <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modal title</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    ...
                                </div>
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>
                            <a href=\"\" class=\"sin-underline\"><img src=\"/images/icons/edita_azul.png\" class=\"pr-2\"><small class=\"text-info\"><b>Editar</b></small></a>
                            <a href=\"\" class=\"sin-underline\"><img src=\"/images/icons/eliminar.png\" class=\"pr-2 pl-3\"><small class=\"rojo-alerta\"><b>Eliminar</b></small></a>
                            
                        </div>
                    </div>
                    

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['taller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "            </div>
        </div>
    </div>
";
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
        return array (  129 => 55,  88 => 20,  82 => 17,  76 => 14,  68 => 11,  62 => 8,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/editarTalleres.html.twig", "C:\\xampp\\htdocs\\talleres\\templates\\dashboard\\editarTalleres.html.twig");
    }
}
