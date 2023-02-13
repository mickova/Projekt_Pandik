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
    <h1> Příspěvky uživatele </h1>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 11
            echo "        Předmět : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 11), "html", null, true);
            echo "<br />
        Obsah:<a href=\"material/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getFilename", [], "method", false, false, false, 12), "html", null, true);
            echo "\"/> Zde </a> <br />
        Autor: <a href=\"profile/";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 13), "getUsername", [], "method", false, false, false, 13), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 13), "getUsername", [], "method", false, false, false, 13), "html", null, true);
            echo "</a><br />
        Datum: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 14), "html", null, true);
            echo " <br />
        ";
            // line 15
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 15), "getId", [], "method", false, false, false, 15) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()))) {
                // line 16
                echo "            <a href=\"edit_material/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getId", [], "method", false, false, false, 16), "html", null, true);
                echo "\"> Upravit </a>
            <br />
        ";
            }
            // line 19
            echo "        <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo " 
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
        return array (  105 => 20,  98 => 19,  91 => 16,  89 => 15,  85 => 14,  79 => 13,  75 => 12,  70 => 11,  66 => 10,  61 => 8,  57 => 7,  53 => 6,  50 => 5,  48 => 4,  44 => 3,  40 => 1,);
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
    <h1> Příspěvky uživatele </h1>
    {% for value in materials %}
        Předmět : {{ value.getSchoolSubject() }}<br />
        Obsah:<a href=\"material/{{value.getFilename()}}\"/> Zde </a> <br />
        Autor: <a href=\"profile/{{ value.getUser().getUsername() }}\"> {{ value.getUser().getUsername() }}</a><br />
        Datum: {{ value.getDate() }} <br />
        {% if (value.getUser().getId() == id ) %}
            <a href=\"edit_material/{{ value.getId() }}\"> Upravit </a>
            <br />
        {% endif %}
        <br />
    {% endfor %} 
  </body>
</html>
", "html/profile.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\profile.html.twig");
    }
}
