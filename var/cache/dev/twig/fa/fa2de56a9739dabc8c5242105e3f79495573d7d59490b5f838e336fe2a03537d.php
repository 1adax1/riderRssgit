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

/* list/index.html.twig */
class __TwigTemplate_8b4176b2e33b17b826e93eeed45fae5abf9abc6efd63b59de716c4225c72a849 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card bg-light mb-3 mt-3\">
        <div class=\"card-body\">
          <div class=\"card-header\">RSS лента</div>
          <AmpContent>
          <div class=\"row\">
          <div class=\"col-md-6\">
          <table class=\"table\">
            <tr>
              <th>Title</th>
              <th>Text</th>
            </tr>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["array_text_table"]) || array_key_exists("array_text_table", $context) ? $context["array_text_table"] : (function () { throw new RuntimeError('Variable "array_text_table" does not exist.', 17, $this->source); })()), "title", [], "array", false, false, false, 17));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 18
            echo "              ";
            if ($context["item"]) {
                // line 19
                echo "                <tr>
                  <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["array_text_table"]) || array_key_exists("array_text_table", $context) ? $context["array_text_table"] : (function () { throw new RuntimeError('Variable "array_text_table" does not exist.', 20, $this->source); })()), "title", [], "array", false, false, false, 20), $context["key"], [], "array", false, false, false, 20), "html", null, true);
                echo "</td>
                  <td>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["array_text_table"]) || array_key_exists("array_text_table", $context) ? $context["array_text_table"] : (function () { throw new RuntimeError('Variable "array_text_table" does not exist.', 21, $this->source); })()), "summary", [], "array", false, false, false, 21), $context["key"], [], "array", false, false, false, 21), "html", null, true);
                echo "</td>
                </tr>
              ";
            }
            // line 24
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          </table>
          </div>
          <div class=\"col-md-6\">
          <h1>Повторяющие слова в RSS ленте</h1>
          <div class=\"row\">
            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["array_text"]) || array_key_exists("array_text", $context) ? $context["array_text"] : (function () { throw new RuntimeError('Variable "array_text" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 31
            echo "              <div class=\"alert alert-danger m-1\">
                ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "word", [], "array", false, false, false, 32), "html", null, true);
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </div>
          <div class=\"col-md-6\">
          <h1>10 Повторяющих слов в RSS ленте</h1>
          <div class=\"row\">
          ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ten_array_text_table"]) || array_key_exists("ten_array_text_table", $context) ? $context["ten_array_text_table"] : (function () { throw new RuntimeError('Variable "ten_array_text_table" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["ten_word"] => $context["ten_key"]) {
            // line 40
            echo "            <div class=\"alert alert-success m-1\">
              ";
            // line 41
            echo twig_escape_filter($this->env, $context["ten_word"], "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['ten_word'], $context['ten_key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "          </div>
          </div>
          </NonAmpContent>
        </div>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "list/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 44,  145 => 41,  142 => 40,  138 => 39,  132 => 35,  123 => 32,  120 => 31,  116 => 30,  109 => 25,  103 => 24,  97 => 21,  93 => 20,  90 => 19,  87 => 18,  83 => 17,  67 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/list/index.html.twig #} {% extends 'base.html.twig' %} {% block
body %}
<div class=\"container-fluid\">
  <div class=\"row\">
    <div class=\"col-md-12\">
      <div class=\"card bg-light mb-3 mt-3\">
        <div class=\"card-body\">
          <div class=\"card-header\">RSS лента</div>
          <AmpContent>
          <div class=\"row\">
          <div class=\"col-md-6\">
          <table class=\"table\">
            <tr>
              <th>Title</th>
              <th>Text</th>
            </tr>
            {% for key, item in array_text_table['title'] %}
              {% if item %}
                <tr>
                  <td>{{ array_text_table['title'][key] }}</td>
                  <td>{{ array_text_table['summary'][key] }}</td>
                </tr>
              {% endif %}
            {% endfor %}
          </table>
          </div>
          <div class=\"col-md-6\">
          <h1>Повторяющие слова в RSS ленте</h1>
          <div class=\"row\">
            {% for key, item in array_text %}
              <div class=\"alert alert-danger m-1\">
                {{ item['word'] }}
              </div>
            {% endfor %}
          </div>
          <div class=\"col-md-6\">
          <h1>10 Повторяющих слов в RSS ленте</h1>
          <div class=\"row\">
          {% for ten_word, ten_key in ten_array_text_table %}
            <div class=\"alert alert-success m-1\">
              {{ ten_word }}
            </div>
          {% endfor %}
          </div>
          </div>
          </NonAmpContent>
        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "list/index.html.twig", "I:\\OpenServer3\\OSPanel\\domains\\riderrss10.local\\templates\\list\\index.html.twig");
    }
}
