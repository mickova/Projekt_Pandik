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

/* html/profile.html.twig */
class __TwigTemplate_d2f7eb22dfc28a9043cb0b33ced2b628 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  ";
        // line 3
        $this->loadTemplate("html/head.html.twig", "html/profile.html.twig", 3)->display($context);
        echo " 
  ";
        // line 4
        $this->loadTemplate("html/menu.html.twig", "html/profile.html.twig", 4)->display($context);
        // line 5
        echo "  <body>
    <h1 id=\"profile_name\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["profile_name"]) || array_key_exists("profile_name", $context) ? $context["profile_name"] : (function () { throw new RuntimeError('Variable "profile_name" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>
    <p id=\"profile_email\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["profile_email"]) || array_key_exists("profile_email", $context) ? $context["profile_email"] : (function () { throw new RuntimeError('Variable "profile_email" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</p>
    <p id=\"profile_desc\">";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["profile_desc"]) || array_key_exists("profile_desc", $context) ? $context["profile_desc"] : (function () { throw new RuntimeError('Variable "profile_desc" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</p>
  </body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  57 => 7,  53 => 6,  50 => 5,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  {% include \"html/head.html.twig\" %} 
  {% include \"html/menu.html.twig\" %}
  <body>
    <h1 id=\"profile_name\">{{ profile_name }}</h1>
    <p id=\"profile_email\">{{ profile_email }}</p>
    <p id=\"profile_desc\">{{ profile_desc }}</p>
  </body>
</html>
", "html/profile.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\profile.html.twig");
    }
}
