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
class __TwigTemplate_73b311685f2340f0e3b60616a9750d1b4963783055c5ac9ffab031700653b606 extends Template
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
        echo twig_include($this->env, $context, "frontend/partial/header.html.twig");
        echo "

<!-- Page Content -->
<div class=\"container\">
    <!-- Jumbotron Header -->
    <header class=\"jumbotron my-4\">
        <h1 class=\"display-3\">A Warm Welcome!</h1>
        <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href=\"javascript:void(0);\" class=\"btn btn-primary btn-lg\">Call to action!</a>
    </header>
    <!-- Page Features -->


<div class=\"accordion mb-4\" id=\"accordionExample\">
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingOne\">
      <h2 class=\"mb-0\">
        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          Bundles
        </button>
      </h2>
    </div>

    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
      <div class=\"card-body\">

    <div class=\"row text-center\">
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bundles"]) || array_key_exists("bundles", $context) ? $context["bundles"] : (function () { throw new RuntimeError('Variable "bundles" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bundle"]) {
            // line 29
            echo "        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"http://placehold.it/500x325\" alt=\"\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["bundle"], "description", [], "any", false, false, false, 34);
            echo "</p>
                </div>
                <div class=\"card-footer\">
                    <p>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "getPlatform", [], "any", false, false, false, 37), "html", null, true);
            echo " | ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bundle"], "getProvider", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
                    <a href=\"javascript:void(0);\" class=\"btn btn-primary\">";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(twig_get_attribute($this->env, $this->source, $context["bundle"], "price", [], "any", false, false, false, 38), (isset($context["currency"]) || array_key_exists("currency", $context) ? $context["currency"] : (function () { throw new RuntimeError('Variable "currency" does not exist.', 38, $this->source); })())), "html", null, true);
            echo "</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bundle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>

      </div>
    </div>
  </div>
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h2 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Providers
        </button>
      </h2>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
      <div class=\"card-body\">

    <div class=\"row text-center\">
        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 61
            echo "        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"http://placehold.it/500x325\" alt=\"\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 65), "html", null, true);
            echo "</h4>
                    <p class=\"card-text\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["provider"], "description", [], "any", false, false, false, 66);
            echo "</p>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </div>

      </div>
    </div>
  </div>
</div>
    <!-- /.row -->
</div>
<!-- /.container -->
";
        // line 80
        echo twig_include($this->env, $context, "frontend/partial/footer.html.twig");
        
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
        return array (  165 => 80,  154 => 71,  143 => 66,  139 => 65,  133 => 61,  129 => 60,  110 => 43,  99 => 38,  93 => 37,  87 => 34,  83 => 33,  77 => 29,  73 => 28,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ include('frontend/partial/header.html.twig') }}

<!-- Page Content -->
<div class=\"container\">
    <!-- Jumbotron Header -->
    <header class=\"jumbotron my-4\">
        <h1 class=\"display-3\">A Warm Welcome!</h1>
        <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href=\"javascript:void(0);\" class=\"btn btn-primary btn-lg\">Call to action!</a>
    </header>
    <!-- Page Features -->


<div class=\"accordion mb-4\" id=\"accordionExample\">
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingOne\">
      <h2 class=\"mb-0\">
        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
          Bundles
        </button>
      </h2>
    </div>

    <div id=\"collapseOne\" class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
      <div class=\"card-body\">

    <div class=\"row text-center\">
        {% for bundle in bundles %}
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"http://placehold.it/500x325\" alt=\"\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ bundle.name }}</h4>
                    <p class=\"card-text\">{{ bundle.description|raw }}</p>
                </div>
                <div class=\"card-footer\">
                    <p>{{ bundle.getPlatform }} | {{ bundle.getProvider }}</p>
                    <a href=\"javascript:void(0);\" class=\"btn btn-primary\">{{ bundle.price|format_currency(currency) }}</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

      </div>
    </div>
  </div>
  <div class=\"card\">
    <div class=\"card-header\" id=\"headingTwo\">
      <h2 class=\"mb-0\">
        <button class=\"btn btn-link collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
          Providers
        </button>
      </h2>
    </div>
    <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionExample\">
      <div class=\"card-body\">

    <div class=\"row text-center\">
        {% for provider in providers %}
        <div class=\"col-lg-3 col-md-6 mb-4\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"http://placehold.it/500x325\" alt=\"\">
                <div class=\"card-body\">
                    <h4 class=\"card-title\">{{ provider.name }}</h4>
                    <p class=\"card-text\">{{ provider.description|raw }}</p>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>

      </div>
    </div>
  </div>
</div>
    <!-- /.row -->
</div>
<!-- /.container -->
{{ include('frontend/partial/footer.html.twig') }}", "frontend/home.html.twig", "F:\\XAMPP\\htdocs\\connectr\\templates\\frontend\\home.html.twig");
    }
}
