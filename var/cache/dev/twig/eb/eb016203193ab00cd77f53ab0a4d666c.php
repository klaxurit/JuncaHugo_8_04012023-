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

/* @Debug/Profiler/icon.svg */
class __TwigTemplate_b463a0fb1839cc1519141f7cb003f16d extends \Twig\Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Debug/Profiler/icon.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M12,22.6c-5.8,0-10.5-4.7-10.5-10.5C1.5,6.3,6.2,1.5,12,1.5s10.5,4.7,10.5,10.5C22.5,17.9,17.8,22.6,12,22.6z M12,4.5c-4.2,0-7.5,3.4-7.5,7.5c0,4.2,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5C19.5,7.9,16.2,4.5,12,4.5z\"/>
    <path fill=\"#AAAAAA\" d=\"M12,9.1c-0.8,0-1.5-0.7-1.5-1.5v-6c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v6C13.5,8.4,12.8,9.1,12,9.1zM13.5,22.4v-6c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5v6c0,0.8,0.7,1.5,1.5,1.5S13.5,23.2,13.5,22.4z M23.9,12c0-0.8-0.7-1.5-1.5-1.5h-6c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h6C23.2,13.5,23.9,12.8,23.9,12z M9.1,12c0-0.8-0.7-1.5-1.5-1.5h-6c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h6C8.4,13.5,9.1,12.8,9.1,12z\"/>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M12,22.6c-5.8,0-10.5-4.7-10.5-10.5C1.5,6.3,6.2,1.5,12,1.5s10.5,4.7,10.5,10.5C22.5,17.9,17.8,22.6,12,22.6z M12,4.5c-4.2,0-7.5,3.4-7.5,7.5c0,4.2,3.4,7.5,7.5,7.5s7.5-3.4,7.5-7.5C19.5,7.9,16.2,4.5,12,4.5z\"/>
    <path fill=\"#AAAAAA\" d=\"M12,9.1c-0.8,0-1.5-0.7-1.5-1.5v-6c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v6C13.5,8.4,12.8,9.1,12,9.1zM13.5,22.4v-6c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5v6c0,0.8,0.7,1.5,1.5,1.5S13.5,23.2,13.5,22.4z M23.9,12c0-0.8-0.7-1.5-1.5-1.5h-6c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h6C23.2,13.5,23.9,12.8,23.9,12z M9.1,12c0-0.8-0.7-1.5-1.5-1.5h-6c-0.8,0-1.5,0.7-1.5,1.5s0.7,1.5,1.5,1.5h6C8.4,13.5,9.1,12.8,9.1,12z\"/>
</svg>
", "@Debug/Profiler/icon.svg", "/home/axurit/Projets/SYMFONY/JuncaHugo_8_04012023/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views/Profiler/icon.svg");
    }
}