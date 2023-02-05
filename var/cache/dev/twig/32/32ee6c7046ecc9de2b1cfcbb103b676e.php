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

/* index.html.twig */
class __TwigTemplate_a5fe56b1ec05302e70d9dd556b5f5c00 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content_body' => [$this, 'block_content_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        $this->displayBlock('content_body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_content_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_body"));

        // line 2
        echo "<h1 style=\"text-align: center\">Vytvořit novou knihu</h1>

";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["LoginForm"]) || array_key_exists("LoginForm", $context) ? $context["LoginForm"] : (function () { throw new RuntimeError('Variable "LoginForm" does not exist.', 4, $this->source); })()), 'form_start');
        echo "

";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["LoginForm"]) || array_key_exists("LoginForm", $context) ? $context["LoginForm"] : (function () { throw new RuntimeError('Variable "LoginForm" does not exist.', 6, $this->source); })()), 'widget');
        echo "

<button type=\"submit\" class=\"button\">Vytvořit!</button>
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["LoginForm"]) || array_key_exists("LoginForm", $context) ? $context["LoginForm"] : (function () { throw new RuntimeError('Variable "LoginForm" does not exist.', 9, $this->source); })()), 'form_end');
        echo "
<button class=\"button\"><a href=\"logout\">Odhlásit</a></button> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  63 => 6,  58 => 4,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block content_body %}
<h1 style=\"text-align: center\">Vytvořit novou knihu</h1>

{{ form_start(LoginForm) }}

{{ form_widget(LoginForm) }}

<button type=\"submit\" class=\"button\">Vytvořit!</button>
{{ form_end(LoginForm) }}
<button class=\"button\"><a href=\"logout\">Odhlásit</a></button> 
{% endblock %}
", "index.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\index.html.twig");
    }
}
