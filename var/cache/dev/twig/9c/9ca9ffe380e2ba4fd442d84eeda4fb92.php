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

/* @WebProfiler/Icon/twig.svg */
class __TwigTemplate_4e4983ed05566f91e7c804da52cfdff1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Icon/twig.svg"));

        // line 1
        echo "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.1 1H3.9A2.9 2.9 0 0 0 1 3.9v16.3C1 21.7 2.3 23 3.9 23h16.3c1.6 0 2.9-1.3 2.9-2.9V3.9a3 3 0 0 0-3-2.9zm.9 19.1c0 .5-.4.9-.9.9H3.9a.9.9 0 0 1-.9-.9V3.9c0-.5.4-.9.9-.9h16.3c.4 0 .8.4.8.9v16.2zM5 5h14v3H5V5zm0 5h3v9H5v-9zm5 0h9v9h-9v-9z\"/></svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Icon/twig.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"><path fill=\"#AAA\" d=\"M20.1 1H3.9A2.9 2.9 0 0 0 1 3.9v16.3C1 21.7 2.3 23 3.9 23h16.3c1.6 0 2.9-1.3 2.9-2.9V3.9a3 3 0 0 0-3-2.9zm.9 19.1c0 .5-.4.9-.9.9H3.9a.9.9 0 0 1-.9-.9V3.9c0-.5.4-.9.9-.9h16.3c.4 0 .8.4.8.9v16.2zM5 5h14v3H5V5zm0 5h3v9H5v-9zm5 0h9v9h-9v-9z\"/></svg>
", "@WebProfiler/Icon/twig.svg", "/home/axurit/Projets/SYMFONY/JuncaHugo_8_04012023/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Icon/twig.svg");
    }
}