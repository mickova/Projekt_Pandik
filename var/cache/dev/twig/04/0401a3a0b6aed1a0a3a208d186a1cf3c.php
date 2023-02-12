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

/* html/material.html.twig */
class __TwigTemplate_30e7af400e56d31a8c23361a77e1c55f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/material.html.twig"));

        // line 1
        echo "<html> 
";
        // line 2
        $this->loadTemplate("html/head.html.twig", "html/material.html.twig", 2)->display($context);
        // line 3
        echo "<p>Vložte materiál</p>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["materialForm"]) || array_key_exists("materialForm", $context) ? $context["materialForm"] : (function () { throw new RuntimeError('Variable "materialForm" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["materialForm"]) || array_key_exists("materialForm", $context) ? $context["materialForm"] : (function () { throw new RuntimeError('Variable "materialForm" does not exist.', 5, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"button\">Přidat!</button>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["materialForm"]) || array_key_exists("materialForm", $context) ? $context["materialForm"] : (function () { throw new RuntimeError('Variable "materialForm" does not exist.', 7, $this->source); })()), 'form_end');
        echo "
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  52 => 5,  48 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html> 
{% include \"html/head.html.twig\" %}
<p>Vložte materiál</p>
{{ form_start(materialForm) }}
{{ form_widget(materialForm) }}
<button type=\"submit\" class=\"button\">Přidat!</button>
{{ form_end(materialForm) }}
</html>", "html/material.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\material.html.twig");
    }
}
