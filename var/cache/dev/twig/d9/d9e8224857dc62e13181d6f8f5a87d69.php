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

/* css/homepage.css.map */
class __TwigTemplate_7e4367b5564ec39a6f82c2d8de1ec78f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "css/homepage.css.map"));

        // line 1
        echo "{\"version\":3,\"sources\":[\"homepage.scss\",\"homepage.css\"],\"names\":[],\"mappings\":\"AAAA;EACG,WAAA;EACA,aAAA;EACA,mBAAA;EACA,YAAA;ACCH;;ADEA;EACG,YAAA;EACA,sBAAA;ACCH;;ADEA;EACG,eAAA;ACCH\",\"file\":\"homepage.css\"}";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "css/homepage.css.map";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{\"version\":3,\"sources\":[\"homepage.scss\",\"homepage.css\"],\"names\":[],\"mappings\":\"AAAA;EACG,WAAA;EACA,aAAA;EACA,mBAAA;EACA,YAAA;ACCH;;ADEA;EACG,YAAA;EACA,sBAAA;ACCH;;ADEA;EACG,eAAA;ACCH\",\"file\":\"homepage.css\"}", "css/homepage.css.map", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\css\\homepage.css.map");
    }
}
