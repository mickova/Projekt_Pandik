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
\t";
        // line 3
        $this->loadTemplate("html/head.html.twig", "html/profile.html.twig", 3)->display($context);
        // line 4
        echo "\t<body class=\"\">
\t\t";
        // line 5
        $this->loadTemplate("html/menu.html.twig", "html/profile.html.twig", 5)->display($context);
        // line 6
        echo "\t\t<main class=\"--with_aside\">
\t\t\t";
        // line 7
        $this->loadTemplate("html/aside.html.twig", "html/profile.html.twig", 7)->display($context);
        // line 8
        echo "\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"container_profile-card\">
          <div class=\"container_profile-card_header\"> 
\t\t\t\t\t<h1 id=\"profile_name\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["profile_name"]) || array_key_exists("profile_name", $context) ? $context["profile_name"] : (function () { throw new RuntimeError('Variable "profile_name" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h1>
          <a href=\"/settings\"> <button class=\"\"> Nastavení </button> </a>
        </div>
\t\t\t\t\t<p id=\"profile_email\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["profile_email"]) || array_key_exists("profile_email", $context) ? $context["profile_email"] : (function () { throw new RuntimeError('Variable "profile_email" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t\t\t<p id=\"profile_desc\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["profile_desc"]) || array_key_exists("profile_desc", $context) ? $context["profile_desc"] : (function () { throw new RuntimeError('Variable "profile_desc" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t\t\t<h1>
\t\t\t\t\t\tPříspěvky uživatele
\t\t\t\t\t</h1>
\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
            // line 20
            echo "\t\t\t\t\t\tPředmět :
\t\t\t\t\t\t";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 21), "html", null, true);
            echo "<br/>
\t\t\t\t\t\tObsah:<a href=\"material/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getFilename", [], "method", false, false, false, 22), "html", null, true);
            echo "\"/>
\t\t\t\t\t\tZde
\t\t\t\t\t</a>
\t\t\t\t\t<br/>
\t\t\t\t\tAutor:
\t\t\t\t\t<a href=\"profile/";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 27), "getUsername", [], "method", false, false, false, 27), "html", null, true);
            echo "\">
\t\t\t\t\t\t";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 28), "getUsername", [], "method", false, false, false, 28), "html", null, true);
            echo "</a><br/>
\t\t\t\t\tDatum:
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 30), "html", null, true);
            echo "
\t\t\t\t\t<br/>
\t\t\t\t\t";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 32), "getId", [], "method", false, false, false, 32) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 32, $this->source); })()))) {
                // line 33
                echo "\t\t\t\t\t\t<a href=\"edit_material/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getId", [], "method", false, false, false, 33), "html", null, true);
                echo "\">
\t\t\t\t\t\t\tUpravit
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<br/>
\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t<br/>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</div>
\t\t</div>
\t</body>
</html></main></body></html>
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
        return array (  129 => 40,  122 => 38,  113 => 33,  111 => 32,  106 => 30,  101 => 28,  97 => 27,  89 => 22,  85 => 21,  82 => 20,  78 => 19,  71 => 15,  67 => 14,  61 => 11,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t{% include \"html/head.html.twig\" %}
\t<body class=\"\">
\t\t{% include \"html/menu.html.twig\" %}
\t\t<main class=\"--with_aside\">
\t\t\t{% include \"html/aside.html.twig\" %}
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"container_profile-card\">
          <div class=\"container_profile-card_header\"> 
\t\t\t\t\t<h1 id=\"profile_name\">{{ profile_name }}</h1>
          <a href=\"/settings\"> <button class=\"\"> Nastavení </button> </a>
        </div>
\t\t\t\t\t<p id=\"profile_email\">{{ profile_email }}</p>
\t\t\t\t\t<p id=\"profile_desc\">{{ profile_desc }}</p>
\t\t\t\t\t<h1>
\t\t\t\t\t\tPříspěvky uživatele
\t\t\t\t\t</h1>
\t\t\t\t\t{% for value in materials %}
\t\t\t\t\t\tPředmět :
\t\t\t\t\t\t{{ value.getSchoolSubject() }}<br/>
\t\t\t\t\t\tObsah:<a href=\"material/{{value.getFilename()}}\"/>
\t\t\t\t\t\tZde
\t\t\t\t\t</a>
\t\t\t\t\t<br/>
\t\t\t\t\tAutor:
\t\t\t\t\t<a href=\"profile/{{ value.getUser().getUsername() }}\">
\t\t\t\t\t\t{{ value.getUser().getUsername() }}</a><br/>
\t\t\t\t\tDatum:
\t\t\t\t\t{{ value.getDate() }}
\t\t\t\t\t<br/>
\t\t\t\t\t{% if (value.getUser().getId() == id ) %}
\t\t\t\t\t\t<a href=\"edit_material/{{ value.getId() }}\">
\t\t\t\t\t\t\tUpravit
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<br/>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<br/>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</body>
</html></main></body></html>
", "html/profile.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\profile.html.twig");
    }
}
