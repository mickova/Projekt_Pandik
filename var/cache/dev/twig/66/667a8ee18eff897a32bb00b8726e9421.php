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

/* html/homepage.html.twig */
class __TwigTemplate_c9f74d6d6d8057b2003e5d3e4580c58a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/homepage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
";
        // line 3
        $this->loadTemplate("html/head.html.twig", "html/homepage.html.twig", 3)->display($context);
        // line 4
        $this->loadTemplate("html/menu.html.twig", "html/homepage.html.twig", 4)->display($context);
        // line 5
        echo "<body>
   <h1> Homepage </h1>
   <a href=\"/all_materials\"> Všechny materiály </a>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
{% include \"html/head.html.twig\" %}
{% include \"html/menu.html.twig\" %}
<body>
   <h1> Homepage </h1>
   <a href=\"/all_materials\"> Všechny materiály </a>
</body>
</html>", "html/homepage.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\homepage.html.twig");
    }
}
