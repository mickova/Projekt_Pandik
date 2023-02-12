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

/* html/setting.html.twig */
class __TwigTemplate_1f11f5af84f6ad441dc7f069a90c177a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/setting.html.twig"));

        // line 1
        echo "<html>
   ";
        // line 2
        $this->loadTemplate("html/head.html.twig", "html/setting.html.twig", 2)->display($context);
        // line 3
        echo "   ";
        $this->loadTemplate("html/menu.html.twig", "html/setting.html.twig", 3)->display($context);
        // line 4
        echo "   <h1>Nastavení</h1>
   ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 5, $this->source); })()), 'form_start');
        echo "
   ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 6, $this->source); })()), 'widget');
        echo "
   <button type=\"submit\" class=\"button\">Nastavit</button>
   ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["settings"]) || array_key_exists("settings", $context) ? $context["settings"] : (function () { throw new RuntimeError('Variable "settings" does not exist.', 8, $this->source); })()), 'form_end');
        echo "
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  55 => 6,  51 => 5,  48 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
   {% include \"html/head.html.twig\" %}
   {% include \"html/menu.html.twig\" %}
   <h1>Nastavení</h1>
   {{ form_start(settings) }}
   {{ form_widget(settings) }}
   <button type=\"submit\" class=\"button\">Nastavit</button>
   {{ form_end(settings) }}
</html>", "html/setting.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\setting.html.twig");
    }
}
