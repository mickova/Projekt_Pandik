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

/* homepage.html.twig */
class __TwigTemplate_731bcefcdafe7e701bbb7a93eb4422ea extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
   <meta charset=\"UTF-8\">
   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   <title>Document</title>
</head>
<body>
   <h1>Projekt Pandík!</h1> 
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
   <meta charset=\"UTF-8\">
   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   <title>Document</title>
</head>
<body>
   <h1>Projekt Pandík!</h1> 
</body>
</html>", "homepage.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\homepage.html.twig");
    }
}
