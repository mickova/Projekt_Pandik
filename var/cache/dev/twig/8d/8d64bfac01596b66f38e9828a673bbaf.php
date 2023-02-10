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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["choice_form"]) || array_key_exists("choice_form", $context) ? $context["choice_form"] : (function () { throw new RuntimeError('Variable "choice_form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["choice_form"]) || array_key_exists("choice_form", $context) ? $context["choice_form"] : (function () { throw new RuntimeError('Variable "choice_form" does not exist.', 2, $this->source); })()), 'widget');
        echo "
<button type=\"submit\" class=\"button\">Filtrovat!</button>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["choice_form"]) || array_key_exists("choice_form", $context) ? $context["choice_form"] : (function () { throw new RuntimeError('Variable "choice_form" does not exist.', 4, $this->source); })()), 'form_end');
        echo "

";
        // line 6
        if (array_key_exists("subject", $context)) {
            // line 7
            echo "
    ";
            // line 8
            if (((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 8, $this->source); })()) != "reset")) {
                // line 9
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, ($context["date1"] ?? null), "timestamp", [], "any", true, true, false, 9) && twig_get_attribute($this->env, $this->source, ($context["date2"] ?? null), "timestamp", [], "any", true, true, false, 9))) {
                    // line 10
                    echo "            <p> Vše z jedné kategorie mezi daty ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 10, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 10), "html", null, true);
                    echo " -  ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 10, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 10), "html", null, true);
                    echo "</p>
            ";
                    // line 11
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 11, $this->source); })()), "getSubjectBetweenDates", [0 => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 11, $this->source); })()), 1 => twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 11, $this->source); })()), "timestamp", [], "any", false, false, false, 11), 2 => twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 11, $this->source); })()), "timestamp", [], "any", false, false, false, 11)], "method", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        echo " 
                Předmět : ";
                        // line 12
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 12), "html", null, true);
                        echo "<br />
                Obsah: ";
                        // line 13
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getContent", [], "method", false, false, false, 13), "html", null, true);
                        echo "<br />
                Autor: ";
                        // line 14
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 14), "getUsername", [], "method", false, false, false, 14), "html", null, true);
                        echo "<br />
                Datum: ";
                        // line 15
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 15), "html", null, true);
                        echo " <br /><br />
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo " 
        ";
                } else {
                    // line 17
                    echo " 
            <p> Příspěvky z jedné kategorie </p>
            ";
                    // line 19
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 19, $this->source); })()), "getSubject", [0 => (isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 19, $this->source); })())], "method", false, false, false, 19));
                    foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                        echo " 
                Předmět: ";
                        // line 20
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 20), "html", null, true);
                        echo "<br />
                Obsah: ";
                        // line 21
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getContent", [], "method", false, false, false, 21), "html", null, true);
                        echo "<br />
                Autor: ";
                        // line 22
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 22), "getUsername", [], "method", false, false, false, 22), "html", null, true);
                        echo "<br />
                Datum: ";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 23), "html", null, true);
                        echo " <br /><br />
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo " 
        ";
                }
                // line 25
                echo " 
    ";
            }
            // line 27
            echo "    ";
            if (((((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 27, $this->source); })()) == "reset") &&  !twig_get_attribute($this->env, $this->source, ($context["date1"] ?? null), "timestamp", [], "any", true, true, false, 27)) &&  !twig_get_attribute($this->env, $this->source, ($context["date2"] ?? null), "timestamp", [], "any", true, true, false, 27))) {
                // line 28
                echo "        <p> Všechny příspěvky </p>
        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 29, $this->source); })()), "getAll", [], "method", false, false, false, 29));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 30
                    echo "            Předmět : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 30), "html", null, true);
                    echo "<br />
            Obsah: ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getContent", [], "method", false, false, false, 31), "html", null, true);
                    echo "<br />
            Autor: ";
                    // line 32
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 32), "getUsername", [], "method", false, false, false, 32), "html", null, true);
                    echo "<br />
            Datum: ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 33), "html", null, true);
                    echo " <br /> <br />
         ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo " 
    ";
            }
            // line 36
            echo "    ";
            if (((((isset($context["subject"]) || array_key_exists("subject", $context) ? $context["subject"] : (function () { throw new RuntimeError('Variable "subject" does not exist.', 36, $this->source); })()) == "reset") && twig_get_attribute($this->env, $this->source, ($context["date1"] ?? null), "timestamp", [], "any", true, true, false, 36)) && twig_get_attribute($this->env, $this->source, ($context["date2"] ?? null), "timestamp", [], "any", true, true, false, 36))) {
                // line 37
                echo "        <p> Všechny příspěvky mezi daty ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 37, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 37), "html", null, true);
                echo " -  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 37, $this->source); })()), "format", [0 => "d.m.Y"], "method", false, false, false, 37), "html", null, true);
                echo "</p>
        ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 38, $this->source); })()), "getEverythingBetweenDates", [0 => twig_get_attribute($this->env, $this->source, (isset($context["date1"]) || array_key_exists("date1", $context) ? $context["date1"] : (function () { throw new RuntimeError('Variable "date1" does not exist.', 38, $this->source); })()), "timestamp", [], "any", false, false, false, 38), 1 => twig_get_attribute($this->env, $this->source, (isset($context["date2"]) || array_key_exists("date2", $context) ? $context["date2"] : (function () { throw new RuntimeError('Variable "date2" does not exist.', 38, $this->source); })()), "timestamp", [], "any", false, false, false, 38)], "method", false, false, false, 38));
                foreach ($context['_seq'] as $context["_key"] => $context["value"]) {
                    // line 39
                    echo "            Předmět : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getSchoolSubject", [], "method", false, false, false, 39), "html", null, true);
                    echo "<br />
            Obsah: ";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getContent", [], "method", false, false, false, 40), "html", null, true);
                    echo "<br />
            Autor: ";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["value"], "getUser", [], "method", false, false, false, 41), "getUsername", [], "method", false, false, false, 41), "html", null, true);
                    echo "<br />
            Datum: ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "getDate", [], "method", false, false, false, 42), "html", null, true);
                    echo " <br /> <br />
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "    ";
            }
            // line 45
            echo "    ";
        }
        
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
        return array (  212 => 45,  209 => 44,  201 => 42,  197 => 41,  193 => 40,  188 => 39,  184 => 38,  177 => 37,  174 => 36,  170 => 34,  162 => 33,  158 => 32,  154 => 31,  149 => 30,  145 => 29,  142 => 28,  139 => 27,  135 => 25,  131 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  105 => 19,  101 => 17,  97 => 16,  89 => 15,  85 => 14,  81 => 13,  77 => 12,  71 => 11,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  54 => 6,  49 => 4,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(choice_form) }}
{{ form_widget(choice_form) }}
<button type=\"submit\" class=\"button\">Filtrovat!</button>
{{ form_end(choice_form) }}

{% if subject is defined %}

    {% if subject != \"reset\" %}
        {% if date1.timestamp is defined and date2.timestamp is defined %}
            <p> Vše z jedné kategorie mezi daty {{date1.format('d.m.Y')}} -  {{date2.format('d.m.Y')}}</p>
            {% for value in materials.getSubjectBetweenDates(subject, date1.timestamp, date2.timestamp) %} 
                Předmět : {{ value.getSchoolSubject() }}<br />
                Obsah: {{ value.getContent() }}<br />
                Autor: {{ value.getUser().getUsername() }}<br />
                Datum: {{ value.getDate() }} <br /><br />
            {% endfor %} 
        {% else %} 
            <p> Příspěvky z jedné kategorie </p>
            {% for value in materials.getSubject(subject) %} 
                Předmět: {{ value.getSchoolSubject() }}<br />
                Obsah: {{ value.getContent() }}<br />
                Autor: {{ value.getUser().getUsername() }}<br />
                Datum: {{ value.getDate() }} <br /><br />
            {% endfor %} 
        {% endif %} 
    {% endif %}
    {% if subject == \"reset\" and date1.timestamp is not defined and date2.timestamp is not defined %}
        <p> Všechny příspěvky </p>
        {% for value in materials.getAll() %}
            Předmět : {{ value.getSchoolSubject() }}<br />
            Obsah: {{ value.getContent() }}<br />
            Autor: {{ value.getUser().getUsername() }}<br />
            Datum: {{ value.getDate() }} <br /> <br />
         {% endfor %} 
    {% endif %}
    {% if subject == \"reset\" and date1.timestamp is defined and date2.timestamp is defined %}
        <p> Všechny příspěvky mezi daty {{date1.format('d.m.Y')}} -  {{date2.format('d.m.Y')}}</p>
        {% for value in materials.getEverythingBetweenDates(date1.timestamp, date2.timestamp) %}
            Předmět : {{ value.getSchoolSubject() }}<br />
            Obsah: {{ value.getContent() }}<br />
            Autor: {{ value.getUser().getUsername() }}<br />
            Datum: {{ value.getDate() }} <br /> <br />
        {% endfor %}
    {% endif %}
    {% endif %}
", "html/all_materials.html.twig", "C:\\Users\\Matyáš\\Desktop\\ProjectPandik\\templates\\html\\all_materials.html.twig");
    }
}
