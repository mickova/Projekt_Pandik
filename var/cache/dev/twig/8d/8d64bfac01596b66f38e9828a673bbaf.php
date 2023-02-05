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

/* html/all_materials.html.twig */
class __TwigTemplate_01b7deaeefcb57d5fbcf89e80b31b423 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "html/all_materials.html.twig"));

        // line 1
        echo "<p>Materiály</p>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], (((isset($context["App"]) || array_key_exists("App", $context) ? $context["App"] : (function () { throw new RuntimeError('Variable "App" does not exist.', 3, $this->source); })()) / (isset($context["Entity"]) || array_key_exists("Entity", $context) ? $context["Entity"] : (function () { throw new RuntimeError('Variable "Entity" does not exist.', 3, $this->source); })())) / (isset($context["MaterialContent"]) || array_key_exists("MaterialContent", $context) ? $context["MaterialContent"] : (function () { throw new RuntimeError('Variable "MaterialContent" does not exist.', 3, $this->source); })())), [], "array", false, false, false, 3), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "html/all_materials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Materiály</p>
{% for material in materials %}
{{ material[App/Entity/MaterialContent] }}
{% endfor %}
", "html/all_materials.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\all_materials.html.twig");
    }
}
