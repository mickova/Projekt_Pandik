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

/* css/homepage.css */
class __TwigTemplate_b4c0e80d90731e788ae6cdc83b19c6dc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/homepage.css"));

        // line 1
        echo "nav {
  width: 100%;
  display: flex;
  flex-direction: row;
  height: 80px;
}

.icon {
  width: 150px;
  background-color: gray;
}

.heading_navbar {
  font-size: 2rem;
}/*# sourceMappingURL=homepage.css.map */";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "css/homepage.css";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("nav {
  width: 100%;
  display: flex;
  flex-direction: row;
  height: 80px;
}

.icon {
  width: 150px;
  background-color: gray;
}

.heading_navbar {
  font-size: 2rem;
}/*# sourceMappingURL=homepage.css.map */", "css/homepage.css", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\css\\homepage.css");
    }
}
