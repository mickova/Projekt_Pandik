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

/* html/register.html.twig */
class __TwigTemplate_a3e95065d91c4b48757018e3b8cbb016 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/register.html.twig"));

        // line 1
        echo "<p>Registrace</p>
";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["RegisterForm"]) || array_key_exists("RegisterForm", $context) ? $context["RegisterForm"] : (function () { throw new RuntimeError('Variable "RegisterForm" does not exist.', 2, $this->source); })()), 'form_start');
        echo "
";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["RegisterForm"]) || array_key_exists("RegisterForm", $context) ? $context["RegisterForm"] : (function () { throw new RuntimeError('Variable "RegisterForm" does not exist.', 3, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"button\">Vytvořit!</button>
";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["RegisterForm"]) || array_key_exists("RegisterForm", $context) ? $context["RegisterForm"] : (function () { throw new RuntimeError('Variable "RegisterForm" does not exist.', 5, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Registrace</p>
{{ form_start(RegisterForm) }}
{{ form_widget(RegisterForm) }}
<button type=\"submit\" class=\"button\">Vytvořit!</button>
{{ form_end(RegisterForm) }}
", "html/register.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\register.html.twig");
    }
}
