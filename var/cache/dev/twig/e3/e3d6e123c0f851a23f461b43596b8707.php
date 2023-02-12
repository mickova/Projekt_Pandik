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

/* html/welcome.html.twig */
class __TwigTemplate_4a1f6914cd0ab6903a2a8ea9a54f7fcd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/welcome.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  ";
        // line 3
        $this->loadTemplate("html/head.html.twig", "html/welcome.html.twig", 3)->display($context);
        // line 4
        echo "  <body>
    <nav>
      <div class=\"icon\">LogOwO</div>
      <h1>Projekt pandík</h1>
    </nav>
    <div class=\"\">
      <a href=\"/login\">Login</a>
      <a href=\"/register\">Registrace</a>
      <a href=\"/kontakt\"> Kontakt </a>
    </div>
  </body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  {% include \"html/head.html.twig\" %}
  <body>
    <nav>
      <div class=\"icon\">LogOwO</div>
      <h1>Projekt pandík</h1>
    </nav>
    <div class=\"\">
      <a href=\"/login\">Login</a>
      <a href=\"/register\">Registrace</a>
      <a href=\"/kontakt\"> Kontakt </a>
    </div>
  </body>
</html>", "html/welcome.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\welcome.html.twig");
    }
}
