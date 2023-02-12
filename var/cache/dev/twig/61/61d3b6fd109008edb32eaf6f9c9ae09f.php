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

/* html/login.html.twig */
class __TwigTemplate_8d3d7ba99cc07251f2f7c4e19a363001 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
   ";
        // line 3
        $this->loadTemplate("html/head.html.twig", "html/login.html.twig", 3)->display($context);
        // line 4
        echo "   ";
        $this->loadTemplate("html/menu_not_logged.html.twig", "html/login.html.twig", 4)->display($context);
        // line 5
        echo "  <body>
    <h1>Login</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["LoginForm"]) || array_key_exists("LoginForm", $context) ? $context["LoginForm"] : (function () { throw new RuntimeError('Variable "LoginForm" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["LoginForm"]) || array_key_exists("LoginForm", $context) ? $context["LoginForm"] : (function () { throw new RuntimeError('Variable "LoginForm" does not exist.', 8, $this->source); })()), 'widget');
        echo "
    <button type=\"submit\" class=\"button\">Přihlásit!</button>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["LoginForm"]) || array_key_exists("LoginForm", $context) ? $context["LoginForm"] : (function () { throw new RuntimeError('Variable "LoginForm" does not exist.', 10, $this->source); })()), 'form_end');
        echo "
  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 10,  57 => 8,  53 => 7,  49 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
   {% include \"html/head.html.twig\" %}
   {% include \"html/menu_not_logged.html.twig\" %}
  <body>
    <h1>Login</h1>
    {{ form_start(LoginForm) }}
    {{ form_widget(LoginForm) }}
    <button type=\"submit\" class=\"button\">Přihlásit!</button>
    {{ form_end(LoginForm) }}
  </body>
</html>
", "html/login.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\login.html.twig");
    }
}
