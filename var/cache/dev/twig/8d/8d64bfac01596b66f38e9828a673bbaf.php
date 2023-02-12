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
        echo "<html>
    ";
        // line 2
        $this->loadTemplate("html/head.html.twig", "html/all_materials.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("html/menu.html.twig", "html/all_materials.html.twig", 3)->display($context);
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["choice_form"]) || array_key_exists("choice_form", $context) ? $context["choice_form"] : (function () { throw new RuntimeError('Variable "choice_form" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["choice_form"]) || array_key_exists("choice_form", $context) ? $context["choice_form"] : (function () { throw new RuntimeError('Variable "choice_form" does not exist.', 5, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"button\">Filtrovat!</button>
";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["choice_form"]) || array_key_exists("choice_form", $context) ? $context["choice_form"] : (function () { throw new RuntimeError('Variable "choice_form" does not exist.', 7, $this->source); })()), 'form_end');
        echo "
";
        // line 8
        if (array_key_exists("subject", $context)) {
            // line 9
            echo "    ";
            if (((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 9, $this->source); })()) != "reset")) {
                // line 10
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["date1"] ?? null), "timestamp", [], "any", true, true, false, 10) && twig_get_attribute($this->env, $this->source, ($context["date2"] ?? null), "timestamp", [], "any", true, true, false, 10))) {
                    // line 11
                    echo "            <p> Vše z jedné kategorie mezi daty ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 11, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 11), "html", null, true);
                    echo " -  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 11, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 11), "html", null, true);
                    echo "</p>
            ";
                    // line 12
                    $context["array"] = twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 12, $this->source); })()), "getSubjectBetweenDates", [0 => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 12, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 12, $this->source); })()), "timestamp", [], "any", false, false, false, 12), 2 => twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 12, $this->source); })()), "timestamp", [], "any", false, false, false, 12)], "method", false, false, false, 12);
                    echo " 
        ";
                } else {
                    // line 13
                    echo " 
            <p> Příspěvky z jedné kategorie </p>
            ";
                    // line 15
                    $context["array"] = twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 15, $this->source); })()), "getSubject", [0 => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 15, $this->source); })())], "method", false, false, false, 15);
                    echo " 
        ";
                }
                // line 16
                echo " 
    ";
            }
            // line 18
            echo "    ";
            if (((((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 18, $this->source); })()) == "reset") &&  !twig_get_attribute($this->env, $this->source, ($context["date1"] ?? null), "timestamp", [], "any", true, true, false, 18)) &&  !twig_get_attribute($this->env, $this->source, ($context["date2"] ?? null), "timestamp", [], "any", true, true, false, 18))) {
                // line 19
                echo "        <p> Všechny příspěvky </p>
        ";
                // line 20
                $context["array"] = twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 20, $this->source); })()), "getAll", [], "method", false, false, false, 20);
                // line 21
                echo "    ";
            }
            // line 22
            echo "    ";
            if (((((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 22, $this->source); })()) == "reset") && twig_get_attribute($this->env, $this->source, ($context["date1"] ?? null), "timestamp", [], "any", true, true, false, 22)) && twig_get_attribute($this->env, $this->source, ($context["date2"] ?? null), "timestamp", [], "any", true, true, false, 22))) {
                // line 23
                echo "        <p> Všechny příspěvky mezi daty ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 23, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 23), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 23, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 23), "html", null, true);
                echo "</p>
        ";
                // line 24
                $context["array"] = twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 24, $this->source); })()), "getEverythingBetweenDates", [0 => twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 24, $this->source); })()), "timestamp", [], "any", false, false, false, 24), 1 => twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 24, $this->source); })()), "timestamp", [], "any", false, false, false, 24)], "method", false, false, false, 24);
                // line 25
                echo "    ";
            }
            // line 26
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["array"]) || array_key_exists("array", $context) ? $context["array"] : (function () { throw new RuntimeError('Variable "array" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 27
                echo "        Předmět : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 27), "html", null, true);
                echo "<br />
        Obsah: ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getContent", [], "method", false, false, false, 28), "html", null, true);
                echo "<br />
        Autor: ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 29), "getUsername", [], "method", false, false, false, 29), "html", null, true);
                echo "<br />
        Datum: ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 30), "html", null, true);
                echo " <br />
        ";
                // line 31
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 31), "getId", [], "method", false, false, false, 31) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 31, $this->source); })()))) {
                    // line 32
                    echo "            <a href=\"edit_material/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getId", [], "method", false, false, false, 32), "html", null, true);
                    echo "\"> Upravit </a>
            <br />
        ";
                }
                // line 35
                echo "        <br />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo " 
";
        } else {
            // line 38
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 38, $this->source); })()), "getAll", [], "method", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                // line 39
                echo "    <a style=\"text-decoration:none; color:black; cursor:pointer\"  onMouseOver=\"this.style.color='gray'\" onMouseOut=\"this.style.color='black'\" href=\"single_material/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getId", [], "method", false, false, false, 39), "html", null, true);
                echo "\"> 
        Předmět : ";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 40), "html", null, true);
                echo "<br />
        Obsah: ";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getContent", [], "method", false, false, false, 41), "html", null, true);
                echo "<br />
        Autor: ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 42), "getUsername", [], "method", false, false, false, 42), "html", null, true);
                echo "<br />
        Datum: ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 43), "html", null, true);
                echo " <br />
    </a>
        ";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 45), "getId", [], "method", false, false, false, 45) == (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 45, $this->source); })()))) {
                    // line 46
                    echo "            <a href=\"edit_material/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getId", [], "method", false, false, false, 46), "html", null, true);
                    echo "\"> Upravit </a>
            <br />
        ";
                }
                // line 49
                echo "        <br />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo " 
";
        }
        // line 52
        echo "

</html>";
        
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
        return array (  208 => 52,  204 => 50,  197 => 49,  190 => 46,  188 => 45,  183 => 43,  179 => 42,  175 => 41,  171 => 40,  166 => 39,  161 => 38,  157 => 36,  150 => 35,  143 => 32,  141 => 31,  137 => 30,  133 => 29,  129 => 28,  124 => 27,  119 => 26,  116 => 25,  114 => 24,  107 => 23,  104 => 22,  101 => 21,  99 => 20,  96 => 19,  93 => 18,  89 => 16,  84 => 15,  80 => 13,  75 => 12,  68 => 11,  65 => 10,  62 => 9,  60 => 8,  56 => 7,  51 => 5,  47 => 4,  45 => 3,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    {% include \"html/head.html.twig\" %}
{% include \"html/menu.html.twig\" %}
{{ form_start(choice_form) }}
{{ form_widget(choice_form) }}
<button type=\"submit\" class=\"button\">Filtrovat!</button>
{{ form_end(choice_form) }}
{% if subject is defined %}
    {% if subject != \"reset\" %}
        {% if date1.timestamp is defined and date2.timestamp is defined %}
            <p> Vše z jedné kategorie mezi daty {{date1.format('d.m.Y')}} -  {{date2.format('d.m.Y')}}</p>
            {%  set array = materials.getSubjectBetweenDates(subject, date1.timestamp, date2.timestamp) %} 
        {% else %} 
            <p> Příspěvky z jedné kategorie </p>
            {%  set array = materials.getSubject(subject) %} 
        {% endif %} 
    {% endif %}
    {% if subject == \"reset\" and date1.timestamp is not defined and date2.timestamp is not defined %}
        <p> Všechny příspěvky </p>
        {%  set array = materials.getAll() %}
    {% endif %}
    {% if subject == \"reset\" and date1.timestamp is defined and date2.timestamp is defined %}
        <p> Všechny příspěvky mezi daty {{date1.format('d.m.Y')}} -  {{date2.format('d.m.Y')}}</p>
        {% set array = materials.getEverythingBetweenDates(date1.timestamp, date2.timestamp) %}
    {% endif %}
    {% for value in array %}
        Předmět : {{ value.getSchoolSubject() }}<br />
        Obsah: {{ value.getContent() }}<br />
        Autor: {{ value.getUser().getUsername() }}<br />
        Datum: {{ value.getDate() }} <br />
        {% if (value.getUser().getId() == id ) %}
            <a href=\"edit_material/{{ value.getId() }}\"> Upravit </a>
            <br />
        {% endif %}
        <br />
    {% endfor %} 
{% else %}
    {% for value in materials.getAll() %}
    <a style=\"text-decoration:none; color:black; cursor:pointer\"  onMouseOver=\"this.style.color='gray'\" onMouseOut=\"this.style.color='black'\" href=\"single_material/{{ value.getId() }}\"> 
        Předmět : {{ value.getSchoolSubject() }}<br />
        Obsah: {{ value.getContent() }}<br />
        Autor: {{ value.getUser().getUsername() }}<br />
        Datum: {{ value.getDate() }} <br />
    </a>
        {% if (value.getUser().getId() == id ) %}
            <a href=\"edit_material/{{ value.getId() }}\"> Upravit </a>
            <br />
        {% endif %}
        <br />
    {% endfor %} 
{% endif %}


</html>", "html/all_materials.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\all_materials.html.twig");
    }
}
