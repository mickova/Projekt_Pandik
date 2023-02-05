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
class __TwigTemplate_473826da67d03a5fa8f2ca9a6041913e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
<head>
   <meta charset=\"UTF-8\">
   <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
   <title>Document</title>
   ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>
<body>
  <navbar> 
    <div class=\"icon\"> owo </div> 
    <h1> Projekt pandík</h1>
  </navbar>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/homepage.css\" /> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/homepage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 10,  67 => 9,  53 => 12,  51 => 9,  41 => 1,);
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
   {% block stylesheets %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"../css/homepage.css\" /> 
{% endblock %}
</head>
<body>
  <navbar> 
    <div class=\"icon\"> owo </div> 
    <h1> Projekt pandík</h1>
  </navbar>
</body>
</html>", "html/homepage.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\homepage.html.twig");
    }
}
