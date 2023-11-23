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

/* /home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/addressform.htm */
class __TwigTemplate_345a5f56358980810b6966f2f1af2187f1a3419725969b337c6186f0da4ccfaa extends \Twig\Template
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
        // line 1
        echo "<div class=\"form-group\">
    <label for=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_company\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Entreprise "]);
        echo "</label>
    <input id=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_company\" type=\"text\" class=\"form-control\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_company\">
    <div data-validate-for=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_company\"></div>
</div>

<div class=\"form-group\">
    <label for=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_lines\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Adresse"]);
        echo "</label>
    <textarea id=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_lines\" type=\"text\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_lines\" class=\"form-control\" rows=\"4\"></textarea>
    <div data-validate-for=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_lines\"></div>
</div>

<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"form-group\">
            <label for=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_zip\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["NPA"]);
        echo "</label>
            <input id=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_zip\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_zip\" type=\"text\" class=\"form-control\">
            <div data-validate-for=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_zip\"></div>
        </div>
    </div>

    <div class=\"col-lg-6\">
        <div class=\"form-group\">
            <label for=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_city\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Lieu"]);
        echo "</label>
            <input id=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_city\" name=\"";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_city\" type=\"text\" class=\"form-control\">
            <div data-validate-for=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "_city\"></div>
        </div>
    </div>
</div>

<div class=\"";
        // line 31
        echo ((twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useState", [], "any", false, false, false, 31)) ? ("mall-two-fields") : (""));
        echo "\" id=\"countryState_";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "\">
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['type'] = ($context["type"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::countrystate")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/addressform.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  127 => 32,  121 => 31,  113 => 26,  107 => 25,  101 => 24,  92 => 18,  86 => 17,  80 => 16,  71 => 10,  65 => 9,  59 => 8,  52 => 4,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/home/clients/98a227f2e7eaddc47a7cf4c3b2c81602/2020/themes/goldtest/partials/signup/addressform.htm", "");
    }
}
