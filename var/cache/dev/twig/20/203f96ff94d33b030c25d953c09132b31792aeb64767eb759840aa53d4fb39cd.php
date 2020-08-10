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

/* frontend/home.html.twig */
class __TwigTemplate_b450004ab38677251f2ccb6eeca46d3983f772b60d1ba1a7a85af1a8ebcb6c31 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/home.html.twig"));

        // line 1
        echo "<h1>Username: ";
        echo twig_escape_filter($this->env, (isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new RuntimeError('Variable "user_name" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "</h1>


";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bundles"]) || array_key_exists("bundles", $context) ? $context["bundles"] : (function () { throw new RuntimeError('Variable "bundles" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
            // line 5
            echo "    <h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "name", [], "any", false, false, false, 5), "html", null, true);
            echo "</h3>
    <p>";
            // line 6
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "price", [], "any", false, false, false, 6), 0, "."), "html", null, true);
            echo "</p>
    <p>";
            // line 7
            echo twig_get_attribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, false, 7);
            echo "</p>
    <p>>> ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "getPlatform", [], "any", false, false, false, 8), "html", null, true);
            echo "</p>
    <p>>> ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "getProvider", [], "any", false, false, false, 9), "html", null, true);
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  67 => 8,  63 => 7,  59 => 6,  54 => 5,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Username: {{ user_name }}</h1>


{% for bundle in bundles %}
    <h3>{{ bundle.name }}</h3>
    <p>{{ bundle.price|number_format(0, '.') }}</p>
    <p>{{ bundle.description|raw }}</p>
    <p>>> {{ bundle.getPlatform }}</p>
    <p>>> {{ bundle.getProvider }}</p>

{% endfor %}", "frontend/home.html.twig", "F:\\XAMPP\\htdocs\\connectr\\templates\\frontend\\home.html.twig");
    }
}
